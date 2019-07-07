<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Biodata extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}
	
	public function index(){
		$data['data']=$this->Model->getdata();
		$this->load->view('index',$data);
	}

	public function add(){
		$this->load->view('add');
	}

	public function addbio(){
		$data = array(
			'first_name' => $this->input->post('first'),
			'last_name' => $this->input->post('last'),
			'address' => $this->input->post('address'),
			'description' => $this->input->post('description')
		);
		$this->Model->insert($data);
		$this->session->set_flashdata('success', 'Add');
		redirect('Biodata');
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['data']=$this->Model->getid($id);
		$this->load->view('edit',$data);
	}

	public function editbio(){
		$id = $this->uri->segment(3);
		$data = array(
			'first_name' => $this->input->post('first'),
			'last_name' => $this->input->post('last'),
			'address' => $this->input->post('address'),
			'description' => $this->input->post('description')
		);
		$this->Model->update($data,$id);
		$this->session->set_flashdata('success','Edit');
		redirect('Biodata');
	}

	public function del(){
		$id = $this->uri->segment(3);
		$this->Model->delete($id);
		$this->session->set_flashdata('success','Delete');
		redirect('Biodata');
	}
}