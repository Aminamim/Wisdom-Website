<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisdom";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ( isset($_POST['name']) )
    $name = $_POST['name'];
if ( isset($_POST['psw']) )
    $psw = $_POST['psw'];
    

    $qry = "SELECT * FROM owner WHERE name='$name' AND psw='$psw'";

    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);


    if($rows){

        $row = $query -> fetch_assoc();
        $role = $row['role'];
        
         session_start();

        $_SESSION['id'] = $row['ownerId'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['role'] = $row['role'];
        
       $login_status = 1;
       $conn->close();

       echo "Hello " . $_SESSION['name'] . "!";

       header("Refresh:0; url=login.php");        
    }else{
        $conn->close();
        echo "Some problem occurred while logging. Try again.";
       header( "Refresh:3; url=login.php");

    }

?>
