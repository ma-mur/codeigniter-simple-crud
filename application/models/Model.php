<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Model extends CI_Model{
	
	public function getdata(){
		return $query=$this->db->get('data')->result();
	}

	public function getid($id){
		$this->db->where('id',$id);
		return $this->db->get('data')->result();
	}

	public function insert($data){
		return $this->db->insert('data',$data);
		
	}

	public function update($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('data',$data);
	}

	public function delete($id){
		$this->db->where('id',$id);
		return $this->db->delete('data');
	}

}