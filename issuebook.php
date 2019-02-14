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
			<h2 style="margin-bottom: 50px; margin-top: 15px;" > Issue Book </h2>
	<form action="issue_book.php" method="post">
     <label> Book id : </label><br>
 	 <input type="text" name="book_id"  required ><br>
 	 <label> Student ID : &nbsp;</label><br> 
 	 <input  type="text" name="student_id"  required><br>
     <input type="password" name="password" placeholder="Enter Admin Password" style="margin-top:15px;">
     <input type="submit" name="issue" value="ISSUE" style="position: absolute; bottom:15px; width">
	</form>
</div>
</div>