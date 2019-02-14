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
	<title>Student Info</title>
	<link rel="stylesheet" type="text/css" href="css/insert.css">
</head>
<body >
	<?php
  session_start();
     
     if(isset($_POST['Login']))
     {

     	$email=$_POST['email'];
     	$password=md5($_POST['pwd']); 
     	$flag=0;
     	$sql="SELECT email,password,f_name,l_name,id FROM library  where email='$email' and password='$password' ";
     	$result=mysqli_query($dbcon,$sql);
     	$rcheck=mysqli_num_rows($result);
 	if ($rcheck>0)
     	{


             $_SESSION['user']=$email;
             $row=mysqli_fetch_assoc($result);
             $id=$row['id'];
              $name='<p class="text" >';
              $name.='Welcome '.$row['f_name']." ".$row['l_name'];
              $name.='</p>';
     		$flag=1;
     		echo $name;
       
        $logout='<div style=" position:relative:" > <a href="logout.php"
         style="float: right;
                color:maroon; 
                text-decoration: none;
                  border:2px solid maroon;
                  padding:10px;
                  border-radius:10px;
                  margin-right:200px;
                  margin-top:40px;
                   background-color:gold;"
          > '.'LOG OUT'.'</a> </div>';
       
                echo " <p class='text'> Your Books Are </p>" ;




      $sql=' SELECT
           records.stud_id,books.book_id,books.title, books.author,records.issued_at,records.book_id
            FROM  records JOIN
            books  on books.book_id=records.book_id Where stud_id="'.$id.'" ;';
 $result=mysqli_query($dbcon,$sql);
  
  $rcheck=mysqli_num_rows($result);
  $table='<center>
  <table  cellpadding="10px" 
              style="border:2px solid maroon;
                      color: maroon;
                      background-color: gold;
                      width:70%;
                      font-size:1.3em;
                      text-align:center;
                      border-radius:20px;
                      margin-top:10px;
                      line-height:1.3em;"
                 >';
  $table.='<tr>'.'<th>'.'Student Id'.'</th>'.'<th>'.'Book Id'.'</th>'.'<th>'.'Title'.'</th>'.'<th>'.'Author'.'</th>'.'<th>'.'Issued On'.'</th>'.'</tr>';
  if ($rcheck>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {  
     
      $table.='<tr>'

      .'<td>'

      .$row['stud_id']

      .'</td>'

      .'<td>'

      .$row['book_id']

      .'</td>'

      .'<td>'

      .$row['title']

      .'</td>'

      .'<td>'

      .$row['author']

      .'</td>'
      .'<td>'

      .$row['issued_at']

      .'</td>'


      .'</tr>';
     }

  }
  $table.='</table> </center>';
   echo $table;
   $table.='</table>';
   echo $logout;











                }
                	
           if($flag==0)      
          {
     		echo "<p class='text'> Credientials Do Not Match Try Again </p> <br>";
     		include_once 'studentlogin.php';
     	}

     	}
     	
     
$dbcon->close();

	?>

</body>
</html>