<html>	
<head>
		<link rel="shortcut icon" href="PAM_LOGO.jpg">
		<title id = "create">Orders</title>
	<style>
		html { 
  background: url(bg11.jpeg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}	

html
{

 font-family:Optima;
 color:darkred;

}

.buttonz{
    padding-left: 15px;
    width:100px; 
    cursor:pointer;
 
    border-radius: 25px; 
  
    font-family:Optima;
    background-color:white;
    color:darkred;
    font-size:20px;
    border-style:solid;
    border-color:darkred;


}



.id1{
		text-decoration:none;
		color:white;
	}

.p1{
	color:white;
	font-size:17px;
	}

.id2{
	text-decoration:none;
	color:white;
	}	

.p2{
	color:white;
	font-size:17px;
	}

.id3{
		text-decoration:none;
		color:white;
	}

.p3{
	color:white;
	font-size:17px;
}

.id4{
		text-decoration:none;
		color:white;
	}

.p4{
	color:white;
	font-size:17px;
}


.id5{
		text-decoration:none;
		color:white;
	}

.p5{
	color:white;
	font-size:17px;
}

.id6{
		text-decoration:none;
		color:white;
	}

.p6{
	color:white;
	font-size:17px;
}

.div1{

	top:5%;
	left:5%;
	position:absolute;font-size:17px;font-family:sans-serif;
}
.div2{

	top:5%;
	left:20%;
	position:absolute;font-size:17px;font-family:sans-serif;
}.div3{

	top:5%;
	left:35%;
	position:absolute;font-size:17px;font-family:sans-serif;
}.div4{

	top:5%;
	left:50%;
	position:absolute;font-size:17px;font-family:sans-serif;
}
.div5{

	top:5%;
	left:65%;
	position:absolute;font-size:17px;font-family:sans-serif;
}.div6{

	top:5%;
	left:80%;
	position:absolute;font-size:17px;font-family:sans-serif;
}
.img1{
	top:52%;
	left:40%;
	position: absolute;
	color:white;font-size:17px;font-family:sans-serif;
}
.p7{
	top:43%;
	left:42%;
	position: absolute;color:white;font-family:sans-serif;
}
.p8{
	top:57%;
	left:36%;
	position: absolute;	color: white;font-family: sans-serif;

}

.p9{

top:63%;
left:4%;
position: absolute;color:white;font-size:14px;
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

.buttonz{
    padding-left: 15px;
    width:200px; 
    cursor:pointer;
 
    border-radius: 25px; 
  
    font-family:Optima;
    background-color:white;
    color:darkred;
    font-size:20px;
    border-style:solid;
    border-color:darkred;


}






</style>
	</head>



	<body>

<div class="body" style="top:17%; left:30%;position: absolute; ">
			<p>
			<h1><b><u>WELCOME TO PAM ONLINE STORES!:</u></b></h1>
<br>
<br>
<h2>PLEASE CLICK THE APPROPRIATE OPTION</h2>
<br>
<br>

<form action="orderstatus.php" method="post">

<input class="buttonz" type="submit" name="new" value="New Order">

<br><br><br><br>

<input class="buttonz" type="submit" name="existing" value="Continue Order">

<br><br><br><br><br>
<input class="buttonz" style="border-width:10px;" type="button" onclick="location.href='menu1.php'" value="PROCEED">

</form>

		</p>

</div>		
</body>
</html>
<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname="pam";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if(isset($_POST["new"])&& $_SERVER["REQUEST_METHOD"]=="POST" && !empty($_POST["new"]))
{
$sql = "SELECT * FROM MISC";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


if($row['STATUS']=='COMPLETED')
{$sql1 = "UPDATE MISC SET ORD=ORD+1, STATUS='ONGOING'";
$result1 = mysqli_query($conn, $sql1);
$sql2 = "UPDATE ORD SET QTY=0, PRICE=0";
$result2 = mysqli_query($conn, $sql2);
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Please click proceed");


}
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;There is an ongoing order, please complete it to proceed");

}


if(isset($_POST["existing"])&& $_SERVER["REQUEST_METHOD"]=="POST" && !empty($_POST["existing"]))
{
$sql = "SELECT * FROM MISC";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


if($row['STATUS']=='COMPLETED')
{
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;There are no existing orders, please create a new one");

}
else
echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Please click proceed");

}

?>