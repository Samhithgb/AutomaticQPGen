<?php

define('HOST','localhost');
define('USER','root');
define('PASS','root');
define('DB','Question_Paper_Generator');
session_start(); 
$con = mysqli_connect(HOST,USER,PASS,DB);
 
$username = $_POST['uname'];
$password = $_POST['password'];
 
$sql = "select * from Teacher where '$username'=Teacher_ID and '$password'=Password";
 
$res = mysqli_query($con,$sql);
 
$check = mysqli_fetch_array($res);
 
if(isset($check)){
echo 'success';
$_SESSION['username']=$username;
echo "<script>self.location='faculty/facultydash.php'</script>";
}else{
echo 'Failed';
}
 
mysqli_close($con);
?>
