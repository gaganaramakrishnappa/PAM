<html>
	<head>
		<link rel="shortcut icon" href="PAM_LOGO.jpg">
		<title id = "create">BILL</title>
	<style>
		html { 
  background-color:white;}	

html
{

 font-family:Optima;
 color:darkred;

}

.t{
font-family:Optima;
color: darkred;

}

.buttonz{
    padding-left: 15px;
     
    cursor:pointer;
 
    border-radius: 25px; 
  
    font-family:Optima;
    background-color:white;
    color:darkred;
    font-size:18px;
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








</style>
	</head>

<body>


<h1 style="top:16%; left:42%; color:darkred; position:absolute;">FINAL BILL:</h1>



<!-------------------------------------------------------------------------------------->
	<a href="homepage1.html"><div class="logo"  style=" height: 85px; width: 100%;top:-1%; position: fixed; font-family:Optima;">
			<p><img align="center" src="PAM_LOGO.jpg" style="height: 70px; width: 70px; top:-3%; left: 40%; position: absolute;"><b style=" font-size: 28px; left:45%; top:16%; position: absolute;">PAM....Pizzas And More</b></p>
		</div></a>


</body>
</html>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname="pam";

$conn = mysqli_connect($servername, $username, $password, $dbname);





$sql = "SELECT * FROM MISC";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($row['STATUS']=='ONGOING')
{

$orno=$row['ORD'];

$sql = "SELECT DISTINCT Itemid FROM ORDER_ID WHERE Orderno=$orno";
$result = mysqli_query($conn, $sql);


$sql11="SELECT * FROM ORDERZ WHERE Order_Number=$orno";
$row11=mysqli_query($conn, $sql11);
$total11 = mysqli_fetch_assoc($row11);

   

echo "<table border='0' cellpadding='10' style=\"top:30%; left:27%; position:absolute; color:darkred;\"; class=\"t\">"; 






echo "<tr>"; 

       
        
        
	echo "<td><b>"; echo "ITEM ID"; echo "</td>";
	echo "<td><b>"; echo "ITEM NAME"; echo "</td>";
	echo "<td><b>"; echo "PRICE"; echo "</td>";
	echo "<td><b>"; echo "QUANTITY"; echo "</td>";
	echo "<td><b>"; echo"TOTAL (INR)"; echo "</td></b>";
       


    echo "</tr>"; 



    
        while($row = mysqli_fetch_assoc($result)) 
{
  
        $itemid=$row['Itemid'];
        $sql2="SELECT * FROM ITEM WHERE Item_Id='$itemid'";
        $row2=mysqli_query($conn, $sql2);
	$itemname = mysqli_fetch_assoc($row2);
	$sql6 = "SELECT COUNT(*) AS count FROM ORDER_ID WHERE Itemid='$itemid'";
        $count2= mysqli_query($conn, $sql6);
	$count1= mysqli_fetch_assoc($count2);


echo "<tr>"; 

       
        
        
	echo "<td>"; echo $itemid; echo "</td>";
	echo "<td>"; echo $itemname['Item_Name']; echo "</td>";
	echo "<td>"; echo $itemname['Item_Price']; echo "</td>";
        echo "<td>"; echo $count1['count']; echo "</td>";
        echo "<td>"; echo $count1['count']*$itemname['Item_Price']; echo "</td>";
       


    echo "</tr>"; 
} 






echo "<tr>"; 

       
        
        
	echo "<td>";  echo "</td>";
	echo "<td>"; echo "</td>";
	echo "<td>"; echo "</td>";
        echo "<td><b><u>"; echo "Total (without GST)"; echo "</td>";
	echo "<td>"; echo "INR ".$total11['Total_Price']; echo "</td>";
       


    echo "</tr>"; 


echo "<tr>"; 

       
        
        
	echo "<td>";  echo "</td>";
	echo "<td>"; echo "</td>";
	echo "<td>"; echo "</td>";
        echo "<td><b><u>"; echo "SGST (10%) :"; echo "</td>";
	echo "<td>"; echo "INR ".$total11['Total_Price']*0.1; echo "</td>";
       


 echo "</tr>"; 


echo "<tr>"; 

       
        
        
	echo "<td>";  echo "</td>";
	echo "<td>"; echo "</td>";
	echo "<td>"; echo "</td>";
        echo "<td><b><u>"; echo "CGST (10%) :"; echo "</td>";
	echo "<td>"; echo "INR ".$total11['Total_Price']*0.1; echo "</td>";
       


    echo "</tr>"; 






echo "<tr>"; 

       
        
        
	echo "<td>";  echo "</td>";
	echo "<td>"; echo "</td>";
	echo "<td>"; echo "</td>";
        echo "<td><b><u>"; echo "Delivery Charges:"; echo "</td>";
	echo "<td>"; echo "INR 50"; echo "</td>";
       


    echo "</tr>"; 


echo "<tr>"; 

       
        
        
	echo "<td>";  echo "</td>";
	echo "<td>"; echo "</td>";
	echo "<td>"; echo "</td>";
        echo "<td><b><u>"; echo "Amount payable"; echo "</td>";
	echo "<td>"; echo "INR ".($total11['Total_Price']*1.2+50); echo "</td>";
       


    echo "</tr>"; 


echo "<tr>"; 

       
        
        
	echo "<td>";  echo "</td>";
	echo "<td>"; echo "</td>";

 echo "<td>"; echo "<form method=\"POST\">"; echo "<input type='submit' value='PAYMENT ' name=\"bill\" class='buttonz'>";  echo "</form>"; echo "</td>"; 

	echo "<td>"; echo "</td>";
    
       


    echo "</tr>"; 

echo "</table>";

}


if(isset($_POST["bill"]))
{
 

$sql1="SELECT * from MISC where STATUS='ONGOING'";
$result1=mysqli_query($conn, $sql1);
$total1 = mysqli_fetch_assoc($result1);

$billno=$total1['ORD'];

$sql2="SELECT * from ORDERZ where Order_Number=$billno";
$result2=mysqli_query($conn, $sql2);
$row34 = mysqli_fetch_assoc($result2);


$amt=$row34['Total_Price'];
$gst=$row34['Total_Price']*0.2;
$em=$row34['Email'];
$sid=$row34['Store_Id'];

$qty=$row34['Number_Of_Items'];

$sql21="SELECT * from BILL where Bill_Number=$billno";
$result21=mysqli_query($conn, $sql21);

if($result21)
{
$sql4="INSERT INTO BILL (Bill_Number, Bill_Amount, Delivery_Charge, GST, Order_Number, Email, Store_Id) VALUES ($billno, $amt, 50, $gst, $billno, '$em', '$sid')";

$result4=mysqli_query($conn, $sql4);

if(!$result4)
echo mysqli_error($conn);
}

else
{


$sql4="UPDATE BILL SET Bill_Amount=$amt, GST=$gst where Bill_Number=$billno";

$result=mysqli_query($conn, $sql4);



}

echo "<script> location.href='payment.php'; </script>";
        exit;

}


mysqli_close($conn);

?>


