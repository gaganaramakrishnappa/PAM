<html>
	<head>
			<link rel="shortcut icon" href="PAM_LOGO.jpg">
			<title id="company_delete">Company Delete</title>
		<style>
			html{
				background: url(bg11.jpeg) no-repeat center center fixed;
				-webkit-background-size:cover;
				-moz-background-size:cover;
				-o-background-size:cover;
				background-size:cover;
			}
			html
			{
				font-family: Optima;
				color:darkred;
			}
			.buttonz{
				padding-left: 15px;
				width:200px
				cursor:pointer;
				
				border-radius: 25px;
				
				font-family:Optima;
				background-color:white;
				color:darkred;
				font-size:20px;
				border-style: solid;
				border-color: darkred;
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
		<h1 align="center" style="font-size:65px; color: maroon; font-family: Optima; top:5%; left:31%; position:absolute;">Delete Existing Company</h1>
		<div class="company_delete" style="background-color: transparent; width: 450px; height: 400px; top: 25%; left:37%; position: absolute; border-style: solid; border-color: maroon;">
			<p style="color: black;">
				<b><u>#NOTE</u></b><b>:All fields with * are compulsory</b>
			</p>
			<form action="company_delete.php" method="POST">
				
				<legend style="color:maroon;"><b>EXISTING COMPANY DETAILS:</b></legend><br>
				
				<label style="color: maroon;"><b><u>NAME</b></u><input type="text" name="name" placeholder="name"></label> <input type="submit" class="buttonz" name="delname" value="Delete using Name"><br><br>
				
				<label style="color: maroon;"><b><u>COMPANY ID</b></u><input type="text" name="id" placeholder="company id"></label> <br><br>  <input type="submit" class="buttonz" name="delid" value="Delete using Company ID"><br><br>
										
														<br>
					<input type="checkbox" name="service" required><b><u>I am not a robot</u></b></label><br><br>
					
				
					
					<input type="Reset" class="buttonz"><br><br>
				
			</form>
<a href="company.html#company"><input type="submit" class="buttonz" name="back" value="Back to Company"></a><br><br>
		</div>
<!-------------------------------------------------------------------------------------->
	<div class="logo"  style=" height: 85px; width: 100%;top:-1%; position: fixed; font-family:Optima;">
			<p><img align="center" src="PAM_LOGO.jpg" style="height: 70px; width: 70px; top:-3%; left: 40%; position: absolute;"><b style=" font-size: 28px; left:45%; top:16%; position: absolute;">PAM....Pizzas And More</b></p>
		</div>
	</body>

	</html>


<?php


$servername = "localhost";
$username = "username";
$password = "password";
$dbname="pam";

$conn= mysqli_connect($servername, $username, $password, $dbname);
	
if ($_SERVER["REQUEST_METHOD"] == "POST")
{


if (isset($_POST['id']) && !empty($_POST['id']) &&isset($_POST['delid']))
{  


$id=$_POST['id'];
$result = mysqli_query($conn,"DELETE FROM DELIV_COMP WHERE Company_Id='$id'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records deleted successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);



}

if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['delname']))
{  

$name=$_POST['name'];
$result = mysqli_query($conn,"DELETE FROM DELIV_COMP WHERE Company_Name='$name'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records deleted successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);




}	




}



mysqli_close($conn);  






?>
