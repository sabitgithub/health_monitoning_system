<?php
error_reporting(0);
session_start();


if(isset($_SESSION['username']))
{


$user = $_SESSION['username'];
$name = "";
$phone = "";
$email= "";
$bdmc_reg="";
$comment_view= "";
$set_cmnt_color="";
$imgdir="http://localhost:85/diba_project/";


$conn = mysqli_connect('localhost', 'id7008650_root', '123456', 'id7008650_diba_project');
			
			
			
			$sqldoct = " SELECT * FROM `doctor` WHERE `phone` = '$user'";
			$result1 = mysqli_query($conn,$sqldoct);
				
        while($row = mysqli_fetch_assoc($result1))
					{
		
					$phone =  $row['phone'];
					$name =  $row['name'];
					$email =  $row['email'];
          $bdmc_reg = $row['bmdc_reg'];
          $photo = $row['photo'];
					 
					}

					

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Doctor Dashboard
	</title>
	<center><?php include_once "doctor_header.php";?></center>

<style>
	
	{
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column1 {
    float: left;
    width: 20%;
    padding: 10px;
    height: 600px; /* Should be removed. Only for demonstration */
}
.column2 {
    float: left;
    width: 80%;
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
  <div class="column1" style="background-color:#669999;">
   	<img src="<?php echo $photo;?>" height="200" width="150">
   	<br> <br>
    Name: <?php echo "$name"; ?>
    <br> <hr>
    Phone: <?php echo "$phone"; ?>
    <br> <hr>
    Email: <?php echo "$email"; ?>
    <br> <hr>
    BM_and_DC Reg: <?php echo "$bdmc_reg"; ?>
    


    
  </div>
  <div class="column2" style="background-color:#999966;">
    <h1> Patient Log Book: </h1> 
    <button class="btn" style="vertical-align:middle" onclick="location.href='logout.php';" > <span> Log OUT </span> </button>    
    <?php 
		

		echo "<br/><center>
				<table border='1' id='table' >
				<tr align='center'>
					<td>Patient_Name</td>
          <td>Email</td>
          <td>Cell</td>
          <td>Age</td>
          <td>Heart_Activity</td>
          <td>Blood Pulse Rate <br> (per min)</td>
					<td>Body Temperature <br>(celsius)</td>
					<td>Comment</td>
				</tr>";

	

    
      $sqlpat = " SELECT * FROM `patient` ";
      $result2 = mysqli_query($conn,$sqlpat);

		while($row2= mysqli_fetch_assoc($result2))
		{
				
        $blood_pulse =  trim($row2['blood_pulse']);

        if($blood_pulse < "70")
          {
           $comment_view = "Low Pulse Rate";
           $set_cmnt_color="#800000";
          }
          if($blood_pulse > "70")
          {
           $comment_view = "High Pulse Rate";
           $set_cmnt_color="#800000";
          }
          if($blood_pulse == "70")
          {
           $comment_view = "Good Pulse Rate";
           $set_cmnt_color="#cbcbb4";
          }


			
			echo "<tr>
					<td> <center> <a href='http:doc_suggestion.php?Status=".$row2['phone']."'>  ".$row2['name']." </center> </td>
          <td><center>".$row2['email']."</center> </td>
          <td><center>".$row2['phone']."</center> </td>
					<td><center>".$row2['age']."</center> </td>
          <td><center>".$row2['heart_dis']."</center> </td>
          <td><center>".$row2['blood_pulse']."</center> </td>
          <td><center>".$row2['Temp']."</center> </td>
          <td style='color:".$set_cmnt_color."'><center>".$comment_view."</center> </td>
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
