<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('login/login'); 
        }

    }

    public function index() {

        $bulan = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
    
        $date = new DateTime();
    
        // Mendapatkan bulan (1-12)
        $month_name= $bulan[$date->format('n') - 1];



        $current_month = date('m'); // Bulan sekarang (01 sampai 12)
        $current_year = date('Y');  // Tahun sekarang (contoh: 2024)
    
        // Menghitung jumlah hari dalam bulan tersebut
        $days_in_month = cal_days_in_month(CAL_GREGORIAN, $current_month, $current_year);
    
        // Mengirimkan data bulan sekarang dan jumlah hari ke view
        $data = [
            'current_month' => $current_month,
            'current_year' => $current_year,
            'days_in_month' => $days_in_month,
            'bulan' => $month_name,
        ];

        
        $this->check_subscription();
        $this->load->model('dashboard/Mkamar'); 
        $this->load->model('dashboard/Mpenyewa'); 
        $data['jumlah_penyewa'] = $this->Mpenyewa->getJumlahPenyewa(); 
        $data['jumlah_kamar'] = $this->Mkamar->getJumlahKamar(); 
        $data['jumlah_kamar_terisi'] = $this->Mkamar->getJumlahKamarByStatus('terisi');
        $data['total_pemasukan'] = $this->Mpenyewa->getTotalPemasukan(); 
        $data['jumlah_pemasukan'] = $this->Mpenyewa->getTotalMonth(); 
        $data['latest_booking'] = $this->Mpenyewa-> getLatestBookingWithTipe();
        $data['latest_pemasukan'] = $this->Mpenyewa-> getLatestPemasukan();
        $data['belum_lunas'] = $this->Mpenyewa->getTotalBelumLunas();
        $data['top_penyewa'] = $this->Mpenyewa->getPenyewaTeratas(); 
        
        $data['presentase'] = $this->Mpenyewa->getTotalPembayaranPercentage(); 
        $this->load->view('dashboard/home',$data);
    }


    public function check_subscription() {
        // Pastikan user sudah login
        if ($this->session->userdata('username')) {
            // Ambil waktu_sub dari database
            $this->db->where('id_admin', $this->session->userdata('id_admin'));
            $query = $this->db->get('admin');
            
            if ($query->num_rows() > 0) {
                $user = $query->row();
                $waktu_sub = $user->waktu_sub; // Ambil waktu_sub
                
                // Cek apakah waktu_sub tidak kosong
                if (!empty($waktu_sub)) {
                    $now = date('Y-m-d H:i:s');
                    
                    // Cek apakah 7 hari telah lewat
                    if (strtotime($waktu_sub) < strtotime($now)) {
                        // Jika waktu_sub sudah lebih dari 7 hari
                        $this->db->where('id_admin', $this->session->userdata('id_admin'));
                        $this->db->update('admin', [
                            'subscription' => 'standart',
                            'waktu_sub' => NULL // Set waktu_sub menjadi NULL
                        ]);
                        
                        // Perbarui session dengan subscription 'standart'
                        $this->session->set_userdata('subscription', 'standart');

                        redirect('welcome');
                    }
                }
            }
        }
    }
    

}
