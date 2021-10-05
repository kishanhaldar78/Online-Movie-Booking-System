<?php
require('db.php');
$mid =$_POST['movieid'];

$sql ="Select MovieId FROM Movies WHERE MovieId=$mid";
		$result = mysqli_query($con,$sql) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
		echo $mid;
		echo "<br>".$rows."<br>";
       
if($rows==1){  
           $query ="DELETE FROM Movies WHERE MovieId=$mid";
           mysqli_query($con,$query) or die(mysqli_error());
 	echo "<script>alert('SUCCESSFULLY Deleted MovieId:$mid')</script>"; 
	echo "<script>window.open('vmovie.php','_self')</script>";
}
else{  
	echo "<script>alert('Not Record Found !,TRY AGAIN')</script>"; 
    echo "<script>window.open('vmovie.php','_self')</script>";
}  

?>