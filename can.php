<?php
$conn= new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");
$x=$_POST["id"];
$myquery="select * from booking where bookingid=$x";
$r=$conn->query($myquery);
if($r->num_rows >0)
{
	$f=$r->fetch_assoc();
echo 	$f["showid"];
}


?>
