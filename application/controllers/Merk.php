<?php
class Merk extends CI_Controller{
    public function index(){
        $this->load->model('merk_model');
        $merk = $this->merk_model->getAll();
        $data['merk'] = $merk;
        //render data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('merk/index', $data);
        $this->load->view('layouts/footer');   
    }
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('merk/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('merk_model','merk'); //1
        $_nama = $this->input->post('nama');
        $_produk = $this->input->post('produk');

        $data_merk['nama'] = $_nama;//2
        $data_merk['produk'] = $_produk;

        if((!empty($_idedit))){ //update
            $data_merk['id'] = $_idedit;
            $this->merk->update($data_merk);
        }
        else{ //data baru
            $this->merk->simpan($data_merk);
        }
        redirect('merk','refresh');
    }
    public function edit($id){
        $this->load->model('merk_model','merk');
        $obj_merk = $this->merk->getById($id);
        $data['obj_merk'] = $obj_merk;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('merk/edit', $data);
        $this->load->view('layouts/footer'); 
    }
    public function delete($id){
        $this->load->model('merk_model','merk');
        //cek data merk
        $data_merk['id'] = $id;
        $this->merk->delete($data_merk);
        redirect('merk','refresh');
    }
}
?>