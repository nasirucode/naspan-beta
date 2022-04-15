<?php
 session_start();
//Database Configuration File
include('../includes/config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
    $email=$_POST['email'];
    $password=$_POST['password'];
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($con,"SELECT Email, Password, MemberTypeId FROM tblmember WHERE (Email='$email')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{
$hashpassword=$num['Password']; // Hashed password fething from database
//verifying Password
if (password_verify($password, $hashpassword)) {
$_SESSION['login']=$_POST['username'];
    echo "<script type='text/javascript'> document.location = '../index'; </script>";
  } else {
echo "<script>alert('Wrong Password');</script>";
 
  }
}
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}
?>