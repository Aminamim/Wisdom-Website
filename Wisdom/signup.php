<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
<header>

  <div class="icon-bar">
    <a href="first.php"><i class="fa fa-home"></i></a>    
    <a href="books.php"><i class="fa fa-search"></i></a>
    <a href="login.php"><i class="fa fa-sign-in"></i></a>
  </div>

  <div class="transbox">
    <h1>WISDOM.com</h1>
  </div>

</header>


<body>
<div class="main">
  <h1 style="text-align: center;">Sign Up in Wisdom.com</h1>
  <form role="form" action="signup1.php" method="GET">
      
      <div class="formcontainer">
      <div class="container">
        
         <label for="name"><strong>Username </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Username" id="name" name="name" required><br>
         <label for="mail"><strong>E-mail </strong></label>
        <input type="text" class="polaroid" placeholder="Enter E-mail" id="mail" name="mail" required><br>
         <label for="psw"><strong>Password </strong></label>
        <input type="password" class="polaroid" placeholder="Enter Password" id="psw" name="psw" required><br>
         <label for="address"><strong>Address </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Address" id="address" name="address"><br>
         <label for="phone"><strong>Phone Number </strong></label>
        <input type="text" class="polaroid" placeholder="Enter Phone Number" id="phone" name="phone"><br>

        <button type="submit">Register</button>
  
      </div>
      </div>
    </form>
</div>
</body>

<footer>
  <p>Copyright 2020 WISDOM Ver 0.0 All rights reserverd</p>
</footer>

</body>
</html>
