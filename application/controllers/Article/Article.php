<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Article');
		$this->load->library('pagination');
	}
	public function index()
	{
		// awal setting pagination
		// inti dari pagination nya di $data[allArticle], pake offset dan juga limit
		// fungsi ini bisa di copy tinggal sesuai per_page, total row, base_url 
		$this->config->load('Custom_Halaman',TRUE);

		//ada di folder config, khusus materialize
		$config = $this->config->item('Custom_Halaman');

		// supaya uri segmentnya jadi halaman pada saat itu
		$config['use_page_numbers'] = TRUE; 

		$config['base_url'] = base_url().'article';
		$config['total_rows'] = $this->db->get('article_article')->num_rows();
		$config['per_page'] = 8;
		if($this->uri->segment(2)==null){
			$index =0;
		}else{
			$index = $this->uri->segment(2)*$config['per_page']-$config['per_page'];
		}

		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		//akhir setting pagination

		$data['b'] = 0;
		$data['allArticle']= $this->M_Article->GetArticleAll($config['per_page'],$index);
		$this->load->view('Article/V_Index',$data);
	}

	public function Detail()
	{
		$username = $this->uri->segment(1);
		$slug = $this->uri->segment(2);
		$data['vslug'] = $slug;
		$data['detail'] = $this->M_Article->Read_Article_Single($slug,$username);
		
		$data['recent'] = $this->M_Article->GetRecent();
		
		$data['detailcomment'] = $this->M_Article->GetCommentByArticle($slug);

		//kondisi kalo belom login, kalo ganti kode ini, yang di view juga di perhatikan, karena banyak variable session di VIEW nya
		if (!isset($_SESSION['DataProfile'])) {
			$_SESSION['DataProfile'] = null;
		}
		// can edit if username sama
		if ($_SESSION['DataProfile']['USERNAME']==$username) {
			$data['edit'] = '<div class="card"><a href="'.base_url().'article/My/edit/'.$slug.'" class="btn btn-large green" style="width: 100%;">Edit this Post</a></div>';
		}
		else{
			$data['edit']= null;
		}

		// can komen if username exist
		if (isset($_SESSION['DataProfile'])) {
			$data['komen'] = '
			<textarea name="komen-artikel" id="summernote"></textarea>
			<div class="card">
			<button name="tanggapi" class="btn wangsit-color" style="width: 100%;">Beri Tanggapan</button>
			</div>';
		} else {
			$data['komen']=null;
		}
		
		// Kalo ngga ada datanya dia bakal nampilin not found
		if ($data['detail']==null) {
			redirect('','refresh');
		}
		else{
			$this->load->view('Article/V_Detail_Article', $data, FALSE);
		}				
	}
	public function kategori()
	{
		$kategori = $this->uri->segment(2);
		switch ($kategori) {
			case 'General':
			$a = 'General';
			$data['b'] = 1;
			break;
			case 'Akademik':
			$a = 'Akademik';
			$data['b'] = 2;
			break;
			case 'Review':
			$a = 'Review';
			$data['b'] = 3;
			break;
			
			
			default:
			redirect('article','refresh');
			$a= 'wakwaw';
			break;
		}
		$this->config->load('Custom_Halaman',TRUE);
		$config = $this->config->item('Custom_Halaman');
		$config['use_page_numbers'] = TRUE; 
		$config['base_url'] = base_url().'article'.'/'.$a;
		$config['total_rows'] = $this->db->get_where('article_article', array('KATEGORI' => $a))->num_rows();
		$config['per_page'] = 8;
		if($this->uri->segment(3)==null){
			$index =0;
		}else{
			$index = $this->uri->segment(3)*$config['per_page']-$config['per_page'];
		}
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		
		//akhir setting pagination
		$data['allArticle']= $this->M_Article->GetArticleKategori($config['per_page'],$index,$a);
		$this->load->view('Article/V_Index',$data);
	}
}

/* End of file TL.php */
/* Location: ./application/controllers/Article/TL.php */