<?php


$servername = "localhost";
$username = "username";
$password = "password";
$dbname="PAMcart";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql="INSERT INTO item_details(item_name, item_price) VALUES
('sides',0),
('pizzas',0),
('drinks',0),
('desserts',0)

";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>