<?php
class Mobil extends CI_Controller{
    public function index(){
        $this->load->model('mobil_model');
        $mobil = $this->mobil_model->getAll();
        $data['mobil'] = $mobil;
        //render data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mobil/index', $data);
        $this->load->view('layouts/footer');
        
    }
    public function detail($id){
        $this->load->model('mobil_model');
        $mbl = $this->mobil_model->getById($id);
        $data['mbl'] = $mbl;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mobil/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mobil/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        $this->load->model('mobil_model','mobil'); //1
        $_nopol = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merk_id = $this->input->post('merk_id');

        $data_mobil['nopol'] = $_nopol;//2
        $data_mobil['warna'] = $_warna;
        $data_mobil['biaya_sewa'] = $_biaya_sewa;
        $data_mobil['deskripsi'] = $_deskripsi;
        $data_mobil['cc'] = $_cc;
        $data_mobil['tahun'] = $_tahun;
        $data_mobil['merk_id'] = $_merk_id;
        $data_mobil['foto'] = $_nopol .'.jpg';

        if((!empty($_idedit))){ //update
            $data_mobil['id'] = $_idedit;
            $this->mobil->update($data_mobil);
        }
        else{ //data baru
            $this->mobil->simpan($data_mobil);
        }
        redirect('mobil','refresh');

        $config['upload_path']          = './uploads/photos';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 100000;
        $config['max_width']            = 100000;
        $config['max_height']           = 100000;
        // $config['file_name']            = $kendaraan->nopol;
        
        
        
        $_nopol = $this->input->post('nopol');
        
        $array = explode('.',$_FILES['nopol']['name']);
        $extension = end($array);

        $new_name = $_nopol.'.'.$extension;

        $config['file_name'] = $new_name;
    
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('nopol'))
        {
            $error = array('error' => $this->upload->display_errors());
            die(print_r($error));
            $this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
        }
        redirect(base_url().'index.php/mobil/detail?id='.$_nopol);
    
    }
    public function edit($id){
        $this->load->model('mobil_model','mobil');
        $obj_mobil = $this->mobil->getById($id);
        $data['obj_mobil'] = $obj_mobil;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mobil/edit', $data);
        $this->load->view('layouts/footer'); 
    }
    public function delete($id){
        $this->load->model('mobil_model','mobil');
        //cek data mobil
        $data_mobil['id'] = $id;
        $this->mobil->delete($data_mobil);
        redirect('mobil','refresh');
    }
    public function upload($id){
        // $_idmobil=$this->input->post("idmobil");
        // $this->load->model('mobil_model', 'mobil');
        // $kendaraan = $this->mobil->getById($_idmobil);
        // $data['kendaraan']=$kendaraan;

        $config['upload_path']          = './uploads/photos';
        $config['allowed_types']        = 'jpg';
        $config['max_size']             = 100000;
        $config['max_width']            = 100000;
        $config['max_height']           = 100000;
        // $config['file_name']            = $kendaraan->nopol;
        
        
        
        $_nopol = $this->input->post('nopol');
        
        $array = explode('.',$_FILES['nopol_file']['name']);
        $extension = end($array);

        $new_name = $_nopol.'.'.$extension;

        $config['file_name'] = $new_name;
    
        $this->load->library('upload', $config);
        $this->upload->overwrite = true;
        if ( ! $this->upload->do_upload('nopol_file'))
        {
            $error = array('error' => $this->upload->display_errors());
            // die(print_r($error));
            $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
        }
        redirect(base_url().'index.php/mobil/detail/'.$id);

    }
}
?>