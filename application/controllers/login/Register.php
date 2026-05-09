<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login/Mregister');
    }

    public function index() {	
        $this->load->view('login/register');
    }

    public function create() {
        // Ambil data dari form
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'tipe_filter' => 1,
            'subscription' => 'standart',
            'endtrial' => 0
        );
        
        $this->session->set_flashdata('form_data', $data);
        
        
        if ($this->Mregister->email_exists($email)) {
            // Jika email sudah ada, kembalikan ke form registrasi dengan pesan error
            $this->session->set_flashdata('errorReg', 'Email sudah digunakan');
            redirect('login/register'); // Kembali ke halaman register
        } else {
            // Jika email belum ada, simpan data
            if ($this->Mregister->insert_user($username, $password, $email, $data['tipe_filter'], $data['subscription'], $data['endtrial'])) {
                // Redirect atau pesan sukses
                $this->session->set_flashdata('successReg', 'Berhasil, Silahkan Login');
                redirect('welcome'); 
            } else {
                // Tangani error penyimpanan data
                $this->session->set_flashdata('errorReg', 'Data gagal disimpan, coba lagi nanti.');
                redirect('login/register'); 
        }
    }
    }
}
