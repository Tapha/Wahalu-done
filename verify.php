<?php

//Load Database Class

require('/wahalu/classes/database.php');

if isset($_POST['username'] && $_POST['password'])

{

//Grab Inputs

$username = $_POST['username'];

$password = md5($_POST['password']);


//Instantiate db class

	$db = new Database();
	
//Check against the database values. verify.
	
	$value = $db->check($username, $password);

	
	if ($value = true)
	
		{
		
			//Get all the database information.
			
				$company_information = $db->get_company_information($username, $password);
				
				$company_id = $company_information['company_id'];
				
				$admin_id = $company_information['admin_id'];
				
				//Start session
				
				
		
				header("Location: /wahalu/dashboard/company_dashboard/index.php?company_id='$company_id'&admin_id=$admin_id");
		
		}
		
	else

		{
				echo 'Couldnt log you in. Please check your password or username. Try again.';
		}
}

?>
