<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Toko extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelToko');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required', [
            'required' => 'Nama Pembeli Harus diisi',
        ]);

        $this->form_validation->set_rules('nhp', 'Nomor HP', 'required', [
            'required' => 'Nomor HP Harus diisi',
        ]);

        if ($this->form_validation->run() != true) {
            $data['merk'] = ['Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'];
            $this->load->view('v_input_toko', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nhp' => $this->input->post('nhp'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->ModelToko->proses($this->input->post('merk'))
            ];

            $this->load->view('v_output_toko', $data);
        }
    }
}