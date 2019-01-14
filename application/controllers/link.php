<?php


class link extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_berita');
    $this->load->model('m_program');
    $this->load->model('m_sls');
    $this->load->model('m_pelpro');
    $this->load->model('m_nilai');
        $this->load->library('upload');
    
                $this->load->helper(array('url'));
  }
 
  public function view2(){
    $this->load->view('v_login');
  }
  public function viewsosial()
  {
     $x['data']=$this->m_sls->get_all_sls();
    $this->load->view('Sosialisasi',$x);

  }
  public function viewprogram()
  {
    $x['data']=$this->m_program->get_all_program();
    $this->load->view('Program',$x);

  }
  public function viewpelaksanaan()
  {
    $x['data']=$this->m_pelpro->get_all_pelpro();
    $this->load->view('Pelaksanaan',$x);

  }
  public function viewstatus()
  {
    $data['tbl_nilai'] = $this->m_nilai->tampil_data();
      $this->load->view('status',$data);
  }
  public function viewpengajuan()
  {
    $this->load->view('Pengajuan');
  }

}