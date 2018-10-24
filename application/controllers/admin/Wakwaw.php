<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wakwaw extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('adminnn')==false){
			redirect('');
		}
	}

	public function index()
	{
		if (isset($_GET['deaktivasi'])) {
			$this->db->set('STATUS', 0);
			$this->db->where('ID', $_GET['deaktivasi']);
			$this->db->update('mhs_kbmsi');
			redirect('wkwkwkwk');
		}
		if (isset($_GET['aktivasi'])) {
			$this->db->set('STATUS', 1);
			$this->db->where('ID', $_GET['aktivasi']);
			$this->db->update('mhs_kbmsi');
			redirect('wkwkwkwk');
		}
		$data['mhs'] = $this->db->get('mhs_kbmsi')->result();
		$this->load->view('admin/V_Admin',$data);
	}
	public function edit($id)
	{
		$this->load->model('M_Login');
		$data['orang'] = 
		$this->load->view('V_Edit', $data, FALSE);
	}

}

/* End of file wakwaw.php */
/* Location: ./application/controllers/admin/wakwaw.php */