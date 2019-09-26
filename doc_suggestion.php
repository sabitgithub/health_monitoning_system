<?php
error_reporting(0);
session_start();

if(isset($_GET['Status']))
{
  $user = $_GET['Status'];
}

if(isset($_SESSION['username']))
{

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
		Emargency Suggestion
	</title>
	<center><?php include_once "doctor_header.php";?></center>

<style>
	
	{
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column1 {
    float: left;
    width: 40%;
    padding: 10px;
    height: 600px; /* Should be removed. Only for demonstration */
}
.column2 {
    float: left;
    width: 60%;
    padding: 10px;
    height: 600px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}


.form_area
      {
        position: absolute;
        left: 68%;
        top:20%;        
        height: 98.4%;
        width: 600px;
        position: absolute;       
        background-color:#f1f1f1;
        opacity:.9;

      }
      .form_inner_area
      {
        left: 68%;
        top:25%;  
        height: 200px;
        width: 800px;
        position: absolute;         
      }

      input[type=submit_head] {
      float: right;
      width: 40%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 3px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      top:55%;
      
      
    }

    input[type=submit] {
      width: 20%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 3px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      top:55%;
      
      
    }
    
      input[type=submit]:hover {
      background-color: #45a049;
    }

    
    input[type=text] {
      width: 50%;
      padding: 12px 20px;
      margin: 3px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-family: inherit;
      font-size: 0.95em;
    }
input[type=advice_text] {
      width: 70%;
      padding: 12px 20px;
      margin: 3px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-family: inherit;
      font-size: 0.95em;
    }

    
      input[type=password] {
      width: 50%;
      padding: 12px 20px;
      margin: 3px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-family: inherit;
      font-size: 0.95em;
    }
    
    select {
      width:24.65%;
      padding: 12px 20px;
      margin: 3px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-family: inherit;
      font-size: 0.95em;
    }

    .btn {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.btn:hover {
  background-color: #3e8e41;
  color: white;
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
    Patient Name: <?php echo "$name"; ?>
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
    <h1> Health Suggetion: </h1> 
    <button class="btn" style="vertical-align:middle" onclick="location.href='logout.php';" > <span> Log OUT </span> </button>    
    
  <form action="doc_mail.php" method="post" >
  <br>

<table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td>Name</td>
          <td>:</td>
          <td><input type="text" name="name" size="30" value=" <?php echo "$name"; ?> "></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="text" name="email"  size="30" value="<?php echo "$email"; ?>"></td>
        </tr>
        <tr>
          <td>Emergency Medicine</td>
          <td>:</td>
          <td><input type="text" name="medicine"  size="30" value=""></td>
        </tr>
        <tr>
          <td>Advice</td>
          <td>:</td>
          <td><input type="advice_text" name="advice"  size="100" value="" /> </td>
        </tr>
      </table>
        <input type="submit" name="submit" value="SEND">
  </form>


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
