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
	$submit=$_POST['addbook'];

	if(isset($submit))
	{
		$password=$_POST['password'];
		$title=$_POST['title'];
		$author=$_POST['author'];
		if(!empty($_POST['genre']))
			$genre=implode(',',$_POST['genre']);
		else
			$genre="none";
		$sql=" SELECT * FROM adminpanel WHERE password='$password' ";
		$result=mysqli_query($dbcon,$sql);
		$rcheck=mysqli_num_rows($result);
		if($rcheck>0)
		{
			$addbook="INSERT INTO books (author,title,genre) values ('$author','$title','$genre')";
			$check=mysqli_query($dbcon,$addbook);
			if($check)
			{
				echo" <p class='text' > '  ".$title." By "."$author"." ' ADDED TO COLLECTIONS </p>";
				unset($submit);
				include_once 'addbook.php';
			}
			else
			{
				echo "<p class ='text'> SOME ERROR OCCURED :  ".mysqli_error($dbcon)."</p>";
				include_once 'addbook.php';
			}

			
		}
		else
		{
			echo "<p class='text' > Password doesn't match </p> ";
			include_once 'addbook.php';
		}
	}



$dbcon->close();


	 ?>

</body>
</html>