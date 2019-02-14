
<?php 
include_once 'dbcon.php';
include_once 'homepage.html';
if(!$dbcon) {
die("failed to connect to database".mysqli_error($dbcon));
}  
    session_start();
   if(isset($_SESSION['admin']))
    {
    	session_destroy();
    	echo "<p class='text'> LOGGED OUT SUCCESSFULLY </P>";
    	include_once 'adminlogin.php';
    }
    elseif (isset($_SESSION['user']))
    {
    	 session_destroy();
    	
    echo "<p class='text'> LOGGED OUT SUCCESSFULLY </P>";
    	include_once 'studentlogin.php';
    }
    else
    {
    	echo "<p class='text'> YOU NEED TO LOGIN FIRST </P>";
    	include_once 'studentlogin.php';
    }

?>