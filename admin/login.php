<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$musername = stripslashes($_POST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$musername); //escapes special characters in a string
		$mpassword = stripslashes($_POST['password']);
		$password = mysqli_real_escape_string($con,$mpassword);
		echo $username." ".$password."<br>";
	//Checking is user existing in the database or not  ..".md5($password)""
        $query = "SELECT * FROM userlogin WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
		echo "<br>".$rows."<br>";
        if($rows==1){
			$_SESSION['username'] = $username;
			echo "<br>i in rows<br>";
			echo "<script>window.open('index.php?logged=logged in successfully..!','_self')</script>"; // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='http://website4u24x7.000webhostapp.com/admin/login.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />
<a href="https://www.allphptricks.com/insert-view-edit-and-delete-record-from-database-using-php-and-mysqli/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>
</div>
<?php } ?>


</body>
</html>
