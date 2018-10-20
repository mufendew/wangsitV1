<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {
	function verifyAccount($email,$password,$table){
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		$query = $this->db->get($table);
		return $query;
	}
}
?>