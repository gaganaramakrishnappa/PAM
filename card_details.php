<html>
	<head>
		<link rel="shortcut icon" href="PAM_LOGO.jpg">
		<title>Credit Card Payment Gateway</title>
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
		.credit-card{
			width: 360px;
			height: 400px;
			margin: 60px auto 0;
			border: 1px solid #ddd;
			border-radius: 6px;
			background-color: #fff;
			box-shadow: 1px 2px 3px 0 rgba(0,0,0,.10);
}
		.form-header{
		height: 60px;
		padding: 20px 30px 0;
		border-bottom: 1px solid #e1e8ee;
}
		.form-body{
		height: 340px;
		padding: 30px 30px 20px;
}
		.title{
		font-size: 18px;
		margin: 0;
		color: #5e6977;
}
		.card-number,
		.cvv-input input,
		.month select,
		.year select{
			font-size: 14px
			font-weight: 100; 
			line-height: 14px;
}
		.card-number,
		.month select,
		.year select{
			font-size: 14px
			font-weight: 100; 
			line-height: 14px;
}
		.card-number,
		.cvv-details,
		.cvv-input input,
		.month select,
		.year select{
			opacity: .7;
			color: #86939e;
}
		.card-number{
			width: 100%
			margin-bottom: 20px;
			padding-left: 20px;
			border: 2px solid #e1e8ee;
			border-radius: 6px;
}
		.card-name{
			width: 100%
			margin-bottom: 20px;
			padding-left: 20px;
			border: 2px solid #e1e8ee;
			border-radius: 6px;
}

		.month select,
		.year select{
			width: 145px;
			margin-bottom: 20px;
			padding-left: 20px;
			border: 2px solid #e1e8ee;
			border-radius: 6px;
			background: url('caret.png') no-repeat;
			background-position: 85% 50%;
			-moz-appearance: none;
			webkit-appearance: none;
}
		.month select{
			float: left;
}
		.year select{
			float: right;
}
		.cvv-input input{
			float: left;
			width: 145px;
			padding-left: 20px;
			border: 2px solid #e1e8ee;
			border-radius: 6px;
			background: #fff;
}
		.cvv-details{
			font-size: 12px;
			font-weight: 300;
			line-height: 16px;
			float: right;
			margin-bottom: 20px;
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
	<a href="homepage1.html"><div class="logo"  style="height: 85px; width: 100%;top:-1%; position: fixed; font-family:Optima;">
			<p><img align="center" src="PAM_LOGO.jpg" style="height: 70px; width: 70px; top:-3%; left: 40%; position: absolute;"><b style=" font-size: 28px; left:45%; top:16%; position: absolute;">PAM....Pizzas And More</b></p>
		</div></a>


		<form class= "credit-card" style="top:7%; left:38%; position: absolute;" method="POST" action="card_details.php">
			<div class="form-header">
				<h1 class="title">Credit Card details</h1>
			</div>
			<div class="form-body">
				<input type="text" class="card-number" placeholder="Card Number" required><br><br>
				<input type="text" class="card-name" placeholder="Name of Card Holder" required><br><br>
				<div class="date-field">
				<div class="month">
				<select name="month">
					<option value="Select">Expiration Month</option>
					<option value="January">January</option>
					<option value="February"> February </option>
					<option value="March">March</option>
					<option value="April"> April </option>
					<option value="May"> May </option>
					<option value="June"> June </option>
					<option value="July"> July </option>
					<option value="August"> August </option>
					<option value="September"> September </option>
					<option value="October"> October </option>
					<option value="November"> November </option>
					<option value="December"> December </option>
				</select>
				</div>
				<div class="year">
				<select name="year">
				<option value="Select-year">Expiration Year</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				<option value="2025">2025</option>
				<option value="2026">2026</option>
				</select>
				</div>
				</div>
				<div class="cvv-input">
					<input type="password" placeholder="CVV" required><br><br><br>
					<p>***CVV is the three or four digits usually found on the signature strip</p>
					</div>
				<input class="proceed-btn" type="submit" value="Proceed" name="BYE"></input>
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
           $sql2="INSERT INTO PAYMENT (Reference_Number, Mode_Of_Payment, Amount_To_Be_Paid, Email, Store_Id) VALUES ($billno+109, 'Card', ($amt*1.2)+50, '$email', '$storeid')";
           $res= mysqli_query($conn, $sql2);




      }

if(isset($_POST["BYE"]))
{

echo "<script> location.href='thankyoupage.php'; </script>";
        exit;
}



?>