<html>
	<head>
			<link rel="shortcut icon" href="PAM_LOGO.jpg">
			<title id="store_update">Store Update</title>
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
		<h1 align="center" style="font-size:65px; color: maroon; font-family: Optima; top:5%; left:31%; position:absolute;">Update Existing Store</h1>
		<div class="store_update" style="background-color: transparent; width: 450px; height: 620px; top: 25%; left:37%; position: absolute; border-style: solid; border-color: maroon;">
			<p style="color: black;">
				<b><u>#NOTE</u></b><b>:All fields with * are compulsory</b>
			</p>
			<form action="store_update.php" method="POST">
				<legend style="color:maroon;"><b>EXISTING STORE DETAILS:</b></legend><br>
				
				<label style="color: maroon;"><b><u>STORE ID</b></u><input type="text" name="id" required placeholder="store id"></label>  <br><br>
				
				<label style="color: maroon;"><b><u>NAME</b></u><input type="text" name="name" placeholder="name"></label> 	<input type="submit" class="buttonz" name="upname" value="Update Name of Store"><br><br>
				
				<label style="color: maroon;"><b><u>PH NO</b></u><input type="number" name="phno" placeholder="ph_no"></label>   <input type="submit" class="buttonz" name="upph" value="Update Ph.No of Store"><br><br>
				
				<label style="color: maroon;"><b><u>ADDRESS</b></u><br><textarea name="address" rows="10" cols="45" placeholder= "Address">
			</textarea> <br> <input type="submit" class="buttonz" value="Update Address of Store" name="upad">
			<br><br>				
														
					<input type="checkbox" name="service" required><b><u>I am not a robot</u></b></label><br><br>
					
					
					
					<input type="Reset" class="buttonz">
					
				
			</form>
			<a href="store.html#store"><input type="submit" class="buttonz" name="back" value="Back to Store"></a><br><br>
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
$result = mysqli_query($conn,"UPDATE STORE SET Store_Name='$name' WHERE Store_Id='$id'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records updated successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);



}

if(isset($_POST['address']) && !empty($_POST['address']) && isset($_POST['upad']))
{  

$address=$_POST['address'];
$result = mysqli_query($conn,"UPDATE STORE SET Store_Address='$address' WHERE Store_Id='$id'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records updated successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);


}


if(isset($_POST['phno']) && !empty($_POST['phno']) && isset($_POST['upph']))
{  

$phno=$_POST['phno'];
$result = mysqli_query($conn,"UPDATE STORE SET Store_Phno=$phno WHERE Store_Id='$id'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records updated successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);


}


}


}



mysqli_close($conn);  






?>
