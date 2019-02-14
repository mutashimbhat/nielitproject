<?php
include_once 'homepage.html';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Form </title>
	<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>
<body>
  <div class="main">
 <div class="cont">
 	<img src="logo.png" width="90" height="90">
  <h2> Admin Login</h2>
  <form action="adminpanel.php" method="post">
    <label>
      Email
    </label><br>
    <input type="text" name="email" required placeholder="abc@xyz.com"><br>
    <label>
      Password
    </label><br>
     <input type="Password" name="pwd" required placeholder="######"><br>
     <input type="submit" name="Login" value="LOGIN" >

  </form>
  <div class="links"> 

          <a href="studentlogin.php"> Student Login </a><br>
          <a href="registration.php" > Don't Have an Account ?</a>

     </div>

</form>
  </div> 
</body>
</html>