<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ReportModel');
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
		if($this->session->userid==false){
			redirect(base_url('admin/login'));
		}
		$data['title']="Monthly Payment List";
		$data['clients']=$this->ReportModel->getMonthlyPayment();
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/monthly-payment-list',$data);
	}
	public function selectDataById()
	{
		$id= $this->input->post('clientid');
		if($id != "")
		{
			$result= $this->ReportModel->searchDataById($id);
			if($result!=false)
			{
				$data['clients']= $result;
			}else{
				$data['clients']= "No record found";
			}
		}else{
			$data= array(
					'id_error_message'=>"Id field is required"
			);
		}
		$data['clients']= $this->ReportModel->searchDataById($id);
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/monthly-payment-list',$data);
	}
	
	public function selectDataByDate()
	{
		$date = $this->input->post('date');
		if ($date != "") {
			$result = $this->ReportModel->searchDataByDate($date);
			if ($result != false) {
				$data['clients'] = $result;
			} else {
				$data['clients'] = "No record found !";
			}
		} else {
			$data['clients'] = "Date field is required";
		}
		$data['clients']= $this->ReportModel->searchDataByDate($date);
		$this->load->view('master/admin-header',$data);
		$this->load->view('master/monthly-payment-list',$data);
		// don't forget input to date
	}
	
}








