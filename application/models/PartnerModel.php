<?php
class PartnerModel extends CI_Model {
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
   
    public function partnerAddMod()
    {
    	$partnerid= $this->input->post('partnerid');
    	$fn= $this->input->post('firstname');
    	$ln= $this->input->post('lastname');
    	$fullname= $this->input->post('fullname');
    	$gender= $this->input->post('gender');
    	$age= $this->input->post('age');
    	$email= $this->input->post('email');
    	$phone= $this->input->post('phone');
    	$address= $this->input->post('address');
  	
    	$query= $this->db->get_where('partners',array('partnerid'=>$partnerid));
    	$result=false;
    	if (count($query->result())>=1) {
    		// user already exist
//     	if($query){
//     		$result = true;
		$result=false;
    	}else{
    	$data=array(
    		'partnerid'=>$partnerid,
    		'firstname'=>$fn,
    		'lastname'=>$ln,
    		'fullname'=>$fullname,
    		'gender'=>$gender,
    		'age'=>$age,
    		'email'=>$email,
    		'phone'=>$phone,
    		'address'=>$address
    	);
    	$result=$this->db->insert('partners',$data);
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
	public function getPartnerMod()
	{
// 		$this->db->select('partners.partnerid, partners.fullname, partners.address, partners.phone, partners.email, partnerscapital.partnersid, partnerscapital.capital, moneytype, partnerscapital.datein, partnerscapital.description');
// 		$this->db->from('partners');
// 		$this->db->join('partnerscapital','partnerscapital.partnersid = partners.partnerid','inner');
// 		$this->db->order_by('partners.partnerid');
		$this->db->select('partners.partnerid, partners.fullname,partners.gender, partners.address, partners.phone, partners.email', FALSE);
		$this->db->from('partners');
		$this->db->order_by('partnerid');
		$query= $this->db->get();
		return $query->result();
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
 











