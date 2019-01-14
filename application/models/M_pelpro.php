<?php
class M_pelpro extends CI_Model{

	function simpan_pelpro($jdl,$pelpro,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_pelpro (pelpro_judul,pelpro_isi,pelpro_image) VALUES ('$jdl','$pelpro','$gambar')");
		return $hsl;
	}

	function get_pelpro_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_pelpro WHERE pelpro_id='$kode'");
		return $hsl;
	}

	function get_all_pelpro(){
		$hsl=$this->db->query("SELECT * FROM tbl_pelpro ORDER BY pelpro_id DESC");
		return $hsl;
	}

}