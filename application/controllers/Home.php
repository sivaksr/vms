<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
		public function __construct() 
		{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Home_model');
	
		}
	
	
	public function index(){
		if(!$this->session->userdata('vms_details'))
		{
			$userdetails=$this->session->userdata('vms_details');
				$this->load->view('home/header');
				$this->load->view('home/index');
				$this->load->view('home/footer');
		   }else{
			 $this->session->set_flashdata('loginerror','Please login to continue');
				redirect('dashboard');
		}     
	    
}	
	
	
	
	
	
	
	
	
	
	
	
}
