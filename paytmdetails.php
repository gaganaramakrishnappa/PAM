<html>
	<head>
		<link rel="shortcut icon" href="PAM_LOGO.jpg">
		<title>Paytm Payment Gateway</title>
		<style>	
			html { 
  background: url(bg7.jpeg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
	
	*{
				box-sizing:border-box;
			}
			body,
			html{
			height: 100%;
			min-height: 100%;
}
		.paytm{
			width: 360px;
			height: 400px;
			margin: 60px auto 0;
			border: 1px solid #ddd;
			border-radius: 6px;
			background-color: #fff;
			box-shadow: 1px 2px 3px 0 rgba(0,0,0,.10);
}
		.fporm-header{
		height: 60px;
		padding: 20px 30px 0;
		border-bottom: 1px solid #e1e8ee;
}
		.pform-body{
		height: 340px;
		padding: 30px 30px 20px;
}
		.title{
		font-size: 25px;
		margin: 0;
		color: #5e6977;
}
		.user-name,
		.password,
		.number input{
			font-size: 14px
			font-weight: 100; 
			line-height: 14px;
}
		.user-name,
		.password,
		.number input{
			font-size: 14px
			font-weight: 100; 
			line-height: 14px;
}
		.user-name,
		.password,
		.number input{
			opacity: .7;
			color: #86939e;
}
		.user-name{
			width: 100%
			margin-bottom: 20px;
			padding-left: 20px;
			border: 2px solid #e1e8ee;
			border-radius: 6px;
}
		.password{
			width: 100%
			margin-bottom: 20px;
			padding-left: 20px;
			border: 2px solid #e1e8ee;
			border-radius: 6px;
}
		.number{
			width: 100%
			margin-bottom: 20px;
			padding-left: 20px;
			border: 2px solid #e1e8ee;
			border-radius: 6px;
}


		.proceed-btn{
			cursor: pointer;
			font-size: 16px;
			width: 100%
			border-color: transparent;
			border-radius: 6px;
			margin-bottom: 10px;
			background: #7dc855;
}
		.proceed-btn a{
			text-decoration: none;
			color: #fff;
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
		

<!-------------------------------------------------------------------------------------->
	<a href="homepage1.html"><div class="logo"  style=" height: 85px; width: 100%;top:-1%; position: fixed; font-family:Optima;">
			<p><img align="center" src="PAM_LOGO.jpg" style="height: 70px; width: 70px; top:-3%; left: 40%; position: absolute;"><b style=" font-size: 28px; left:45%; top:16%; position: absolute;">PAM....Pizzas And More</b></p>
		</div></a>

<form class= "paytm" style="top:7%; left:38%; position: absolute;" action="paytmdetails.php" method="post">
			<div class="pform-header">
				<h1 class="title">Paytm login details</h1>
			</div>
			<br>
			<hr>
			<div class="pform-body">
				<input type="text" class="user-name" placeholder="Username" required><br><br>
				<input type="password" class="password" placeholder="Password" required><br><br>
				<input type="text" class="number" placeholder="Mobile number" required><br><br>
				<input class="proceed-btn" type="submit" name="BYE" value="Proceed" ></input><br><br>
				<img src="paytm.jpeg" alt="paytm" align="center" title="paytm" height= "135" width ="280"/>
			</div>
		</form>
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
           $sql2="INSERT INTO PAYMENT (Reference_Number, Mode_Of_Payment, Amount_To_Be_Paid, Email, Store_Id) VALUES ($billno+109, 'PayTM', ($amt*1.2)+50, '$email', '$storeid')";
           $res= mysqli_query($conn, $sql2);




      }

if(isset($_POST["BYE"]))
echo "<script>location.href='thankyoupage.php'</script>";



?>