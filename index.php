<!DOCTYPE html>
<html>
<head>
	<title>
		Patient Care Online
	</title>

	<center><?php include_once "home_header.html";?></center>
	<style>
		
		.column {
    float: left;
    width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */ 
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
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



	</style>
</head>

<body>

	<div class="row">
  <div class="column">
  	<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"> </div>
    <img src="img/img1.jpg" style="width:100%">
    <div class="text"> </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"> </div>
    <img src="img/img2.jpg" style="width:100%">
    <div class="text"> </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"> </div>
    <img src="img/img3.jpg" style="width:100%">
    <div class="text"> </div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
  </div>

  <div class="column">

<div class="header">
  <a href="#default" class="logo">Online Health Care LTD.</a>
  <div class="header-right">
    <button class="btn" onclick="loginHide()" >Login</button>    
    <button class="btn" onclick="regHide()" >Registration</button>    
    </div>
</div>  	

<div id = "login_div" class="form_inner_area" style="display:none">
  <br>
<br>
	<form action="login.php" method="post">
	<br>
		<input type="text" name="uname" placeholder="Username" size="30" value="" />
		<input type="password" name="password" placeholder="Password" size="30" value="" />
		<br>
		<input name = "rm" type = "checkbox" value= "rm"> Remember Me </br>
		<br>
		<button type="submit" name="Login" class="btn">Login </button>
		</form>
		<button class="btn" onclick="forgetHide()">Forget Password </button>

	
</div>

<div id = "forget_div" class="form_inner_area" style="display:none">
	<form action="login.php" method="post">
	<br>
		<input type="text" name="uname" placeholder="Username" size="30" value="" />
		<input type="password" name="password" placeholder="Password" size="30" value="" />
		<br>
		<button type="submit" name="forget_check" class="btn">Submit </button>

	</form>
</div>

<div id = "reg_div"  style="display:none" >
	
    <button class="btn" onclick="doctor_reg()" >Doctor</button>    
    <button class="btn" onclick="patient_reg()" >Patient</button>    

</div>

<div id ="doc_reg" style="display: none;">

<form action="doc_registration.php" method="post" enctype="multipart/form-data" >
  <br>
  First Name : <input type="text" name="fname" placeholder="First Name" size="30" value="" />
  <br>
  Last Name : <input type="text" name="lname" placeholder="Last Name" size="30" value="" />
  <br>
  Phone : <input type="text" name="phone" placeholder="Phone" size="30" value="" />
  <br>
  Email : <input type="text" name="email" placeholder="Email" size="30" value="" />
  <br>
  <fieldset>
              <legend>Gender</legend>    
              <input name="gender" id="type" type="radio" value="male">Male
              <input name="gender" id="type" type="radio" value="female">Female
              <input name="gender" id="type" type="radio" value="other">Other
            </fieldset>
  <br>
  Doctor BM_DC reg : <input type="text" name="bmdc_reg" placeholder=" BM&DC NO" size="30" value="" />
  <br>
  Password: <input type="password" name="password" placeholder="Password" size="30" value="" />
  <br>
  Upload Image: <input type="file" name="uploadfile" value="uploadfile" /> 
  <br>
    <button type="submit" name="submit" class="btn"> Submit </button>
  </form>

  </div>


  <div id ="pat_reg" style="display: none;">

<form action="pat_registration.php" method="post" enctype="multipart/form-data" >
  <br>
  First Name : <input type="text" name="fname" placeholder="First Name" size="30" value="" />
  <br>
  Last Name : <input type="text" name="lname" placeholder="Last Name" size="30" value="" />
  <br>
  Phone : <input type="text" name="phone" placeholder="Phone" size="30" value="" />
  <br>
  Email : <input type="text" name="email" placeholder="Email" size="30" value="" />
  <br>
  Password: <input type="password" name="password" placeholder="Password" size="30" value="" />
  <br>
  <fieldset>
              <legend>Gender</legend>    
              <input name="gender" id="type" type="radio" value="male">Male
              <input name="gender" id="type" type="radio" value="female">Female
              <input name="gender" id="type" type="radio" value="other">Other
            </fieldset>
  
  <br>
Blood Group : <input type="text" name="blood_group" placeholder="Blood Group ID" size="30" value="" />
  <br>
Age : <input type="text" name="age" placeholder="Age" size="30" value="" />
  <br>
  Weight : <input type="text" name="weight" placeholder="Weight" size="30" value="" />
  <br>
Heart Disease : <input type="text" name="heart_disease" placeholder="Pre. Heart Problem" size="30" value="" />
  <br>
Blood Pulse Rate : <input type="text" name="blood_pul_rate" placeholder="BP RATE" size="30" value="" />
  <br>
Majority : <input type="text" name="majority" placeholder="Majority" size="30" value="" />
  <br>
Medicine : <input type="text" name="medicine" placeholder="medicine" size="30" value="" />
  <br>
Patient ID : <input type="text" name="dev_id" placeholder="Device ID" size="30" value="" />
<br>
Upload Image: <input type="file" name="uploadfile" value="uploadfile" /> 
<br>


    <button type="submit" name="submit" class="btn"> Submit </button>
  </form>

  </div>


  </div>
</div>

<script>
	
	var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}


function loginHide() {
    var x = document.getElementById("login_div");
    var y = document.getElementById("reg_div");
    var z = document.getElementById("forget_div");
    var a = document.getElementById("doc_reg");
    var b = document.getElementById("pat_reg");
    if (y.style.display == "block")
    {
    	y.style.display = "none"
    }
    if (z.style.display == "block")
    {
    	z.style.display = "none"
    }
    if (a.style.display == "block")
    {
      a.style.display = "none"
    }
    if (b.style.display == "block")
    {
      b.style.display = "none"
    }

    x.style.display = "block"


    
}

function regHide() {
    var x = document.getElementById("reg_div");
    var y = document.getElementById("login_div");
    var z = document.getElementById("forget_div");
    var a = document.getElementById("doc_reg");
    var b = document.getElementById("pat_reg");
    

    if (y.style.display == "block")
    {
    	y.style.display = "none"
    }
    if (z.style.display == "block")
    {
    	z.style.display = "none"
    }
    if (a.style.display == "block")
    {
      a.style.display = "none"
    }

    if (b.style.display == "block")
    {
      b.style.display = "none"
    }

    x.style.display = "block"
  }

function patient_reg() {
    var x = document.getElementById("reg_div");
    var y = document.getElementById("pat_reg");
    var z = document.getElementById("doc_reg");
    
    if (x.style.display == "block")
    {
      x.style.display = "none"
    }
    if (z.style.display == "block")
    {
      z.style.display = "none"
    }

    y.style.display = "block"
  }

  function doctor_reg() {
    var x = document.getElementById("reg_div");
    var y = document.getElementById("doc_reg");
    var z = document.getElementById("pat_reg");

    if (x.style.display == "block")
    {
      x.style.display = "none"
    }

    if (z.style.display == "block")
    {
      z.style.display = "none"
    }

    y.style.display = "block"
  }


function forgetHide() 
{
    var x = document.getElementById("forget_div");
    var y = document.getElementById("login_div");
    if (y.style.display == "block")
    {
    	y.style.display = "none"
    }
    x.style.display = "block"
  }



</script>
</body>
</html>