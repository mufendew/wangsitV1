<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kbmsi extends CI_Model {

	public function getBDayData()
	{
		$ddate = date("m-d");
		$q = $this->db->query("SELECT NAMA, GAMBAR, TTL FROM mhs_kbmsi WHERE TTL LIKE '%$ddate'");
		if ($q->num_rows() > 0) {
			return $q->result();
		} else {
			return array();
		}
	}
	public function getDetailMahasiswa($username)
		{
			$query = $this->db->query("SELECT NAMA, GAMBAR, NIM, USERNAME FROM mhs_kbmsi WHERE USERNAME='$username'");
			return $query->row();
		}
	public function cekUsername($username)
	{
	    $this->db->where('USERNAME',$username);
	    $query = $this->db->get('mhs_kbmsi');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}
	public function getID($username)
	{
		$query = $this->db->query("SELECT ID FROM mhs_kbmsi where USERNAME = '$username'");
		return $query->row()->ID;
	}
		public function getStatus($username)
	{
		$query = $this->db->query("SELECT STATUS FROM mhs_kbmsi where USERNAME = '$username'");
		return $query->row()->STATUS;
	}
	public function getArticleUser($jumlah, $offset, $username)
	{
		$query = $this->db->query("SELECT JUDUL, TANGGAL, USERNAME, DESKRIPSI, SLUG FROM article_article JOIN mhs_kbmsi on PENULIS = ID where USERNAME = '$username' LIMIT $jumlah OFFSET $offset ");
		return $query->result();
	}

}

/* End of file M_Kbmsi.php */
/* Location: ./application/models/M_Kbmsi.php */ ?>