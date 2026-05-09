<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

    public function check_user($login, $password) {
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            // Jika input berupa email
            $this->db->where('email', $login);
        } else {
            // Jika input berupa username
            $this->db->where('username', $login);
        }
    
        $query = $this->db->get('admin'); 
    
        if ($query->num_rows() == 1) {
            $user = $query->row(); 
    
            if (password_verify($password, $user->password)) {
                // Set session data
                $this->session->set_userdata("id_admin", $user->id_admin);
                $this->session->set_userdata("username", $user->username);
                $this->session->set_userdata("subscription", $user->subscription);
                $this->session->set_userdata("email", $user->email);
                $this->session->set_userdata("trial", $user->endtrial);
                return $user; 
            } else {
                return false;
            }
        } else {
            return false;
        }
    }





    public function check_langganan($login, $password) {
        // Cek apakah input adalah email atau username
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            // Jika input berupa email
            $this->db->where('email', $login);
        } else {
            // Jika input berupa username
            $this->db->where('username', $login);
        }
    
        $query = $this->db->get('admin'); // Ganti 'admin' dengan tabel yang kamu gunakan
    
        if ($query->num_rows() == 1) {
            $userlangganan = $query->row(); // Ambil data user
    
            // Verifikasi password dengan password_hash
            if (password_verify($password,  $userlangganan->password)) {
                // Tambahkan pengecekan kolom subscription
                if ( $userlangganan->subscription != 'standart') {
                    return $userlangganan;
                } else {
                    return false; // Jika subscription adalah 'standart', login gagal
                }
            } else {
                return false; // Jika password tidak cocok
            }
        } else {
            return false; // Jika email/username tidak ditemukan
        }
    }

    


    
    
}
