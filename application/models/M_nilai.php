<?php 
 
class M_nilai extends CI_Model{
  
/**===========================================================*/
          /** Fungsi CREATE */
  
function input_data($data,$table){
    $this->db->insert($table,$data);
  }
/**===========================================================*/
  
/**===========================================================*/
          /** Fungsi READ */
  
  function tampil_data(){
      
      $this->db->from('tbl_nilai');  

      $query = $this->db->get();
    return $query->result();
  }
  function edit_data($where,$table){    
    return $this->db->get_where($table,$where);
  }
 
  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  } 
 /**===========================================================*/
 
 /**===========================================================*/
          /** Fungsi DELETE */
  
   function hapus_data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
 /**===========================================================*/
  
}