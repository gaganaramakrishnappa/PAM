<html>
	<head>
		<head>
		<link rel="shortcut icon" href="PAM_LOGO.jpg">
		<title>Menu</title>
		<style>
		html { 
  			background: url(bg11.jpeg) no-repeat center center fixed; 
  			-webkit-background-size: cover;
  			-moz-background-size: cover;
  			-o-background-size: cover;
  			background-size: cover;
			}


.deals,.pizzas,.sides,.drinks,.desserts
{

	background-color:white;
	width:100px;
	height:30px;
	position:absolute;
}

div:link{
	color:black;
	text-decoration:none;
	
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
		<br>		

		<div class="Dessertzz">

<form action="menu3.php" method="post">
			<div class="d1" style="top:35%; left:6%; position:absolute; width:240px; height:290px; background-color:white;">
			<img align="center" src="new-Choco-Volcano-Cake.jpg" style="height: 157px; width: 235px; top:1%; left: 1%; right:1%; position: absolute;">
		<p class="font1" style=" top:50%; left:1%; position:absolute;">
				<b style="font-size: 20px;">Choco Volcano Cake</b>
				<br>
				Choco Delight With A Gooey Chocolate Volcano Centre

​
		
			<br>		
			<input class="proceed-btn" type="submit" name="volcano" value="Add"></input>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Rs.60
				<img align="right" src="veg.jpeg" style="height: 15px; width: 15px; top:100%; right:1%; position: absolute;">
			</p>


		</div>	

			<div class="d2" style="top:35%; left:24%; position:absolute; width:240px; height:290px; background-color:white;">
			<img align="center" src="Choco Truffle Cake.jpg" style="height: 157px; width: 235px; top:1%; left: 1%; right:1%; position: absolute;">
			<p class="font1" style=" top:50%; left:1%; position:absolute;">
				<b style="font-size: 20px;">Choco Truffle Cake</b>
				<br>
				Classic Favourite. Rich Choco Cake
		
			<br>
			<br>		
			<input class="proceed-btn" type="submit" name="truffle" value="Add"></input>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Rs.60
				<img align="right" src="veg.jpeg" style="height: 15px; width: 15px; top:100%; right:1%; position: absolute;">
			</p>
		</div>	

</form>
		</div>


<a href="cartfinal.php">
<input type="button" value="Proceed to Checkout" align="center" style="top:80%; left:37%; position:absolute;">
</a>

<!-------------------------------------------------------------------------------------->
	<a href="homepage1.html"><div class="logo"  style=" height: 85px; width: 100%;top:-1%; position: fixed; font-family:Optima;">
			<p><img align="center" src="PAM_LOGO.jpg" style="height: 70px; width: 70px; top:-3%; left: 40%; position: absolute;"><b style=" font-size: 28px; left:45%; top:16%; position: absolute;">PAM....Pizzas And More</b></p>
		</div></a>

		




<div class="tabs" style="background-color: white; left:0%; top: 15%; position: fixed; width: 100%; height: 30px;">
			<div class="deals" style=" left:0%; top: -1%; border-style: solid;text-align:center;">
				<a href="menu5.html" class="deals" style="text-decoration:none; left:0%; top: -1%; position:absolute; text-align:center; ">DEALS</a>
			</div>
			<div class="pizzas" style="left:7%; top: -1%; position: absolute; border-style: solid;text-align:center;">
				<a href="menu1.php"  class="pizzas" style="text-decoration:none; left:0%; top: -1%; position:absolute; text-align:center; ">PIZZAS</a>
			</div>
			<div class="sides" style=" left:14%; top: -1%; position: absolute;  border-style: solid;text-align:center;">
				<a href="menu2.php" class="sides" style="text-decoration:none; left:0%; top: -1%; position:absolute; text-align:center; ">SIDES</a>
			</div>
			<div class="desserts" style=" left:21%; top: -1%; position: absolute; border-style: solid;">
				<a href="menu3.php" class="desserts" style="text-decoration:none; left:0%; top: -1%; position:absolute; text-align:center;">DESSERTS</a>
			</div>
			<div class="drinks" style=" left:28%; top: -1%; position: absolute; border-style: solid;">
				<a href="menu4.php" class="drinks" style="text-decoration:none; left:0%; top: -1%; position:absolute; text-align:center;">DRINKS</a>
			</div>
		</div>

?>
</body>
</html>


<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname="pam";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$sql1 = "SELECT * FROM MISC";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

if($row1['STATUS']=='ONGOING')
{




$orno=$row1['ORD'];

$sql2 = "SELECT * FROM ORDI";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
   
$total=$row2['PRICE']; 
$qty=$row2['QTY'];





if(isset($_POST["volcano"]))
{

$qty=$qty+1;
$total=$total+60;

$sqlr="UPDATE ORDI SET QTY=$qty, PRICE=$total";
$ress=mysqli_query($conn, $sqlr);


if($qty==1)
{

$sql4 ="INSERT INTO ORDERZ (Total_Price, Number_Of_Items,Order_Number,Staff_Id, Email, Date_Of_Order, Store_Id) VALUES ($total,$qty,$orno,0,'ghalib@ghalib.com', '2019-01-01', 'STR123')";
echo "NEW";
$result4=mysqli_query($conn, $sql4);
if(!$result4)
echo mysqli_error($conn);

}
else
{ 

$sql4 ="UPDATE ORDERZ SET Total_Price=$total, Number_Of_Items=$qty WHERE Order_Number=$orno"; 
$result4=mysqli_query($conn, $sql4);
}


echo "DONE";

if($result4)
{$sql5="INSERT INTO ORDER_ID (Orderno, Itemid) VALUES ($orno, 'DES001')";

$res5=mysqli_query($conn, $sql5);

if(!$result4 || !$res5)
echo mysqli_error($conn);
}

}


if(isset($_POST["truffle"]))
{

$qty=$qty+1;
$total=$total+60;

$sqlr="UPDATE ORDI SET QTY=$qty, PRICE=$total";
$ress=mysqli_query($conn, $sqlr);


if($qty==1)
{

$sql4 ="INSERT INTO ORDERZ (Total_Price, Number_Of_Items,Order_Number,Staff_Id, Email, Date_Of_Order, Store_Id) VALUES ($total,$qty,$orno,0,'ghalib@ghalib.com', '2019-01-01', 'STR123')";
echo "NEW";
$result4=mysqli_query($conn, $sql4);
if(!$result4)
echo mysqli_error($conn);

}
else
{ 

$sql4 ="UPDATE ORDERZ SET Total_Price=$total, Number_Of_Items=$qty WHERE Order_Number=$orno"; 
$result4=mysqli_query($conn, $sql4);
}


echo "DONE";

if($result4)
{$sql5="INSERT INTO ORDER_ID (Orderno, Itemid) VALUES ($orno, 'DES002')";

$res5=mysqli_query($conn, $sql5);

if(!$result4 || !$res5)
echo mysqli_error($conn);
}

}



}






}


$conn->close();







?>


