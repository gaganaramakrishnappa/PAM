<html>
	<head>
		<link rel="shortcut icon" href="PAM_LOGO.jpg">
		<title id = "create">Register</title>
	<style>
		html { 
  background: url(bg11.jpeg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}	

html
{

 font-family:Optima;
 color:darkred;

}

.buttonz{
    padding-left: 15px;
    width:200px; 
    cursor:pointer;
 
    border-radius: 25px; 
  
    font-family:Optima;
    background-color:white;
    color:darkred;
    font-size:20px;
    border-style:solid;
    border-color:darkred;


}



.id1{
		text-decoration:none;
		color:white;
	}

.p1{
	color:white;
	font-size:17px;
	}

.id2{
	text-decoration:none;
	color:white;
	}	

.p2{
	color:white;
	font-size:17px;
	}

.id3{
		text-decoration:none;
		color:white;
	}

.p3{
	color:white;
	font-size:17px;
}

.id4{
		text-decoration:none;
		color:white;
	}

.p4{
	color:white;
	font-size:17px;
}


.id5{
		text-decoration:none;
		color:white;
	}

.p5{
	color:white;
	font-size:17px;
}

.id6{
		text-decoration:none;
		color:white;
	}

.p6{
	color:white;
	font-size:17px;
}

.div1{

	top:5%;
	left:5%;
	position:absolute;font-size:17px;font-family:sans-serif;
}
.div2{

	top:5%;
	left:20%;
	position:absolute;font-size:17px;font-family:sans-serif;
}.div3{

	top:5%;
	left:35%;
	position:absolute;font-size:17px;font-family:sans-serif;
}.div4{

	top:5%;
	left:50%;
	position:absolute;font-size:17px;font-family:sans-serif;
}
.div5{

	top:5%;
	left:65%;
	position:absolute;font-size:17px;font-family:sans-serif;
}.div6{

	top:5%;
	left:80%;
	position:absolute;font-size:17px;font-family:sans-serif;
}
.img1{
	top:52%;
	left:40%;
	position: absolute;
	color:white;font-size:17px;font-family:sans-serif;
}
.p7{
	top:43%;
	left:42%;
	position: absolute;color:white;font-family:sans-serif;
}
.p8{
	top:57%;
	left:36%;
	position: absolute;	color: white;font-family: sans-serif;

}

.p9{

top:63%;
left:4%;
position: absolute;color:white;font-size:14px;
}


a:hover{
	background-color:darkred;
	text-decoration: none;
	color:white;
}

a
{
color:darkred;

}

.logo
{

background-color: white;

}

.logo:hover
{
   background-color:darkred;

}		






</style>
	</head>
	<body>

				<h1 align="center" style="font-size: 65px; color: maroon; font-family:Optima; top:5%; left:37%; position: absolute; ">Create account</h1>			
			<div class="new_account" style="background-color: transparent; width:450px; height: 1000px; top: 25%; left: 37%; position: absolute; border-style: solid; border-color: maroon;">
			<p style="color:black;">
			<b> <u>#NOTE</u></b><b>: All fields with * are compulsory</b>
			</p>




<form id="register" action="createacc1.php" method="POST">
			
			<legend style="color:maroon;"><b>PERSONAL DETAILS:</b></legend><br>

			<label style="color:maroon;"><b> <u>NAME<sup>*</sup></b></u> <input type= "text" name= "name" required autofocus placeholder="Name"></lablel><br></br>


			<label><b> <u>EMAIL<sup>*</sup></b></u> <input type= "email" name= "email1" required placeholder="Email"></lablel><br></br>

			<label><b> <u>CONFIRM EMAIL<sup>*</sup></b></u> <input type= "email" name= "email2" required placeholder="Confirm email"></lablel><br></br>

			<label><b> <u>PHONE NUMBER<sup>*</sup></b></u> <input type= "text" name= "phno" required placeholder="Phone Number"></label><br></br>

			<label><b> <u>USERNAME<sup>*</sup></b></u> <input type= "text" name= "username" required placeholder="Username"></label><br></br>


			<label><b> <u>PASSWORD<sup>*</sup></b></u> <input type= "password" name="password1" required placeholder="Password"></label><br></br>

			<label><b> <u>CONFIRM PASSWORD<sup>*</sup></b></u> <input type= "password" name="password2" required placeholder="Re-enter Password"></label><br></br>

			<label><b> <u>ENTER DELIVERY ADDRESS<sup>*</sup>:</b></u></label><br></br>
			<textarea rows="10" cols="45" required placeholder="Address" name="address">
			</textarea>
			<br></br>

<label><b><u>CITY:</u><sup>*</sup></b>
<select name="city">
  <option value="Bangalore">Bangalore</option>
  <option value="Mumbai">Mumbai</option>
  <option value="Chennai">Chennai</option>
  <option value="Delhi">New Delhi</option>

</select>
</label>
<br><br>

			
		<label> 
			<input type= "checkbox" name= "service" required><b> <u>I accept the 				terms and conditions</u></b>
			</label><br></br>
			
			
		<a href="PAM _terms_and_conditions.html#terms" style="color: blue;"><b> <u>View terms and conditions</u></b></a>
			<br><br>

		<label> 
			<input type= "checkbox" name= "service" required><b> <u>I am not a robot</u></b>
			</label>
			<br><br>
 


		<input type= "Submit" class="buttonz" action="menu.html" value="Submit">
		<input type= "Reset" class="buttonz">
		<br></br>
</form>
		
			

<a href="login1.php">Already have an account? Log in.</a>

		</div>




<!------------------------------------------------------------------------------------->
	<div style="background-color: black; width:1300px;height:400px;top:175%; left:3.5%; position: absolute;">
	<div class="div1">
		<p class="p1"><b><u>Order</u></b></p>
		<a href="menu5.html" class="id1" >Deals</a><br><br>
		<a href="menu1.php" class="id1">Pizzas</a><br><br>
		<a href="menu2.php" class="id1">Sides</a><br><br>
		<a href="menu3.php" class="id1">Desserts</a><br><br>
		<a href="menu4.php" class="id1">Drinks</a><br><br>
		</div>

	<div class="div2">
		<p class="p2"><b><u>About</u></b></p>
		<a href="aboutus.html" class="id2">About us</a><br><br>
		<a href="nutrition.html" class="id2">Nutrition</a><br><br>
	</div>

	<div class="div3">
		<p class="p3"><b><u>Policy</u></b></p>
		<a href="PAM _terms_and_conditions.html" class="id3">Terms and conditions</a><br><br>
	</div>

	<div class="div4">
		<p class="p4"><b><u>Visit PAM</u></b></p>
		<a href="homepage1.html" class="id4">Locate a store</a><br><br>
	</div>

	<div class=div5>
		<p class="p5"><b><u>Store Locators</u></b></p>
		<a href="Mumbai.html" class="id5">Mumbai</a><br><br>
		<a href="Bangalore.html" class="id5">Bangalore</a><br><br>
		<a href="Chennai.html" class="id5">Chennai</a><br><br>
		<a href="Delhi.html" class="id5">Delhi</a><br><br>
	</div>

	<div class="div6">
		<p class="p6"><b><u>My PAM</u></b></p>
		<a href="createacc1.php" class="id6">Sign In/Register</a><br><br>
	</div>
	<div class="div7">
		<p class="p7">Like Us</p><br>
		<img src="like.png" height=29px weight=29px class="img1"><br>
		<p class="p8">@2018,PAM ,LLC,All rights reserved</p>

		<p class="p9">Order a delicious pizza on the go,anywhere,anytime,PAM is happy to assist you with your home deliviry,Every time you order,you get a hot and fresh pizza delivered at your doorstep in less than thirty minutes</p>

		<p style="top:68%;left:41%;position: absolute;color:white;">T&CApply,</p>
		<p  style="top:73%;left:36%;position: absolute;color:white;">Hurry up and place your order now!!!</p>

	</div>
		</div>
	</div>
<!-------------------------------------------------------------------------------------->
	<a href="homepage1.html"><div class="logo"  style=" height: 85px; width: 100%;top:-1%; position: fixed; font-family:Optima;">
			<p><img align="center" src="PAM_LOGO.jpg" style="height: 70px; width: 70px; top:-3%; left: 40%; position: absolute;"><b style=" font-size: 28px; left:45%; top:16%; position: absolute;">PAM....Pizzas And More</b></p>
		</div></a>



<div style="top:51%; left:54%; position:absolute; color:blue;">



<?php

function validashunz()
{

$pwd=htmlspecialchars($_POST['password1']);
$pwd2=htmlspecialchars($_POST['password2']);

$emid1=htmlspecialchars($_POST['email1']);
$emid2=htmlspecialchars($_POST['email2']);


$var2="useless";
$var1="useful";
$var3="aimless";
   
  if(strcmp($emid1, $emid2))
   {  
      $var3="NOMATCH";
      echo nl2br("\n\n&emsp;&emsp;&emsp;Emails don't match");
   }


if (strlen($pwd) < 8 || (!preg_match("#[0-9]+#", $pwd))||!(preg_match("#[a-zA-Z]+#",$pwd)))
    {  $var1="NOTSTRONG";
       


       if(!strcmp($var3,"NOMATCH"))
      {
        echo nl2br("\n\n\n\n\n\n\nPassword not strong&emsp;&emsp;&emsp;&emsp;&emsp;Please include 8 characters, and at least 1 number");
      }
      else
      {

        echo nl2br("\n\n\n\n\n\n\n\n\nPassword not strong&emsp;&emsp;&emsp;&emsp;&emsp;Please include 8 characters, and at least 1 number");

       }


     }

 if(strcmp($pwd, $pwd2))
   {  
      $var2="NOMATCH";

      if(!strcmp($var3,"NOMATCH") && !strcmp($var1,"NOTSTRONG"))
      {echo nl2br("\n\n&emsp;&emsp;&emsp;&emsp;Passwords don't match");}
      else
{ 

if(!strcmp($var3,"NOMATCH") && strcmp($var1,"NOTSTRONG"))
{echo nl2br("\n\n\n\n\n\n\n\n\n&emsp;&emsp;&emsp;&emsp;Passwords don't match");}
else
{

if(strcmp($var3,"NOMATCH") && !strcmp($var1,"NOTSTRONG"))
{echo nl2br("\n\n&emsp;&emsp;&emsp;&emsp;Passwords don't match");}

}


}

}

   
  

if(!(strcmp($var1,"useful")) && !(strcmp($var2,"useless")) && !(strcmp($var3,"aimless")))
   {  


$servername = "localhost";
$username = "username";
$password = "password";
$dbname="pam";

$conn = mysqli_connect($servername, $username, $password, $dbname);
	


		$username=$_POST['username'];
                $name=$_POST['name'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$phno=$_POST['phno'];
		
		
		
		

$query = mysqli_query($conn,"
select * FROM user_details WHERE user_name = '$user' ");
		$rows = mysqli_num_rows($query);
		if($rows >= 1)
		{        echo nl2br("\n\n\n\n\n\n\n&emsp;&emsp;&emsp;Username has been taken!");
			 
		}
		else
		{
		     
$sql="INSERT INTO CUSTOMER (Cust_Name,Username,Address,Customer_City,Email,Password,Phone_Number) VALUES ('$name','$username','$address','$city','$emid1','$pwd','$phno')";

		

if (mysqli_query($conn, $sql)) {
    echo "\n";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);


        echo "<script>location.href='homepage2.html'; </script>";
        exit;
        
   }
}


}



if ($_SERVER["REQUEST_METHOD"] == "POST")
{


if (isset($_POST['password1']) && !empty($_POST['password1'])
&&isset($_POST['password2']) && !empty($_POST['password2'])
&&isset($_POST['email1']) && !empty($_POST['email1'])
&&isset($_POST['email2']) && !empty($_POST['email2'])
&&isset($_POST['name']) && !empty($_POST['name'])
&&isset($_POST['username']) && !empty($_POST['username'])
&&isset($_POST['phno']) && !empty($_POST['phno'])
&&isset($_POST['address']) && !empty($_POST['address'])
&&isset($_POST['city']) && !empty($_POST['city']))
{


        validashunz();
}


}


?>
</div>



</body>
</html>
