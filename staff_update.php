<html>
	<head>
			<link rel="shortcut icon" href="PAM_LOGO.jpg">
			<title id="staff_update">Staff Update</title>
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
		<h1 align="center" style="font-size:65px; color: maroon; font-family: Optima; top:5%; left:27%; position:absolute;">Update Existing Staff Member</h1>
		<div class="staff_update" style="background-color: transparent; width: 450px; height: 420px; top: 25%; left:37%; position: absolute; border-style: solid; border-color: maroon;">
			<p style="color: black;">
				<b><u>#NOTE</u></b><b>:All fields with * are compulsory</b>
			</p>
			<form action="staff_update.php" method="POST">
				<legend style="color:maroon;"><b>EXISTING STAFF DETAILS:</b></legend><br>
				

				<label style="color: maroon;"><b><u>STAFF_ID</b></u><input type="number" name="id" required placeholder="staff_id"></label><br><br>


				<label style="color: maroon;"><b><u>SALARY</b></u><input type="number" name="salary" min="2000" placeholder="salary"></label>  <input type="submit" class="buttonz" name="upsal" value="Update Salary"><br><br>
				
				<label style="color: maroon;"><b><u>NAME</b></u><input type="text" name="name"  placeholder="name"></label>  <input type="submit" class="buttonz" value="Update Name" name="upname"><br><br>
				
				
				<label style="color: maroon;"><b><u>POSITION</b></u><input type="text" name="position" placeholder="position"></label>  <input type="submit" class="buttonz" name="uppos" value="Update Position"><br><br>

				
				<label>
					
					
					<input type="checkbox" name="service" required><b><u>I am not a robot</u></b></label><br><br>
					
					
					
					<input type="Reset" class="buttonz"><br><br>
				
			</form>
<a href="staff.html#staff"><input type="submit" class="buttonz" name="back" value="Back to Staff"></a><br><br>

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
$result = mysqli_query($conn,"UPDATE STAFF SET Staff_Name='$name' WHERE Staff_Id=$id");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records updated successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);



}

if(isset($_POST['salary']) && !empty($_POST['salary']) && isset($_POST['upsal']))
{  

$salary=$_POST['salary'];
$result = mysqli_query($conn,"UPDATE STAFF SET Salary=$salary WHERE Staff_Id=$id");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records updated successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);


}


if(isset($_POST['position']) && !empty($_POST['position']) && isset($_POST['uppos']))
{  

$position=$_POST['position'];
$result = mysqli_query($conn,"UPDATE STAFF SET Position='$position' WHERE Staff_Id=$id");
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records updated successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);


}

	

}


}



mysqli_close($conn);  






?>
