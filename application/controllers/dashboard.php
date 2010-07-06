<?php

class dashboard extends Controller {

	function dashboard()
	{
		parent::Controller();	
	}
	
	function index()
	{
	
		//Get the username 
		
		//Get the password
		
		$username = $_POST['username'];
		
		$password = $_POST['password'];
		
		//Check against database later
		
		$check_username = 'dummy_limited';
		
		$check_password = 'tapha';
		
		//Advisor Or Business
		
		//Check DB
		
		//Load all data 
		
		$check_user = 1;
		
		$data['user_type'] = $check_user;
		
		$user_number = 1;
		
		$data['user_number'] = $user_number;
		
		$company_name = 'Wahalu Corp';
		
		$data['company_name'] = $company_name;
		
		//Get all user data
		
		if (($username == $check_username) && ($password == $check_password))
		
		{
		
		$this->load->view('dashboard', $data);
		
		}
		
		else
		
		{
				echo "Wrong password or username";
		}
	}
}