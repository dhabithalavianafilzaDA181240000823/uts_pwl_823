<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supliers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("suplier_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["supliers"] = $this->suplier_model->getAll();
        $this->load->view("admin/suplier/list", $data);
    }

    public function add()
    {
        $suplier = $this->suplier_model;
        $validation = $this->form_validation;
        $validation->set_rules($suplier->rules());

        if ($validation->run()) {
            $suplier->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/suplier/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/supliers');
       
        $suplier = $this->suplier_model;
        $validation = $this->form_validation;
        $validation->set_rules($suplier->rules());

        if ($validation->run()) {
            $suplier->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["suplier"] = $suplier->getById($id);
        if (!$data["suplier"]) show_404();
        
        $this->load->view("admin/suplier/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->suplier_model->delete($id)) {
            redirect(site_url('admin/supliers'));
        }
    }
}