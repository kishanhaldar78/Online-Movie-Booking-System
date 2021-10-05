<?php

session_start();
?>

<html>
<head>
  <title>SEAT AVAILABLE show Details</title>
  <link rel="stylesheet" type="text/css" href="showt.css">
</head>

<body>
<table>
  <tr>
      <th>SEAT TYPE : </th>
	  <th>FARE :</th>
	  <th>SEAT AVAILABLE :</th>
   </tr>



<?php

$conn= new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");
if(isset($_POST['myshow'])){
    
$_SESSION['myshowid']=$varvalue = $_POST['showno'];

    
}

//echo $_SESSION['myshowid'];
//echo $varvalue;
$myvalue=array();
$aseat=array();
$myquery="select ha.seatcount,s.seattypedesc,s.seatfare from SeatType s join HallCapacity ha on(s.seattypeid=ha.seattypeid) where hallid=(select hallid from Shows where showid=$varvalue)";
$s=$conn->query($myquery);
$rowcount=$s->num_rows;
$count=0;
$total=0;
if($rowcount>0)
{	
while($myrow=$s->fetch_assoc())
{
   $myvalue[$count]=$myrow["seattypedesc"];
	$total=$total+$myrow["seatcount"];
	
	$count++;
	echo "<tr><td>".$myrow["seattypedesc"]."</td><td>".$myrow["seatfare"]."</td><td>".$myrow["seatcount"]."</td></tr>";
}
echo "</table>";

}
?>

<br>
<br>
  <table>
<tr>
<th>
TOTAL SEAT AVAILABLE  : <?php echo $total; ?>
</th>
</tr>
</table>
<br>
<br>

  
   <center>
    <br>
     <form action="seattype.php" method="post">
        CHOOSE SEAT TYPE :<br><br>
	   <select name='myseat'><br>
	   
	   <?php 
	   $count=0;
	   $mysize=sizeof($myvalue);
	   for($i=0; $i<$mysize; $i++){
		   $count++;
	   echo "<option value='$myvalue[$i]'>$myvalue[$i]</option>";

	     
	   }
	   
	   ?>

	   </select>
	   <br><br>
	   <input type="hidden" value="<?php echo $varvalue?>" name="var" />
	 <input type='submit' name='myshow' value='choose type'>  
	
   </form>
   </center>
   
</body>
</html>