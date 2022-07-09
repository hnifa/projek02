<?php
class jsperawatan extends CI_Controller{
    public function index(){
        $this->load->model('jsperawatan_model');
        $jsperawatan = $this->jsperawatan_model->getAll();
        $data['jsperawatan'] = $jsperawatan;
        //render data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('jsperawatan/index', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('jsperawatan/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('jsperawatan_model','jsperawatan'); //1
        $_nama = $this->input->post('nama');

        $data_jsperawatan['nama'] = $_nama;//2

        if((!empty($_idedit))){ //update
            $data_jsperawatan['id'] = $_idedit;
            $this->jsperawatan->update($data_jsperawatan);
        }
        else{ //data baru
            $this->jsperawatan->simpan($data_jsperawatan);
        }
        redirect('jsperawatan','refresh');
    }
    public function edit($id){
        $this->load->model('jsperawatan_model','jsperawatan');
        $obj_jsperawatan = $this->jsperawatan->getById($id);
        $data['obj_jsperawatan'] = $obj_jsperawatan;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('jsperawatan/edit', $data);
        $this->load->view('layouts/footer'); 
    }
    public function delete($id){
        $this->load->model('jsperawatan_model','jsperawatan');
        //cek data jsperawatan
        $data_jsperawatan['id'] = $id;
        $this->jsperawatan->delete($data_jsperawatan);
        redirect('jsperawatan','refresh');
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('/login');
    //     }
    // }
}
?>