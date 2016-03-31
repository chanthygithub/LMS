<?php

class Partners extends CI_Controller{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('PartnerModel');
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
		$this->load->view("master/partner-add",$data);
	}
	public function partnerAddCon()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('partnerid','Partner Id','trim|required|min_length[3]|max_length[8]');
		$this->form_validation->set_rules('fullname','Full Name','trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('email','Email','trim|required|min_length[3]|max_length[60]');
		$this->form_validation->set_rules('phone','Phone Number','trim|required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('address','Address','trim|required|min_length[1]|max_length[50]');
		
		if($this->form_validation->run()==FALSE)
		{
			$data['title']="Add New Partner";
			$data['sms']="<span class='text-danger'></span>";
			$this->load->view('master/admin-header',$data);
			$this->load->view('master/partner-add',$data);
		}else{
			
			$rl=$this->PartnerModel->partnerAddMod();
			$data['title']="Add New Partner";
			if($rl)
			{
				$data['sms']="<span class='text-info'>Data has been saved.</span>";
			}else{
				$data['sms'] = "<span class='text-danger'>Data has not been saved. User may already exist!</span>";
			}
			$this->load->view('master/admin-header',$data);
			$this->load->view('master/partner-add',$data);
		}
	}
	public function getPartnersCon()
	{
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$data['title']="Partner Lists";
		$data['partners']=$this->PartnerModel->getPartnerMod();
		$data['partnerscapital']=$this->PartnerModel->getPartnerCapitalMod();
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/partner-list',$data);
	}
// 	public function getPartnersCapitalCon()
// 	{
// 		if($this->session->userid==false){
// 			redirect(base_url('admin/login'));
// 		}
// 		$data['title']="Capital Lists";
// 		$data['partnerscapital']=$this->CapitalModel->getPartnerCapitalMod();
// 		$this->load->view('master/admin-header',$data);
// 		$this->load->view('master/capital-list',$data);
// 	}
	public function getPartnersDetailCon()
	{
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$data['title']="Partner Lists";
		$data['partnerscapital']=$this->PartnerModel->getPartnerCapitalMod();
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/partner-detail',$data);
	}
}
