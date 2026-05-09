<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        // Tampilkan halaman login
        $this->load->view('login/login');
    }

    public function process_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->load->model('login/Mlogin');
        $user = $this->Mlogin->check_user($email, $password);
        $userlangganan = $this->Mlogin->check_langganan($email, $password);

        if ($user) {
            $this->check_subscription();
            if($userlangganan){
                redirect('dashboard'); 
            }
            else{
                redirect('welcome'); 
            }
           
        } else {
            $this->session->set_flashdata('errorLog', 'Email/Username atau password salah.');
            redirect('login/login'); 
        }
    }

    public function logout() {
        $this->session->sess_destroy(); 
        $this->session->unset_userdata('subscription');
        $this->session->set_flashdata('successReg', 'Berhasil Logout');
        redirect('welcome'); 
    
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
                    }
                }
            }
        }
    }
    

}