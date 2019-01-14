<?php
class Login_model extends CI_Model{
	//cek usr dan password admin
	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM admin WHERE usr='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek usr dan password bdpb
	function auth_bdpb($username,$password){
		$query=$this->db->query("SELECT * FROM bdpb WHERE usr='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

		//cek usr dan password korporat
	function auth_korporat($username,$password){
		$query=$this->db->query("SELECT * FROM korporat WHERE usr='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

}
