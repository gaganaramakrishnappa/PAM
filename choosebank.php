<html>

	
<head>
		<title>Netbanking Portal</title>
                <link rel="shortcut icon" href="PAM_LOGO.jpg">
		

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

	body{ background: url("bg11.jpeg") no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}



.select
{
  margin: auto;
   
    width:280px; 
    height:280px;
    border-radius: 25px; 
    padding: 10px;
    font-family:Optima, sans-serif;
    color: white;
    font-size:30px;
    font-weight:900;
   
    
    background:darkred;
    
    font-variant:small-caps;
    top:40%;




}

.select select{
  background: mistyrose;
  line-height: 1;
  border: 0;
  padding: 0;
  border-radius: 0;
  width:85px:

  position: relative;
  z-index: 10;
  font-family:Optima, sans-serif;
  font-size:25px;
  color:darkred;
  
}




.geolocbutton {
    padding-left: 15px;
    width:270px; 

 
    border-radius: 25px; 
  
    font-family:Optima;
    background-color:white;
    color:darkred;
    font-size:25px;
    border-style:solid;
    border-color:darkred;


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

<br><br><br><br><br><br>

<h1 align="center" style="font-family:Optima; color:darkred;">Choose one of the following net banking services</h1>


<br><br><br><br>
<form method="POST" action="choosebank.php">
<p class="select" style="height:150px;">

<input type="radio" name="bank" id="hdfc" required>HDFC Bank<br>

<br>

<input type="radio" name="bank" id="axis" required>Axis Bank<br>



<br><br>
<input type="button" class="buttonz"  onclick=choosebank(); value="Choose bank" align="center">
</p>

</form>

<script>

function choosebank()
{
if (document.getElementById('hdfc').checked) 
{
 location.href="hdfcportal1.html";
}
if (document.getElementById('axis').checked) 
{
 location.href="axisportal1.html";
}

};



</script>




<!------------------------------------------------------------------------------------->
	<div style="background-color: black; width:1300px;height:400px;top:85%; left:3.5%; position: absolute;">
	<div class="div1">
		<p class="p1"><b><u>Order</u></b></p>
		<a href="menu5.html" class="id1" >Deals</a><br><br>
		<a href="menu.html" class="id1">Pizzas</a><br><br>
		<a href="menu2.html" class="id1">Sides</a><br><br>
		<a href="menu3.html" class="id1">Desserts</a><br><br>
		<a href="menu4.html" class="id1">Drinks</a><br><br>
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
		<a href="create_account_page_project.html" class="id6">Sign In/Register</a><br><br>
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
	<a href="homepage1.html"><div class="logo"  style=" height: 85px; width: 100%;top:-1%; position: fixed; font-family:optima;">
			<p><img align="center" src="PAM_LOGO.jpg" style="height: 70px; width: 70px; top:-3%; left: 40%; position: absolute;"><b style=" font-size: 28px; left:45%; top:16%; position: absolute;">PAM....Pizzas And More</b></p>
		</div></a>



</body>




</html>


<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname="pam";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT ORD FROM MISC where STATUS='ONGOING'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$billno=$row['ORD'];

$sql1 = "SELECT * FROM BILL WHERE Bill_Number=$billno";
$result1 = mysqli_query($conn, $sql1);

        while($row1 = mysqli_fetch_assoc($result1)) 
      {
 
           $storeid=$row1['Store_Id'];
	   $email=$row1['Email'];
	   $amt=$row1['Bill_Amount'];	
           $sql2="INSERT INTO PAYMENT (Reference_Number, Mode_Of_Payment, Amount_To_Be_Paid, Email, Store_Id) VALUES ($billno+109, 'NetBanking', ($amt*1.2)+50, '$email', '$storeid')";
           $res= mysqli_query($conn, $sql2);




      }





?>