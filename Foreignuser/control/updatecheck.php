<?php
include('../model/db.php');


 $error="";

 $radio1=$radio2=$radio3=$radioValidation=$dob="";
 $fname=$lname=$age=$passport=$email=$password="";
 $connection = new db();
 $conobj=$connection->OpenCon();
 
 $userQuery=$connection->CheckUser($conobj,"user",$_SESSION["username"],$_SESSION["password"]);
 
 if ($userQuery->num_rows > 0) {
 
     
     while($row = $userQuery->fetch_assoc()) {
       $fname=$row["FirstName"];
       $lname=$row["LastName"];
       $age=$row["Age"];
       $passport=$row["passport"];
       $email=$row["Email"];
       $password=$row["Password"];
       
    
   } 
 }
   else {
     echo "0 results";
   }
 
 




if (isset($_POST['update'])) {
if (empty($_POST['fname']) || empty($_POST['email']) || empty($_POST['lname']) || empty($_POST['age']) || empty($_POST['passport'])|| empty($_POST['password'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"user",$_SESSION["username"],$_POST['fname'],$_POST['lname'],$_POST['age'],$_POST['passport'],$_POST['email'],$_POST['password']);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>
