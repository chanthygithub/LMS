<?php
Class modUsers extends CI_Model
{
public function login($username,$password)
	{
		$this->db->select('userid,username,password');
		$this->db->from('users');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$this->db->limit(1);
		$query=$this->db->get();
		if($query->num_rows()==1)
		{
			return $query->result();
		}else 
		{
			return false;
		}
	}
	public function createUser($data)
	{
		$this->db->insert('users',$data);
	}
	public function listUser()
	{
		$this->load->database();
		$db_query=$this->db->get('users');
		return $db_query->result();
		
	}
	public function editModUser($id)
	{
// 		$this->load->database();
// 		$db_query=$this->db->getwhere('users',array('id'=>$id));
// 		return $db_query->row_array();
		$userid=$this->input->post('userid');
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$email=$this->input->post('email');
		$address=$this->input->post('address');
		$status=$this->input->post('status');
		//$data=array();
		
		if($password!="")
		{
			$data=array(
					'userid'=>$userid,
					'firstname'=>$fname,
					'lastname'=>$lname,
					'username'=>$username,
					'password'=>md5($password),
					'email'=>$email,
					'address'=>$address,
					'status'=>$status
					
			);
		}else{
					$data=array(
					'userid'=>$userid,
					'firstname'=>$fname,
					'lastname'=>$lname,
					'username'=>$username,
					'email'=>$email,
					'address'=>$address,
					'status'=>$status
			);
		}
		$this->db->where('userid',$id);
		$this->db->update('users',$data);
	}
	
	public function getUserbyId($id)
	{
		$query=$this->db->get_where('users',array('userid'=>$id));
		return $query->result();
	}
	
	public function getUserbyUsername($username)
	{
		$query=$this->db->get_where('users',array('username'=>$username));
		return $query->result();
	}
	
	public function deleteModUser($id)
	{
// 		  $this->load->database();
// 		  $this->db->where('userid', $userid);
//   		  $this->db->delete('users',array('userid'=>$userid));
// 		$userid;
// 		$this->db->where($where);
// 		$result=$this->db->delete('users');
// 		if($result)
// 			return TRUE;
// 		else
// 			return FALSE;
// 	$this->db->where('id',$id);
// 	$this->db->delete('users');
	$this->db->delete('users',array('userid'=>$id));
	}
	
}
?>