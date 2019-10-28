<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mahasiswa_model");
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data["mahasiswa"]= $this->Mahasiswa_model->getAll();
        $this->load->view("mahasiswa/mahasiswa_view",$data);
    }

    public function add()
    {
            $mahasiswa = $this->Mahasiswa_model;
            $validation = $this->form_validation;
            $validation->set_rules($mahasiswa->rules());
            
            if ($validation->run()) {
                $mahasiswa->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
            $this->load->view("mahasiswa/mahasiswa_add");
    }

    public function edit($id=null)
	{
		if (!isset($id)) redirect('mahasiswa');
       
        $mahasiswa = $this->Mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        if ($validation->run()) {
            $mahasiswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["mahasiswa"] = $mahasiswa->getById($id);
        if (!$data["mahasiswa"]) show_404();
        
        $this->load->view("mahasiswa/mahasiswa_edit", $data);
    }
    
    public function delete($id=null)
	{
		if (!isset($id)) show_404();
        
        if ($this->Mahasiswa_model->delete($id))
        {
            redirect(site_url('mahasiswa'));
        }
	}




}