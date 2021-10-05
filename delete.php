<?php

$conn= new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");

if(isset($_GET['del'])){
    
    $id=$_GET['del'];
    
    $sql="delete from Booking where Bookingid=$id";
    $query=$conn->query($sql);
    
    echo "<script>alert('Sucessfully Deleted!')</script>"; 
	echo "<script>window.open('history.php','_self')</script>";
    

}


?>