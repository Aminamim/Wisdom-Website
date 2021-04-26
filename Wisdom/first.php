<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Wisdom.Com</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="first.css">
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
    <h1>Welcome to WISDOM <?php if(isset($_SESSION["id"])) {echo ", ".$_SESSION['name']."!";} ?></h1>
    <h4>The best place for older books</h4>
  </div>

</header>


<section>
<article1>
  <h1 style="color: maroon; text-align: center;">Featured Books</h1>
  <?php
$servername = "localhost"; $username = "root"; $password = ""; $dbname = "wisdom";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }else{ 

    $qry = "SELECT * FROM books ";
    $query = mysqli_query($conn, $qry);
    $rows = mysqli_num_rows($query);
    if($rows){  
      for($i=0; $i < 4 ; $i++){
      $row = $query -> fetch_assoc(); ?>

          <div class="column"><div class="polaroid">
            <a href="description.php?bookId=<?php echo $row['bookId']?>">
              <img src="<?php echo $row['picture'] ?>"  style="width:75%"></a> 
            <div class="container"><h4>
              <strong style="color: maroon"><?php echo $row['title']; ?></strong><br>
              Available in: <strong style="color: indianred;"><?php echo $row['area']; ?></strong>
            </h4></div>
          </div></div>
      
        <?php } ?>
        <?php } }  $conn->close(); ?> 

</article1>
</section>

<section> 
  <h1 style="text-align: center;"><a href="area.php">
    <form action="area.php" method="GET" role="form">
        <input type="hidden" value="<?php echo $_row['address']; ?>" name="area">
        <input type="hidden" value="" name="area">
         <button type="submit" class="polaroid">Find Books Near You</button>
        </a></h1>
    </form>

<br><br>
<article>
    <h1 style="text-align: center; color: maroon; font-size: 40px;">How to Buy Books Here?</h1>
       <h2 style="color: indianred; font-size: 40px; text-align: center;">AS EASY AS PIE!</h2>
       <h4>Just go to a book's description where all the details of the book like the price, description and the owner's note for you is provided. If you like it then contact the owner through the provided email adress or the phone number given in the owner's profile. You can then communicate with the owner directly to fix the deal.</h4>
       <h4>You can also search for books based on their available area and name. HAPPY READING!</h4>
       <h5 style="color: maroon;">P.S: Our service is limited to this platform only. This is an open platform for providing opportunity for exhibiting and finding old books easily. No business transaction is done here.</h5>

</article>
<nav style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></nav> 
</section>

<footer>
  <p>Copyright 2020 WISDOM Ver 0.0 All rights reserverd</p>
</footer>

</body>
</html>
