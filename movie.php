<?php

$conn= new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");
if(isset($_POST['search'])){
	$movie_name=$_POST['moviename'];
}

$myquery="select m.movieid,h.halldesc,h.totalcap from movies m join hall h on(m.movieid=h.movieid) where moviename='$movie_name'";
$sql=$conn->query($myquery);
$myrow = $sql->fetch_assoc();;


$movieid=$myrow['movieid'];
 $myhalldesc=$myrow['halldesc'];
 $mytotalcap=$myrow['totalcap'];

 echo "movie ID  : ".$movieid."<br>";
 echo "HAll desc  : ".$myhalldesc."<br>";
 echo "Hall Capcaity  : ".$mytotalcap."<br>";

 ?>

 
 