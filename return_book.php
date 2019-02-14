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
	$submit=$_POST['return'];

	if(isset($submit))
	{
		$password=$_POST['password'];
		$book_id=$_POST['book_id'];
		$student_id=$_POST['student_id'];
		
		$sql=" SELECT * FROM adminpanel WHERE password='$password' ";
		$return=" SELECT * FROM records WHERE stud_id='$student_id' AND book_id='$book_id'";
		$result=mysqli_query($dbcon,$sql);
		$returncheck=mysqli_query($dbcon,$return);

		$rcheck=mysqli_num_rows($result);
		if($rcheck>0 )
		{
            if(mysqli_num_rows($returncheck) >0) 
            {
			$returnbook="DELETE FROM records WHERE stud_id='$student_id' AND book_id='$book_id' ";
			$check=mysqli_query($dbcon,$returnbook);
			if($check)
			{
				echo" <p class='text'> BOOK RETURNED SUCCESSFULLY </p>";
				include_once 'returnbook.php';
			}
		}
		 else {
		 	echo "<p class='text'> NO SUCH BOOK ISSUED TO STUDENT ID  :".$student_id ."</p>"; 
            include_once 'returnbook.php';
        }
			
		}
		else
		{
			echo "<p class='text' > Password doesn't match </p> ";
			include_once 'returnbook.php';
		}
	}



   $dbcon->close();


	 ?>

</body>
</html>