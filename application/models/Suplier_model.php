<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier_model extends CI_Model
{
    private $_table = "supliers";

    public $suplier_id;
    public $nama;
    public $alamat;
    public $telp;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
            ['field' => 'telp',
            'label' => 'Telp',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["suplier_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->suplier_id = $post["id"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        return $this->db->update($this->_table, $this, array('suplier_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("suplier_id" => $id));
    }
   
}