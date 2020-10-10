<html>
	<head>
			<link rel="shortcut icon" href="PAM_LOGO.jpg">
			<title id="company_insert">Company Insert</title>
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
		<h1 align="center" style="font-size:65px; color: maroon; font-family: Optima; top:5%; left:31%; position:absolute;">Add New Company</h1>
		<div class="company_insert" style="background-color: transparent; width: 450px; height: 620px; top: 25%; left:37%; position: absolute; border-style: solid; border-color: maroon;">
			<p style="color: black;">
				<b><u>#NOTE</u></b><b>:All fields with * are compulsory</b>
			</p>
			<form action="company_insert.php" method="POST">
				
				<legend style="color:maroon;"><b>NEW COMPANY DETAILS:</b></legend><br>
				
				<label style="color: maroon;"><b><u>NAME<sup>*</sup></b></u><input type="text" name="name" required placeholder="name"></label><br><br>
				
				<label style="color: maroon;"><b><u>COMPANY ID<sup>*</sup></b></u><input type="text" name="id" required placeholder="company id"></label><br><br>
								
				<label style="color: maroon;"><b><u>MANAGER NAME<sup>*</sup></b></u><input type="text" name="manager" required placeholder="manager name"></label><br><br>
				
				<label style="color: maroon;"><b><u>MANAGER PH NO<sup>*</sup></b></u><input type="number" name="phno" required placeholder="manager ph no"></label><br><br>
				
				<label style="color: maroon;"><b><u>CONTRACT TERM<sup>*</sup></b></u><input type="number" name="contract" required placeholder="contract term"></label><br><br>				
														
					<input type="checkbox" name="service" required><b><u>I am not a robot</u></b></label><br><br>
					
					<input type="submit" class="buttonz" name="SUB" value="Add">
					
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


if (isset($_POST['name']) && !empty($_POST['name'])
&&isset($_POST['id']) && !empty($_POST['id'])
&&isset($_POST['manager']) && !empty($_POST['manager'])
&&isset($_POST['phno']) && !empty($_POST['phno'])
&&isset($_POST['contract']) && !empty($_POST['contract']) && isset($_POST['SUB']))

{

		$id=$_POST['id'];
                $name=$_POST['name'];
		$contract=$_POST['contract'];
		$manager=$_POST['manager'];
		$phno=$_POST['phno'];
		
		
		
		

$result = mysqli_query($conn,"INSERT INTO DELIV_COMP(Company_Name,Company_Id, Manager_Name, Manager_Phno, Contract_Term) VALUES ('$name', '$id', '$manager', $phno, $contract)");

		
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records created successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);

}


}



mysqli_close($conn);  






?>
