<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//load model -> model_products
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_user');
		$this->load->model('m_products');
	}

	public function index()
	{
		// $this->load->view('market/template/v_header');
		// $data['user'] = $this->m_user->allbyuser($id);
		$this->load->view('market/v_dashboard');
	}
}
