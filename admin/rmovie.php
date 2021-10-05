<?php
require('db.php');
$mid =$_POST['movieid'];
$mname = $_POST['moviename'];
//echo $mid." ".$mname."<br>";

 $sql = "INSERT INTO Movies(movieid,moviename) VALUES($mid,'$mname')";
	//	$result = mysqli_query($con,$query) or die(mysqli_error());
	
if(mysqli_query($con, $sql)){  
 	echo "<script>alert('SUCCESSFULLY INSERTED !')</script>"; 
	echo "<script>window.open('insert.php','_self')</script>";
}else{  
//echo "Could not create table: ". mysqli_error($conn);  
	echo "<script>alert('Either dupicate record or not enterd value !,TRY AGAIN')</script>"; 
echo "<script>window.open('rmovie.html','_self')</script>";
}  
?>