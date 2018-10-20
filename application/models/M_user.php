<?php

/**
* 
*/
class m_user extends CI_Model
{
	
	function tampil_data(){
		return $this->db->get('seller');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function all(){
		$hasil = $this->db->get('seller');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return array();
		}
	}

	function verifyAccount($email,$password,$table){
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get($table);
		return $query;
	}

	public function find($id){
		$hasil = $this->db->where('id',$id)->limit(1)->get('seller');
		if ($hasil->num_rows()>0) {
			return $hasil->row();
		} else {
			return array();
		}
	}

	public function update($id, $data_products){
		$this->db->where('id',$id)->update('seller', $data_products);
	}

	public function deleteuser($id){
		$this->db->where('id',$id)->delete('seller');
		// $this->db->where('Nd',$punyaSiapa)->delete('produk');
		// $query = $this->db->query("DELETE * FROM produk WHERE punyaSiapa=''");
		// $this->db->where('email',$email)
	}

	public function create($data_seller){
		$this->db->insert('seller',$data_seller);
	}

	public function delete($id){
		$this->db->where('id',$id)->delete('seller');
		$this->db->where('seller_id',$id)->delete('product');
	}

}