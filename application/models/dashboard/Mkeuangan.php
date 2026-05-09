<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkeuangan extends CI_Model {

    private $id_admin;

    public function __construct() {
        parent::__construct();
        $this->id_admin = $this->session->userdata('id_admin');
    }

    public function getPemasukan() {
        $this->db->select('pemasukan.*, penyewa.nama_penyewa, kamar.no_kamar, tipe_kamar.nama_tipe, tipe_kamar.id_tipe_kamar');
        $this->db->from('pemasukan');
        $this->db->join('penyewa', 'penyewa.id_penyewa = pemasukan.id_penyewa', 'left');
        $this->db->join('kamar', 'kamar.id_kamar = pemasukan.id_kamar', 'left');
        $this->db->join('tipe_kamar', 'tipe_kamar.id_tipe_kamar = kamar.id_tipe_kamar', 'left');
        $this->db->where('pemasukan.id_admin',  $this->id_admin); 
        $this->db->where('pemasukan.status_pemasukan !=', 'tagihanawal');
        $this->db->where('pemasukan.status_pemasukan !=', 'tagihanterlewatselesai');
        $this->db->order_by('pemasukan.tgl_pemasukan', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPengeluaran() {
        $this->db->where('id_admin',  $this->id_admin); 
        $q = $this->db->get('pengeluaran'); 
        $d = $q->result_array();
        return $d;
    }
    


    

    public function getTipeKamar(){
        $this->db->where('id_admin',  $this->id_admin); 
        $q=$this->db->get('tipe_kamar');
        $d=$q->result_array();
        return $d;
    }

    
    public function getNoKamar(){
        $this->db->where('kamar.id_admin',  $this->id_admin); 
        $q=$this->db->get('kamar');
        $d=$q->result_array();
        return $d;
    }

        
    public function getPenyewa(){
        $this->db->select('booking.*, penyewa.*, kamar.*, tipe_kamar.*');
        $this->db->from('booking');
        $this->db->join('penyewa', 'booking.id_penyewa= penyewa.id_penyewa', 'left');
        $this->db->join('kamar', 'kamar.id_kamar= booking.id_kamar', 'left');
        $this->db->join('tipe_kamar', 'kamar.id_tipe_kamar= tipe_kamar.id_tipe_kamar', 'left');
        $this->db->where('penyewa.id_admin',  $this->id_admin); 
        $this->db->where('booking.status_booking !=',  'lunas'); 
        $query = $this->db->get();
        return $query->result_array();
    }


    public function getEditPenyewa(){
        $this->db->select('booking.*, penyewa.*, kamar.*, tipe_kamar.*');
        $this->db->from('booking');
        $this->db->join('penyewa', 'booking.id_penyewa= penyewa.id_penyewa', 'left');
        $this->db->join('kamar', 'kamar.id_kamar= booking.id_kamar', 'left');
        $this->db->join('tipe_kamar', 'kamar.id_tipe_kamar= tipe_kamar.id_tipe_kamar', 'left');
        $this->db->where('penyewa.id_admin',  $this->id_admin); 
        $query = $this->db->get();
        return $query->result_array();
    }


    public function updatePemasukan($id_pemasukan, $data) {
        $this->db->where('id_pemasukan', $id_pemasukan);
        return $this->db->update('pemasukan', $data);
    }


    public function tambahPemasukan($data) {
        $data['id_admin'] = $this->id_admin;
        return $this->db->insert('pemasukan', $data);
    }


    function hapusPemasukan($id_pemasukan){
        $this->db->where('id_pemasukan',$id_pemasukan);
        $this->db->delete('pemasukan');
    }



    public function getIdKamarByPenyewa($id_penyewa) {
        $this->db->select('id_kamar');
        $this->db->from('booking');
        $this->db->where('id_penyewa', $id_penyewa);
        $this->db->where('booking.id_admin',  $this->id_admin); 
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->row()->id_kamar; // Mengembalikan hanya id_kamar
        }
        return null; // Jika tidak ada hasil
    }

    public function tambahPengeluaran($data){
        $data['id_admin'] = $this->id_admin;
        return $this->db->insert('pengeluaran', $data);
    }


    
    public function editPengeluaran($id_pengeluaran,$data){
        $this->db->where('id_pengeluaran', $id_pengeluaran);
        return $this->db->update('pengeluaran', $data);
    }

    function hapus($id_pengeluaran){
        $this->db->where('id_pengeluaran',$id_pengeluaran);
        $this->db->delete('pengeluaran');
    }


    public function getHargaKamar($id_kamar) {
        $this->db->select('harga_kamar');
        $this->db->from('kamar');
        $this->db->where('id_kamar', $id_kamar);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->row()->harga_kamar; // Mengembalikan nilai harga_kamar
        }
        return false; // Jika tidak ditemukan
    }




public function getTotalPemasukan($id_penyewa, $id_kamar) {
    // Ambil tgl_booking dan tanggal_tenggat dari tabel booking
    $this->db->select('tgl_booking, tanggal_tenggat');
    $this->db->from('booking');
    $this->db->where('id_penyewa', $id_penyewa);
    $this->db->where('id_kamar', $id_kamar);
    $queryBooking = $this->db->get();

    if ($queryBooking->num_rows() > 0) {
        $bookingData = $queryBooking->row(); // Ambil baris pertama
        $tgl_booking = $bookingData->tgl_booking;
        $tanggal_tenggat = $bookingData->tanggal_tenggat;

        // Cek total pemasukan berdasarkan rentang tgl_booking dan tanggal_tenggat
        $this->db->select_sum('nominal'); // Fungsi untuk menjumlahkan nilai kolom 'nominal'
        $this->db->from('pemasukan');
        $this->db->where('id_penyewa', $id_penyewa);
        $this->db->where('id_kamar', $id_kamar);
        $this->db->where('tgl_pemasukan >=', $tgl_booking); // Filter dari tgl_booking
        $this->db->where('tgl_pemasukan <=', $tanggal_tenggat); // Filter hingga tanggal_tenggat
        $queryPemasukan = $this->db->get();

        if ($queryPemasukan->num_rows() > 0) {
            return $queryPemasukan->row()->nominal; // Mengembalikan total nominal
        }
    }

    return 0; // Jika tidak ditemukan data, kembalikan 0
}



public function getTotalPemasukanKecuali($id_penyewa, $id_kamar, $idpemasukan) {
      // Ambil tgl_booking dan tanggal_tenggat dari tabel booking
      $this->db->select('tgl_booking, tanggal_tenggat');
      $this->db->from('booking');
      $this->db->where('id_penyewa', $id_penyewa);
      $this->db->where('id_kamar', $id_kamar);
      $queryBooking = $this->db->get();
  
      if ($queryBooking->num_rows() > 0) {
          $bookingData = $queryBooking->row(); // Ambil baris pertama
          $tgl_booking = $bookingData->tgl_booking;
          $tanggal_tenggat = $bookingData->tanggal_tenggat;
  
          // Cek total pemasukan berdasarkan rentang tgl_booking dan tanggal_tenggat
          $this->db->select_sum('nominal'); // Fungsi untuk menjumlahkan nilai kolom 'nominal'
          $this->db->from('pemasukan');
          $this->db->where('tgl_pemasukan >=', $tgl_booking); // Filter dari tgl_booking
          $this->db->where('tgl_pemasukan <=', $tanggal_tenggat); // Filter hingga tanggal_tenggat
          $this->db->where('id_penyewa', $id_penyewa);
          $this->db->where('id_kamar', $id_kamar);
          $this->db->where('id_pemasukan !=', $idpemasukan);
          $queryPemasukan = $this->db->get();
  
          if ($queryPemasukan->num_rows() > 0) {
              return $queryPemasukan->row()->nominal; // Mengembalikan total nominal
          }
      }
  
      return 0; // Jika tidak ditemukan data, kembalikan 0
}




    
    public function ambilidkamarlama($id_pemasukan) {
        $this->db->where('id_pemasukan', $id_pemasukan);
        $query = $this->db->get('pemasukan');
        return $query->row(); // Mengembalikan satu baris data
    }


    public function cekKeterlambatan($idpenyewa, $idkamar) {
        // Query untuk mencari nilai pembayaran_terlewat berdasarkan id_penyewa dan id_kamar
        $this->db->select('pembayaran_terlewat');
        $this->db->from('booking'); // Ganti dengan nama tabel yang relevan
        $this->db->where('id_penyewa', $idpenyewa);
        $this->db->where('id_kamar', $idkamar);
        
        $query = $this->db->get();
        
        // Mengecek apakah ada hasil yang ditemukan dan apakah pembayaran_terlewat lebih dari 0
        if ($query->num_rows() > 0) {
            $result = $query->row();
            
            // Jika pembayaran_terlewat lebih besar dari 0
            if ($result->pembayaran_terlewat > 0) {
                return true; // Ada keterlambatan
            }
        }
        
        return false; // Tidak ada keterlambatan
    }
    public function kekurangan($idpenyewa, $idkamar) {
        // Query untuk mengambil nilai kekurangan_pembayaran berdasarkan id_penyewa dan id_kamar
        // dan diurutkan berdasarkan tgl_pemasukan yang paling terakhir
        $this->db->select('kekurangan_pembayaran');
        $this->db->from('pemasukan'); // Ganti dengan nama tabel yang relevan
        $this->db->where('id_penyewa', $idpenyewa);
        $this->db->where('id_kamar', $idkamar);
        $this->db->order_by('tgl_pemasukan', 'DESC'); // Urutkan berdasarkan tgl_pemasukan paling terakhir
        $this->db->limit(1); // Ambil hanya satu data paling terakhir
        
        $query = $this->db->get();
        
        // Mengecek apakah ada hasil yang ditemukan
        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->kekurangan_pembayaran; // Mengembalikan nilai kekurangan_pembayaran
        }
        
        return 0; // Jika tidak ada data, kembalikan 0
    }


    public function kekuranganSebelum($idpenyewa, $idkamar) {
        // Query untuk mengambil nilai kekurangan_pembayaran berdasarkan id_penyewa dan id_kamar
        // dan diurutkan berdasarkan tgl_pemasukan secara descending
        $this->db->select('kekurangan_pembayaran');
        $this->db->from('pemasukan');
        $this->db->where('id_penyewa', $idpenyewa);
        $this->db->where('id_kamar', $idkamar);
        $this->db->where('status_pemasukan', 'tagihanawal');
        $this->db->order_by('tgl_pemasukan', 'DESC'); // Urutkan berdasarkan tgl_pemasukan secara descending
        $this->db->limit(1); // Ambil hanya satu baris data terbaru
        
        $query = $this->db->get();
        
        // Mengecek apakah ada hasil yang ditemukan
        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->kekurangan_pembayaran; // Mengembalikan nilai kekurangan_pembayaran
        }
        
        return 0; // Jika tidak ada data, kembalikan 0
    }
    



    public function cekstatus($idpenyewa, $idkamar) {
        // Ambil status_pemasukan pada pemasukan terakhir berdasarkan id_penyewa dan id_kamar
        $this->db->select('status_pemasukan');
        $this->db->from('pemasukan');
        $this->db->where('id_penyewa', $idpenyewa);
        $this->db->where('id_kamar', $idkamar);
        $this->db->order_by('tgl_pemasukan', 'DESC'); // Urutkan berdasarkan tgl_pemasukan terbaru
        $this->db->limit(1); // Hanya ambil 1 data terbaru
        
        // Eksekusi query dan ambil hasilnya
        $query = $this->db->get();
    
        // Cek apakah ada hasil
        if ($query->num_rows() > 0) {
            // Ambil status_pemasukan dari data terakhir
            $status = $query->row()->status_pemasukan;
            
            // Periksa apakah status_pemasukan adalah 'tagihanawal'
            if ($status === 'tagihanawal') {
                return true; // Jika status_pemasukan adalah 'tagihanawal'
            }
        }
    
        // Jika tidak ada data atau status tidak 'tagihanawal'
        return false;
    }
    
    

}
