<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmation extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('login/login'); 
        }


    }
    public function index() {
        $this->load->view('dashboard/confirmation');
    }

    public function update_subscription() {
        // Pastikan user sudah login
        if ($this->session->userdata('username')) {
            $new_subscription = $this->input->post('subscription');
            
            // Hitung tanggal 7 hari ke depan
            $waktu_sub = date('Y-m-d H:i:s', strtotime('+7 days'));
        
            // Update nilai subscription dan waktu_sub di database
            $this->db->where('id_admin', $this->session->userdata('id_admin'));
            $this->db->update('admin', [
                'subscription' => $new_subscription,
                'waktu_sub' => $waktu_sub,
                'endtrial' => 1,
            ]);
        

            $this->session->set_userdata('subscription', $new_subscription);
            $this->session->set_userdata('trial', 1);
            
            // Kirimkan URL tujuan untuk pengalihan
            echo json_encode(['redirect' => base_url('dashboard')]);
        }
    }
    
    


}
