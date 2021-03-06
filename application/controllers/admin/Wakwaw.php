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
		if (isset($_POST['nimm'])) {
			$dataa = array(
				'NAMA' => $_POST['namaa'],
				'NIM' => $_POST['nimm'],
				'USERNAME' => strtolower($_POST['usernamee']),
				'TTL' => $_POST['lahirr'], 
				'HP' => $_POST['nohp']
			);
			$this->db->where('ID', $id);
			$this->db->update('mhs_kbmsi', $dataa);	
			redirect('wkwkwkwk','refresh');		
		}
		$this->load->model('M_Login');
		$data['orang'] = $this->M_Login->EditAdmin($id);
		$this->load->view('admin/V_Edit', $data);
	}

}

/* End of file wakwaw.php */
/* Location: ./application/controllers/admin/wakwaw.php */