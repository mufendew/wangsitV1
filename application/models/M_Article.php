<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Article extends CI_Model {

	//untuk masukin data ke table article_article terus ada return value nya berupa slug, supaya abis insert bisa redirect ke url articlenya
	public function Insert_Article($judul, $katagori, $opsi, $artikel, $desc)
	{
		// fungsi tambahan untuk biki SLUG
		// slug itu digunakan nanti urlnya contohnya jadi "blabla.com/judul-nya-jadi-begini"
		// supaya ramah SEO
		$text = $judul;
	    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
	    $text = trim($text, '-');
	    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	    $text = strtolower($text);
	    $text = preg_replace('~[^-\w]+~', '', $text);
	    $text = $text."-".substr(md5(microtime()),rand(0,26),5);
	    //akhir dari fungsi slug

	    $object = array(
			'SLUG' => $text,
			'JUDUL' => $judul,
			'PENULIS' => $this->session->userdata('DataProfile')['ID'],
			'KATEGORI' => $katagori,
			'SHAREABLE' => $opsi,
			'TANGGAL' => date("Y-m-d H:i:s"),
			'DESKRIPSI' => $desc,
			'CONTENT' => $artikel
		);

		$this->db->insert('article_article', $object);

		return $text;
	}
	public function Read_Article_Single($slug,$username)
	{
		$query = $this->db->query("SELECT JUDUL, TANGGAL, CONTENT, USERNAME, DESKRIPSI, GAMBAR, NAMA, SHAREABLE  FROM article_article JOIN mhs_kbmsi on PENULIS = ID where SLUG='$slug' AND USERNAME = '$username'");
		return $query->row();
	}
	public function Delete_Article($slug)
	{
		$user = $this->session->userdata('DataProfile')['ID'];
		$query = "DELETE FROM article_article WHERE PENULIS='$user' && SLUG='$slug'";
		$this->db->query($query);
	}
	public function Edit_Article($slug ,$katagori, $opsi, $article, $desc)
	{
		$this->db->where('SLUG', $slug);
		$object = array(
			'KATEGORI' => $katagori,
			'SHAREABLE' => $opsi,
			'DESKRIPSI' => $desc,
			'CONTENT' => $article 
		);
		$this->db->update('article_article', $object);
	}

	//offset dan jumlah untuk keperluan pagination
	public function GetArticleAll($jumlah,$offset)
	{
		$query = $this->db->query("SELECT JUDUL, TANGGAL, USERNAME, DESKRIPSI, SLUG FROM article_article JOIN mhs_kbmsi on PENULIS = ID where SHAREABLE IS NULL ORDER BY ID_ARTICLE DESC LIMIT $jumlah OFFSET $offset ");
		return $query->result();
	}
	public function GetRecent()
	{
		$query = $this->db->query("SELECT JUDUL, TANGGAL, USERNAME, SLUG FROM article_article JOIN mhs_kbmsi on PENULIS = ID where SHAREABLE IS NULL ORDER BY ID_ARTICLE DESC LIMIT 5");
		return $query->result();
	}
	public function GetArticleKategori($jumlah,$offset,$kategori)
	{
		$query = $this->db->query("SELECT JUDUL, TANGGAL, USERNAME, DESKRIPSI, SLUG FROM article_article JOIN mhs_kbmsi on PENULIS = ID where SHAREABLE IS NULL AND KATEGORI = '$kategori' ORDER BY ID_ARTICLE DESC LIMIT $jumlah OFFSET $offset ");
		return $query->result();
	}

}

/* End of file M_Article.php */
/* Location: ./application/models/M_Article.php */