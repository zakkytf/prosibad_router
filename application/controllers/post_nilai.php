<?php 
 
class post_nilai extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_nilai');
                $this->load->helper(array('url'));
	}
  
/**===========================================================*/
          /** Fungsi CREATE */
  
	function tambah(){
			$this->load->view('view_create');
		}
 
	function tambah_aksi(){
		$nilai_judul = $this->input->post('nilai_judul');
		$nilai_poin = $this->input->post('nilai_poin');
		$nilai_status = $this->input->post('nilai_status');
		$nilai_tanggal = $this->input->post('nilai_tanggal');
		$nilai_oleh = $this->input->post('nilai_oleh');
		$data = array(
			'nilai_judul' => $nilai_judul,
			'nilai_poin' => $nilai_poin,
			'nilai_status' => $nilai_status,
			'nilai_tanggal' => $nilai_tanggal,
			'nilai_oleh' => $nilai_oleh
		
			);
		$this->M_nilai->input_data($data,'tbl_nilai');
		redirect('Admin1/berhasil');
	}
/**===========================================================*/
  
/**===========================================================*/
          /** Fungsi READ */
  
	  function index(){
			$data['tbl_nilai'] = $this->M_nilai->tampil_data();
			$this->load->view('view',$data);
		}
 /**===========================================================*/
 /**===========================================================*/
 
 	function edit($nilai_id){
		$where = array('nilai_id' => $id);
		$data['tbl_nilai'] = $this->M_nilai->edit_data($where,'tbl_nilai')->result();
		$this->load->view('view_edit',$data);
	}
  
	 function update(){
	 	$id = $this->input->post('nilai_id');
		$nilai_judul = $this->input->post('nilai_judul');
		$nilai_poin = $this->input->post('nilai_poin');
		$nilai_status = $this->input->post('nilai_status');
		$nilai_tanggal = $this->input->post('nilai_tanggal');
		$data = array(
			'nilai_judul' => $nilai_judul,
			'nilai_poin' => $nilai_poin,
			'nilai_status' => $nilai_status,
			'nilai_tanggal' => $nilai_tanggal,
			);
	 
		$where = array(
			'nilai_id' => $id
		);
	 
		$this->M_nilai->update_data($where,$data,'tbl_nilai');
		redirect('link/viewstatus');
	}
 /**===========================================================*/
	
 /**===========================================================*/
          /** Fungsi DELETE */
  
  function hapus($id){
		$where = array('nilai_id' => $id);
		$this->M_nilai->hapus_data($where,'tbl_nilai');
		redirect('link/viewstatus');
	}
 /**===========================================================*/
}