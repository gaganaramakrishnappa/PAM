<html>
	<head>
			<link rel="shortcut icon" href="PAM_LOGO.jpg">
			<title id="store_insert">Store Insert</title>
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
		<h1 align="center" style="font-size:65px; color: maroon; font-family: Optima; top:5%; left:31%; position:absolute;">Add New Store</h1>
		<div class="store_insert" style="background-color: transparent; width: 450px; height: 620px; top: 25%; left:37%; position: absolute; border-style: solid; border-color: maroon;">
			<p style="color: black;">
				<b><u>#NOTE</u></b><b>:All fields with * are compulsory</b>
			</p>
			<form action="store_insert.php" method="POST">
				<legend style="color:maroon;"><b>NEW STORE DETAILS:</b></legend><br>
				
				<label style="color: maroon;"><b><u>STORE ID<sup>*</sup></b></u><input type="text" name="store_id" required placeholder="store id"></label><br><br>
				
				<label style="color: maroon;"><b><u>NAME<sup>*</sup></b></u><input type="text" name="store_name" required placeholder="name"></label><br><br>
				
				<label style="color: maroon;"><b><u>CITY<sup>*</sup></b></u><input type="text" name="city" required placeholder="city"></label><br><br>
				
				<label style="color: maroon;"><b><u>PH NO<sup>*</sup></b></u><input type="number" name="phno" required placeholder="ph_no"></label><br><br>
				
				<label style="color: maroon;"><b><u>ADDRESS<sup>*</sup></b></u><br><textarea rows="10" cols="45" placeholder= "Address" name="address">
			</textarea>
			<br><br>				
														
					<input type="checkbox" name="service" required><b><u>I am not a robot</u></b></label><br><br>
					
  <input type="submit" name="SUB" class="buttonz" value="Add">
					
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


if (isset($_POST['store_id']) && !empty($_POST['store_id'])
&&isset($_POST['store_name']) && !empty($_POST['store_name'])
&&isset($_POST['city']) && !empty($_POST['city'])
&&isset($_POST['phno']) && !empty($_POST['phno'])
&&isset($_POST['address']) && !empty($_POST['address']) && isset($_POST['SUB']))

{

		$id=$_POST['store_id'];
                $name=$_POST['store_name'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$phno=$_POST['phno'];
		
		
		
		

$result = mysqli_query($conn,"INSERT INTO STORE (Store_Id, Store_Name, City, Store_Phno, Store_Address) VALUES ('$id', '$name', '$city', $phno, '$address')");

		
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records created successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);

}


}



mysqli_close($conn);  






?>
