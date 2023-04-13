<?php

include('db.php');

session_start();
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];


$query="select * from admin where email='$email' and password='$password'";

$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
   
  $_SESSION['email']=$email;
  header("location:dashboard.php");
} 

else
{

  echo "<script>alert('Error login')</script>";
  echo"<script>window.open('index.php','_self')</script>";
}


}




if(!isset($_SESSION['email']))
{
  header("location:login.php");
}
else
{
  
}



?>