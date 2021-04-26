<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisdom";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ownerId = $_SESSION['id'];
$name = $_GET['name'];
$mail = $_GET['mail'];
$psw = $_GET['psw'];
$address = $_GET['address'];
$phone = $_GET['phone'];
$role = 2;


$sql = "UPDATE owner SET name='$name', mail='$mail', psw='$psw', address='$address', phone='$phone'
        WHERE ownerId = '$ownerId' ";

if (mysqli_query($conn, $sql)) {

	echo "done";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header( "Refresh:0; url=profile.php");


 ?>