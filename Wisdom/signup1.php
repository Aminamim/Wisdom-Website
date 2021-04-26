<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisdom";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_GET['name'];
$mail = $_GET['mail'];
$psw = $_GET['psw'];
$address = $_GET['address'];
$phone = $_GET['phone'];
$role = 2;


$sql = "INSERT INTO owner (ownerId, name, mail, psw, address, phone, role) VALUES (NULL,'$name', '$mail', '$psw', '$address', '$phone', '$role')";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

  header( "Refresh:0; url=login.php");


 ?>