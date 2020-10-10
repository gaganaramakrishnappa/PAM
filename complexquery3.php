<html>
	<head>
		<link rel="shortcut icon" href="PAM_LOGO.jpg">
		<title id = "create">COMPLEX QUERY 3</title>
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








</style>
	</head>

<body>
<p>Select Cust_Name, Store_Name ,Number_Of_Items, GST , Delivery_Charge , Total_Price from 
customer as c , store as str , orderz as o , order_id as oi, bill_id as bi , bill as b, 
item as i where c.email=o.email  AND b.order_number=o.order_number AND bi.billno=b.bill_number AND
oi.orderno=o.order_number AND str.store_id=o.store_id AND oi.itemid=i.item_id AND bi.itemid=i.item_id
group by cust_name , store_name, Number_of_Items , gst,delivery_charge,total_price,bill_amount;</p>
</body>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname="pam";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "Select Cust_Name, Store_Name ,Number_Of_Items, GST , Delivery_Charge , Total_Price from 
customer as c , store as str , orderz as o , order_id as oi, bill_id as bi , bill as b, 
item as i where c.email=o.email  AND b.order_number=o.order_number AND bi.billno=b.bill_number AND
oi.orderno=o.order_number AND str.store_id=o.store_id AND oi.itemid=i.item_id AND bi.itemid=i.item_id
group by cust_name , store_name, Number_of_Items , gst,delivery_charge,total_price,bill_amount;
";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{

   

echo "<table border='1' cellpadding='5' style=\"top:30%; left:20%; position:absolute\"; class=\"t\">"; 


echo "<tr><b>"; 

       
        echo "<td><b>"; echo "Customer Name"; echo "</td>";
	echo "<td><b>"; echo "Store Name"; echo "</td>";
	echo "<td><b>"; echo "Number of Items"; echo "</td>";
	echo "<td><b>"; echo "GST"; echo "</td>";
	echo "<td><b>"; echo "Delivery Charge"; echo "</td>";      
	echo "<td><b>"; echo "Total Price"; echo "</td>";
	
     
       


    echo "</tr>"; 



    
        while($row = mysqli_fetch_assoc($result))

 {
echo "<tr>"; 

       
        echo "<td>"; echo $row["Cust_Name"]; echo "</td>";
	echo "<td>"; echo $row["Store_Name"]; echo "</td>";
	echo "<td>"; echo $row["Number_Of_Items"]; echo "</td>";
	echo "<td>"; echo $row["GST"]; echo "</td>";
	echo "<td>"; echo $row["Delivery_Charge"]; echo "</td>";      
	echo "<td>"; echo $row["Total_Price"]; echo "</td>";
	
     


    echo "</tr>"; 
} 


echo "</table>";









}
else {
    echo "No such records exist";
}

mysqli_close($conn);
?>

</html>