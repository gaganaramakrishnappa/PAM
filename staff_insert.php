<html>
	<head>
			<link rel="shortcut icon" href="PAM_LOGO.jpg">
			<title id="staff_insert">Staff Insert</title>
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
		<h1 align="center" style="font-size:65px; color: maroon; font-family: Optima; top:5%; left:31%; position:absolute;">Add New Staff Member</h1>
		<div class="staff_insert" style="background-color: transparent; width: 450px; height: 620px; top: 25%; left:37%; position: absolute; border-style: solid; border-color: maroon;">
			<p style="color: black;">
				<b><u>#NOTE</u></b><b>:All fields with * are compulsory</b>
			</p>
			<form action="staff_insert.php" method="POST">
				<legend style="color:maroon;"><b>NEW STAFF DETAILS:</b></legend><br>
				
				<label style="color: maroon;"><b><u>SALARY<sup>*</sup></b></u><input type="number" name="salary" min="2000" required placeholder="salary"></label><br><br>
				
				<label style="color: maroon;"><b><u>NAME<sup>*</sup></b></u><input type="text" name="name" required placeholder="name"></label><br><br>
				
				<label style="color: maroon;"><b><u>EMAIL<sup>*</sup></b></u><input type="email" name="email" required placeholder="email"></label><br><br>
				
				<label style="color: maroon;"><b><u>STAFF_ID<sup>*</sup></b></u><input type="number" name="staff_id" required placeholder="staff_id"></label><br><br>
				
				<label style="color: maroon;"><b><u>EXPERIENCE IN MONTHS<sup>*</sup></b></u><input type="number" name="experience" required placeholder="experience" min="0"></label><br><br>
				
				<label style="color: maroon;"><b><u>POSITION<sup>*</sup></b></u><input type="text" name="position" required placeholder="position"></label><br><br>
				
				<label style="color: maroon;"><b><u>DATE OF JOINING<sup>*</sup></b></u><input type="date" name="doj" required placeholder="date of joining"></label><br><br>
				
				<label style="color: maroon;"><b><u>STORE ID<sup>*</sup></b></u><input type="text" name="store_id" required placeholder="store id"></label><br><br>
				
				<label>
					
					
					<input type="checkbox" name="service" required><b><u>I am not a robot</u></b></label><br><br>
					
					<input type="submit" class="buttonz" name="SUB" value="Add">
					
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
 

if (isset($_POST['store_id']) && !empty($_POST['store_id'])
&&isset($_POST['name']) && !empty($_POST['name'])
&&isset($_POST['salary']) && !empty($_POST['salary'])
&&isset($_POST['email']) && !empty($_POST['email'])
&&isset($_POST['experience']) && !empty($_POST['experience'])
&&isset($_POST['position']) && !empty($_POST['position'])
&&isset($_POST['doj']) && !empty($_POST['doj'])
&&isset($_POST['staff_id']) && !empty($_POST['staff_id']) &&isset($_POST['SUB']))

{

		$store_id=$_POST['store_id'];
                $name=$_POST['name'];
		$staff_id=$_POST['staff_id'];
		$email=$_POST['email'];
		$salary=$_POST['salary'];
		$position=$_POST['position'];
		$experience=$_POST['experience'];
		$doj=$_POST['doj'];
		
		

$result = mysqli_query($conn,"INSERT INTO STAFF (Salary,Staff_Name,Staff_Email, Staff_Id, Experience_Months, Position, Date_Of_Joining, Store_Id) VALUES ($salary, '$name', '$email', $staff_id, $experience, '$position', '$doj', '$store_id')");

		
if($result)
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Records created successfully");
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n").mysqli_error($conn);

}


}



mysqli_close($conn);  






?>
