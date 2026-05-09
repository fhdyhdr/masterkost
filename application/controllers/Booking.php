<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {


    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('login/login'); 
        }
        $this->load->model('dashboard/Mbooking'); 
    }


    public function index() {
        $data['booking'] = $this->Mbooking->getBooking();
        $data['penyewa'] = $this->Mbooking->getAllPenyewa();
        $data['edit_penyewa'] = $this->Mbooking->getEditPenyewa();
        $data['tipekamar'] = $this->Mbooking->getAllTipeKamar();
        $data['nokamar'] = $this->Mbooking->getNoKamar();

        $this->Mbooking->updateTidakLunas();
        $this->Mbooking->updateLunas();

        $this->Mbooking->cekStatusBooking();
        $this->Mbooking->cekStatusTerlewat();

        $this->load->view('dashboard/booking',$data);
    }



    public function getKamarByTipe($id_tipe_kamar) {
        $this->load->model('Mbooking');
        $nokamar = $this->Mbooking->getKamarByTipe($id_tipe_kamar);
    
        // Return data in JSON format
        echo json_encode($nokamar);
    }
    
    public function tambahBooking() {
        $namapenyewa = $this->input->post('namapenyewa');
        $tipekamar= $this->input->post('nokamar');
    

        $angka = $this->input->post('rentangangka');
        $waktu = $this->input->post('rentangwaktu');

        $tanggalSekarang = new DateTime(); // Tanggal hari ini
        
        switch ($waktu) {
            case 'Hari':
                $tanggalSekarang->modify("+$angka days"); // Tambah jumlah hari
                break;
            case 'Bulan':
                $tanggalSekarang->modify("+$angka months"); // Tambah jumlah bulan
                break;
            case 'Tahun':
                $tanggalSekarang->modify("+$angka years"); // Tambah jumlah tahun
                break;
        }

        // Tanggal tenggat dalam format YYYY-MM-DD
        $tanggalTenggat = $tanggalSekarang->format('Y-m-d');



    
        $data = [
            'id_penyewa' => $namapenyewa,
            'id_kamar' =>  $tipekamar,
            'status_booking' => 'belum lunas',
            'tgl_booking' =>  date('Y-m-d H:i:s'),
            'angka' => $angka,
            'waktu' => $waktu,
            'tanggal_tenggat' => $tanggalTenggat,
            'pembayaran_terlewat' => 0
        ];
    

        
    
        // Insert data ke database
        $this->Mbooking->tambahBooking($data);
        $this->Mbooking->updateStatusBooking($tipekamar);
        $this->Mbooking->updateStatusPenyewa($namapenyewa);
        redirect('booking');
    }


    public function editBooking() {
        $idbooking= $this->input->post('id_booking');
        $namapenyewa = $this->input->post('namapenyewa');
        $nokamar= $this->input->post('nokamar');
        $status= $this->input->post('edit-groupedit');
        $tglbooking= $this->input->post('tgl_booking');
        $angka = $this->input->post('rentangangka');
        $waktu = $this->input->post('rentangwaktu');

        $data = [
            'id_penyewa' => $namapenyewa,
            'status_booking' => $status,
        ];


        if($nokamar){
            $data['id_kamar'] = $nokamar;
        }

        if($angka){
            $data['angka'] = $angka;
        }
        if($waktu){
            $data['waktu'] = $waktu;
        }

        $tanggalBooking = new DateTime($tglbooking); // Gunakan tanggal booking sebagai patokan

        if ($waktu || $angka) {
            switch ($waktu) {
                case 'Hari':
                    $tanggalBooking->modify("+$angka days"); // Tambah jumlah hari
                    break;
                case 'Bulan':
                    $tanggalBooking->modify("+$angka months"); // Tambah jumlah bulan
                    break;
                case 'Tahun':
                    $tanggalBooking->modify("+$angka years"); // Tambah jumlah tahun
                    break;
            }
    
            // Tanggal tenggat dalam format YYYY-MM-DD
            $tanggalTenggat = $tanggalBooking->format('Y-m-d');
            $data['tanggal_tenggat'] = $tanggalTenggat;
        }
    
        if ($nokamar) {
            // Mengambil ID kamar lama dari booking sebelum update
            $oldBooking = $this->Mbooking->getBookingById($idbooking);
            $oldKamar = $oldBooking['id_kamar'];
    
            // Hapus status lama (set ke 'kosong')
            $this->Mbooking->hapusStatusBooking($oldKamar);
            
            // Set status kamar baru menjadi 'terisi'
            $this->Mbooking->updateStatusBooking($nokamar);
        }
     
        

        $this->Mbooking->editBooking($idbooking, $data);
    
        redirect('booking');
    }
    





    

    public function getNomor($id_tipe_kamar) {
        $nokamar = $this->Mbooking->getNoByTipe($id_tipe_kamar);
        echo json_encode($nokamar);
    }
    public function getEditNomor($id_tipe_kamar) {
        $nokamar = $this->Mbooking->editNoByTipe($id_tipe_kamar);
        echo json_encode($nokamar);
    }

    


    public function hapusBooking($id_booking,$kamar,$id_penyewa){
        $this->Mbooking->updateStatusHapusPenyewa($id_penyewa);
        $this->Mbooking->hapus($id_booking);
        $this->Mbooking->hapusStatusBooking($kamar);
        redirect('booking', 'refresh');
    }



    public function getBookingDetails() {
        $tgl_booking = $this->input->get('tgl_booking'); // Ambil tanggal dari request
    
        $this->db->select('penyewa.nama_penyewa, booking.tgl_booking, booking.tanggal_tenggat');
        $this->db->from('booking');
        $this->db->join('penyewa', 'booking.id_penyewa = penyewa.id_penyewa');
        $this->db->where('DATE(booking.tanggal_tenggat)', $tgl_booking);
        $this->db->where('booking.id_admin', $this->session->userdata("id_admin"));
        
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            echo json_encode($query->result());
        } else {
            echo json_encode(['message' => 'No data found']);
        }
    }
    
}
