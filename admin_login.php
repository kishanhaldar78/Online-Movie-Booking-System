<?php
session_start();
$conn= new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");
if($conn->connect_error)
{
	die("connectiom Failed ".$conn->connect_error);
}
else{
	echo "connected\n";
}

if(isset($_POST['login'])){
	$admin_mno=$_POST['mobile'];
	$admin_pass=$_POST['admin_pass'];

}

if(!empty($admin_mno) && !empty($admin_pass))
{
$sql="select * from userlogin where mno=$admin_mno AND password='$admin_pass'";
$s=$conn->query($sql);
$myrow=$s->fetch_assoc();
$_SESSION['myfname']=$myrow['fname'];
$_SESSION['mylname']=$myrow['lname'];
$_SESSION['aname']=$myrow['username'];



if(mysqli_num_rows($s) > 0)
{
	echo "<script>window.open('main.php?logged=logged in successfully..!','_self')</script>";
}
else
{
	echo "<script>alert('Password and Username is incorrect!')</script>"; 
	echo "<script>window.open('admin_login.html','_self')</script>";
}
}
else{
	echo "<script>alert('Please Enter Username and password !')</script>"; 
	echo "<script>window.open('admin_login.html','_self')</script>";
}

$conn->close();
?>
