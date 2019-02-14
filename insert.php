<?php 
include_once 'dbcon.php';
include_once 'homepage.html';
if(!$dbcon) {
die("failed to connect to database".mysqli_error($dbcon));
}

	//echo " Connection Successfull <br>";
	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Insert Data to Table</title>
 	<link rel="stylesheet" type="text/css" href="insert.css">
 </head>
 <body> <?php
        if(isset($_POST['submit']))
        	{ 
        		if($_POST['password']==$_POST['confirmpassword'] && $_POST['email']==$_POST['confirmemail'])
        {    

        	 $email=$_POST['email'];
                   $sql=' SELECT email FROM library;';
 					  $result=mysqli_query($dbcon,$sql);
  
 						$rcheck=mysqli_num_rows($result);
 						$index=1;
 						if ($rcheck>0)
 					{
 						while($row=mysqli_fetch_assoc($result))
 					{	 
 		 
 					 if($email==$row['email'])
 				 {
 		 			echo "<p class='text'> Email ID Already Exists </p> <br> <br>";
 		 			include_once 'registration.php';
 		 			
 		 }
 		 }

 	}
        $fname=$_POST['f_name'];
        $lname=$_POST['l_name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];
       
        $password=md5($_POST['password']);
        if(!empty($_POST['interests']))
           $interests=implode(',',$_POST['interests']);
       else 
       	$interests='null';

 	$sql=" INSERT INTO library (f_name,l_name,gender,dob,phone,email,password,interests) VALUES  ( '$fname','$lname','$gender','$dob','$phone','$email','$password','$interests')";
 	 if($dbcon->query($sql)===TRUE)
 {
 	  echo "<p class='text'> Successfully Registered  <br> </p>";
     echo "<p class='text'> YOUR EMAIL IS : ".$email."  <br> </p>";
      echo "<p class='text'> YOUR PASSWORD IS : ".$_POST['password']."  <br> </p>";

    include_once 'studentlogin.php';

 }
 else 
 {
 	echo " <p class='text' > Error entering to  table </p> ".mysqli_error();
 }
 mysqli_close($dbcon);
} 
else
echo " <p class='text' > Email and passwords do not Match in both fields </p>";
}
else
	echo " <p class='text' >Access Denied </p> ";

 ?>
 
 </body>
 </html>