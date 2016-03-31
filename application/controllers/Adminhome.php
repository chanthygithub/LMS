<?php

class Adminhome extends CI_Controller{
   public function __construct()
    {
        parent:: __construct();
        //$this->load->model('UserModel');
              
    }
    public function index()
    {
          if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title']="LMS- Administration";
        $this->load->view("master/admin-header");
    }
}
