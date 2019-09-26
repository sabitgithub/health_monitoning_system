<?php
error_reporting(0);
session_start();


if(isset($_SESSION['username']))
{


$user = $_SESSION['username'];
$name = "";
$phone = "";
$email= "";
$bg= "";
$age= "";
$heart_dis= "";
$blood_pulse= "";
$temp = "";
$majority= "";
$medicine= "";
$dev_id= "";
$weight ="";
$comment_view= "";
$imgdir="http://localhost:85/diba_project/";

$conn = mysqli_connect('localhost', 'id7008650_root', '123456', 'id7008650_diba_project');
			
			
			
			$sqlpat = " SELECT * FROM `patient` WHERE `phone` = '$user'";
			$result1 = mysqli_query($conn,$sqlpat);
				while($row = mysqli_fetch_assoc($result1))
					{
		
					$phone =  $row['phone'];
					$name =  $row['name'];
					$email =  $row['email'];
					$bg =  $row['blood_group'];
					$age =  $row['age'];
					$heart_dis =  $row['heart_dis'];
					$blood_pulse =  trim($row['blood_pulse']);
					$temp =  trim($row['Temp']);
					$majority =  $row['majority'];
					$medicine =  $row['medicine'];
					$dev_id =  $row['device_id'];
					$weight = $row['weight'];
					$photo = $row['photo'];
					 
					}

					if($blood_pulse<"70")
					{
					 $comment_view = "Low Pulse Rate";
					}
					if($blood_pulse>"70")
					{
					 $comment_view = "High Pulse Rate";
					}
					if($blood_pulse=="70")
					{
					 $comment_view = "Good Pulse Rate";
					}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Patient Dashboard
	</title>
	<center><?php include_once "patient_header.php";?></center>

<style>
	
	{
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column1 {
    float: left;
    width: 30%;
    padding: 10px;
    height: 600px; /* Should be removed. Only for demonstration */
}
.column2 {
    float: left;
    width: 70%;
    padding: 10px;
    height: 600px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.btn {
	position:fixed;
   right:10px;
   top:40px;
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 70px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.btn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.btn:hover span {
  padding-right: 25px;
}

.btn:hover span:after {
  opacity: 1;
  right: 0;
}

</style>

</head>
<body>
	<div class="row">
  <div class="column1" style="background-color:#aaa;">
   	<img src="<?php echo $photo;?>" alt="Patient" height="150" width="150">
   	<br> <br>
    Name: <?php echo "$name"; ?>
    <br> <hr>
    Phone: <?php echo "$phone"; ?>
    <br> <hr>
    Email: <?php echo "$email"; ?>
    <br> <hr>
    Blood Group: <?php echo "$bg"; ?> 've'
    <br> <hr>
    Age: <?php echo "$age"; ?> yr
    <br> <hr>
    Weight: <?php echo "$weight"; ?> kg
    <br> <hr>
    Heart Dieases: <?php echo "$heart_dis"; ?>
    <br> <hr>
    Blood Pulse: <?php echo "$blood_pulse"; ?> per min
    <br> <hr>
    Majority: <?php echo "$majority"; ?>
    <br> <hr>
    Medicine: <?php echo "$medicine"; ?> mg
    <br> <hr>
    Device ID: <?php echo "$dev_id"; ?>
    


    
  </div>
  <div class="column2" style="background-color:#bbb;">
    <h1> Health Condition: </h1> 
    <button class="btn" style="vertical-align:middle" onclick="location.href='logout.php';" > <span> Log OUT </span> </button>    
    <?php 
    $sqlpat_table = " SELECT * FROM `patient` WHERE `phone` = '$user'";
	$result2 = mysqli_query($conn,$sqlpat_table);
    
			
			
		echo "<br/><center>
				<table border='1' id='table' >
				<tr align='center'>
					<td>Blood Pulse Rate <br> (per min)</td>
					<td>Body Temperature <br>(celsius)</td>
					<td>Comment</td>
				</tr>";

	
		while($row2= mysqli_fetch_assoc($result2))
		{
				
			
			echo "<tr>
					<td> <center> ".$row2['blood_pulse']." </center> </td>
					<td><center>".$row2['Temp']."</center></td>
					<td><center>".$comment_view."</center></td>
				</tr>";

		}
				
		echo "</table>
				</center>";
		
		
	

?>
  </div>
</div>

</body>
</html>

<?php
} 

else
{
	header("location:home.php?invalid user");
}
?>
