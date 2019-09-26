<?php
	
	session_start();
	
	if(isset($_POST['Login'])){

		$username = $_POST['uname'];
		$password = $_POST['password'];
		

		if($username == "" || $password == ""){

			//echo "invalid submission";
			header("location: login.php?status=nullvalue");

		}
		else{

			$conn = mysqli_connect('localhost', 'id7008650_root', '123456', 'id7008650_diba_project');
			$isvalid = "";
			
			
			$sqlcheck = " SELECT * FROM `userreg` WHERE `phone` = '$username' and `password` = '$password'";
			$result1 = mysqli_query($conn,$sqlcheck);
			if (mysqli_num_rows($result1)==0)
			
			{
				header("location: login.php?status=invalid user!!");
			}
			else
			{
				$isvalid = "validuser";
				while($row = mysqli_fetch_assoc($result1))
					{
		
					$_SESSION['username'] =  $row['phone'];
					$_SESSION['type'] =  $row['type'];	
					}
			}
			}
			
			if ($isvalid == "validuser")
			{
				//echo "valid";
					if($_POST['rm']== "rm")
					{
						//echo "remember me";
						if (($_SESSION['type'])=="admin")
							{
								setcookie("admin", "admin", time() + (86400 * 30), "/"); // 86400 = 1 day
								header("location: admin_dashboard.php");
							}
							
						else if (($_SESSION['type'])=="patient")
							{
								setcookie("patient", "patient", time() + (86400 * 30), "/"); // 86400 = 1 day
								header("location: patient_dashboard.php");
							}
								
						else if (($_SESSION['type'])=="doctor")
							{
								setcookie("doctor", "doctor", time() + (86400 * 30), "/"); // 86400 = 1 day
								header("location: doctor_dashboard.php");
							}
							
						}
					else
					{
						if (($_SESSION['type']) == "admin")
						{
							header("location: admin_dashboard.php");
						}
						else if (($_SESSION['type']) == "patient")
						{
							header("location: patient_dashboard.php");
						}
						else if (($_SESSION['type']) == "doctor")
						{
							header("location: patient_dashboard.php");
						}
						
					}
						
			}

			mysqli_close($conn);

		}

		else if(isset($_POST['forget_check']))
		{

		$username = $_POST['uname'];
		$password = $_POST['password'];
		

		if($username == "" || $password == ""){

			//echo "invalid submission";
			header("location: home.php?status= forget_pass_nullvalue");

		}
		else{

			$conn = mysqli_connect('', 'root', '', 'diba_project');			
			$sqlset = " UPDATE `userreg` SET `password`='$password' WHERE `phone` ='$username'";
			$result1 = mysqli_query($conn,$sqlset);
			if (mysqli_num_rows($result1)==0)
			
			{
			header("location: home.php");		
			}
			
			else
			{
			header("location: home.php?status=forget_password_invalid user!!");
			
			}		
		}
		mysqli_close($conn);
	}

		else 
		{
			header("location: Login.php?status=invalid Request");
		}
?>