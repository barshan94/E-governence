<?php
// include('db.php');
include('../model/db.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"service_provider",$username,$password);

if ($userQuery->num_rows > 0) {
 
  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['password'];
   }
 else {
$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
