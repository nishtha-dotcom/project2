<?php

session_start();




$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'realestate');

 $email=$_POST['email'];
 $pass=$_POST['password'];
 $name=$_POST['name'];


$s="select*from user where email='$email' AND password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
   // $_SESSION['username']=$name;
   header('location:index.php');
   
  
}
else
{
   header('location:register.php');
}

?>   