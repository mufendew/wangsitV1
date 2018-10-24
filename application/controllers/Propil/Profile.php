<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Kbmsi');
		$this->load->library('pagination');
	}

	public function index()
	{
		if($this->session->userdata('login') == true)
		{
			$json = file_get_contents('http://api.kbmsi.or.id/scrapping/scrapppengumumanfilkom.php');
			$a = json_decode($json);

			$arraay = null;
			for ($i=0; $i < 5; $i++) { 
				$arraay[] = $a[$i];
			}
			if ($a==null) {
				$arraay = null;
			}
			if ($this->M_Kbmsi->getStatus($_SESSION['DataProfile']['USERNAME'])==0) {
				$data['belumAktivasi'] = '<div class="col s12" style="margin-top: 25px;">
			        <div class="chip red white-text" style="width: 100%; border-radius: 5px;">
			        	Akun anda belum teraktivasi, silakan menguhubungi staff P2S untuk melakukan aktivasi 
			        </div>
			    </div>';
			    $data['belumAktivasibuttonDisable'] = 'disabled';
			}else {
				$data['belumAktivasi'] = null;
				$data['belumAktivasibuttonDisable'] = null;
			}
			
			$data['information'] = $arraay;
			$data['userdataa'] = $this->session->userdata();
			$data['sbds'] = $this->M_Kbmsi->getBDayData();
			$this->load->view('Profile/V_Profile',$data);
		}
		else
		{
			redirect($_SERVER['HTTP_REFERER']);
		}		
	}
	public function Profil_Orang()
	{
		$username = $this->uri->segment(1);

		//kondisi kalo belom login, kalo ganti kode ini, yang di view juga di perhatikan, karena banyak variable session di VIEW nya
		if (!isset($_SESSION['DataProfile'])) {
			$_SESSION['DataProfile'] = null;
		}
		
		if($this->M_Kbmsi->cekUsername($username)){
			
			// awal setting pagination
			// inti dari pagination nya di $data[allArticle], pake offset dan juga limit
			// fungsi ini bisa di copy tinggal sesuai per_page, total row, base_url 
			$this->config->load('Custom_Halaman',TRUE);

			//ada di folder config, khusus materialize
			$config = $this->config->item('Custom_Halaman');

			// supaya uri segmentnya jadi halaman pada saat itu
			$config['use_page_numbers'] = TRUE; 
			$penulis = $this->M_Kbmsi->getID($username);

			$config['base_url'] = base_url().'/'.$username;
			$config['total_rows'] = $this->db->get_where('article_article', array('PENULIS' => $penulis))->num_rows();
			$config['per_page'] = 5;
			if($this->uri->segment(2)==null){
				$index =0;
			}else{
				$index = $this->uri->segment(2)*$config['per_page']-$config['per_page'];
			}

			$this->pagination->initialize($config);
			$data['pagination']=$this->pagination->create_links();
			//akhir setting pagination

			if ($username==$_SESSION['DataProfile']['USERNAME']) {
				$data['canEdit'] = '<div class="card"><a href="'.base_url().'Article/My/post" class="btn btn-large wangsit-color" style="width: 100%;"><i class="material-icons right">add</i>Add Article</a>
					</div>';
			}
			else{
				$data['canEdit'] = null;
			}

			$data['Article'] = $this->M_Kbmsi->getArticleUser($config['per_page'],$index,$username);


			$data['user'] = $this->M_Kbmsi->getDetailMahasiswa($username);
			$this->load->view('Profile/V_Profile_Orang', $data, FALSE);
		}
		else
			redirect('','refresh');
		

	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */