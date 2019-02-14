
<?php 
include_once 'homepage.html' ;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>
<body>
     <div class="main">
     <div class="regcont">
     <img src="logo.png" width="120" height="120">
     <h2> Register Here </h2>
 	<form action="insert.php" method="post"  >
 	 <label> First Name : </label><br>
 	 <input type="text" name="f_name" placeholder="enter first name" required ><br>
 	 <label> Last Name : &nbsp;</label><br> 
 	 <input  type="text" name="l_name" placeholder="enter last name" required><br>
 	 <label > Gender : </label> &nbsp; &nbsp; <br>
 	 <input  type="radio" name="gender" value="male" > &nbsp; Male &nbsp; &nbsp;
 	 <input type="radio" name="gender" value="female">&nbsp; Female &nbsp;&nbsp;
 	 <br> 
 	 <label> Date Of Birth : </label> <br>
     <input  type="date" name="dob" required> <br>
     <span> Phone No. : &nbsp; </span><br>
     <input type="text" name="phone" ><br>
     
      <span> Interests  </span> <br/>
     <input type="checkbox" name="interests[]" value="science">&nbsp; Science &nbsp;
     <input type="checkbox" name="interests[]" value="fiction">&nbsp; Fiction &nbsp;
     <input type="checkbox" name="interests[]" value="history">&nbsp; History &nbsp;
     <input type="checkbox" name="interests[]" value="poetry">&nbsp; Poetry &nbsp; <br>
     <label> Email  : </label> <br>
     <input  type="text" name="email" placeholder="enter email id " required><br>
     <label> Confirm Email : </label><br>
     <input class="inputbox" type="text" name="confirmemail" placeholder="Confirm email id " required><br>
     <label> Password : </label><br>
     <input  type="Password" name="password" required><br>
     <label> Confirm Password : </label><br>
     <input  class="inputbox" type="text" name="confirmpassword" required><br><br>
     <input type="checkbox" name="t&c" required>
     I Accept the Terms and Conditions <br>

     <input type="submit" name="submit" value="Sign Up">
     <div class="link"> 
          <a href="studentlogin.php" > Already Have an Account ?</a>
     </div>
 </form>
  <br><br><br><br><br><br>
 <p>
 Fields marked <span>*</span> are Required.
     </p> 
</div>
</div>
</body>
</html>