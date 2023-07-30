<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login/index');
		$this->load->view('template/footer');
		
	}
	public function login(){
		$this->form_validation->set_rules('email', 'Email', 'required',['required'=>'You must provide a %s']);
		$this->form_validation->set_rules('password', 'Password', 'required',['required'=>'You must provide a %s']);
		if ($this->form_validation->run())
		{
				//
		}
		else
		{
			$this->index();
		}
	}

}
