<?php
$conn= new mysqli("localhost","root","root","movies");
if(isset($_POST['check'])){
	$fdate=$_POST['fdate'];
	$tdate=$_POST['tdate'];

}



$myquery="select m.moviename,h.halldesc,h.totalcap,s.showid ,s.fromdate,s.todate
    from movies m join shows s on(m.movieid=s.movieid)
    join hall h on(h.hallid=s.hallid)
    where
    (fromdate BETWEEN '$fdate' AND '$tdate') OR
    (todate BETWEEN '$fdate' AND '$tdate') OR
    (fromdate <= '$fdate' AND todate >= '$tdate')";
$s=$conn->query($myquery);

$myvalue=array();

?>
<html>
<body>
<?php if(!empty($fdate) && !empty($tdate)){ ?>
<table width='400' border='2' align='center' bgcolor='orange'>
	<tr>
<td align='center' bgcolor='pink' colspan='6'><h2>YOUR SELECT MOVIES <br> FROM DATE :  <?php echo $fdate ?> <br>TO DATE : <?php echo $tdate?></h2></td>
</tr>
</table>


<?php
				
$rowcount=$s->num_rows;
$count=0;
if($rowcount>0)
{	
while($myrow=$s->fetch_assoc())
{
	$myvalue[$count]=$myrow["showid"];
	$count++;
	?>
	
<table width='400' border='2' align='center' bgcolor='orange'>

<tr>
<td align='center' bgcolor='pink' colspan='6'><h2>show <?php echo $count?></h2></td>
</tr>

<tr>
<td align='right'>MOVIE NAME Fromdate :</td>
<td><?php echo $myrow["fromdate"]; ?></td>
</tr>
<tr>

<tr>
<td align='right'>MOVIE NAME Todate :</td>
<td><?php echo $myrow["todate"]; ?></td>
</tr>
<tr>

<tr>
<td align='right'> MOVIE NAME :</td>
<td><?php echo $myrow["moviename"]; ?></td>
</tr>
<tr>

<tr>
<td align='right'> HALL DETAILS :</td>
<td><?php echo $myrow["halldesc"]; ?></td>
</tr>
<tr>

<tr>
<td align='right'> CAPACITY OF HALL :</td>
<td><?php echo $myrow["totalcap"]; ?></td>
</tr>
<tr>
<td colspan='4' align='center'>

<form action="hallcap.php" method="post">
  <input type="hidden" name='varname' value='<?php echo $myvalue[0] ;?>'/>
<input type='submit' name='book' value='book now'>
</form>
</td>
</tr>

</table>
	
	
<?php
}
}
else{
	?>
	
	<table width='400' border='2' align='center' bgcolor='orange'>
	<tr>
<td align='center' bgcolor='pink' colspan='6'><h2>NO MOVIE AVAILABLE IN THIS SELECT DATE</h2></td>
</tr>
</table>
<?php
}

echo "my value for hall id : <br>";

$mysize=sizeof($myvalue);
for($i=0;$i<$mysize;$i++)
{
   echo $myvalue[$i]." ";

}	



}
else{
	echo "<script>alert('Please Enter the dates!')</script>"; 
	echo "<script>window.open('show.php?date format is not correct..!','_self')</script>";
}
 $conn->close();
?>

</body>
</html>