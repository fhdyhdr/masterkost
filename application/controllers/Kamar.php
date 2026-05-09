<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {


    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('login/login'); 
        }

        // $this->load->library('upload'); 
        $this->load->model('dashboard/Mkamar'); 


    }


    public function index() {
        $data['tipekamar'] = $this->Mkamar->getAlltype();
        $data['jumlah_kamar'] = $this->Mkamar->getJumlahKamar(); 
        $data['jumlah_kamar_terisi'] = $this->Mkamar->getJumlahKamarByStatus('terisi');
        $this->load->view('dashboard/kamar',$data);
    }

    public function tambahTipe() {
        $namatipe = $this->input->post('namatipekamar');
        $fasilitas = $this->input->post('fasilitas'); // Array fasilitas
    
        // Insert nama tipe kamar
        $dataTipe = [
            'nama_tipe' => $namatipe
        ];
        $id_tipe = $this->Mkamar->tambahTipe($dataTipe); // Ambil ID tipe yang baru dibuat
    
        // Insert fasilitas ke tabel fasilitas_tipe_kamar
        if ($fasilitas && is_array($fasilitas)) {
            $fasilitasData = [];
            foreach ($fasilitas as $fasilitasItem) {
                $fasilitasData[] = [
                    'id_tipe_kamar' => $id_tipe,
                    'fasilitas' => $fasilitasItem
                ];
            }
            $this->Mkamar->tambahFasilitas($fasilitasData);
        }
    
        redirect('kamar'); // Redirect setelah selesai
    }



    public function editTipe() {
        $id_tipe = $this->input->post('idtipekamar'); // ID tipe yang akan diupdate
        $namatipe = $this->input->post('namatipekamar'); // Nama tipe baru
        $fasilitas = $this->input->post('fasilitas'); // Array fasilitas baru
    
        // Update nama tipe kamar
        $dataTipe = [
            'nama_tipe' => $namatipe
        ];
        $this->Mkamar->updateTipe($id_tipe, $dataTipe);
    
        // Update fasilitas
        if ($fasilitas && is_array($fasilitas)) {
            $fasilitasData = [];
            foreach ($fasilitas as $fasilitasItem) {
                $fasilitasData[] = [
                    'id_tipe_kamar' => $id_tipe,
                    'fasilitas' => $fasilitasItem
                ];
            }
            $this->Mkamar->updateFasilitas($id_tipe, $fasilitasData);
        }
    
        redirect('kamar'); // Redirect setelah selesai
    }
    

    function hapusTipe(){
        $id_tipe = $this->input->post('idtipekamarhapus'); // ID tipe yang akan diupdate
        $this->Mkamar->hapus($id_tipe);
        redirect('kamar','refresh');
    }


    function tambahKamar(){

        $subscription = $this->session->userdata('subscription'); 
        $id_admin = $this->session->userdata('id_admin');
        $totalKamar = $this->Mkamar->getTotalKamarByAdmin($id_admin);

        $maxKamar = 0;
        if ($subscription === 'basic') {
            $maxKamar = 6;
        } elseif ($subscription === 'middle') {
            $maxKamar = 70;
        } elseif ($subscription === 'pro' || $subscription === 'trial') {
            $maxKamar = PHP_INT_MAX; // Tidak terbatas
        }

        if ($totalKamar >= $maxKamar) {
            $this->session->set_flashdata('error_tambah', 'Batas maksimal kamar telah tercapai untuk jenis subscription Anda!');
            redirect('kamar'); 
            return;
        }



        $tipekamar = $this->input->post('tipekamar');
        $nokamar= $this->input->post('nokamar');
        $hargakamar= $this->input->post('hargakamar');

        $data = [
            'id_tipe_kamar' => $tipekamar ,
            'no_kamar' => $nokamar,
            'harga_kamar' => $hargakamar,
            'status_kamar' => 'kosong',
        ];


        if ($this->Mkamar->cekKamar($data)) {
            $this->session->set_flashdata('error', 'Kamar sudah ada!');
            redirect('kamar');
        } else {
            // Jika belum ada, lanjutkan untuk menambah data
            $this->Mkamar->tambahKamar($data);
            redirect('kamar');
        }


         redirect('kamar');


    }


    
    function editKamar(){
        $idkamar = $this->input->post('id_kamar');
        $tipekamar = $this->input->post('tipekamar');
        $nokamar = $this->input->post('nokamar');
        $hargakamar = $this->input->post('hargakamar');
    
        // Ambil data lama berdasarkan ID kamar
        $dataLama = $this->Mkamar->getKamarById($idkamar);
    
        // Data baru dari input
        $dataBaru = [
            'id_tipe_kamar' => $tipekamar,
            'no_kamar' => $nokamar,
            'harga_kamar' => $hargakamar,
        ];
    
        // Cek apakah ada perubahan pada no_kamar atau id_tipe_kamar
        if ($dataLama['no_kamar'] != $dataBaru['no_kamar'] || $dataLama['id_tipe_kamar'] != $dataBaru['id_tipe_kamar']) {
            // Periksa apakah kamar dengan no_kamar dan id_tipe_kamar sudah ada
            if ($this->Mkamar->cekKamar($dataBaru)) {
                $this->session->set_flashdata('error_edit', 'Kamar sudah ada!');
                redirect('kamar');
                return;
            }
        }
    
        // Update data kamar jika tidak ada duplikasi
        $this->Mkamar->updateKamar($idkamar, $dataBaru);
    
        $this->session->set_flashdata('success_edit', 'Kamar berhasil diperbarui!');
        redirect('kamar');
    }
    




    function hapusKamar($id_kamar) {
        $this->Mkamar->hapuskamar($id_kamar);
        redirect('kamar', 'refresh');
    }
    

}
