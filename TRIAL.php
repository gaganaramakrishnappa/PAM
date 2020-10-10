<html>

<body>

<form action="TRIAL.php" method="post">
		



			<input type="submit" name="margherita" value="Add"></input>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Rs.270

			
			


</form>
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



if(isset($_POST["margherita"]))
{

$qty=$qty+1;
$total=$total+270;

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
{$sql5="INSERT INTO ORDER_ID (Orderno, Itemid) VALUES ($orno, 'PIZ001')";

$res5=mysqli_query($conn, $sql5);

if(!$result4 || !$res5)
echo mysqli_error($conn);
}

}

}
}

?>