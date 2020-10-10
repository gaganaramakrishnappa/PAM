<html>
<head>

                <title>Axis Payment Portal</title>
                <link rel="shortcut icon" href="axissmall.jpeg">
		

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.hdfc
{


   border-style:groove;
   font-family:Optima;
   border-color:maroon;
   color:maroon;
   margin:auto;
   width:450px;
   height:550px;
   top:100%%
   left:40%
   position:absolute;
   font-size: 25px:
  

}

.whynot
{
  border-style:groove;
  font-family:Optima;
  font-size:15px:
  color:maroon;
  width:200px;
  height:250px;


}

</style>
</head>

<body>
<form action="axisportal.php" method="post">
<img src="axisbig.png" align="center" style="height: 100px; width:200px; left:43%; position:absolute;">

<br><br><br><br><br><br><br>
</form>
<div class="hdfc" align="center">

<br><br><br>



<p>You are being charged by PAM Inc. for the following order: <br></p>


<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname="pam";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$query = "SELECT ORD FROM MISC WHERE STATUS='ONGOING'";
$result=mysqli_query($conn, $query);
$s=mysqli_fetch_assoc($result);

$billno=$s['ORD'];

$sql1="SELECT * FROM BILL WHERE Bill_Number=$billno";
$result1=mysqli_query($conn, $sql1);
$s1=mysqli_fetch_assoc($result1);

$tot=$s1['Bill_Amount'];

echo nl2br("\n\n\n\n\n\n");
echo "Order No: ".$billno;
echo nl2br("\n\n");
echo "Amount to be paid: INR ".((1.2*$tot)+50);
echo nl2br("\nTransaction charges: Rs.3");
echo nl2br("\n\n");
echo "Amount to be paid: INR ".((1.2*$tot)+53);
echo nl2br("\n\n");
		
	  
?>


<b><u><label>Enter secure OTP<sup>*</sup>: <input type=password name=ID required autofocus placeholder="Secure OTP"></label></b></u> <br><br>


<br><br>

<input type="button" onclick="location.href='thankyoupage.php';" value="Complete Payment" align="center" style="top:85%; left:45%; position:absolute;">




</div>
</form>

</body>

</html>

