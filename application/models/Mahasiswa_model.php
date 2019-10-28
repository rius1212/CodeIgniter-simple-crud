<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa_model extends CI_Model
{
    private $_table = "data_mahasiswa";
    public $ID;
    public $NAMA;
    public $NPM;
    public $FAKULTAS;
    public $PRODI;

public function rules()
{
    return [
    ['field' => 'nama',
    'label' => 'nama',
    'rules' => 'required']
    ];
}
public function getAll()
{
    return $this->db->get('data_mahasiswa')->result();
}

public function getById($id)
{
        return $this->db->get_where($this->_table, ["ID" => $id])->row();
}

public function save()
{
    $post = $this->input->post();
    $this->NAMA = $post["nama"];
    $this->NPM = $post["npm"];
    $this->FAKULTAS = $post["fakultas"];
    $this->PRODI = $post["prodi"];
    $this->db->insert($this->_table, $this);
}

public function update()
{
    $post = $this->input->post();
    $this->ID = $post["id"];
    $this->NAMA = $post["nama"];
    $this->NPM = $post["npm"];
    $this->FAKULTAS = $post["fakultas"];
    $this->PRODI = $post["prodi"];
    $this->db->update($this->_table, $this, array('ID' => $post['id']));
}

public function delete($id)
{
    return $this->db->delete($this->_table, array("ID" => $id));
}

}
?>