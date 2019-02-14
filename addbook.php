<?php
include_once 'homepage.html';
session_start();
if (!isset($_SESSION['admin'])) {
	 echo "<p class='text'> You need to login first </p> ";
	include_once 'adminlogin.php';
	die();
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>
<body>
	<div class="main">
		<div class="cont" style="padding-top:20px;">
			<h2 > ADD BOOK </h2>
	<form action="add_book.php" method="post">
     <label> Title : </label><br>
 	 <input type="text" name="title"  required ><br>
 	 <label> Author : &nbsp;</label><br> 
 	 <input  type="text" name="author"  required><br>
 	  <span> Genre :  </span> <br/>
     <input type="checkbox" name="genre[]" value="Science"> Science &nbsp;
     <input type="checkbox" name="genre[]" value="Drama">&nbsp; Drama &nbsp;
     <input type="checkbox" name="genre[]" value="History">&nbsp; History &nbsp;<br>
     <input type="checkbox" name="genre[]" value="Novel">&nbsp; Novel &nbsp; <br>
     <input type="password" name="password" placeholder="Enter Admin Password">
     <input type="submit" name="addbook" value="ADD BOOK" style="position: absolute; bottom:15px;">
	</form>
</div>
</div>


</body>
</html>