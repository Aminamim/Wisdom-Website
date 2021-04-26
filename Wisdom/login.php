<?php 
session_start(); 
$login_status = "";
?>
<!DOCTYPE html>
<html>
<head>
<title>LogIN</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
<header>

  <div class="icon-bar">
        
 <?php    if(isset($_SESSION["role"])){ ?>
        <a href="first.php"><i class="fa fa-home"></i></a>  
        <a href="books.php"><i class="fa fa-search"></i></a>
        <a href="profile.php"><i class="fa fa-id-card"></i></a> 
        <a href="logout.php"><i class="fa fa-sign-out"></i></a>
<?php }   else{ ?>
        <a href="first.php"><i class="fa fa-home"></i></a>  
        <a href="books.php"><i class="fa fa-search"></i></a>
<?php } ?>
   
  </div>

  <div class="transbox">
   <h1>WISDOM.com</h1>
  </div>
</header>


<body>

<div class="main">
 <?php 

    if(isset($_SESSION["role"])){ ?>

     <h1 style="text-align: center;color: indianred;">WELCOME <?php echo " ".$_SESSION['name']."!" ?></h1>
     <h1 style="text-align: center;color: maroon; padding: 20px;">Now, you can go to your profile and upload your old books here for sale. Be sure to provide the required information for the buyers while uploading the book.</h1> 
     <h2 style="text-align: center;color: indianred;">Happy Reading!</h2>

<?php } else{ ?>

  <form action="login1.php" method="POST">
      <h1 style="text-align: center;">Sign Up in Wisdom.com</h1>    
      <div class="formcontainer">
      <div class="container">
        
        <label for="name"><strong>Username </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Username" name="name" required=""><br>
        <label for="psw"><strong>Password </strong></label>
        <input type="password" class="polaroid" placeholder="Enter Password" name="psw" required=""><br>
       
        <button type="submit" class="polaroid">LogIn</button><br>
        <strong><a href="signup.php"><br>Don't have an account? Create a new account here!</a></strong>
  
      </div>
      </div>
  </form>
<?php } ?>
</div>
</body>

<footer>
  <p>Copyright 2020 WISDOM Ver 0.0 All rights reserverd</p>
</footer>

</html>
