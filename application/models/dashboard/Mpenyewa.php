<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpenyewa extends CI_Model {

    private $id_admin;

    public function __construct() {
        parent::__construct();
        $this->id_admin = $this->session->userdata('id_admin');
    }


    public function tambahPenyewa($data) {
        $data['id_admin'] = $this->id_admin;
        return $this->db->insert('penyewa', $data);
    }

    public function getPenyewa(){
        $this->db->where('id_admin',  $this->id_admin);
        $q=$this->db->get('penyewa');
        $d=$q->result_array();
        return $d;
    }

    public function updatePenyewa($id_penyewa, $data) {
        $this->db->where('id_penyewa', $id_penyewa);
        return $this->db->update('penyewa', $data);
    }
    

        function hapus($id_penyewa){
        $this->db->where('id_penyewa',$id_penyewa);
        $this->db->delete('penyewa');
    }
    
    public function getJumlahPenyewa() {
        $this->db->select('COUNT(*) as total_penyewa');
        $this->db->where('id_admin',  $this->id_admin); 
        $this->db->from('penyewa');
        $query = $this->db->get();
        return $query->row();
    }

    public function getTotalMonth() {
        $this->db->select('SUM(nominal) as total_pemasukan');
        $this->db->where('id_admin', $this->id_admin); // Filter berdasarkan id_admin
        $this->db->where('MONTH(tgl_pemasukan)', date('m')); // Filter berdasarkan bulan saat ini
        $this->db->where('YEAR(tgl_pemasukan)', date('Y')); // Filter berdasarkan tahun saat ini
        $this->db->from('pemasukan');
        $query = $this->db->get();
        return $query->row();
    }
    

    public function getTotalPemasukan() {
        $this->db->select('SUM(nominal) as total_pemasukan');
        $this->db->where('id_admin', $this->id_admin); 
        $this->db->from('pemasukan');
        $query = $this->db->get();
        return $query->row();
    }



    public function getLatestBookingWithTipe() {
        $this->db->select('penyewa.nama_penyewa, kamar.no_kamar, tipe_kamar.nama_tipe,');
        $this->db->from('booking');
        $this->db->join('penyewa', 'booking.id_penyewa = penyewa.id_penyewa'); // Bergabung dengan tabel penyewa
        $this->db->join('kamar', 'booking.id_kamar = kamar.id_kamar'); // Bergabung dengan tabel kamar
        $this->db->join('tipe_kamar', 'kamar.id_tipe_kamar = tipe_kamar.id_tipe_kamar'); // Bergabung dengan tabel tipe_kamar
        $this->db->join('admin', 'admin.id_admin = booking.id_admin');
        $this->db->where('admin.id_admin', $this->id_admin); // Filter berdasarkan id_admin
        $this->db->order_by('booking.id_booking', 'DESC'); // Urutkan berdasarkan ID booking
        $this->db->limit(1); // Ambil hanya data terakhir

        $query = $this->db->get();
        return $query->row(); // Mengembalikan satu baris data
    }
    
    public function getLatestPemasukan() {
        $this->db->select('penyewa.nama_penyewa, pemasukan.nominal, pemasukan.status_pemasukan,');
        $this->db->from('pemasukan');
        $this->db->join('penyewa', 'pemasukan.id_penyewa = penyewa.id_penyewa'); // Bergabung dengan tabel penyewa
        $this->db->join('admin', 'admin.id_admin = pemasukan.id_admin');
        $this->db->where('admin.id_admin', $this->id_admin);
        $this->db->order_by('pemasukan.tgl_pemasukan', 'DESC');
        $this->db->limit(1); 

        $query = $this->db->get();
        return $query->row(); // Mengembalikan satu baris data
    }

    public function getTotalBelumLunas() {
        $this->db->select('COUNT(*) as total_belum_lunas');
        $this->db->from('booking');
        $this->db->join('admin', 'admin.id_admin = booking.id_admin');
        $this->db->where('booking.id_admin', $this->id_admin);
        $this->db->where('status_booking', 'belum lunas');
        $query = $this->db->get();
        return $query->row()->total_belum_lunas; // Mengembalikan jumlah total
    }
    public function getPenyewaTeratas() {
        $this->db->select('
            penyewa.id_penyewa, 
            penyewa.nama_penyewa, 
            penyewa.tgl_daftar, 
            penyewa.asal_penyewa, 
            penyewa.status_penyewa,
            penyewa.jenis_kelamin,
            kamar.no_kamar, 
            tipe_kamar.nama_tipe
        ');
        $this->db->from('penyewa');
        $this->db->join('booking', 'booking.id_penyewa = penyewa.id_penyewa', 'left');  // Join dengan tabel kamar berdasarkan id_penyewa
        $this->db->join('kamar', 'booking.id_kamar = kamar.id_kamar', 'left');  // Join dengan tabel kamar berdasarkan id_penyewa
        $this->db->join('tipe_kamar', 'tipe_kamar.id_tipe_kamar = kamar.id_tipe_kamar', 'left'); // Join dengan tabel tipe_kamar berdasarkan id_tipe_kamar
        $this->db->join('admin', 'admin.id_admin = penyewa.id_admin');
        $this->db->where('penyewa.id_admin', $this->id_admin);
        $this->db->where('penyewa.status_penyewa', 'aktif'); 
        $this->db->order_by('penyewa.tgl_daftar', 'ASC');
        $this->db->limit(5);
        $query = $this->db->get();
        
        return $query->result_array();  // Mengembalikan hasil sebagai array
    }
    


    public function getTotalPembayaranPercentage() {
        // Query SQL untuk mendapatkan total harga kamar dan total kekurangan pembayaran
        $sql = "
            SELECT 
                SUM(k.harga_kamar) AS total_harga_kamar, 
                SUM(COALESCE(p.kekurangan_pembayaran, k.harga_kamar)) AS total_kekurangan_pembayaran
            FROM booking b
            JOIN kamar k ON b.id_kamar = k.id_kamar
            LEFT JOIN pemasukan p ON p.id_kamar = b.id_kamar 
                AND p.tgl_pemasukan = (
                    SELECT MAX(p2.tgl_pemasukan)
                    FROM pemasukan p2
                    WHERE p2.id_kamar = p.id_kamar
                )
            WHERE b.tgl_booking <= NOW()
              AND YEAR(b.tgl_booking) = YEAR(CURRENT_DATE())
              AND MONTH(b.tgl_booking) = MONTH(CURRENT_DATE())
              AND b.id_admin = ?
        ";
    
        // Menjalankan query dengan parameter id_admin
        $query = $this->db->query($sql, array($this->id_admin));
        
        // Ambil hasil query
        $result = $query->row_array();
        
        // Ambil total harga kamar dan total kekurangan pembayaran
        $totalHargaKamar = $result['total_harga_kamar'];
        $totalKekuranganPembayaran = $result['total_kekurangan_pembayaran'];
        
        // Hitung total hasil
        $hasil = $totalHargaKamar - $totalKekuranganPembayaran;
        
        // Cegah pembagian oleh nol
        if ($totalHargaKamar > 0) {
            // Hitung persentase
            $percentage = ($hasil / $totalHargaKamar) * 100;
        
            // Kembalikan sebagai bilangan bulat
            return round($percentage);
        } else {
            return 0; // Jika totalHargaKamar = 0, persentase adalah 0
        }
    }
    

    public function getTotalPenyewaByAdmin($id_admin) {
        $this->db->where('id_admin', $id_admin);
        return $this->db->count_all_results('penyewa');
    }
    
    
}
