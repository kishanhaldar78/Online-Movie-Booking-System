<?php
session_start();
?>
<script>
function f1()
{
	alert(document.getElementById("abc").innerText);
}
function f2()
{
	alert(document.getElementById("abc").innerText);
}
</script>
<html>
<head>
<title>History</title>
<link rel="stylesheet" type="text/css" href="showt.css">
</head>

<body>
<b>welcome :</b>
<font color='blue' size='5'>

<?php $username=$_SESSION['aname']; 

echo $_SESSION['myfname']." ";

  echo $_SESSION['mylname'];
 ?></font>
<label style="position:absolute;right:5%;" ><a href='show.php'>back</a></label><br>
<a href='logout.php'>Logout</a><br><br>
<table>
  <tr>
	  
      <th>BOOKING ID : </th>
      <th>Movie Name :</th>
	  <th>SEAT TYPE :</th>
	  <th>NO OF SEAT :</th>
	  <th>Show Date :</th>
	  <th>Show Timing :</th>
	  <th>status :</th>
   </tr>


<?php

$conn= new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");
/*$myquery="select userid from userlogin where username='$username'";
$s=$conn->query($myquery);
$myrow=$s->fetch_assoc();
$userid=$myrow['userid'];
*/
$myquery2="select * from Booking where userid='$username'";

$s1=$conn->query($myquery2);
$rowcount=$s1->num_rows;
{	
while($myrow1=$s1->fetch_assoc())
{
    $myshowid=$myrow1["ShowId"];
  $myquery3="SELECT m.MovieName from Movies m JOIN Shows s on(m.MovieId=s.MovieId) where ShowId=$myshowid"; 
  $s2=$conn->query($myquery3);
  $myrow2=$s2->fetch_assoc();
  
  $myslotno=$myrow1['slotno'];
 $myquery4="SELECT SlotDesc from SlotDetail where slotno=$myslotno";
  $s3=$conn->query($myquery4);
  $myrow3=$s3->fetch_assoc();
  $bookingid=$myrow1["BookingId"];
	echo "<tr id='abc'><td>".$bookingid."</td><td>".$myrow2["MovieName"]."</td><td>".$myrow1["seattypedesc"]."</td><td>".$myrow1["noofseats"]."</td><td>".$myrow1["ShowDate"]."</td><td>".$myrow3["SlotDesc"]."</td><td>"."<a href='delete.php?del=$bookingid'>delete</a> <a href='print.php?myprint=$bookingid'>print</a>"."</td></tr>";	
	
}
echo "</table>";

}


?>
   
</body>
</html>