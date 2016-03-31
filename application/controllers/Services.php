<?php

class Admin extends CI_Controller{
   public function __construct()
    {
        parent:: __construct();
        $this->load->model('UserModel');
              
    }
    public function index()
    {
          if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title']="LMS- Administration";
        $this->load->view("master/header",$data);
    }
	public function login()
    {
        $data['title'] = "User Authentication";
        $this->load->view("master/header",$data);
        $this->load->view("master/login");
        //$this->load->view("master/footer");
    }
	
	 public function doLogin()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $user = $this->UserModel->getUserByName($username);
        if (count($user)>0) {
            if ($username==$user[0]->username) {
                if ($user[0]->password == md5($pass)) {
                    // save user data to session variables
                    $this->session->set_userdata(array(
                    'userid'=>$user[0]->userid,
                    'username'=>$user[0]->username,
                    'password'=>$user[0]->password
                    ));
                   $this->load->view('master/logout');
				   //redirect(base_url('admin/logout'));
                }
                else
                {
                    redirect(base_url('admin/login'));
                }
            }
        }
        else
        {
            redirect(base_url('admin/login'));
        }
    }
	public function logOut()
    {
		
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
}
