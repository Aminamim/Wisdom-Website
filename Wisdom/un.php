<?php 
session_start(); 
$login_status = "";

?>
<!DOCTYPE html>
<html>
<head>
<title>Books</title>
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

.container {
  padding: 10px;
}
.polaroid {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
.column {
  float: left;
  width: 20%;
  padding: 15px;
  height: 50px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
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




section:after {
  content: "";
  display: table;
  clear: both;
}

.row::after {
  content: "";
  clear: both;
  display: table;
  padding: 15px;
  
}
.main {
     width: 80%; 
      height: auto; 
      padding: 10px 0;
      margin: auto;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 
      float: center; 
}


form.example input[type=text] {
  float: right;
  padding: 10px;
  font-size: 17px;
  float: left;
  width: 70%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 10%;
  padding: 10px;
  background: indianred;
  color: white;
  font-size: 17px;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: maroon;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

section{
  padding: 20px;
  width: 100%;
  background-color: white;
  height: 1000px;
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

  <h2 style="color: maroon;text-align:center;font-size: 30px;">Books</h2>

<div class="row">   
    <form class="example" action="search.php" method="get" role="form" style="margin:auto;float:right;width: 40%;">
        <input type="text" placeholder="Search by Name" name="book">
         <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
<div class="main">
    
<?php
$servername = "localhost"; $username = "root"; $password = ""; $dbname = "wisdom";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }else{ 

    $qry = "SELECT * FROM books ";
    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);
   
  if(!$rows){ echo "error"; }else{ ?> 

<?php $i = 0; while ($row = $query -> fetch_assoc() ) {  $i++; ?>
         <div class="row">
          <div class="column"><div class="polaroid">
            <a href="description.php?bookId=<?php echo $row['bookId']?>">
              <img src="<?php echo $row['picture'] ?>"  style="width:75%"></a> 
            <div class="container"><p><?php echo $row['title']; ?></p></div>
          </div></div>

<?php if($i == 5): ?>
   </div>
<?php endif; $i = 0; ?> 

<?php } ?> 
 
  <?php } } ?>
</div>


</body>

<footer>
  <p>Copyright 2020 WISDOM Ver 0.0 All rights reserverd</p>
</footer>


</html>
