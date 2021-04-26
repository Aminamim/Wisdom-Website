<?php
session_start(); 
$book = $_GET['book'];
;
?>
<!DOCTYPE html>
<html>
<head>
<title>Search</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>

<header>

<div class="icon-bar">
 <?php    if(isset($_SESSION["id"])){ ?>
        <a href="first.php"><i class="fa fa-home"></i></a>  
        <a href="books.php"><i class="fa fa-book"></i></a>
        <a href="profile.php"><i class="fa fa-id-card"></i></a> 
        <a href="logout.php"><i class="fa fa-sign-out"></i></a>
<?php }else{ ?>
        <a href="first.php"><i class="fa fa-home"></i></a>  
        <a href="books.php"><i class="fa fa-book"></i></a>
        <a href="login.php"><i class="fa fa-sign-in"></i></a>
<?php } ?>
</div>

  <div class="transbox">
   <h1>WISDOM.com</h1>
   <h4>The best place for older books</h4>
  </div>

</header>
  <h2 style="color: maroon;text-align:center;font-size: 30px;">Search Results</h2>

<div class="row">   
    <form class="example" action="search.php" method="GET" role="form" style="margin:auto;float:right;width: 40%;">
        <input type="text" placeholder="Search by Name" name="book">
         <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
    
<?php
$servername = "localhost"; $username = "root"; $password = ""; $dbname = "wisdom";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }else{ 

    $qry = "SELECT * FROM books WHERE title LIKE '%" .$book. "%' ";
    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);
    $nn = $rows / 5;
    $n = $rows % 5;
    $r = 0;
    if( $n != 0){ $r = ceil($nn); }else{ $r = $nn; }
  if(!$rows){ ?>

  <h1 style="color: maroon;text-align: center;">"No results found for "<?php echo $book; ?>". Please try again with correct spelling."</h1> 

<?php }else{ for ($i=0; $i < $r ; $i++) {?>

  <div class="row"> 

<?php   $j = 0; while ( $j < 5 ) {  $row = $query -> fetch_assoc(); if($row){ ?> 
             
          <div class="column"><div class="polaroid">
            <a href="description.php?bookId=<?php echo $row['bookId']?>">
              <img src="<?php echo $row['picture'] ?>"  style="width:75%"></a> 
          <div class="container"><h4>
              <strong style="color: maroon"><?php echo $row['title']; ?></strong><br>
              Available in: <strong style="color: indianred;"><?php echo $row['area']; ?></strong>
            </h4></div>
          </div></div>
<?php } ?>
<?php $j++; ?>
<?php } ?>
    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div> 

<?php } ?>
<?php } } ?>

</body>
<footer>
  <p>Copyright 2020 WISDOM Ver 0.0 All rights reserverd</p>
</footer>
</html>
