<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class conLogin extends CI_Controller {
	public function index()
	{
		$this->display('login/vLogin');
	}
	private function display ($view, $data = "")
	{
		$connected = $this->session->userdata("current_user") != "";
		$menu_data = array(
				"connected" => $connected);
		$this->load->view('template/header', $menu_data);
		// load content
		if ($data == "") {
			$this->load->view($view);
		}
		else {
			$this->load->view($view, $data);
		}
		//$this->load->view('template/footer');
	}
	public function performLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|callback_check_database');
		if($this->form_validation->run()==FALSE)
		{
			$this->display('login/vLogin');
		}else
		{
			redirect('conLogin/performlogout');
		}
	}
	public function check_database($password)
	{
		$this->load->model('modUsers');
		$username=$this->input->post('username');
		$result=$this->modUsers->login($username,$password);
		if($result)
		{
			$sess_array=array();
			foreach($result as $row)
			{
				$sess_array=array(
						'userid'=>$row->userid,
						'username'=>$row->username
				);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return TRUE;
		}else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
	public function performlogout()
	{
        $this->session->unset_userdata("current_user");
        redirect('conLogin/adminMenu');
	}
	public function login()
	{
		$connected = $this->session->userdata("current_user") != "";
		if ($connected) {
			redirect('/postMessage');
		}
		else {
			$this->display("login");
		}
	}
	public function logout()
	{
		//$this->display("home/vLogout");
	}
	public function adminMenu()
	{
		$this->display("admintemplate/menu");
	}
	public function createUser()
	{
		$this->display("users/createUser");
	}
	public function performCreateUser()
	{
		$this->load->model('modUsers');
		$this->load->library("form_validation");
		$this->form_validation->set_rules('userid','Userid','trim|required');
		$this->form_validation->set_rules('fname','Firstname','trim|required');
		$this->form_validation->set_rules('lname','Lastname','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('status','Status','trim|required');
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('users/createUser');
		}else{
			$data=array(
				'userid'=>$this->input->post('userid'),
				'firstname'=>$this->input->post('fname'),
				'lastname'=>$this->input->post('lname'),
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
				'email'=>$this->input->post('email'),
				'address'=>$this->input->post('address'),
				'status'=>$this->input->post('status')		
			);
			$this->modUsers->createUser($data);
			$data['message']="Data Inserted Successfully";
			$this->load->view('users/createUser',$data);
			redirect('conLogin/performlogin');
			}
		}
		
	public function editConUser()
	{
// 		$res['error']="";
// 		$res['success']="";
		$this->load->model('modUsers');
// 		$this->load->library("form_validation");
// 		$this->form_validation->set_rules('userid','Userid','trim|required');
// 		$this->form_validation->set_rules('fname','Firstname','trim|required');
// 		$this->form_validation->set_rules('lname','Lastname','trim|required');
// 		$this->form_validation->set_rules('username','Username','trim|required');
// 		$this->form_validation->set_rules('password','Password','trim|required');
// 		$this->form_validation->set_rules('email','Email','trim|required');
// 		$this->form_validation->set_rules('address','Address','trim|required');
// 		$this->form_validation->set_rules('status','Status','trim|required');
// 		$id = $this->input->post('userid');
// 			if($this->form_validation->run()==FALSE)
// 			{
// 				$data['users'] = $this->modUsers->getUserbyId($id);
// 				$this->load->view('users/editUser',$data);
// 			}else{
// 				$this->modUsers->editModUser($id);
// 			}
		$id =  $this->uri->segment(3);
		$data['users'] = $this->modUsers->getUserById($id);
		$this->load->view('users/editUser',$data);
		}
	public function performConEditUser()
	{
		$this->load->model('modUsers');
		$this->load->library("form_validation");
		$this->form_validation->set_rules('userid','Userid','trim|required');
		$this->form_validation->set_rules('fname','Firstname','trim|required');
		$this->form_validation->set_rules('lname','Lastname','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('status','Status','trim|required');
		$id = $this->input->post('userid');
		
		if ($this->form_validation->run()==FALSE) {
			$data['users'] = $this->modUsers->getUserById($id);
			$this->load->view('users/listUser',$data);
		}
		else{
			$this->modUsers->editModUser($id);
			redirect(base_url('conLogin/listUser'));
		}
		
	}
	public function listUser()
	{
		$this->load->library('table');
		$this->load->helper('html');
		$this->load->model('modUsers');
		//$data=$this->modUsers->general();
		$data['query']=$this->modUsers->listUser();
		
		$this->load->view('users/listUser',$data);
		$this->display("admintemplate/menu");
	}
	public function deleteConUser()
	{
		$this->load->model('modUsers');
		//$id = $this->uri->segment(4);
		//$userid=0;
// 		$this->load->library('table');
// 		$this->load->helper('html');
// 		$this->load->model('modUsers');
// 		if($id>0)
// 		{
// 			$this->load->model('modUsers');
// 			$this->modUsers->deleteModUser($userid);
// // 		}
// 		//$data = $this->modUsers->general();
// 		$data['query']=$this->modUsers->listUser();
// 		$this->load->view('users/listUser',$data);
// 		$this->load->model('modUsers');
// 		$where = array('userid' => $userid);
// 		$this->modUsers->deleteModUser('users',$where);
// 		$id = $this->uri->segment(3);
// 		$this->modUsers->deleteModUser($id);
		$id = $this->uri->segment(3);
		$this->modUsers->deleteModUser($id);
		redirect(base_url('conLogin/listUser'));
	}
	public function decodePass()
	{
		$encrypted_string = 'APANtByIGI1BpVXZTJgcsAG8GZl8pdwwa84';
		$plaintext_string = $this->encrypt->decode($encrypted_string);
		echo $plaintext_string;
	}
	
}
