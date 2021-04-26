<?php
session_start();
$bookId = $_GET['bookId'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisdom";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
    $qry = "DELETE FROM books WHERE bookId = '$bookId' ";

    $query = mysqli_query($conn, $qry);

if(!$query){

   echo "Problem!";
   header("; url=profile.php");

}else{

       header("refresh:0;url=profile.php");        
   }
$conn->close();
?>
