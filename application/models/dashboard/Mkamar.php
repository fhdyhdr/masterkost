<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkamar extends CI_Model {


    private $id_admin;

    public function __construct() {
        parent::__construct();
        $this->id_admin = $this->session->userdata('id_admin');
    }




    public function getAlltype() {
        $this->db->select('tipe_kamar.id_tipe_kamar, tipe_kamar.nama_tipe, GROUP_CONCAT(fasilitas_tipe_kamar.fasilitas) AS fasilitas');
        $this->db->from('tipe_kamar');
        $this->db->join('fasilitas_tipe_kamar', 'fasilitas_tipe_kamar.id_tipe_kamar = tipe_kamar.id_tipe_kamar', 'left');
        $this->db->group_by('tipe_kamar.id_tipe_kamar');
        $this->db->where('tipe_kamar.id_admin',  $this->id_admin);
        
        $query = $this->db->get();
        
        $tipeKamarData = $query->result_array();
    
        // Menambahkan kamar terkait untuk setiap tipe kamar
        foreach ($tipeKamarData as $key => $value) {
            // Mengambil kamar yang sesuai dengan id_tipe_kamar
            $this->db->select('id_kamar, no_kamar, harga_kamar, status_kamar');  // Sesuaikan dengan kolom yang ada
            $this->db->from('kamar');
            $this->db->where('id_tipe_kamar', $value['id_tipe_kamar']);
            $this->db->where('kamar.id_admin',  $this->id_admin);
            $queryKamar = $this->db->get();
            
            // Menambahkan data kamar ke dalam hasil tipe kamar
            $tipeKamarData[$key]['kamar'] = $queryKamar->result_array();

             // Mengurutkan kamar berdasarkan no_kamar secara numerik
            usort($tipeKamarData[$key]['kamar'], function($a, $b) {
                return (int)$a['no_kamar'] - (int)$b['no_kamar'];
            });

        }
    
        return $tipeKamarData;
    }
    
    
    public function tambahTipe($data) {
        $data['id_admin'] = $this->id_admin; // Tambahkan id_admin ke data
        $this->db->insert('tipe_kamar', $data);
        return $this->db->insert_id(); // Ambil ID tipe yang baru dibuat
    }
    
    public function tambahFasilitas($data) {
        // Pastikan data adalah array dua dimensi
        if (is_array($data) && isset($data[0]) && is_array($data[0])) {
            // Tambahkan id_admin ke setiap elemen data fasilitas
            foreach ($data as &$fasilitas) {
                $fasilitas['id_admin'] = $this->id_admin;
            }
            // Insert batch ke tabel fasilitas_tipe_kamar
            $this->db->insert_batch('fasilitas_tipe_kamar', $data);
        } else {
            throw new Exception('Data yang diberikan untuk tambahFasilitas harus berupa array dua dimensi.');
        }
    }
    


    public function updateTipe($id_tipe, $data) {
        $this->db->where('id_tipe_kamar', $id_tipe);
        $this->db->update('tipe_kamar', $data);
        return $this->db->affected_rows(); // Mengembalikan jumlah baris yang terpengaruh
    }

    

public function updateFasilitas($id_tipe, $data) {
    // Hapus fasilitas lama
    $this->db->where('id_tipe_kamar', $id_tipe);
    $this->db->delete('fasilitas_tipe_kamar');

    // Tambahkan fasilitas baru
    if (!empty($data)) {
        $this->db->insert_batch('fasilitas_tipe_kamar', $data);
    }
}


function hapus($id_tipe){
    $this->db->where('id_tipe_kamar', $id_tipe);
    $this->db->delete('fasilitas_tipe_kamar');

    $this->db->where('id_tipe_kamar', $id_tipe);
    $this->db->delete('kamar');


    $this->db->where('id_tipe_kamar',$id_tipe);
    $this->db->delete('tipe_kamar');
}


public function cekKamar($data) {
    // Cek apakah kamar dengan 'no_kamar' dan 'id_tipe_kamar' sudah ada
    $this->db->where('no_kamar', $data['no_kamar']);
    $this->db->where('id_tipe_kamar', $data['id_tipe_kamar']);
    $this->db->where('id_admin',  $this->id_admin); 
    $query = $this->db->get('kamar');

    // Jika ada data yang cocok, return true, jika tidak return false
    return $query->num_rows() > 0;
}



public function getKamarById($idkamar) {
    $this->db->where('id_kamar', $idkamar);
    $this->db->where('id_admin', $this->id_admin); // Filter berdasarkan admin jika diperlukan
    return $this->db->get('kamar')->row_array();
}



function tambahKamar($data){
    $data['id_admin'] = $this->id_admin;
    return $this->db->insert('kamar', $data);
}
public function updateKamar($id_kamar, $data) {
    $this->db->where('id_kamar', $id_kamar);
    return $this->db->update('kamar', $data);
}


function hapuskamar($id_kamar){
    $this->db->where('id_kamar',$id_kamar);
    $this->db->delete('kamar');
}


public function getJumlahKamar() {
    $this->db->select('COUNT(*) as total_kamar');
    $this->db->where('id_admin',  $this->id_admin); 
    $this->db->from('kamar');
    $query = $this->db->get();
    return $query->row();
}


public function getJumlahKamarByStatus($status) {
    $this->db->select('COUNT(*) as total_kamar');
    $this->db->where('id_admin',  $this->id_admin); 
    $this->db->from('kamar');
    $this->db->where('status_kamar', $status); // Filter berdasarkan status_kamar
    $query = $this->db->get();
    return $query->row(); // Mengembalikan baris data sebagai objek
}


public function getTotalKamarByAdmin($id_admin) {
    $this->db->where('id_admin', $id_admin);
    return $this->db->count_all_results('kamar'); // Hitung total kamar
}

}
