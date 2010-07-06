<?php

class logout extends Controller {

	function logout()
	{
		parent::Controller();	
	}
	
	function index()
	{
	
		//Close Session

		$this->load->view('home');
	}
}