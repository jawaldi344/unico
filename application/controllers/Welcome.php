<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == "Oke")
			cek_user();
		else
			redirect('logout');
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function listdata()
	{
		$d['data'] = $this->db->get('users')->result_array();
		$this->load->view('listdata', $d);
	}
}
