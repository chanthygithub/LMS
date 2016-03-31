<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
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
            if ($this->session->userid==false) {
                redirect(base_url('admin/login'));
            }
            $data['title'] = "User List";
            $data['users'] = $this->UserModel->getUsers();
            $this->load->view('master/admin-header',$data);
            $this->load->view('master/user-list',$data);
            //$this->load->view('master/footer');
	}
	 public function newUser()
    {
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Add New User";
        $data['sms']="";
        $this->load->view('master/admin-header', $data);
        $this->load->view('master/user-add');
        //$this->load->view('master/footer');
    }
	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('userid','User ID', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('firstname','First Name','trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('lastname','Last Name','trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('email','Email','trim|required|min_length[3]|max_length[60]');
		$this->form_validation->set_rules('username','User Name','trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[3]|max_length[16]');
		if($this->form_validation->run()==FALSE)
		{
			$data['title'] = "Add New User";
            $data['sms'] = "<span class='text-danger'></span>";
            $this->load->view('master/admin-header', $data);
            $this->load->view('master/user-add');
            //$this->load->view('master/footer');
		}else{
        $r=$this->UserModel->addUser();
        $data['title'] = "Add New User";
        if ($r) {
            $data['sms'] = "<span class='text-info'>Data has been saved.</span>";
        }
        else{
             $data['sms'] = "<span class='text-danger'>Data has not been saved. User may already exist!</span>";
        }
        $this->load->view('master/admin-header', $data);
        $this->load->view('master/user-add');
        //$this->load->view('master/footer');
       }
	}
	public function editUser()
	{
// 		$this->load->model('UserModel');
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
	  	$id =  $this->uri->segment(3);
		$data['users'] = $this->UserModel->getUserById($id);
		$data['title']= "Edit User";
		$data['sms']= "";
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/user-edit',$data);

	}
	public function edit()
	{
		
		$this->load->library('form_validation');
// 		$this->load->model('UserModel');
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$this->form_validation->set_rules('userid','User ID','trim|required|min_length[3]|max_length[11]');
		$this->form_validation->set_rules('firstname','First Name','trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('lastname','Last Name','trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('email','Email','trim|required|min_length[3]|max_length[60]');
		$this->form_validation->set_rules('username','User Name','trim|required|min_length[3]|max_length[20]');
		
		$id= $this->input->post('userid');
		if($this->form_validation->run()==FALSE ){
			$data['title']= "Edit User";
			$data['sms']= "";
			$this->load->view('master/admin-header',$data);
			$data['users']= $this->UserModel->getUserById($id);
			$this->load->view('master/user-edit',$data);
		}else{
			$this->UserModel->editUser($id);
			redirect(base_url('users'));
		}	
	}
// 	public function edit()
// 	{
// 		$id= $this->uri->segment(3);
// 		if($id==NULL)
// 		{
// 			redirect(base_url('users'));
// 		}
// 		$dt= $this->UserModel->edit($id);
		
// 	}
	
	public function delete()
	{
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$id= $this->uri->segment(3);
		$this->UserModel->deleteUser($id);
		redirect(base_url('users'));
	}
	
	public function edituser()
	{
		$this->form_validation->set_rules();
		$this->form_validation->set_rules();
	}
}








