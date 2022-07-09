<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('login/index', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $this->load->model('users_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->users_model->getByUser($username);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'administrator') {
                    redirect('sewa');
                } else {
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                wrong password!
                </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            username is not registered!
            </div>');
            redirect('login');
        }
    }

    public function registered()
    {
        $this->load->model('users_model');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            //'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[passwordd]', [
            //'matches' =>'Password don't matches!',
        ]);
        $this->form_validation->set_rules('passwordd', 'Passwordd', 'required|trim|matches[passwordd]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register';
            $this->load->view('register/index');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'created_at' => date('Y-m-d h:i:s'),
                'last_login' => date('Y-m-d h:i:s'),
                'status' => 1,
                'role' => 'public'
            ];
            $this->users_model->simpan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun berhasil dibuat!
            </div>');
            redirect('login/index');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Akun Anda telah keluar!
        </div>');
        redirect('login');
    }
}
