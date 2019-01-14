<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
        $this->load->library('upload');
    }
	public function index()
	{
		$x['data']=$this->m_berita->get_all_berita();
		$this->load->view('welcome_message',$x);
	}
}
