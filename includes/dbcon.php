<?php

//Include File - dbcon.php

//Connect To DB
	
//Define values then connect and check if connect worked with if statement

define ('HOSTNAME', 'localhost');
define ('HOSTUSERNAME', 'root');
define ('HOSTPASSWORD', '');
define ('DATABASENAME', 'wahalu');
	
	$con = mysql_connect( HOSTNAME, HOSTUSERNAME, HOSTPASSWORD);	
	
	$db = mysql_select_db(DATABASENAME);
	
	if (!$con)
	
		{
			$output = "Could not connect to db";
			
			die ($output);
		}
	else 

	
		{
			$output  = "successfully connected to dabatase!";
			
			echo "";
		}
		
	$set = "utf8";
	
	$char = mysql_set_charset($set);
	

	if (!$char)
	
		{
			echo "Could not set charset!";
		}	
		
?>