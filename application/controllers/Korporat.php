<?php


class Korporat extends CI_Controller {

  function __construct(){
   parent::__construct();
    $this->load->model('m_berita');
    $this->load->model('m_program');
    $this->load->model('m_sls');
    $this->load->model('m_pelpro');
    $this->load->model('m_nilai');
    $this->load->model('m_files');
        $this->load->library('upload');
                $this->load->helper(array('url'));
  }
  public function indexcorp()
  {
    $x['data']=$this->m_berita->get_all_berita();
    $this->load->view('Korporat/welcomecorporat',$x);
    
  }
  public function view1corp()
  {
    $this->load->view('Korporat/viewbengkulucor');
  }
  public function viewsosialcorp()
   {
    $x['data']=$this->m_sls->get_all_sls();
    $this->load->view('Korporat/Sosialisasicorp',$x);
    
  }
  public function viewprogramcorp()
   {
    $x['data']=$this->m_program->get_all_program();
    $this->load->view('Korporat/programcorp',$x);
    
  }
  public function viewpelaksanaancorp()
   {
    $x['data']=$this->m_pelpro->get_all_pelpro();
    $this->load->view('Korporat/Pelaksanaancorp',$x);
    
  }
  public function viewstatuscorp()
  {
    $data['tbl_nilai'] = $this->m_nilai->tampil_data();
      $this->load->view('Korporat/statuscorp',$data);
  }
  public function viewpengajuancorp()
{
    
    $x['data']=$this->m_files->get_all_files();
    $this->load->view('Korporat/pengajuancorp',$x);
  }
}
?>