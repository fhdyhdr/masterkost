<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {




    public function index() {
        $this->check_subscription();
        $this->load->view('dashboard/landingpage');
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
