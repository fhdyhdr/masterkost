<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mregister extends CI_Model {

    public function insert_user($username, $password, $email, $tipe_filter, $subscription,$endtrial) {
        // Enkripsi password (opsional)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
        // Data yang akan dimasukkan ke database
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $hashed_password,
            'tipe_filter' => $tipe_filter,
            'subscription' => $subscription,
            'endtrial' => $endtrial
        );
    
        // Masukkan data ke tabel admin
        $insert = $this->db->insert('admin', $data);
    
        if ($insert) {
            // Ambil data pengguna yang baru saja disimpan
            $user_id = $this->db->insert_id(); // ID user yang baru dimasukkan
            $user_data = $this->db->get_where('admin', ['id_admin' => $user_id])->row();
    
            // Set session untuk pengguna baru
            $this->session->set_userdata("id_admin", $user_data->id_admin);
            $this->session->set_userdata("username", $user_data->username);
            $this->session->set_userdata("subscription", $user_data->subscription);
            $this->session->set_userdata("email", $user_data->email);
            $this->session->set_userdata("trial", $user_data->endtrial);
    
            return true; // Indikasi bahwa proses berhasil
        } else {
            return false; // Indikasi bahwa proses gagal
        }
    }
    

    



    public function email_exists($email) {
        // Melakukan pencarian email di database
        $this->db->where('email', $email);
        $query = $this->db->get('admin'); // Ganti 'users' dengan nama tabel kamu

        // Jika ditemukan, return true, jika tidak, return false
        return ($query->num_rows() > 0) ? true : false;
    }


    public function get_user_by_email($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('admin'); // Sesuaikan nama tabel jika perlu
        return $query->row(); // Mengembalikan data user jika ada
    }
    
    
}
