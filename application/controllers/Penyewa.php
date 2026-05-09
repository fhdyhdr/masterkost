<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewa extends CI_Controller {


    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('login/login'); 
        }
        $this->load->library('upload'); 
        $this->load->model('dashboard/Mpenyewa'); 
    }


    public function index() {
        $data['penyewa'] = $this->Mpenyewa->getPenyewa();
        $this->load->view('dashboard/penyewa',$data);
    }


    public function tambahPenyewa() {

        $subscription = $this->session->userdata('subscription'); 
        $id_admin = $this->session->userdata('id_admin'); 
    
        $totalPenyewa= $this->Mpenyewa->getTotalPenyewaByAdmin($id_admin);
    
        $maxPenyewa = 0;
        if ($subscription === 'basic') {
            $maxPenyewa = 2;
        } elseif ($subscription === 'middle') {
            $maxPenyewa = 70;
        } elseif ($subscription === 'pro' || $subscription === 'trial') {
            $maxPenyewa = PHP_INT_MAX; 
        }
    
        if ($totalPenyewa>= $maxPenyewa) {
            $this->session->set_flashdata('error_tambah', 'Batas maksimal penyewa telah tercapai untuk jenis subscription Anda!');
            redirect('penyewa'); 
            return;
        }

        $namapenyewa = $this->input->post('namapenyewa');
        $asalpenyewa= $this->input->post('asalpenyewa');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $wapenyewa = $this->input->post('wapenyewa');
        $emailpenyewa= $this->input->post('emailpenyewa');

        $ktppenyewa = null;

        if (!empty($_FILES['ktppenyewa']['name'])) {
            $config['upload_path']   = "assets/image/penyewa"; 
            $config['allowed_types'] = 'jpg|jpeg|png'; 
            $this->upload->initialize($config);

            if ($this->upload->do_upload('ktppenyewa')) {
                $uploadData = $this->upload->data();
                $ktppenyewa = $uploadData['file_name']; 
            }
        }

        $data = [
            'nama_penyewa' => $namapenyewa,
            'asal_penyewa' => $asalpenyewa,
            'jenis_kelamin' => $jeniskelamin,
            'status_penyewa' => 'tidak aktif',
            'tgl_daftar' => date('Y-m-d H:i:s'), // Format DATETIME
        ];

        if($wapenyewa){
            $data['nowa_penyewa'] = $wapenyewa;
        }
        if($emailpenyewa){
            $data['email_penyewa'] = $emailpenyewa;
        }
        if($ktppenyewa){
            $data['ktp_penyewa'] = $ktppenyewa;
        }


         $this->Mpenyewa->tambahPenyewa($data);

         redirect('penyewa');
    }


    public function editPenyewa() {
        $idpenyewa = $this->input->post('id_penyewa');
        $namapenyewa = $this->input->post('namapenyewa');
        $asalpenyewa= $this->input->post('asalpenyewa');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $wapenyewa = $this->input->post('wapenyewa');
        $emailpenyewa= $this->input->post('emailpenyewa');


        $config['upload_path'] =  "assets/image/penyewa"; 
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = 'ktp_' . time();

        $this->upload->initialize($config);

        $foto_ktp = null;
        if (!empty($_FILES['ktppenyewaedit']['name'])) {
            if ($this->upload->do_upload('ktppenyewaedit')) {
                $uploadData = $this->upload->data();
                $foto_ktp = $uploadData['file_name'];
            }
        }


        $data = [
            'nama_penyewa' => $namapenyewa,
            'asal_penyewa' => $asalpenyewa,
            'jenis_kelamin' => $jeniskelamin,

        ];

        if($wapenyewa){
            $data['nowa_penyewa'] = $wapenyewa;
        }
        if($emailpenyewa){
            $data['email_penyewa'] = $emailpenyewa;
        }
        if($foto_ktp){
            $data['ktp_penyewa'] = $foto_ktp ;
        }


        $this->Mpenyewa->updatePenyewa($idpenyewa, $data);

        redirect('penyewa');

    } 


    function hapusPenyewa($id_penyewa) {
        if (!is_numeric($id_penyewa)) {
            $this->session->set_flashdata('error', 'ID Penyewa tidak valid!');
            redirect('penyewa');
        }
    
        $this->Mpenyewa->hapus($id_penyewa);
        $this->session->set_flashdata('success', 'Data penyewa berhasil dihapus!');
        redirect('penyewa', 'refresh');
    }
    




}
