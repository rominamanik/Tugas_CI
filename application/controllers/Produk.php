<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index(){

        $data['page'] = "produk/form";
        $this->load->view('main',$data);
    }

    public function submit()
    {   
        $this->load->model('produkduk_model');
        $this->load->helper('autoid');
        $table = 'produk';
        $fields = 'idproduk';
        $inisial = 'PL';
    $id_produk = $this->input->post('idproduk');
    if ($id_produk =='') {
        //$pelanggan = $this->input->post();
        //$pelanggan = $data = array (
        $id_prod = get_id($fields, $table, $inisial);
        $produk = array (
            'idproduk' => $id_prod,
            'nmprod' => $this->input->post('nmprod'),
            'hrg' => $this->input->post('hrg'),
            'stn' => $this->input->post('stn'),
            'img' => $this->input->post('img'),
            'dkrps'=> $this->input->post('dkrps')
        );
        //$pelanggan['pelangganId'] = get_id($fields, $table, $inisial);
        $this->produkduk_model->add($produk);
    } else {
        $data = array(
            'nmprod' => $this->input->post('nmprod'),
            'hrg' => $this->input->post('hrg'),
            'stn' => $this->input->post('stn'),
            'img' => $this->input->post('img'),
            'dkrps'=> $this->input->post('dkrps')
            );

        $this->produkduk_model->update($id_produk,$data);
        }
    //$pelanggan['pelangganId'] = get_id($fields, $table, $inisial);
    //$this->Pelanggan_model->add($pelanggan);
    }

    public function show_list_produk()
    {
        $data['page']= "produk/list_produk";
        $this->load->model('produkduk_model');
        $data["produk"] = $this->produkduk_model->get_produk();
        $this->load->view('main',$data);
    }

    public function hapus_produk()
    {
        $this->load->model('produkduk_model');
        $id_produk = $this->uri->segment(3);
        $this->produkduk_model->hapus_produk($id_produk);
    }

    public function edit_produk()
    {
    $id_produk = $this->uri->segment(3);
        $this->load->model('produkduk_model');
        $data["data_produk"] = $this->produkduk_model->get_produk_detail($id_produk);
        $data['page'] = "produk/form";
        $this->load->view('main',$data);
    }
}