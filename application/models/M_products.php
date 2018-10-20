<?php 

class m_products extends CI_Model {

	public function all(){
		//query semua  record di table product
		$hasil = $this->db->get('product');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();

		} else {
			return array();
		}
	}

	public function allbyuser($idx){
		$query = $this->db->query("SELECT * FROM product where seller_id = $idx");
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	public function allnotin($idx){
		//query semua  record di table product
		$query = $this->db->query("SELECT * FROM product where seller_id = $idx and acc_product = 0");
		if ($query->num_rows() > 0) {
			return $query->result();

		} else {
			return array();
		}
	}
	public function allappin($idx){
		//query semua  record di table product
		$query = $this->db->query("SELECT * FROM product where seller_id = $idx and acc_product = 1");
		if ($query->num_rows() > 0) {
			return $query->result();

		} else {
			return array();
		}
	}

	public function tampilacc(){
		$query = $this->db->query("SELECT * FROM product join seller on seller_id = id where acc_product=1");
		// $hasil = $this->db->where('konfirmasi',$konfirmasi)->limit(1)->get('produk');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}

	}

	public function find($id){
		 // Query mencari record berdasarkan ID
		// $hasil = $this->db->where('idProduk',$id)->limit(1)->get('produk');
		$query = $this->db->query("SELECT * FROM product join seller on seller_id = id where product_id = $id");
		if ($query->num_rows()>0) {
			return $query->row();
		} else {
			return array();
		}
	}

	public function findApproved($id){
		 // Query mencari record berdasarkan ID
		// $hasil = $this->db->where('idProduk',$id)->limit(1)->get('produk');
		$query = $this->db->query("SELECT * FROM product join seller on seller_id = id where id = $id and acc_product = 1");
		if ($query->num_rows()>0) {
			return $query->row();
		} else {
			return array();
		}
	}
	public function findnotApproved($idx){
		 // Query mencari record berdasarkan ID
		// $hasil = $this->db->where('idProduk',$id)->limit(1)->get('produk');
		$query = $this->db->query("SELECT * FROM product join seller on seller_id = id where id = $idx");
		if ($query->num_rows()>0) {
			return $query->row();
		} else {
			return array();
		}
	}

	public function delete($id){
		$this->db->where('product_id',$id)->delete('product');
	}

	public function deletebyseller($id){
		$this->db->where('seller_id',$id)->delete('product');
	}

	public function create($data_products){
		// Insert
		$this->db->insert('product',$data_products);
	}

	public function approvingproduct($idx){
		 // Query mencari record berdasarkan ID
		// $hasil = $this->db->where('idProduk',$id)->limit(1)->get('produk');
		// $query = $this->db->query("UPDATE product set acc_product=1 where product_id = $idx");
		// if ($query->num_rows()>0) {
		// 	return $query->row();
		// } else {
		// 	return array();
		// }
		$updateData = array(
			'acc_product'=>1
		);
		$this->db->where('product_id', $idx);
		$this->db->update('product', $updateData); 

	}

	public function queingproduct($idx){
		 // Query mencari record berdasarkan ID
		// $hasil = $this->db->where('idProduk',$id)->limit(1)->get('produk');
		$updateData = array(
			'acc_product'=>0
		);
		$this->db->where('product_id', $idx);
		$this->db->update('product', $updateData); 
	}

	public function update($id, $data_product){
			// Query
		$this->db->where('product_id',$id)->update('product', $data_product);
	}
}