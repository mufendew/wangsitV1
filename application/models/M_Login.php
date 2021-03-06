<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

	//Fungsi untuk ngecek kalo udah pernah login sebelumnya atau belum
	public function cekFirsttime($uid)
	{
		$query = $this->db->query("SELECT UID_PROVIDER FROM mhs_kbmsi WHERE UID_PROVIDER = '$uid'");
		if($query->result()==null)
			return null;
		else
			return 1;
	}

	//ambil nim untuk dimasukan ke session (kasus sudah pernah login sebelumnya)
	public function GetNimDKK($uid)
	{
		$query = $this->db->query("SELECT ID, NIM, NAMA, USERNAME, GAMBAR, STATUS FROM mhs_kbmsi WHERE UID_PROVIDER = '$uid' OR NIM = '$uid'");
		$a = $query->row_array();
		return $a;
	}

	public function Login_manual($NIM)
	{
		$query = $this->db->query("SELECT USERNAME, NIM, PASSWORD FROM mhs_kbmsi WHERE NIM = '$NIM' OR USERNAME= '$NIM'");
		return $query->row();
	}
	
	public function EditAdmin($id)
		{
			$query = $this->db->query("SELECT * FROM mhs_kbmsi WHERE ID='$id'");
			return $query->row();
		}
	

}

/* End of file M_Login.php */
/* Location: ./application/models/M_Login.php */