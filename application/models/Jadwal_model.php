<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Jadwal_model extends CI_Model {

  private $_table = "jadwal_kuliah";
  public $id;
  public $kode_makul;
  public $nama_makul;
  public $kelas;
  public $nama_dosen;
  public $ruangan;
  public $hari;
  public $sesi;

public function rules()
{
  return [
  ['field' => 'kode_makul',
  'label' => 'kode_makul',
  'rules' => 'required']
  ];
}
public function getAll()
{
  return $this->db->get('jadwal_kuliah')->result();
}


public function save()
{
  $post = $this->input->post();
  $this->kode_makul = $post["kode_makul"];
  $this->nama_makul = $post["nama_makul"];
  $this->kelas = $post["kelas"];
  $this->nama_dosen = $post["nama_dosen"];
  $this->ruangan = $post["ruangan"];
  $this->hari = $post["hari"];
  $this->sesi = $post["sesi"];
  $this->db->insert($this->_table, $this);
}



}
