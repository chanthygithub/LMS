<?php

class ReportModel extends CI_Model {
    // invoke parent constructor
    public function __construct() {
        parent::__construct();
    }
    /**
     * getUsers is a function to select all users from table users.
     * It shows only users that are not deleted.
     * This function will return a list of users.
     */
   public function getMonthlyPayment()
   {
   		
   		$data=$this->db->select("clientid,fullname,gender,phone,address,startdate,settingdate,enddate,capital,rate,moneytype,status",FALSE);
   		$query=$this->db->get_where('clients');
   		return $query->result();
   }
   public function searchDataById($id)
   {
   		$condition="clientid ="."'".$id."'";
   		$this->db->select('clientid, fullname, gender, phone, address, settingdate, capital, moneytype, rate, status', FALSE);
   		$this->db->from('clients');
   		$this->db->where($condition);
   		$this->db->limit(1);
   		$query= $this->db->get();
   		if($query->num_rows() == 1)
   		{
   			return $query->result();
   		}else{
   			return false;
   		}
   }
   
   public function searchDataByDate($date)
   {
	   	$condition = "settingdate =" . "'" . $date . "'";
	   	$this->db->select('clientid, fullname, gender, phone, address, settingdate, capital, moneytype, rate, status', FALSE);
	   	$this->db->from('clients');
	   	$this->db->where($condition);
	   	//$this->db->limit(1);
	   	$query = $this->db->get();
	   	if ($query->num_rows() > 0) {
	   		return $query->result();
	   	} else {
	   		return false;
	   	}
	   	//don't forget to change input type to 'date' type
   }
}
 











