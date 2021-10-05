<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
//include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h2>Movie Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>Movie Id</strong></th><th><strong>Movie Name</strong></th></tr>
</thead>
<tbody>
<?php
///$count=1;
$sel_query="Select * from Movies ORDER BY movieid";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)){ ?>
<tr><td align="center"><?php echo $row['MovieId']; ?></td><td align="center"><?php echo $row['MovieName']; ?></td></tr>
<?php } ?>
</tbody>
</table>

<br /><br />
<form action='dmovie.php' method='post'>
<table width='250' border='2' align='center' bgcolor='orange'>

<tr>
<td align='center' bgcolor='pink' colspan='6'><h2>Enter Movie Id</h2></td>
</tr>

<tr>
<td align='right'>movie id:</td>
<td><input type='text' name='movieid'></td>
</tr>

<td colspan='4' align='center'><input type='submit' name='rmdel' value='delete record'>
</td>
</tr>

</table>
</form>
<br /><br />
<a href="https://www.allphptricks.com/insert-view-edit-and-delete-record-from-database-using-php-and-mysqli/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>
</div>
</body>
</html>