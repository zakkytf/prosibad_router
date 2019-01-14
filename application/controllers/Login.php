<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->login_model->auth_admin($username,$password);
        $cek_bdpb=$this->login_model->auth_bdpb($username,$password);
        $cek_korporat=$this->login_model->auth_korporat($username,$password);
        if($cek_admin->num_rows() > 0){ //jika login sebagai admin
						$data=$cek_admin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['usr']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');

		         }else{ //akses admin
		            $this->session->set_userdata('akses','2');
								$this->session->set_userdata('ses_id',$data['nip']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');
		         }

        }else if($cek_bdpb->num_rows() > 0){
							$data=$cek_bdpb->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','2');
							$this->session->set_userdata('ses_id',$data['usr']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('page');
					}else if($cek_korporat->num_rows() > 0){
							$data=$cek_korporat->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['usr']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('page');  // jika username dan password tidak ditemukan atau salah
					}else{		$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
