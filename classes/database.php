<?php

//Bring in database connection

require('/includes/dbcon.php');

//Database Class

Class Database

			{
				
				//Login
				
				//Check Data
				
				public function check($username = NULL, $password = NULL)
				
								{
									
									$sql_username = "SELECT username FROM company_information WHERE username = '$username'";
									
									$query_username = mysql_query($sql_username);
									
									while ($row_username = mysql_fetch_assoc($query_username))

										{
													$db_username = $row_username['username'];		
										}
									
									$sql_password = "SELECT password FROM company_information WHERE password = '$password'";
									
									$query_password = mysql_query($sql_password);
									
									while ($row_password = mysql_fetch_assoc($query_password))

										{
													$db_password = $row_password['password'];		
										}
								
								//Check values against each other

										If (($username == $db_username) && ($password == $db_password))
										
											{
												return true;	
											}
								
								
										else
										
											{
												return false;
											}
								}
								
				public function get_company_information($username = NULL, $password = NULL)

								{
									$sql_for_get_company = "SELECT * FROM company_information WHERE username = '$username' AND password = '$password'";
									
									$sql_for_get_company_query = mysql_query($sql_for_get_company);
									
									while ($rows = mysql_fetch_assoc($sql_for_get_company_query))
									
											{
											
												
												$company_id = $rows['company_id'];
												
												$admin_id = $rows['admin_id'];
										
											}
											
									$company_information = array($company_id, $admin_id);
														
									return $company_information;
									
								}
				
			}