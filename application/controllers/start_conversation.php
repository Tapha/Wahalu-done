<?php

class start_conversation extends Controller {

	function start_conversation()
	{
		parent::Controller();	
	}
	
	function index()
	{
		//Grab inputs
		
		$conversation_starter = $_POST['start_conversation'];
		
		$company_id = //Session company id;
		
		//Put in database
		
		$query = $this->db->query("INSERT INTO start_conversation VALUES ('','$company_id','$conversation_starter')");
		
		$this->load->view('dashboard');
	}
}