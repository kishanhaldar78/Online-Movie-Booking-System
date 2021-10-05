<?php
session_start();
$username=$_SESSION['uname'];

if(empty($username)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>

<div class="MOVIE BOOKING SYSTEM">
  <h2>MOVIE BOOKING SYSTEM</h2>
</div>

<div class="row"><label="telugu"><b>AVAILABLE-TELUGU<b></label><br><br><br>
  <div class="TELUGU" style="background-color:#aaa;"><a href="show.php"><b><img src="mimg\majili1.jpg" width="25%"></a><b><a href="show.php"><img src="mimg\oka1.jpg" width="25%"></a><b><a href="show.php"><img src="mimg\jersey1.jpg" width="25%"></a><b><a href="show.php"><img src="mimg\bahubali.jpg" width="25%"></a></div><br>

 <label="english"><b>AVAIABLE-ENGLISH<b></label><br><br><br>
 <div class="ENGLISH" style="background-color:#bbb;"><b><a href="show.php"><img src="mimg\harry.jpg" width="25%"></a><b><a href="show.php"><img src="mimg\viking.jpg" width="25%"></a><b><a href="show.php"><img src="mimg\alla.jpg" width="25%"></a><b><a href="show.php"><img src="mimg\hell.jpg" width="25%"></a></div><br>

 <label="hindi"><b>AVAILABLE-HINDI<b><br><br><br>
 </label> <div class="HINDI" style="background-color:#ccc;"><a href="show.php"><b><img src="mimg\bazza.jpg" width="25%"></a><b><a href="show.php"><img src="mimg\dhadak.jpg" width="25%"></a><b><a href="show.php"><img src="mimg\lukka.jpg" width="25%"></a><b><a href="show.php"><img src="mimg\diwale.jpg" width="25%"></a></div><br>
</div>

<p>back</p>


</body>
</html>
<?php

}
else{
    
    header("Location: http://website4u24x7.000webhostapp.com/");
    exit();
    
}

?>