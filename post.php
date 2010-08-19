<?php

//Load Database Class

require('/classes/database.php');

//Instantiate db class

$db = new Database();

//Recieve Data

$what = $db->clean($_POST['your_thing']);

$achievable = $db->clean($_POST['your_promo_goal']);

$username = $db->clean($_POST['your_email']);

$password = $db->clean(md5($_POST['your_password']));

//Check to see if the user account exists

$value = $db->check($username, $password);

//Check against db to see if user exists.

$user_info = "SELECT username FROM company_information WHERE username = '$username'";

$username_db = mysql_query($user_info);

if ($value == true)

    {
		//Log user in
	
		$sql = "UPDATE company_information SET logged_in = 1 WHERE username = '$username' AND password = '$password'";
				
		mysql_query($sql);

		//Put data into database and then redirect user to the payment page (dash). 
		
		
	
	}	

elseif (($username != $username_db) && ($value == false))

	{
		
		//Redirect to 'do you want to create a new account page.'
		
		header("Location: do_it.php?what=$what&achievable=$achievable&email=$username&enc=$password");
		
	}	
	
else 

	{
		echo "I think you type in the wrong password. <a href='/a_query_post.php/'>Click here to go back and correct it</a>";
	}	
	
?>