<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_index extends CI_Controller {


	public function __construct(){
		parent::__construct();
		//load model -> model_products
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_products');
	}

	public function index()
	{	
		$data['products'] = $this->m_products->tampilacc();
		$this->load->view('market/template/v_header');
		$this->load->view('market/v_index',$data);
	}

	public function product($id)
	{
		// $this->load->view('market/template/v_header');
		$data['product'] = $this->m_products->find($id);
		$this->load->view('market/v_product',$data);
	}
}
