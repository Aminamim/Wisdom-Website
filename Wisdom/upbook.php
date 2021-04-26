
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
$title = $_GET['title'];
$descrp = $_GET['descrp'];
$prc = $_GET['prc'];
$picture = $_GET['picture'];
$area = $_GET['area'];
$note = $_GET['note'];

echo " ".$_SESSION['id']. " ";

$sql = "INSERT INTO books(bookId, ownerId, title, descrp, prc, picture, area, note) 
        VALUES (NULL, '$ownerId', '$title', '$descrp', '$prc', '$picture', '$area', '$note')";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header( "Refresh:0;url=books.php");

 ?>