<?php

class login extends Controller {

	function login()
	{
		parent::Controller();	
	}
	
	function index()
	{

		$this->load->view('login');
	}
}