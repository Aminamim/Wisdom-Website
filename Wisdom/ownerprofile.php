<?php 
session_start();
$ownerId = $_GET['ownerId']; 
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Owner's Details</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: maroon;
  background-image: url('books.jpg');
  background-size: cover; 
  background-attachment: fixed; 
  background-position: center;
}

.icon-bar {
  width: 5%;
  position: fixed;
  z-index: 1;
  background: indianred;
  overflow-x: hidden;
  
}
.icon-bar a {
  display: block;
  text-align: center;
  padding: 12px;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;

}
.icon-bar a:hover {
  background-color: maroon;
}
.active {
  background-color: maroon;
}

.transbox {
  
  background-color: white;
  opacity: 0.8;
}
.transbox p {
  font-weight: bold;
  color: #000000;
}

footer {
  background-color: Maroon;
  padding: 10px;
  text-align: center;
  color: white;
}

</style>
</head>
<body>

<header>

  <div class="icon-bar">
      <?php    if(isset($_SESSION["id"])){ ?>
        <a href="first.php"><i class="fa fa-home"></i></a>
        <a href="books.php"><i class="fa fa-search"></i></a>  
        <a href="profile.php"><i class="fa fa-id-card"></i></a> 
        <a href="logout.php"><i class="fa fa-sign-out"></i></a>
<?php }else{ ?>
        <a href="first.php"><i class="fa fa-home"></i></a>  
        <a href="books.php"><i class="fa fa-search"></i></a>
        <a href="login.php"><i class="fa fa-sign-in"></i></a>
<?php } ?>
  </div>
  <div class="transbox"><h1>WISDOM.com</h1></div>
</header>

     <?php
      $servername = "localhost"; $username = "root"; $password = ""; $dbname = "wisdom";
        $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

                               }else{ 
    $qry = "SELECT * FROM owner WHERE ownerId = $ownerId ";
    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);
   
    if(!$rows){ echo "error"; }else{
      $row = $query -> fetch_assoc() 
      ?>
<body>

<section>
  
    <h1 style="color: maroon; text-align: center;">Owner's Details</h1>
        <h1 style="color: indianred; text-align: center; font-size: 40px;"><?php echo $row['name'];?><br>Email: <?php echo $row['mail']; ?><br>Phone Number: <?php echo $row['phone']; ?></h1>
    <h1 style="color: maroon; text-align: center;">Use the E-mail or Phone number to reach out to the Owner</h1>

</section>
</body>
<?php } ?>
<?php } ?>
<footer>
  <p>Copyright 2020 WISDOM Ver 0.0 All rights reserverd</p>
</footer>
</body>
</html>
