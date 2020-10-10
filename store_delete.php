<html>
	<head>
			<link rel="shortcut icon" href="PAM_LOGO.jpg">
			<title id="store_delete">Store Delete</title>
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
		<h1 align="center" style="font-size:65px; color: maroon; font-family: Optima; top:5%; left:31%; position:absolute;">Delete Existing Store</h1>
		<div class="store_delete" style="background-color: transparent; width: 450px; height: 530px; top: 25%; left:37%; position: absolute; border-style: solid; border-color: maroon;">
			<p style="color: black;">
				<b><u>#NOTE</u></b><b>:All fields with * are compulsory</b>
			</p>
			<form action="store_delete.php" method="POST">
				<legend style="color:maroon;"><b>EXISTING STORE DETAILS:</b></legend><br>
				
				<label style="color: maroon;"><b><u>STORE ID</b></u><input type="text" name="store_id" placeholder="store id"></label>  <input type="submit" name="delid" class="buttonz" value="Delete With Store ID">
<br><br>
				
				
				<label style="color: maroon;"><b><u>CITY</b></u><input type="text" name="city" placeholder="city"></label>     <input type="submit" class="buttonz" name="delcity" value="Delete All in this City"><br><br>
				
				
				<label style="color: maroon;"><b><u>ADDRESS</b></u><br><textarea rows="10" cols="45" name="address" placeholder= "Address"> 
			</textarea> <br>   <input type="submit" name="deladdress" class="buttonz" value="Delete With Store Address">
			<br><br>	 			
														
					<input type="checkbox" name="service" required><b><u>I am not a robot</u></b></label><br><br>
					
					
					<input type="Reset" class="buttonz"><br><br>
				
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


if (isset($_POST['store_id']) && !empty($_POST['store_id']) &&isset($_POST['delid']))
{  


$id=$_POST['store_id'];
$result = mysqli_query($conn,"DELETE FROM STORE WHERE Store_Id='$id'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records deleted successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);



}

if(isset($_POST['address']) && !empty($_POST['address']) && isset($_POST['deladdress']))
{  

$address=$_POST['address'];
$result = mysqli_query($conn,"DELETE FROM STORE WHERE Store_Address='$address'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records deleted successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);




}

if(isset($_POST['city']) && !empty($_POST['city']) &&isset($_POST['delcity']))
{  

$city=$_POST['city'];
$result = mysqli_query($conn,"DELETE FROM STORE WHERE City='$city'");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records deleted successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);


}
		




}



mysqli_close($conn);  






?>
