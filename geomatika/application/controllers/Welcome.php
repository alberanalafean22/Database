<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        // Load model
        $this->load->model('Lampung_model');

        // Ambil data dari model
        $data['lampung'] = $this->Lampung_model->get_all_lampung();

        // Load view dan kirim data ke view
        $this->load->view('welcome_message', $data);
    }
} 