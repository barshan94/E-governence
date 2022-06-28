<?php

include "connections.php";


$fname="";
$passport="";
$lname="";
$username="";
$email="";
$age="";
$password="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$username=$_REQUEST["username"];
$age=$_REQUEST["age"];
$passport=$_REQUEST["passport"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];

if(empty($fname) || empty($lname) || empty($username) || empty($age)  || empty($passport) || (strlen($passport)<9) || empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email) || empty($password) || (strlen($password)<6) )
{
    echo  "You have to  Fill all the requirements";

}
else
{
$query= "INSERT INTO `user`(`FirstName`, `LastName`, `username`, `Age`, `passport`, `Email`, `Password`) VALUES ('$fname', '$lname', '$username', '$age', '$passport', '$email', '$password')";

$row = insert($query);
if($row == 1)
{
   
   echo "done";
   //header("Location: ../view/page1.php");
}
else{
echo "Failed!";
}


}
}
?>