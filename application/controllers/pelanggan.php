<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan extends CI_Controller {

    public function index(){

        $data['page'] = "pelanggan/form";
        $this->load->view('main',$data);
    }

    public function submit()
    {   
        $this->load->model('pelanggangan_model');
        $this->load->helper('autoid');
        $table = 'pelanggan';
        $fields = 'idpelanggan';
        $inisial = 'PL';
    $id_pelanggan = $this->input->post('idpelanggan');
    if ($id_pelanggan =='') {
        //$pelanggan = $this->input->post();
        //$pelanggan = $data = array (
        $id_pel = get_id($fields, $table, $inisial);
        $pelanggan = array (
            'idpelanggan' => $id_pel,
            'nmplg' => $this->input->post('nmplg'),
            'eml' => $this->input->post('eml'),
            'tlp' => $this->input->post('tlp'),
            'almt' => $this->input->post('almt')
        );
        //$pelanggan['pelangganId'] = get_id($fields, $table, $inisial);
        $this->pelanggangan_model->add($pelanggan);
    } else {
        $data = array(
            'nmplg' => $this->input->post('nmplg'),
            'eml' => $this->input->post('eml'),
            'tlp' => $this->input->post('tlp'),
            'almt' => $this->input->post('almt')
            );

        $this->pelanggangan_model->update($id_pelanggan,$data);
        }
    //$pelanggan['pelangganId'] = get_id($fields, $table, $inisial);
    //$this->Pelanggan_model->add($pelanggan);
    }

    public function show_list_pelanggan()
    {
        $data['page']= "pelanggan/list_pelanggan";
        $this->load->model('pelanggangan_model');
        $data["pelanggan"] = $this->pelanggangan_model->get_pelanggan();
        $this->load->view('main',$data);
    }

    public function hapus_pelanggan()
    {
        $this->load->model('pelanggangan_model');
        $id_pelanggan = $this->uri->segment(3);
        $this->pelanggangan_model->hapus_pelanggan($id_pelanggan);
    }

    public function edit_pelanggan()
    {
    $id_pelanggan = $this->uri->segment(3);
        $this->load->model('pelanggangan_model');
        $data["data_pelanggan"] = $this->pelanggangan_model->get_pelanggan_detail($id_pelanggan);
        $data['page'] = "pelanggan/form";
        $this->load->view('main',$data);
    }
}