<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mregister');
    }
    public function index()
    {
        $this->load->view('register');
    }
    public function store()
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('re_password', 're-enter password', 'required|matches[password]');
        $this->form_validation->set_rules('date', 'date', 'required');
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post(null, TRUE);
            $this->Mregister->store($post);
            $json['status'] = true;
        } else {
            $json['status'] = false;
            $json['pesan']  = $this->form_validation->error_array();
        }
        echo json_encode($json);
    }
}
