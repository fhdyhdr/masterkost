<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {


    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('login/login'); 
        }
        $this->load->model('dashboard/Mkeuangan'); 
        $this->load->model('dashboard/Mbooking'); 
    }


    public function index() {
        $data['pemasukan'] = $this->Mkeuangan->getPemasukan();
        $data['pengeluaran'] = $this->Mkeuangan->getPengeluaran();
        $data['tipe_kamar'] = $this->Mkeuangan->getTipeKamar();
        $data['no_kamar'] = $this->Mkeuangan->getNoKamar();
        $data['penyewa'] = $this->Mkeuangan->getPenyewa();
        $data['penyewaedit'] = $this->Mkeuangan->getEditPenyewa();
        $this->load->view('dashboard/keuangan',$data);
    }

    function editPemasukan() {
        $idpemasukan = $this->input->post('id_pemasukan');
        $idpenyewa = $this->input->post('idpenyewa');
        $idkamar = $this->input->post('idkamar');
        $nominal = $this->input->post('nominal');
    
        // Jika id_kamar kosong, ambil dari data lama
        if (empty($idkamar)) {
            $data_lama = $this->Mkeuangan->ambilidkamarlama($idpemasukan);
            if ($data_lama) {
                $idkamar = $data_lama->id_kamar;
            }
        }
    
        // Ambil harga kamar
        $harga_kamar = $this->Mkeuangan->getHargaKamar($idkamar);
    
        // Ambil total pemasukan
        $total_pemasukan = $this->Mkeuangan->getTotalPemasukan($idpenyewa, $idkamar);
    
        // Ambil nominal lama dari pemasukan
        $pemasukan_lama = $this->Mkeuangan->ambilidkamarlama($idpemasukan)->nominal;
    
        // Perbarui total pemasukan dengan mengurangi pemasukan lama
        $total_pemasukan -= $pemasukan_lama;

        $cekketerlambatan= $this->Mkeuangan->cekKeterlambatan($idpenyewa, $idkamar);
      
        // Persiapkan data untuk update
        $data = [
            'id_penyewa' => $idpenyewa,
            'nominal' => $nominal,
            'tgl_pemasukan' =>  date('Y-m-d H:i:s'),
        ];

        if($cekketerlambatan){
            $data['status_pemasukan'] = 'belum lunas';
            $kekurangan =  $this->Mkeuangan->kekuranganSebelum($idpenyewa, $idkamar);
        
            $pemasukan= $this->Mkeuangan->getTotalPemasukanKecuali($idpenyewa, $idkamar, $idpemasukan);
          
            $data['kekurangan_pembayaran'] = $kekurangan - ( $pemasukan + $nominal );

            if ($kekurangan - ( $pemasukan + $nominal ) <= 0) {
                $id_admin = $this->session->userdata('id_admin'); 
                $data['status_pemasukan'] = 'lunas';
                $data['kekurangan_pembayaran'] = 0;

                $this->db->set('pembayaran_terlewat', 0); // Set pembayaran_terlewat menjadi 0
                $this->db->set('status_booking', 'lunas'); // Set pembayaran_terlewat menjadi 0
                $this->db->where('id_penyewa', $idpenyewa);
                $this->db->where('id_kamar', $idkamar);
                $this->db->update('booking'); // Melakukan update pada tabel booking

                
                $this->db->where('pemasukan_terlewat', 0); // Kondisi pemasukan_terlewat = 0
                $this->db->where('id_admin', $id_admin);   // Kondisi id_admin sesuai parameter
                $this->db->set('pemasukan_terlewat', 1);   // Set pemasukan_terlewat menjadi 1
                $this->db->update('pemasukan');           // Update tabel pemasukan
                



                $this->db->where('id_penyewa', $idpenyewa);
                $this->db->where('id_kamar', $idkamar);
                $this->db->where('status_pemasukan', 'tagihanawal');
                $this->db->update('pemasukan', array('status_pemasukan' => 'tagihanterlewatselesai'));
                
                
            }
            
        }
        // Hitung status pembayaran
        else if ($total_pemasukan + $nominal >= $harga_kamar) {
            $data['status_pemasukan'] = 'lunas';
            $data['kekurangan_pembayaran'] = 0;
        } else {
            $data['status_pemasukan'] = 'belum lunas';
            $data['kekurangan_pembayaran'] = $harga_kamar - ($total_pemasukan + $nominal);
        }
    
        // Tambahkan id_kamar ke data jika ada
        if ($idkamar) {
            $data['id_kamar'] = $idkamar;
        }
    
        // Update data pemasukan
        $this->Mkeuangan->updatePemasukan($idpemasukan, $data);
        $this->Mbooking->cekStatusBooking();
        // Redirect ke halaman keuangan
        redirect('keuangan');
    }

    
    function tambahPemasukan(){
        $idpenyewa = $this->input->post('idpenyewa');
        $idkamar = $this->input->post('idkamar');
        $nominal= $this->input->post('nominal');



        $harga_kamar = $this->Mkeuangan->getHargaKamar($idkamar);
        $total_pemasukan = $this->Mkeuangan->getTotalPemasukan($idpenyewa, $idkamar);

        $cekketerlambatan= $this->Mkeuangan->cekKeterlambatan($idpenyewa, $idkamar);

        $total_pemasukan+=$nominal;

        $data = [
            'id_penyewa' => $idpenyewa,
            'id_kamar' => $idkamar,
            'nominal' => $nominal,
            'tgl_pemasukan' =>  date('Y-m-d H:i:s'),
        ];

        if($cekketerlambatan){
            $data['status_pemasukan'] = 'belum lunas';
            $data['pemasukan_terlewat'] = 0;
            $kekurangan =  $this->Mkeuangan->kekurangan($idpenyewa, $idkamar);
            $statusValid = $this->Mkeuangan->cekstatus($idpenyewa, $idkamar);
            if($statusValid){
                $data['kekurangan_pembayaran'] = $kekurangan-$total_pemasukan;
            }
            else{
                $data['kekurangan_pembayaran'] = $kekurangan-$nominal;

                if ($kekurangan - $nominal <= 0) {
                    $id_admin = $this->session->userdata('id_admin'); 
                    $data['pemasukan_terlewat'] = 1;
                    $data['status_pemasukan'] = 'lunas';
                    $data['kekurangan_pembayaran'] = 0;

                    $this->db->set('pembayaran_terlewat', 0); // Set pembayaran_terlewat menjadi 0
                    $this->db->set('status_booking', 'lunas'); // Set pembayaran_terlewat menjadi 0
                    $this->db->where('id_penyewa', $idpenyewa);
                    $this->db->where('id_kamar', $idkamar);
                    $this->db->update('booking'); // Melakukan update pada tabel booking


                    
                    $this->db->where('pemasukan_terlewat', 0); // Kondisi pemasukan_terlewat = 0
                    $this->db->where('id_admin', $id_admin);   // Kondisi id_admin sesuai parameter
                    $this->db->set('pemasukan_terlewat', 1);   // Set pemasukan_terlewat menjadi 1
                    $this->db->update('pemasukan');           // Update tabel pemasukan
                    


                    $this->db->where('id_penyewa', $idpenyewa);
                    $this->db->where('id_kamar', $idkamar);
                    $this->db->where('status_pemasukan', 'tagihanawal');
                    $this->db->update('pemasukan', array('status_pemasukan' => 'tagihanterlewatselesai'));
                    
                    
                }

        
            }
           
        }
        else if ($total_pemasukan >= $harga_kamar) {
            $data['status_pemasukan'] = 'lunas';
            $data['kekurangan_pembayaran'] = 0;
            $this->db->where('id_penyewa',$idpenyewa);
            $this->db->where('id_kamar',$idkamar);
            $this->db->where('status_pemasukan','tagihanawal');
            $this->db->delete('pemasukan');
        }
       
        else{
            $data['status_pemasukan'] = 'belum lunas';
            $data['kekurangan_pembayaran'] = $harga_kamar-$total_pemasukan;
        }




        $this->Mkeuangan ->tambahPemasukan($data);
        $this->Mbooking->cekStatusBooking();
        redirect('keuangan', 'refresh');
    }

    function hapusPemasukan($id_pemasukan){
        $this->Mkeuangan->hapusPemasukan($id_pemasukan);
        $this->Mbooking->cekStatusBooking();
        redirect('keuangan', 'refresh');
    
    }


    public function getIdKamarByPenyewa() {
        $id_penyewa = $this->input->post('id_penyewa'); 
        $id_kamar = $this->Mkeuangan->getIdKamarByPenyewa($id_penyewa);
        echo json_encode($id_kamar);
    }
    

    public function tambahPengeluaran() {
        $deskripsi = $this->input->post('deskripsipengeluaran');
        $nominal= $this->input->post('nominal');
        $tanggal = $this->input->post('hiddenTanggal');

        $data = [
            'deskripsi_pengeluaran' => $deskripsi,
            'nominal_pengeluaran' => $nominal,
            'tgl_pengeluaran' => $tanggal,
        ];


        $this->Mkeuangan ->tambahPengeluaran($data);

        redirect('keuangan');
     
    }

    function editPengeluaran(){
        $idpengeluaran= $this->input->post('id_pengeluaran');
        $deskripsi = $this->input->post('deskripsipengeluaran');
        $nominal= $this->input->post('nominal');
        $tgl= $this->input->post('hiddenTanggalEdit');

        $data = [
            'deskripsi_pengeluaran' => $deskripsi,
            'nominal_pengeluaran' => $nominal,
            'tgl_pengeluaran' => $tgl,
        ];


        $this->Mkeuangan ->editPengeluaran($idpengeluaran,$data);

        redirect('keuangan');
    }
    
    function hapusPengeluaran($id_pengeluaran) {

        $this->Mkeuangan->hapus($id_pengeluaran);
        redirect('keuangan');
    }

}
