<?php 
session_start(); 
$ownerId = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="profile.css">
</head>

<header>

<div class="icon-bar">
  <a href="first.php"><i class="fa fa-home"></i></a>   
  <a href="books.php"><i class="fa fa-search"></i></a> 
  <a href="logout.php"><i class="fa fa-sign-out"></i></a>
</div>

  <div class="transbox">
  <h1>WISDOM.com</h1>

</div>
</header>

<body>
<h1 style="text-align: center; color: indianred;">Hello <?php echo " ".$_SESSION['name']."!" ?></h1>
<h1 style="text-align: center; color: maroon;">Upload A Book</h1>
<div class="main">
<form action="upbook.php" method="GET">
      <div class="formcontainer">
      <div class="container">
        
         <label for="title"><strong>Book Title</strong></label>
        <input type="text" class="polaroid" placeholder="Enter title" name="title" required><br>
         <label for="descrp"><strong>Book Description </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Description" name="descrp"><br>
         <label for="prc"><strong>Enter Price </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Price" name="prc" required=""><br>
         <label for="picture"><strong>Select Book cover </strong></label>
        <input type="text" class="polaroid" placeholder="Enter path" name="picture"><br>
         <label for="area"><strong>Available Area </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Area" name="area"><br>
         <label for="note"><strong>Any Note for Buyer? </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Note" name="note"><br>
         <button type="submit">Upload Book</button>
  
      </div>
      </div>
</form>
</div>

<h1 style="text-align: center; color: maroon;">Your Books</h1>
<div class="main">

<?php
$servername = "localhost"; $username = "root"; $password = ""; $dbname = "wisdom";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }else{ 

    $qry = "SELECT * FROM books WHERE ownerId = '$ownerId' ";
    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);
   
  if(!$rows){ ?> <h1 style="color: indianred; text-align: center;">No Books to show.</h1>
  <?php }else{ while ($row = $query -> fetch_assoc() ) {  ?> 
   
  <div class="formcontainer">
      <div class="container">
       <div class="polaroid">
          <div class="container"><h2><?php echo $row['title'];?></h2></div>         
         <a href="description.php?bookId=<?php echo $row['bookId']?>"><button type="submit">View Description</button></a>
         <a href="deletebook.php?bookId=<?php echo $row['bookId']?>"><button type="submit" style="background-color:maroon;">Delete</button></a>
       </div>
    </div>
 </div>
<?php } ?>
<?php } } $conn->close(); ?>
</div>

<h1 style="text-align: center; color: maroon;">Your Informations</h1>

<div class="main">
  <form role="form" action="updateinfo.php" method="GET">
      <div class="formcontainer">
      <div class="container">
        
<?php
$servername = "localhost"; $username = "root"; $password = ""; $dbname = "wisdom";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }else{ 

    $qry = "SELECT * FROM owner WHERE ownerId = '$ownerId' ";
    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);
   
  if($rows){ $row = $query -> fetch_assoc()
   ?>
         <label for="name"><strong>Username </strong></label>
        <input type="text" class="polaroid" value = "<?php echo $row['name'];?>" id="name" name="name" required><br>
         <label for="mail"><strong>E-mail </strong></label>
        <input type="text" class="polaroid" value="<?php echo $row['mail'];?>" id="mail" name="mail" required><br>
         <label for="psw"><strong>Password </strong></label>
        <input type="password" class="polaroid" value="<?php echo $row['psw'];?>" id="psw" name="psw" required><br>
         <label for="address"><strong>Address </strong></label>
        <input type="text" class="polaroid" value="<?php echo $row['address'];?>" id="address" name="address"><br>
         <label for="phone"><strong>Phone Number </strong></label>
        <input type="text" class="polaroid" value="<?php echo $row['phone'];?>" id="phone" name="phone"><br>
        <button type="submit">Update</button>
  
      </div>
      </div>
    </form>
<?php } } ?>
</div>
</body>
<footer>
  <p>Copyright 2020 WISDOM Ver 0.0 All rights reserverd</p>
</footer>
</html>
