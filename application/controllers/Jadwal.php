<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Jadwal extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model("Jadwal_model");
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data["jadwal"]= $this->Jadwal_model->getAll();
    $this->load->view("jadwal/jadwal_view",$data);
  }

  public function add()
  {
        $jadwal = $this->Jadwal_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwal->rules());
        
        if ($validation->run()) {
            $jadwal->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("jadwal/jadwal_add");
  }


}


