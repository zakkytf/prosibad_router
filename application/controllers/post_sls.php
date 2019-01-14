<?php
class Post_sls extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_sls');
        $this->load->library('upload');
	}
	function index(){
		$this->load->view('v_post_news');
	}

	function simpan_post(){
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $sls=$this->input->post('sls');

				$this->m_sls->simpan_sls($jdl,$sls,$gambar);
				redirect('Admin1/berhasil');

		}else{
			redirect('post_sls');
	    }
	                 
	    }else{
			redirect('post_sls');
		}
				
	}

	function lists(){
		$x['data']=$this->m_sls->get_all_sls();
		$this->load->view('v_post_list',$x);
	}

	function view(){
		$kode=$this->uri->segment(3);
		$x['data']=$this->m_sls->get_sls_by_kode($kode);
		$this->load->view('viewbengkulu',$x);
	}

}