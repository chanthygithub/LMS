<?php

class Capitals extends CI_Controller{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('CapitalModel');
		$this->load->library('form_validation');
	}
	public function index()
	{
		if ($this->session->userid==false) {
			redirect(base_url('admin/login'));
			//$this->load->view('master/login');
		}
		$data['title']="Add New Partner LMS";
		$this->load->view("master/admin-header",$data);
		$this->load->view("master/capital-add",$data);
	}
	public function partnerCapitalAddCon()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('partnercapitalid','Partner Capital Id','trim|required|min_length[1]|max_length[8]');
		$this->form_validation->set_rules('capital','Capital','trim|required|min_length[1]|max_length[20]');
		$this->form_validation->set_rules('datein','Date In','trim|required|min_length[1]|max_length[60]');
		$this->form_validation->set_rules('moneytype','Money Type','trim|required|min_length[1]|max_length[15]');
		$this->form_validation->set_rules('description','Description','trim|required|min_length[1]|max_length[50]');
		
		if($this->form_validation->run()==FALSE)
		{
			$data['title']="Add New Partner Capital";
			$data['sms']="<span class='text-danger'></span>";
			$this->load->view('master/admin-header',$data);
			$this->load->view('master/capital-add',$data);
		}else{
			
			$rl=$this->CapitalModel->partnerCapitalAddMod();
			$data['title']="Add New Partner Capital";
			if($rl)
			{
				$data['sms']="<span class='text-info'>Data has been saved.</span>";
			}else{
				$data['sms'] = "<span class='text-danger'>Data has not been saved. User may already exist!</span>";
			}
			$this->load->view('master/admin-header',$data);
			$this->load->view('master/capital-add',$data);
		}
	}
	public function getPartnersCapitalCon()
	{
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$data['title']="Capital Lists";
		$data['partnerscapital']=$this->CapitalModel->getPartnerCapitalMod();
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/capital-list',$data);
	}
}
