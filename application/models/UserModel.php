<?php

class UserModel extends CI_Model {
    // invoke parent constructor
    public function __construct() {
        parent::__construct();
    }
    /**
     * getUsers is a function to select all users from table users.
     * It shows only users that are not deleted.
     * This function will return a list of users.
     */
    public function getUsers()
    {
        $query = $this->db->get_where('users',array('status'=>1));
        return $query->result();
    }
	
	public function getUserById($id)
    {
        $query = $this->db->get_where('users',array('userid'=>$id));
        return $query->result();
    }
	
	public function getUserByName($username)
    {
        
        $query = $this->db->get_where('users',array('username'=>$username));
        return $query->result();
    }
    /**
     * Delete user by its id
     */
	public function addUser()
	{
		$userid=$this->input->post('userid');
		$fname=$this->input->post('firstname');
		$lname=$this->input->post('lastname');
		$gender=$this->input->post('gender');
		$email=$this->input->post('email');
		$username=$this->input->post('username');
		$pass=$this->input->post('pass');
		$address=$this->input->post('address');
		$status=$this->input->post('number');
		
		$query = $this->db->get_where('users',array('username'=>$username));
        $result = false;
        if (count($query->result())>=1) {
            // user already exist
           $result = false;
        }else{
			$data= array(
			'userid'=>$userid,
			'firstname'=>$fname,
			'lastname'=>$lname,
			'gender'=>$gender,
			'email'=>$email,
			'username'=>$username,
			'password'=>md5($pass),
			'address'=>$address,
			'status'=>$status
			);
		$result=$this->db->insert('users',$data);
		}
		return $result;
	}
	
	public function editUser($id)
	{
		$userid= $this->input->post('userid');
		$fname= $this->input->post('firstname');
		$lname= $this->input->post('lastname');
		$gender= $this->input->post('gender');
		$email= $this->input->post('email');
		$username= $this->input->post('username');
		$pass= $this->input->post('pass');
		$address= $this->input->post('address');
		$status= $this->input->post('number');
		$data=array();
		
		if($pass!="")
		{
			$data=array(
				//'userid'=>$userid,
				'firstname'=>$fname,
				'lastname'=>$lname,
				'gender'=>$gender,
				'email'=>$email,
				'username'=>$username,
				'password'=>md5($pass),
				'address'=>$address,
				'status'=>$status
			);
		}else{
			$data=array(
				//'userid'=>$userid,
				'firstname'=>$fname,
				'lastname'=>$lname,
				'gender'=>$gender,
				'email'=>$email,
				'username'=>$username,
				//'password'=>md5($pass),
				'address'=>$address,
				'status'=>$status
			);
		}
		$this->db->where('userid',$id);
		$this->db->update('users',$data);
        //return $this->db->affected_rows();
	}
// 	public function edit($id)
// 	{
// 		$ed= $this->db->get_where('users',array('userid'=>$id))->row();
// 		return $ed;
// 	}
// 	public function update($id)
// 	{
// 		$usid= $this->input->post('userid');
// 		$fn= $this->input->post('firstname');
// 		$ln= $this->input->post('lastname');
// 		$gd= $this->input->post('gender');
// 		$email= $this->input->post('email');
// 		$usn= $this->input->post('username');
// 		$pass= $this->input->post('pass');
// 		$add= $this->input->post('address');
// 		$status= $this->input->post('number');
// 		$data=array(
// 			'userid'=>$usid,
// 			'firstname'=>$fn,
// 			'lastname'=>$ln,
// 			'gender'=>$gd,
// 			'email'=>$email,
// 			'username'=>$usn,
// 			'pass'=>$pass,
// 			'address'=>$add,
// 			'status'=>$status
// 		);
// 		$this->db->where('userid',$id);
// 		$this->db->update('users',$data);
// 	}
	
    public function deleteUser($id)
    {
    	$this->db->delete('users',array('userid'=>$id));
    }
}












