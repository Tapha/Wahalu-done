<?php

//Load Database Class

require('/classes/database.php');

//Grab Inputs

$username = $_POST['username'];

$password = md5($_POST['password']);

if (isset($username) && ($password))

{


//Instantiate db class

	$db = new Database();
	
//Check against the database values. verify.
	
	$value = $db->check($username, $password);

	//Load Company dashboard if user is company
	
	if ($value == true)
	
		{
		
				//Get all the database information.
			
				$company_information = $db->get_company_information($username, $password);
				
				$company_id = $company_information[0];
				
				$admin_id = $company_information[1];
				
				//Start session
				
				header("Location: load.php?company_id=$company_id&admin_id=$admin_id");
		
		}
		
	else

		{
				echo 'Couldnt log you in. Please check your password or username. Try again.';
		}
}

?>
