<?php

session_start();

$_SESSION['myseattype']=$myvalue=$_POST['myseat'];

$username =$_SESSION['aname'];

//$_SESSION['myshowid']=$showid=$_POST['var'];
$showid=$_POST['var'];

//echo $showid."<br>";

//echo "<br>";
//echo $username." ".$value;

//echo "<br>";

$conn= new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");

$myvalue=array();
$aseat=array();
$myquery="select slotno from SlotNo where showid=$showid";
$s=$conn->query($myquery);
$rowcount=$s->num_rows;
$count=0;
$total=0;
if($rowcount>0)
{	
while($myrow=$s->fetch_assoc())
{
$myslotno=$myrow['slotno'];
$myquery1="SELECT SlotDesc from SlotDetail where slotno=$myslotno";
$s1=$conn->query($myquery1);
$myrow1=$s1->fetch_assoc();
$myvalue[$count]=$myrow1["SlotDesc"];
   $count++;
}
}

?>


<html>
   <head>
   <title>New Signup</title> 
   </head>
<center>
 <body background="mimg\17.jpg"> 
 <table>
     <tr>
     <td>
   <form method='post' action='bookingd.php'>
   
      <h3>BOOKING TICKET FOR MOVIES<h3>
   
  
       SHOW DATE:
	   <input type='date' name='bdate'><br>
	   
   
       NO of SEAT:
	   <input type='text' name='sno' maxlength='1' pattern=[1-9]><br>
	   
     Choose Show Time:
	  <select name='myslot'>
   
	   <?php 

	   $count=0;
	   $mysize=sizeof($myvalue);
	   for($i=0; $i<$mysize; $i++){
		   $count++;
	   echo "<option value='$myvalue[$i]'>$myvalue[$i]</option>";
	     
		 } 
   ?>

    <font color='red'></font>
		 </td>
   </tr>
   <tr>
     <td align='center' colspan='2'>
         <input type="hidden" value="<?php echo $showid?>" name="myshow" />
	 <input type='submit' name='submit' value='book'>  
	 </td>
   </tr>
   
   </table>
   </form>
   </body>
   </center>
 </html>
 
 