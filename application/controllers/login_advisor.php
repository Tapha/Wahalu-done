<?php

class login_advisor extends Controller {

	function login_advisor()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('login_advisor');
	}
}