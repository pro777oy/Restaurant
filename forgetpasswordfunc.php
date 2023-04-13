<?php
include('db.php');

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$food = $_POST['food'];
    $password = $_POST['password'];
	

	$update = "Update admin set password='$password' Where food='$food'and email='$email';";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:login.php');
	}else{
		echo "Password is not updated";
	}
}

?>