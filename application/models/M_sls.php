<?php
class M_sls extends CI_Model{

	function simpan_sls($jdl,$sls,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_sls (sls_judul,sls_isi,sls_image) VALUES ('$jdl','$sls','$gambar')");
		return $hsl;
	}

	function get_sls_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_sls WHERE sls_id='$kode'");
		return $hsl;
	}

	function get_all_sls(){
		$hsl=$this->db->query("SELECT * FROM tbl_sls ORDER BY sls_id DESC");
		return $hsl;
	}

}