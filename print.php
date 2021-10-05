<?php

$conn= new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");

if(isset($_GET['myprint'])){
    
    $id=$_GET['myprint'];
    
    
    $myquery2="select * from Booking where Bookingid=$id";
$s1=$conn->query($myquery2);
$myrow1=$s1->fetch_assoc();

$myslotno=$myrow1["slotno"];
$myquery3="select * from SlotDetail where slotno='$myslotno'";
$s2=$conn->query($myquery3);
$myrow2=$s2->fetch_assoc();


$myshowid=$myrow1["ShowId"];
  $myquery4="SELECT m.MovieName from Movies m JOIN Shows s on(m.MovieId=s.MovieId) where ShowId=$myshowid"; 
  $s3=$conn->query($myquery4);
  $myrow3=$s3->fetch_assoc();
}


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

<center><a href="history.php"><input type="button" value="Back"></a></center>   
   </table>

</body>
</head>