<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

    private $id_admin;

    public function __construct() {
        parent::__construct();
        $this->id_admin = $this->session->userdata('id_admin');
    }


    public function updateSub($data) {
        $this->db->where('id_admin',  $this->id_admin);
        return $this->db->update('admin', $data);
    }

    

}
