<?php


class admin1 extends CI_Controller {

  function __construct(){
    parent::__construct();    
    
                $this->load->helper(array('url'));
  }
  public function indexadmin()
  {
    $this->load->view('admin/welcomeadmin');
  }
  
  public function viewsosialadmin()
  {
    $this->load->view('admin/Sosialisasiadmin');
  }
  public function viewprogramadmin()
  {
    $this->load->view('admin/Programadmin');
  }
  public function viewpelaksanaanadmin()
  {
    $this->load->view('admin/Pelaksanaanadmin');
  }

  public function viewpenilaianadmin()
  {
    $this->load->view('admin/Penilaianadmin');
  }
  public function berhasil()
  {
    $this->load->view('admin/berhasil');
  }

}
?>