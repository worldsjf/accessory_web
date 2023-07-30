<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('indexModel');
		$data ['allproduct']=$this->indexModel->getallproduct();
		var_dump($data);
		$this->load->view('welcome_message',$data);
	}
}
