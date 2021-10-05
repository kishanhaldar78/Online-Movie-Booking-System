<?php
session_start();

 $myseattype=$_SESSION['myseattype'];
 
 $username =$_SESSION['aname'];

//$showid=$_SESSION['myshowid'];
$conn= new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");


	$bookdate = $_POST['bdate'];
	$seatno = $_POST['sno'];
	$slotdesc=$_POST['myslot'];
	$showid=$_POST['myshow'];
	
	
//echo $showid." ".$username."".$myseattype." ".$bookdate." ".$seatno." ".$slotdesc."<br>";
/*
$myquery="select userid from Userlogin where username='$username';";
$s=$conn->query($myquery);
$myrow=$s->fetch_assoc();
$userid=$myrow['userid'];
*/

$myquery="select slotno from SlotDetail where slotdesc='$slotdesc'";
 $s0=$conn->query($myquery);
 $myrow0=$s0->fetch_assoc();
 
 $slotno=$myrow0['slotno'];

$myquery1="insert into Booking(showid,userid,bookeddate,showdate,noofseats,slotno,seattypedesc) values ('$showid','$username',curdate(),'$bookdate',$seatno,$slotno,'$myseattype')";
 $cinsert=$conn->query($myquery1);
 


if($cinsert)
{
$myquery2="select * from Booking where showid='$showid' and userid='$username'";
$s1=$conn->query($myquery2);
$myrow1=$s1->fetch_assoc();
$myquery3="select * from SlotDetail where slotno='$slotno'";
$s2=$conn->query($myquery3);
$myrow2=$s2->fetch_assoc();


$myshowid=$myrow1["ShowId"];
  $myquery4="SELECT m.MovieName from Movies m JOIN Shows s on(m.MovieId=s.MovieId) where ShowId=$myshowid"; 
  $s3=$conn->query($myquery4);
  $myrow3=$s3->fetch_assoc();

//echo "<br>".$myrow1['BookingId']." ".$myrow1['ShowDate']." ".$myrow1['noofseats']."<br>";

?>
<html>
<head>
<script>
function myFunction() {
  window.print();
}
</script>
</head>
<body>
<table width='500' border='3' align='center'>
   <tr>
      <th bgcolor='orange' colspan='2'>Acknowledgement Slip</th>
   </tr>
   <tr>
       <td align='right'>Booking ID : </td>
	   <td><?php echo $myrow1['BookingId']; ?>
	   <font color='red'></font>
	   </td>
   </tr>
   <tr>
       <td align='right'>Movie Name : </td>
	   <td><?php echo $myrow3['MovieName']; ?>
	   <font color='red'></font>
	   </td>
   </tr>
   <tr>
       <td align='right'>Seat Type : </td>
	   <td><?php echo $myrow1['seattypedesc']; ?>
	   <font color='red'></font>
	   </td>
   </tr>
   
   <tr>
       <td align='right'>No of Seat:</td>
	   <td><?php echo $myrow1['noofseats']; ?>
	   <font color='red'></font>
	   </td>
   </tr>
   
   <tr>
       <td align='right'>Show Date : </td>
	   <td><?php echo $myrow1['ShowDate']; ?>
	   <font color='red'></font>
	   </td>
   </tr>
   
   <tr>
       <td align='right'>Show Time : </td>
	   <td>
	    <?php echo $myrow2['slotdesc']; ?>
	   <font color='red'></font>
	   </td>
   </tr>
   
   <tr>
     <td align='center' colspan='2'>
	 <button onclick="myFunction()">Print this page</button>
	 </td>
   </tr>

<center><a href="show.php"><input type="button" value="Back"></a></center>   
   </table>

</body>
</head>
   
 <?php
 }
else
{
	echo "<script>alert('Same show  same user not allow!')</script>"; 
	echo "<script>window.open('show.php?Try Again..!','_self')</script>";
}
?>