<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ClientModel');
		$this->load->library('form_validation');
    }

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$data['title']="Client List";
		$data['clients']=$this->ClientModel->getClients();
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/client-list',$data);     
	}
	
	public function newClient()
	{
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$data['title']="Add New Client";
		$data['sms']="";
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/client-add',$data);
	}
	
	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('clientid','Client ID','trim|required|min_length[3]|max_length[8]');
		$this->form_validation->set_rules('fullname','Full Name','trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('email','Email','trim|required|min_length[3]|max_length[60]');
		$this->form_validation->set_rules('phone','Phone Number','trim|required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('address','Address','trim|required|min_length[1]|max_length[50]');
		$this->form_validation->set_rules('startdate','Start Date','trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('settingdate','Setting Date','trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('enddate','End Date','trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('capital','Capital','trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('rate','Rate','trim|required|min_length[1]|max_length[20]');
		//$this->form_validation->set_rules('duration','Duration','trim|required|min_length[1]|max_length[10]');
		$this->form_validation->set_rules('status','Status','trim|required|min_length[3]|max_length[10]');
		
		if($this->form_validation->run()==FALSE){
			$data['title']="Add New Client";
			$data['sms']="<span class='text-danger'></span>";
			$this->load->view('master/admin-header',$data);
			$this->load->view('master/client-add');
		}else{
			$rl= $this->ClientModel->addClient();
			$data['title'] = "Add New Client";
			if ($rl) {
				$data['sms'] = "<span class='text-info'>Data has been saved.</span>";
			}
			else{
				$data['sms'] = "<span class='text-danger'>Data has not been saved. User may already exist!</span>";
			}
			$this->load->view('master/admin-header',$data);
			$this->load->view('master/client-add',$data);
		}
	}
	
	public function editClient()
	{
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$id= $this->uri->segment(3);
		$data['clients']= $this->ClientModel->getClientById($id);
		$data['title']="Edit Client";
		$data['sms']="";
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/client-edit',$data);
	}
	
	public function edit()
	{
		$this->load->library('form_validation');
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$this->form_validation->set_rules('clientid','Client ID','trim|required|min_length[3]|max_length[8]');
		$this->form_validation->set_rules('fullname','Full Name','trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('email','Email','trim|required|min_length[3]|max_length[60]');
		$this->form_validation->set_rules('phone','Phone Number','trim|required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('address','Address','trim|required|min_length[1]|max_length[50]');
		$this->form_validation->set_rules('startdate','Start Date','trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('enddate','End Date','trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('capital','Capital','trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('rate','Rate','trim|required|min_length[1]|max_length[20]');
		//$this->form_validation->set_rules('duration','Duration','trim|required|min_length[1]|max_length[10]');
		$this->form_validation->set_rules('status','Status','trim|required|min_length[3]|max_length[10]');
		
		$id= $this->input->post('clientid');
		if($this->form_validation->run()==FALSE){
			$data['title']="Edit Client";
			$data['sms']="";
			$this->load->view('master/admin-header',$data);
			$data['clients']= $this->ClientModel->getClientById($id);
			$this->load->view('master/client-edit',$data);
		}else{
			$this->ClientModel->editClient($id);
			redirect(base_url('clients'));
		}
	}
	
	public function delete()
	{
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$id= $this->uri->segment(3);
		$this->ClientModel->deleteClient($id );
		redirect(base_url('clients'));
	}
	
	public function clientdetail($id)
	{
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$data['title']="Client Detail";
		$data['clients']= $this->ClientModel->getClientDetail($id);
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/client-detail-list',$data);
		//$this->load->view('master/client-detail-list',$data);
	}
	public function getdate()
	{
		
	}
}








