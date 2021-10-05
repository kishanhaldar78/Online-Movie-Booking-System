<?php

$conn = new mysqli("localhost","id10362065_user","password","id10362065_mydatabase");
/*
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
else{
echo 'Connected successfully<br/>'; 
}
*/
  $cus_uname = $_POST['uname'];
   $cus_fname = $_POST['fname'];
    $cus_lname = $_POST['lname'];
  $cus_mno = $_POST['mno'];
  $cus_mail= $_POST['email'];
  $cus_type = $_POST['usertype'];
  $cus_pass = $_POST['pass'];
  $confirm_pass=$_POST['confirm'];

   
   //echo   $cus_uname." ". $cus_fname." ". $cus_lname." ".$cus_mno." ".$cus_mail." "." ".$cus_pass; 
 
 if($cus_pass==$confirm_pass){

//    echo $cus_name." ".$cus_fname." ".$cus_lname." ".$cus_mno." ".$cus_mail." ".$cus_type." ".$cus_pass."\n";
	$sql="insert into userlogin(username,fname,lname,mno,email,password,usertype) values ('$cus_uname','$cus_fname','$cus_lname',$cus_mno,'$cus_mail','$cus_pass','$cus_type')";

if(mysqli_query($conn, $sql)){  
 	echo "<script>alert('SUCCESSFULLY REGISTER !')</script>"; 
	echo "<script>window.open('admin_login.html','_self')</script>";
}else{  
//echo "Could not create table: ". mysqli_error($conn);  
	echo "<script>alert('NOT REGISTER !,TRY AGAIN')</script>"; 
	echo "<script>window.open('registercss.php','_self')</script>";
}  

/*
if($conn->query($sql)==true)
{
	echo "<script>alert('SUCCESSFULLY REGISTER !')</script>"; 
	echo "<script>window.open('admin_login.html','_self')</script>";
}
else{
	echo "<script>alert('NOT REGISTER !,TRY AGAIN')</script>"; 
	echo "<script>window.open('registercss.php','_self')</script>";
}
 */
 /*
  if($cus_name==''){
	  echo "<script>window.open('registercss.html?name=username is Required','_self')</script>";
      exit();
  }
  
  if($cus_fname==''){
	  echo "<script>window.open('registercss.html?name=First name is Required','_self')</script>";
      exit();
  }
  
  if($cus_lname==''){
	  echo "<script>window.open('registercss.html?name=First name is Required','_self')</script>";
      exit();
  }
  
   if($cus_mno==''){
	  echo "<script>window.open('registercss.html?name=Last name is Required','_self')</script>";
      exit();
  }
  
   if($cus_mail==''){
	  echo "<script>window.open('registercss.html?name=Email id is Required','_self')</script>";
      exit();
  }
  
   if($cus_pass==''){
	  echo "<script>window.open('registercss.html?name=Password is Required','_self')</script>";
      exit();
  }
  

 */
}
else{
    
    echo "<script>alert('Not SAME PASSWORD !!,TRY AGAIN')</script>"; 
	echo "<script>window.open('registercss.php','_self')</script>";
}
$conn->close();

?>
