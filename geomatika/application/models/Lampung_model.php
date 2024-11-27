<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lampung_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Pastikan database tersedia
        $this->load->database();
    }

    public function get_all_lampung() {
        $query = $this->db->get('tb_luaswilayah');
        return $query->result_array();
    } 
}