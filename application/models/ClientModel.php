<?php

class ClientModel extends CI_Model {
    // invoke parent constructor
    public function __construct() {
        parent::__construct();
    }
    /**
     * getUsers is a function to select all users from table users.
     * It shows only users that are not deleted.
     * This function will return a list of users.
     */
    public function getClientById($id)
    {
    	$query = $this->db->get_where('clients',array('clientid'=>$id));
    	return $query->result();
    }
    public function getClients()
    {
//         $query = $this->db->get_where('clients');
//         return $query->result();
// 	      $data= $this->db->select("clientid,firstname,lastname,fullname,gender,email,phone,address,startdate,enddate,CONCAT(capital,'.',moneytype) as capital,rate,duration,status",FALSE);
// 	      $this->db->from('clients');
// 	      $this->db->where('clientid',$id);
		  //$data= $this->db->select("clientid,firstname,lastname,fullname,gender,email,phone,address,startdate,enddate,capital,moneytype,rate,duration,status",FALSE);
		  $data= $this->db->select("clientid,firstname,lastname,fullname,gender,email,phone,address,startdate,settingdate,enddate,capital,moneytype,rate,totalday,status",FALSE);
		  $query= $this->db->get_where('clients');
		  return $query->result();
		  //CONCAT(capital,' ',moneytype) as
    }
    
    public function addClient()
    {
    	$clientid= $this->input->post('clientid');
    	$fn= $this->input->post('firstname');
    	$ln= $this->input->post('lastname');
    	$fullname= $this->input->post('fullname');
    	$gender= $this->input->post('gender');
    	$age= $this->input->post('age');
    	$email= $this->input->post('email');
    	$phone= $this->input->post('phone');
    	$address= $this->input->post('address');
    	$startdate= $this->input->post('startdate');
    	$settingdate= $this->input->post('settingdate');
    	$enddate= $this->input->post('enddate');
    	$totalday= $this->input->post('totalday');
    	$capital= $this->input->post('capital');
    	$moneytype= $this->input->post('moneytype');
    	$rate= $this->input->post('rate');
    	$duration= $this->input->post('duration');
    	$status= $this->input->post('status');
    	
    	$query= $this->db->get_where('clients',array('clientid'=>$clientid));
    	$result=false;
    	if (count($query->result())>=1) {
    		// user already exist
//     	if($query){
//     		$result = true;
		$result=false;
    	}else{
    	$data=array(
    		'clientid'=>$clientid,
    		'firstname'=>$fn,
    		'lastname'=>$ln,
    		'fullname'=>$fullname,
    		'gender'=>$gender,
    		'age'=>$age,
    		'email'=>$email,
    		'phone'=>$phone,
    		'address'=>$address,
    		'startdate'=>$startdate,
    		'settingdate'=>$settingdate,
    		'enddate'=>$enddate,
    		'totalday'=>$totalday,
    		'capital'=>$capital,
    		'moneytype'=>$moneytype,
    		'rate'=>$rate,
    		'duration'=>$duration,
    		'status'=>$status
    	);
    	$result=$this->db->insert('clients',$data);
    	}
    	return $result;
    }
    public function editClient($id)
    {
    	$clientid= $this->input->post('clientid');
    	$fn= $this->input->post('firstname');
    	$ln= $this->input->post('lastname');
    	$fullname= $this->input->post('fullname');
    	$gender= $this->input->post('gender');
    	$age= $this->input->post('age');
    	$email= $this->input->post('email');
    	$phone= $this->input->post('phone');
    	$address= $this->input->post('address');
    	$startdate= $this->input->post('startdate');
    	$settingdate= $this->input->post('settingdate');
    	$enddate= $this->input->post('enddate');
    	$capital= $this->input->post('capital');
    	$rate= $this->input->post('rate');
    	$duration= $this->input->post('duration');
    	$status= $this->input->post('status');
    	 
    	$data=array();
    	if($clientid!="")
    	{
    		$data=array(
    			'clientid'=>$clientid,
    			'firstname'=>$fn,
    			'lastname'=>$ln,
    			'fullname'=>$fullname,
    			'gender'=>$gender,
    			'age'=>$age,
    			'email'=>$email,
    			'phone'=>$phone,
    			'address'=>$address,
    			'startdate'=>$startdate,
    			'settingdate'=>$settingdate,
    			'enddate'=>$enddate,
    			'capital'=>$capital,
    			'rate'=>$rate,
    			'duration'=>$duration,
    			'status'=>$status
    		);
    	}else{
    		$data=array(
    				'clientid'=>$clientid,
    				'firstname'=>$fn,
    				'lastname'=>$ln,
    				'fullname'=>$fullname,
    				'gender'=>$gender,
    				'age'=>$age,
    				'email'=>$email,
    				'phone'=>$phone,
    				'address'=>$address,
    				'startdate'=>$startdate,
    				'settingdate'=>$settingdate,
    				'enddate'=>$enddate,
    				'capital'=>$capital,
    				'rate'=>$rate,
    				'duration'=>$duration,
    				'status'=>$status
    		);
    	}
    	$this->db->where('clientid',$id);
    	$this->db->update('clients',$data);
    }
	
    public function deleteClient($id)
    {
    	$this->db->delete('clients',array('clientid'=>$id));
    }
    
    public function getClientDetail($id)
    {
//     	$query = $this->db->get_where('clients',array('clientid'=>$id));
//     	return $query->result();
		//$data= $this->db->select("clientid,firstname,lastname,fullname,gender,email,phone,address,startdate,enddate,capital,moneytype,rate, datediff(enddate,startdate) as duration,((((capital*rate)/100)*(datediff(enddate,startdate)))/30) as total,status",FALSE);
		//$from= date('m/d/Y',strtotime($_POST['settingdate']));
// 		$settingdate=$month=strtotime($_POST['settingdate']);
// 		$endmonth=strtotime($_POST['enddate']);
		$data= $this->db->select("clientid,firstname,lastname,fullname,gender,email,phone,address,startdate,enddate,capital,moneytype,rate,duration,settingdate,DATE_FORMAT(now(),'%m/%d/%Y') as nextmonth,((((capital*rate)/100)*duration)/30) as total,status",FALSE);
		$query= $this->db->get_where('clients',array('clientid'=>$id));
		return $query->result();
    }
    
    public function repaymentSchedule()
    {
    	$loan_amount= $this->input->post('capital');
    	$rate_per= $this->input->post('rate');
    	$loan_peraid= $this->input->post('duration');
    	$startdate= $this->input->post('startdate');
    	
    	$get_day=date('d',$startdate);
    	$get_m=date('m',$startdate);
    	$select_date= $this->input->post('settingdate');
    	if($get_day<$select_date)
    	{
    		$count_date= $select_date-$get_day;
    	}else{
    		$count_date= (30-$get_day)+$select_date;
    		$get_m +=1;
    	}
    	$repayment_date= date('Y-m-d', mktime(0,0,0, date($get_day),date($select_date),date('Y')));
    	$rate= $bk_rate=$loan_amount*$rate_per;
    	$f_rate= $rate*$count_date/30;
    	$load_id= $this->input->post('clientid');
    	$principle_replay=$loan_amount;
    	$num_date=30;
    	$arr_sch=array();
    	
    	for($i=1;$i<=$loan_peraid;$i++)
    	{
    		$rate=$f_rate;
    		if($i>i)
    		{
    			$rate=$bk_rate;
    			$get_m +=1;
    			$repayment_date= date('Y-m-d', mktime(0,0,0, date($get_m),date($select_date),date('Y')));
    		}
    		$repay= $rate;
    		if($i==$loan_peraid){
    			$repay +=$principle_replay;
    		}
    		$arr_sch_rec= array(
    				
    		);
    	}
    }
}
 











