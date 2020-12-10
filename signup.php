<?php

session_start();
$error = NULL;

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'realestate');

 $name=$_POST['name'];
 $email=$_POST['email'];
 $pass=$_POST['password'];
 $conpass=$_POST['conpassword'];
 $address=$_POST['address'];

 if($conpass != $pass){
    $error = "your passwords doesnt match";
 }
 else{

   $vkey = md5(time(). $name);

   $pass = md5($pass);

$s="select*from user where email='$email'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
   echo "Username Already Taken";
}
else
{
   $reg="insert into user(name, email, password, conpass, address) values('$name','$email','$pass','$conpass','$address')";
   mysqli_query($con,$reg);
   // echo "Registration Successful!!";
   if($reg){
      //send email
      $to = $email;
      $subject = "Email Verification";
      $message = "<a href='http://localhost/RealEstate/verify.php?vkey=$vkey'> Click to Verify </a>";
      $headers = "From: info@clickkarogroup.com";
      mail($to,$subject,$message,$headers);

      header('location:index.php');
   }
}
}
?>