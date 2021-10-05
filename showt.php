<html>
<head>
  <title>Movie show Details</title>
  <link rel="stylesheet" type="text/css" href="showt.css">
</head>

<body>
<table>
  <tr>
      <th>SHOW NO.</th>
	  <th>Fromdate :</th>
	  <th>Todate :</th>
	  <th>MOVIE NAME :	</th>
	  <th>HALL DETAILS :</th>
	  <th>CAPACITY OF HALL  :</th>

   </tr>
   
   
   <?php
$conn= new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");
if(isset($_POST['check'])){
	$myfdate=$_POST['fdate'];
	$mytdate=$_POST['tdate'];

}



//echo $myfdate. " ".$mytdate;

if(!empty($myfdate) && !empty($mytdate)){

$myquery="select m.Moviename,h.Halldesc,h.TotalCapacity,s.Showid ,s.Fromdate,s.Todate from Movies m join Shows s on(m.Movieid=s.Movieid) join Hall h on(h.Hallid=s.Hallid) where (Fromdate BETWEEN '$myfdate' AND '$mytdate') OR (Todate BETWEEN '$myfdate' AND '$mytdate') OR (Fromdate <= '$myfdate' AND Todate >= '$mytdate')";
$s=$conn->query($myquery);
$rowcount=$s->num_rows;
$count=0;
$myvalue=array();

if($rowcount>0)
{	
while($myrow=$s->fetch_assoc())
{
  $myvalue[$count]=$myrow["Showid"];
	//echo "<br>";
	//echo $count." ".$myvalue[$count];
	$count++;
	  echo "<br>";
	echo "<tr><td>".$count."</td><td>".$myrow["Fromdate"]."</td><td>".$myrow["Todate"]."</td><td>".$myrow["Moviename"]."</td><td>".$myrow["Halldesc"]."</td><td>".$myrow["TotalCapacity"]."</td></tr>";
}
 echo "</table>";

?>
</table>


<center>
    <br>
     <form action="hallcap.php" method="post">
        SELECT SHOWS :<br><br>
	   <select name='showno'><br>
	   <?php 
	   $count=0;
	   $mysize=sizeof($myvalue);
	   for($i=0; $i<$mysize; $i++){
		   $count++;
	   echo "<option value='$myvalue[$i]'>show $count</option>";
	   }
	   ?>
	   </select>
	   <br><br>
	 <input type='submit' name='myshow' value='check show'>  
	
   </form>
   </center>
    <?php
}
else{
	echo "<script>alert('NO SHOW IN GIVEN DATES!')</script>"; 
	echo "<script>window.open('show.php?shows not available..!','_self')</script>";	
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