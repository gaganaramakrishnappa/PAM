<html>
	<head>
		<link rel="shortcut icon" href="PAM_LOGO.jpg">
		<title id = "create">COMPLEX QUERY 2</title>
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
<p>Select * from staff where  staff_id in (select staff_id from staff where store_id='STR123')
 or staff_id in (select staff_id from staff where position='Manager');
 </p>
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

$sql = "Select * from staff where  staff_id in (select staff_id from staff where store_id='STR123')
 or staff_id in (select staff_id from staff where position='Manager');
 ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{

   

echo "<table border='1' cellpadding='5' style=\"top:30%; left:20%; position:absolute\"; class=\"t\">"; 


echo "<tr><b>"; 

       
        echo "<td><b>"; echo "Salary"; echo "</td>";
	echo "<td><b>"; echo "Staff Name"; echo "</td>";
	echo "<td><b>"; echo "Staff Email"; echo "</td>";
	echo "<td><b>"; echo "Staff Id"; echo "</td>";
	echo "<td><b>"; echo "Experience (m)"; echo "</td>";      
	echo "<td>"; echo "Position"; echo "</td>";
	echo "<td>"; echo "Date of Joining"; echo "</td>";   
	echo "<td>"; echo "Store ID"; echo "</td>";
     
       


    echo "</tr>"; 



    
        while($row = mysqli_fetch_assoc($result))

 {
echo "<tr>"; 

        echo "<td>"; echo $row["Salary"]; echo "</td>";
	echo "<td>"; echo $row["Staff_Name"]; echo "</td>";
	echo "<td>"; echo $row["Staff_Email"]; echo "</td>";
	echo "<td>"; echo $row["Staff_Id"]; echo "</td>";
	echo "<td>"; echo $row["Experience_Months"]; echo "</td>";      
	echo "<td>"; echo $row["Position"]; echo "</td>";
	echo "<td>"; echo $row["Date_Of_Joining"]; echo "</td>";   
	echo "<td>"; echo $row["Store_Id"]; echo "</td>";


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