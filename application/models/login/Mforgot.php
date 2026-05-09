<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mforgot extends CI_Model {

    public function email_exists($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('admin'); // Ganti 'users' dengan tabel user kamu

        return ($query->num_rows() > 0) ? true : false;
    }

    public function update_password_by_email($email, $hashedPassword) {
        $this->db->set('password', $hashedPassword);
        $this->db->where('email', $email);
        return $this->db->update('admin'); 
    }



}
