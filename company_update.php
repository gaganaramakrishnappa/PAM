<html>
	<head>
			<link rel="shortcut icon" href="PAM_LOGO.jpg">
			<title id="company_update">Company Update</title>
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
		<h1 align="center" style="font-size:65px; color: maroon; font-family: Optima; top:5%; left:31%; position:absolute;">Update Existing Company</h1>
		<div class="company_update" style="background-color: transparent; width: 450px; height: 660px; top: 25%; left:37%; position: absolute; border-style: solid; border-color: maroon;">
			<p style="color: black;">
				<b><u>#NOTE</u></b><b>:All fields with * are compulsory</b>
			</p>
			<form action="company_update.php" method="POST">
				
				<legend style="color:maroon;"><b>EXISTING COMPANY DETAILS:</b></legend><br>
				
				
				<label style="color: maroon;"><b><u>COMPANY ID</b></u><input type="text" name="id" required placeholder="company id"></label><br><br>

				<label style="color: maroon;"><b><u>NAME</b></u><input type="text" name="name" placeholder="name"></label> <br><br>   <input type="submit" class="buttonz" name="upname" value="Update using Name"><br><br>
								
				<label style="color: maroon;"><b><u>MANAGER NAME</b></u><input type="text" name="manager" placeholder="manager name"></label>  <br><br>  <input type="submit" class="buttonz" name="upman" value="Update Manager Name"><br><br>
				
				<label style="color: maroon;"><b><u>MANAGER PH NO</b></u><input type="number" name="phno" placeholder="manager ph no"></label> <br><br>   <input type="submit" class="buttonz" name="upph" value="Update Manager phno."><br><br>
				
				<label style="color: maroon;"><b><u>CONTRACT TERM</b></u><input type="number" name="contract" placeholder="contract term"></label> <br><br>  <input type="submit" class="buttonz" name="upcon" value="Update Contract Term"><br><br>				
														
				<br><br>	<input type="checkbox" name="service" required><b><u>I am not a robot</u></b></label><br><br>
					
					
					
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



if (isset($_POST['id']) && !empty($_POST['id']))
{

$id=$_POST['id'];



if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['upname']))
{

$name=$_POST['name'];
$result = mysqli_query($conn,"UPDATE DELIV_COMP SET Company_Name='$name' WHERE Company_Id='$id'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records updated successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);



}

if(isset($_POST['manager']) && !empty($_POST['manager']) && isset($_POST['upman']))
{  

$manager=$_POST['manager'];
$result = mysqli_query($conn,"UPDATE DELIV_COMP SET Manager_Name='$manager' WHERE Company_Id='$id'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records updated successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);


}


if(isset($_POST['phno']) && !empty($_POST['phno']) && isset($_POST['upph']))
{  

$phno=$_POST['phno'];
$result = mysqli_query($conn,"UPDATE DELIV_COMP SET Manager_Phno=$phno WHERE Company_Id='$id'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records updated successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);


}

if(isset($_POST['contract']) && !empty($_POST['contract']) && isset($_POST['upcon']))
{  

$con=$_POST['contract'];
$result = mysqli_query($conn,"UPDATE DELIV_COMP SET Contract_Term=$con WHERE Company_Id='$id'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records updated successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);


}	

}


}



mysqli_close($conn);  






?>
