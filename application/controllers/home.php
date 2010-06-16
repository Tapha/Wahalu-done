<?php

class home extends Controller {

	function home()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */