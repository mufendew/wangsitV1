<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Kbmsi');
		if($this->session->userdata('login')==false){
			redirect('');
		} elseif ($this->M_Kbmsi->getStatus($_SESSION['DataProfile']['USERNAME'])==0) {
			redirect($_SERVER['HTTP_REFERER']);
		}
		$this->load->model('M_Article');
	}

	public function index()
	{
		$this->load->view('V_MyTl');		
	}
	public function post()
	{
		if($this->input->post('judul')){

			$judul = $this->input->post('judul');
			$katagori = $this->input->post('katagori');
			$opsi = $this->input->post('opsi');
			$artikel = $this->input->post('artikel');
			$desc = $this->input->post('desc');

			$username = $_SESSION['DataProfile']['USERNAME'];
			
			$slug = $this->M_Article->Insert_Article($judul, $katagori, $opsi, $artikel, $desc);
			redirect($username.'/'.$slug ,'refresh');

		}
		else{
			$this->load->view('Article/V_Insert');	
		}
	}
	public function delete($slug)
	{
		$this->M_Article->Delete_Article($slug);
		redirect('article','refresh');
	}
	public function edit($slug)
	{
		$detail = $this->M_Article->Read_Article_Single($slug, $_SESSION['DataProfile']['USERNAME']);
		if ($detail==null) {
			redirect('article','refresh');
		}
		else{
			$data['slug'] = $slug;
			$data['JUDUL'] =  $detail->JUDUL;
			$data['DESC'] = $detail->DESKRIPSI;

			if ($detail->KATEGORI == "General") {
				$data['b'] = "General";
			}elseif ($detail->KATEGORI == "Akademik") {
				$data['b'] = "Akademik";
			}elseif ($detail->KATEGORI == "Review") {
				$data['b'] = "Review";
			}else{
				$data['b'] = null;
			}

			if($detail->SHAREABLE=="PRVT"){
				$data['SHAREABLE'] =  'checked="checked"';
			}else{
				$data['SHAREABLE'] = null;
			}

			$data['ARTIKEL'] = $detail->CONTENT;
			$this->load->view('Article/V_Edit', $data);
		}
		if($this->input->post('artikel')){

			$katagori = $this->input->post('katagori');
			$opsi = $this->input->post('opsi');
			$artikel = $this->input->post('artikel');
			$desc = $this->input->post('desc');
			
			$this->M_Article->Edit_Article($slug, $katagori, $opsi, $artikel, $desc);
			redirect($_SESSION['DataProfile']['USERNAME'].'/'.$slug ,'refresh');

		}
	}

	public function insertComment(){
		$username = $this->uri->segment(4);
		$slug = $this->uri->segment(5);
		if (isset($_POST["tanggapi"])) {
			$articleid = $this->input->post('articleID');
			$comment = $this->input->post('komen-artikel');
			$userid = $this->session->userdata('DataProfile')['ID'];
			$tgl = date("Y-m-d H:i:s");

			$this->M_Article->InsertComment($articleid,$userid,$comment,$tgl);
			redirect($username.'/'.$slug ,'refresh');
		}
	}

	public function deleteComment(){
		$username = $this->uri->segment(4);
		$slug = $this->uri->segment(5);
		$commentid = $this->uri->segment(6);
		$this->M_Article->DeleteComment($commentid);
		redirect($username.'/'.$slug ,'refresh');
	}
}

/* 
isi controller :
- syarat masuk ke controoler ini harus dah login sama status nya udah terverifikasi
- CRUD article pribadi

NOTES FOR NEXT PERIODE WKWKWKWK DI DEVELOP OLEH 

backend :
MOHAMMAD ARKAN MUFADHO
165150401111075
IG : @mufadho

Frontend :
muhammad naufal andika natsir putra
175150400111040
line : focxyou
 */
// 
/* End of file MyTl.php */
/* Location: ./application/controllers/Article/MyTl.php */