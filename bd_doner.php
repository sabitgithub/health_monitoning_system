<?php
	error_reporting (0);
	session_start();

	
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>.: Blood Doner :.</title>
	<center><?php include_once "patient_header.php";?></center>
<style>
	body	
	{
		margin:0 auto;
		background: url("img/blood_donation.jpg") no-repeat;
		background-size: 100%;	
		font-family: 'Open Sans', sans-serif;
	}

	table
	{
	 width:90%;
	 font-family:inherit;
	 font-weight:bold;
	 color: #0033cc ;
	}
	th {
		color:#009900;
	}
	table,td,th
	{
	 border-collapse:collapse;
	 border:solid #009900 1px;
	 padding:15px;
	 text-align: center;
	}
		.copyright {
		position: absolute;				
		height: 6%;
		width: 20%;
		position: absolute;				
		background-color:#f1f1f1;
		opacity:.9;
		border-radius: 4px;
		bottom: 1%;
		right: .5%;
		text-align: center;
	}
</style>
</head>
<body>
	
<?php 
echo "<br/><center>
				<table border='1' id='table' >
				<tr align='center'>
					<td>Doner_Name</td>
			          <td>Email</td>
			          <td>Cell</td>
			          <td>Age</td>
			          <td>Blood Group</td>
							</tr>";

	

      $conn = mysqli_connect('localhost', 'id7008650_root', '123456', 'id7008650_diba_project');
      $sqlpat = " SELECT * FROM `patient` ";
      $result2 = mysqli_query($conn,$sqlpat);

		while($row2= mysqli_fetch_assoc($result2))
		{
				


			
			echo "<tr>
		  <td> <center>".$row2['name']." </center> </td>
          <td><center>".$row2['email']."</center> </td>
          <td><center>".$row2['phone']."</center> </td>
		  <td><center>".$row2['age']."</center> </td>
		  <td><center>".$row2['blood_group']."</center> </td>
    	</tr>";

		}
				
		echo "</table>
				</center>";
		
		
	

?>



</body>
</br>
<div class="copyright">
		&copy; 2017-<?php echo date("Y");?>  by Diba_IT. All Rights Reserved
	</div>
</html>

<?php

mysqli_close($conn);


?>