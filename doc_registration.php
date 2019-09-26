<?php
	error_reporting(0);
	
	if (isset($_POST['submit']))
	{
	
			$fname=trim($_POST['fname']);
			$lname=trim($_POST['lname']);
			$phone=trim($_POST['phone']);
			$email=trim($_POST['email']);
			$gender=$_POST['gender'];
			$bmdc_reg=trim($_POST['bmdc_reg']);
			$password=trim($_POST['password']);	
			$full_name=$fname." ".$lname;


			$fnameflag ="";
			$lnameflag ="";
			$emailflag ="";
			$phoneflag ="";
			$passwordflag ="";
			$id_typeflag ="";
			$genderflag ="";
			$typeflag ="";
			$files_flag="";
			
			
			
			 if ($_FILES["uploadfile"]["size"] == 0)
			 {
			 	$files_flag="1";
			 }
			
			if($fname =="" ||$phone == "" || $email == "" || $password == "" || $bmdc_reg == "" || $gender == "" || $files_flag == "1")
			{
				header("location:home.php?Null_not_preferable_REGISTRATION");
			}
			else
			
			{
				if (ctype_alpha($fname)) 
					{
					$fnameflag ="1";
					}

				if (ctype_alpha($lname)) 
					{
					$lnameflag ="1";
					}	


				if( strlen($phone) >= 11)
				{
					$phoneflag = "1";
				}
				

				$pics_email = explode("@", $email); //Email split
				if($pics_email[0]!="" && $pics_email[1]!="")
				{
					$pics_email2 = explode(".", ($pics_email[1]));	
					if ((strlen($pics_email2[0])< 4)  && (strlen($pics_email2[1])> 2))	
					{
						$emailflag ="1";
					}
				}
				
				if (strlen($password > 5)  )
				{
					if(!ctype_alpha($password))
					{
					  $passwordflag="1";
			        }
				}
				
				
								
				
				$genderflag = "1";
				$typeflag = "1";

				$filedir = "upload/";
				$filepath = $filedir.$_FILES["uploadfile"]["name"];
				move_uploaded_file($_FILES['uploadfile']['tmp_name'], $filepath);
				
				
					

					$conn = mysqli_connect('localhost', 'id7008650_root', '123456', 'id7008650_diba_project');

						if(!$conn)
						{
							echo "DB Error: ".mysqli_connect_error();
						}
						else
						{
							
							
							$sql1 = "INSERT INTO `userreg`(`id`, `type`, `firstname`, `lastname`, `phone`, `email`, `password`) VALUES ('','doctor','$fname','$lname','$phone','$email','$password')";
							$result1 = mysqli_query($conn, $sql1);
							

							$sql2 = "INSERT INTO `doctor`(`id`, `name`, `gender`, `phone`, `email`, `photo`, `bmdc_reg`) VALUES ('','$full_name','$gender','$phone','$email','$filepath','$bmdc_reg')";
							$result2 = mysqli_query($conn, $sql2);
							


							header("location: home.php?Status=doctor_registration_confirmed");
						
							mysqli_close($conn);
						
										
						}
				
				
			} //else ending
			
	} //isset ending
	
	else
	{
		echo "Invalid request";
	}
	
?> 