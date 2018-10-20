<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//load model -> model_products
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_user');
		$this->load->model('m_products');
	}

	public function index()
	{
		// $data['users'] = $this->m_user->all();
		$this->load->view('market/v_adminlogin');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		$query = $this->m_user->verifyAccount($email,$pass,'seller');
		if($query->num_rows() > 0){
			$row = $query->row();
			$id = $row->id;
			if ($id == '1') {
				$data['users'] = $this->m_user->all();
				$this->load->view('market/v_admindashboard', $data);
			} else {
				$this->load->view('market');
			}
		}else{
			$this->load->view('market');
		}
	}

	// public function index()
	// {
	// 	$data['users'] = $this->m_user->all();
	// 	$this->load->view('market/v_admindashboard', $data);
	// }

	public function addseller()
	{
		$this->load->view('market/v_addseller');
	}

	public function editseller($id_seller)
	{
		$data['user'] = $this->m_user->find($id_seller);
		$this->load->view('market/v_editseller', $data);
	}

	public function processeditseller($id_seller)
	{
		$name = $this->input->post('newfullname');
		$email = $this->input->post('newemail');
		$phone = $this->input->post('newphone');
		$line = $this->input->post('newline');
		$instagram = $this->input->post('newinstagram');
		$whatsapp = $this->input->post('newwa');
		$how_to_order = $this->input->post('newhto');
		
		$data_product = array(
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'line' => $line,
				'instagram' => $instagram,
				'whatsapp' => $whatsapp,
				'how_to_order' => $how_to_order
			);
			$this->m_user->update($id_seller, $data_product);
			redirect (base_url("market/c_admin/"));
	}

	public function addprocess(){
		$name = $this->input->post('newfullname');
		$email = $this->input->post('newemail');
		$password = $this->input->post('newpassword');
		$phone = $this->input->post('newphone');
		$data_seller = array(
			'name' => $name,
			'email' => $email,
			'password' => $password,
			'phone' => $phone
		);
		$this->m_user->create($data_seller);
		redirect(base_url("market/c_admin"));
	}

	public function addproduct($idx){
		$sellername = $this->input->post('sellername');
		$namaproduk = $this->input->post('namaProduk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$gambar = $this->input->post('userfile');

		$config['upload_path']          = './assets/media/uploads/products/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size'] 			= '1000000';
		$config['max_width'] 			= '1024000';
		$config['max_height'] 			= '768000';
			// $config['remove_spaces']		= true;

		$this->load->library('upload', $config);
		$this->upload->do_upload();

		$gambar = $this->upload->data();
		$data_product = array(
			'product_name' => $namaproduk,
			'description' => $deskripsi,
			'price' => $harga,
			'product_img' => 'assets/media/uploads/products/'.$gambar['file_name'],
			// 'product_img' => 'assets/media/uploads/products/'.$idx.' - '.$sellername.' Products',
			'seller_id' => $idx
		);

		$this->m_products->create($data_product);
		redirect (base_url("market/c_admin/manageseller/".$idx));
	}

		// $this->m_products->create($data_seller,$id);
		// redirect(base_url("market/c_admin"));



	public function deleteprocess($idx){
		$this->m_user->delete($idx);
		$this->m_products->deletebyseller($idx);
		redirect(base_url("market/c_admin"));
	}

	public function deleteproduct($idx, $id_seller){
		$this->m_products->delete($idx);
		redirect(base_url("market/c_admin/manageseller/".$id_seller));
	}

	public function approvingproduct($idx, $id_seller){
		$this->m_products->approvingproduct($idx);
		redirect(base_url("market/c_admin/manageseller/".$id_seller));
	}

	public function queingproduct($idx, $id_seller){
		$this->m_products->queingproduct($idx);
		redirect(base_url("market/c_admin/manageseller/".$id_seller));
	}

	public function manageseller($id)
	{	
		// $data['products'] = $this->m_products->findnotApproved($id);
		$data['productsnotacc'] = $this->m_products->allnotin($id);
		$data['productsacc'] = $this->m_products->allappin($id);
		$data['user'] = $this->m_user->find($id);
		$this->load->view('market/v_manageseller',$data);
	}

	public function editproduct($idx, $id_seller){
		$data['product'] = $this->m_products->find($idx);
		$data['id_seller'] = $id_seller;
		$this->load->view('market/v_editproduct', $data);
	}

	public function processupdateproduct($idx, $id_seller){
		$namaproduk = $this->input->post('newfullname');
		$deskripsi = $this->input->post('newemail');
		$harga = $this->input->post('newphone');
		$gambar = $this->input->post('userfile');

		// $config['upload_path']          = './assets/media/uploads/products/';
		// $config['allowed_types']        = 'jpg|png';
		// $config['max_size'] 			= '1000000';
		// $config['max_width'] 			= '1024000';
		// $config['max_height'] 			= '768000';
		// 	// $config['remove_spaces']		= true;

		// $this->load->library('upload', $config);
		// $this->upload->do_upload();

		// $gambar = $this->upload->data();
		// $data_product = array(
		// 	'product_name' => $namaproduk,
		// 	'description' => $deskripsi,
		// 	'price' => $harga,
		// 	'product_img' => 'assets/media/uploads/products/'.$gambar['file_name'],
		// 	'seller_id' => $idx
		// );

		// $this->m_products->create($data_product);
		// redirect (base_url("market/c_admin/manageseller/".$id_seller));
		if ($_FILES['userfile']['name'] != '') {

				//form submit dengan gambar diisi
				//load uploading file library
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size'] 			= 1000000;
			$config['max_width'] 			= 1024000;
			$config['max_height'] 			= 768000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload()){
				$data['product'] = $this->m_products->find($idx);
				$data['id_seller'] = $id_seller;
				$this->load->view('market/v_editproduct', $data);
			} else {
					// eksekusi query insert
				$gambar = $this->upload->data();
				$data_product = array(
					'product_name' => $namaproduk,
					'description' => $deskripsi,
					'price' => $harga,
					'product_img' => 'assets/media/uploads/products/'.$gambar['file_name'],
					'seller_id' => $id_seller
				);
				$this->m_products->update($idx,$data_product);
				echo "Masuk dengan foto";
				redirect (base_url("market/c_admin/manageseller/".$id_seller));
			}
		} else {
				// Form submit dengan gambar kosong
			$data_product = array(
				'product_name' => $namaproduk,
				'description' => $deskripsi,
				'price' => $harga,
				'seller_id' => $id_seller
			);
			$this->m_products->update($idx,$data_product);
			echo "Masuk tanpa foto";
			redirect (base_url("market/c_admin/manageseller/".$id_seller));
		}
	}



}
