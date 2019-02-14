<?php 
include_once 'dbcon.php';
include_once 'homepage.html';
if(!$dbcon) {
die("failed to connect to database".mysqli_error($dbcon));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<?php

      session_start();

     
     if(isset($_POST['Login']))
     {
   $email=$_POST['email'];
   $password=$_POST['pwd'];
   $sql=" SELECT * from adminpanel WHERE email='$email' AND password='$password' ";
   $result=mysqli_query($dbcon,$sql);
   $rcheck=mysqli_num_rows($result);
   if($rcheck>0)
   {
     $_SESSION['admin']=$email;
   	echo " <p class='text' > Welcome Admin </p>";
   	  $Add_books='<div style=" position:relative:" > <a href="addbook.php"
         style="float: left;
                color:maroon; 
                width:24.5%;
                text-align:center;
                text-decoration: none;

                  border-top:2px solid maroon;
                  border-left:2px solid maroon;
                  margin-left:1%;
                  border-top-left-radius: 25px;
                  border-bottom-left-radius: 25px;

                   border-bottom:2px solid maroon;
                  padding:10px;
                  font-size:1.2em;
                   margin-top:40px;
                   background-color:gold;"
          target="_blank" > '.'Add Book'.'</a> </div>';
          echo $Add_books;
          $return_book='<div style=" position:relative:" > <a href="returnbook.php"
         style="float: left;
                color:maroon; 
                width:24.5%;
                text-align:center;
                text-decoration: none;
                  border-top:2px solid maroon;
                   border-bottom:2px solid maroon;
                  padding:10px;
                  
                 font-size:1.2em;
                  
                  margin-top:40px;
                   background-color:gold;"
           target="_blank"> '.'Return Book'.'</a> </div>';
          echo $return_book;
          $Issue_book='<div style=" position:relative:" > <a href="Issuebook.php"
         style="float: left;
                color:maroon; 
                width:24.5%;
                text-align:center;
                text-decoration: none;
                  border-top:2px solid maroon;
                   border-bottom:2px solid maroon; 
                  padding:10px;
                 font-size:1.2em;
                  
                  margin-top:40px;
                   background-color:gold;"
          target="_blank" > '.'Issue Book'.'</a> </div>';
          echo $Issue_book;
              $logout='<div style=" position:relative:" > <a href="logout.php"
         style="float: left;
                color:maroon; 
                width:24.5%;
                text-align:center;
                text-decoration: none;
                  border-top:2px solid maroon;
                  border-right:2px solid maroon;
                   border-bottom:2px solid maroon;
                  padding:10px;
                  margin-right:10px;
                  border-top-right-radius: 25px;
                  border-bottom-right-radius: 25px;
                 
                  font-size:1.2em;
                  margin-top:40px;
                   background-color:gold;"
           > '.'Log Out'.'</a> </div>';
          echo $logout;
       
   }
   else{
   	echo " <p class='text'>Failed to login </p>";
   	include_once 'adminlogin.php' ;
   }
 
}
 else
 {
    echo "<p class='text'> YOU ARE NOT LOGGED IN </p>";
    include_once 'adminlogin.php';
 }
   $dbcon->close();
   ?>
</body>
</html>