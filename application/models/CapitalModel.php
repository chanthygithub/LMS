<?php

class CapitalModel extends CI_Model {
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
   
    public function partnerCapitalAddMod()
    {
    	$partnercapitalid= $this->input->post('partnercapitalid');
    	$capital= $this->input->post('capital');
    	$moneytype= $this->input->post('moneytype');
    	$datein= $this->input->post('datein');
    	$description= $this->input->post('description');
    
    	$query= $this->db->get_where('partnerscapital',array('partnersid'=>$partnercapitalid));
//     	$result=false;
//     	if(count($query->result())>=1) {
//     		// user already exist
// //     	if($query){
// //     		$result = true;
// 		$result=true;
//     	}else{
    	$timezone="Asia/Bangkok";
    	date_default_timezone_set ($timezone);
    	$data=array(
    		'partnersid'=>$partnercapitalid,
    		'capital'=>$capital,
    		'moneytype'=>$moneytype,
    		'datein'=>$datein,
    		'description'=>$description
    	);
    	$result=$this->db->insert('partnerscapital',$data);
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
    	$moneytype= $this->input->post('moneytype');
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
    			'moneytype'=>$moneytype,
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
    				'moneytype'=>$moneytype,
    				'rate'=>$rate,
    				'duration'=>$duration,
    				'status'=>$status
    		);
    	}
    	$this->db->where('clientid',$id);
    	$this->db->update('clients',$data);
    }
    public function getPartnerCapitalMod()
    {
    	$this->db->select('partnerscapital.partnersid, partnerscapital.capital, partnerscapital.moneytype, partnerscapital.datein, partnerscapital.description');
    	$this->db->from('partners');
    	$this->db->join('partnerscapital','partnerscapital.partnersid = partners.partnerid','inner');
    	$this->db->order_by('partners.partnerid');
    	$query= $this->db->get();
    	return $query->result();
    }
}
 











