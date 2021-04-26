<?php 
session_start();
$bookId = $_GET['bookId']; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Description</title>
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
  background-repeat: no-repeat; 
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
  margin: 30px;
  background-color: white;
  border: 1px solid black;
  opacity: 0.8;
}
.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
.row::after {
  content: "";
  clear: both;
  display: table;  
}
.container {
  padding: 10px;
}
.polaroid {
  width: 300px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  background-color: maroon;
  color: white;
}



nav {
  
  float: left;
  width: 30%;
  height: 500px;
  padding: 20px;
  text-align: center;
  background-color: indianred;
 
}


article {
  float: right;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 500px; 
}

article1 {
  float: right;
  padding: 5px;
  width: 100%;
  background-color: white;
  height: 60%; 
}


section:after {
  content: "";
  display: table;
  clear: both;
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

  <div class="transbox">
    <h1>WISDOM.com</h1>
    <h4>The best place for older books</h4>
  </div>

</header>


<section>
  
 <article>
     <h1>Book Description</h1>
  
     <?php
      $servername = "localhost"; $username = "root"; $password = ""; $dbname = "wisdom";
        $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

                               }else{ 
    $qry = "SELECT * FROM books WHERE bookId = $bookId ";
    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);
   
    if(!$rows){ echo "error"; }else{
      $row = $query -> fetch_assoc() 
      ?>


     <h2 style="color: maroon;"><?php echo $row['title']; ?></h2>
     <h4 ><?php echo $row['descrp']; ?></h4>
     
      <article1>
       <h2 style="color: indianred;">Price: <?php echo $row['prc'];?>TK</h2>
       <h2 style="color: maroon">Available Area: <?php echo $row['area'];?></h2>
       <h4><strong>Owner's Note: </strong><?php echo $row['note'];?></h4>
       
        <div class="column"><div class="polaroid">
          
          <a href="ownerprofile.php?ownerId=<?php echo $row['ownerId']?>">
            <div class="container"><p style="color: white;">Contact Owner</p></div></a>
        </div>
      </article1>

  </article>


    <nav>
        <div class="column"><div class="polaroid">
          <img src="<?php echo $row['picture'] ?>"  style="width:80%"> 
          <div class="container"><p><?php echo $row['title'];?></p></div>
        </div>
    </nav>

<?php } ?>
<?php } ?>
</section>

<section></section>

<footer>
  <p>Copyright 2020 WISDOM Ver 0.0 All rights reserverd</p>
</footer>

</body>
</html>
