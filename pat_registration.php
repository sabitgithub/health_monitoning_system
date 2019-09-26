<?php
	error_reporting(0);
	
	if (isset($_POST['submit']))
	{
	
			$fname=trim($_POST['fname']);
			$lname=trim($_POST['lname']);
			$phone=trim($_POST['phone']);
			$email=trim($_POST['email']);
			$password=trim($_POST['password']);	
			$gender=$_POST['gender'];
			$blood_group=$_POST['blood_group'];
			$age=$_POST['age'];
			$heart_disease=$_POST['heart_disease'];
			$blood_pul_rate=$_POST['blood_pul_rate'];
			$majority=$_POST['majority'];
			$dev_id=$_POST['dev_id'];
			$medicine=$_POST['medicine'];
			$weight=$_POST['weight'];
			
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
			
			if($fname =="" ||$phone == "" || $email == "" || $password == "" || $dev_id == "" || $gender == "" || $files_flag == "1")
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
							
							
							$sql1 = "INSERT INTO `userreg`(`id`, `type`, `firstname`, `lastname`, `phone`, `email`, `password`) VALUES ('','patient','$fname','$lname','$phone','$email','$password')";
							$result1 = mysqli_query($conn, $sql1);
							

							$sql2 = "INSERT INTO `patient`(`id`, `phone`, `name`, `email`, `blood_group`, `age`, `weight`, `heart_dis`, `blood_pulse`, `Temp`, `majority`, `medicine`, `photo`, `device_id`) VALUES ('','$phone','$full_name','$email','$blood_group','$age','$weight','$heart_disease','$blood_pul_rate','','$majority','$medicine','$filepath','$dev_id')";
							$result2 = mysqli_query($conn, $sql2);
							



							header("location: home.php?Status=patient_registration_confirmed");
						
							mysqli_close($conn);
						
										
						}
				
				
			} //else ending
			
	} //isset ending
	
	else
	{
		echo "Invalid request";
	}
	
?> 