<?php
session_start();
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>show date</title>
</head>
<center>
<body background="mimg\17.jpg">
<b>welcome :</b>

<?php echo $_SESSION['myfname']." ";

  echo $_SESSION['mylname'];?></font>
<label style="position:absolute;right:5%;" ><a href='history.php'>History</a></label><br>
<a href='logout.php'>Logout</a><br>


<form action='showt.php' method='post'>

<h2>show date</h2>
  <div class="form-group">
                                <label for="username" class="text-white">From Date:</label><br>
                                <input type="date" name="fdate" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">ToDate:</label><br>
                                <input type="date" name="tdate" id="password" class="form-control">
                            </div>

<input type='submit' name='check' value='check show' class="btn btn-info btn-md"><br>
</form>
</body>
</center>
</html>