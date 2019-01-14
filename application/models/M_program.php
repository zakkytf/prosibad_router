<?php
class M_program extends CI_Model{

	function simpan_program($jdl,$program,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_program (program_judul,program_isi,program_image) VALUES ('$jdl','$program','$gambar')");
		return $hsl;
	}

	function get_program_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_program WHERE program_id='$kode'");
		return $hsl;
	}

	function get_all_program(){
		$hsl=$this->db->query("SELECT * FROM tbl_program ORDER BY program_id DESC");
		return $hsl;
	}

}