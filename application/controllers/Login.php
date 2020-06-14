<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin');
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function validate()
    {
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[6]|max_length[15]');
        if ($this->form_validation->run() == TRUE) {
            $post  = $this->input->post(null, TRUE);
            $check = $this->Mlogin->validate($post);
            if ($check->num_rows() > 0) {
                $data = $check->row_array();
                $this->session->set_userdata('masuk', TRUE);
                if ($this->session->userdata('masuk') == TRUE) {
                    $this->session->set_userdata('status_login', 'Oke');
                    $this->session->set_userdata('kode', $data['id_user']);
                } else {
                    $this->session->sess_destroy();
                }
                $json['status'] = true;
            } else {
                $json['status'] = false;
            }
        } else {
            $json['status'] = false;
            $json['pesan']  = $this->form_validation->error_array();
        }
        echo json_encode($json);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
