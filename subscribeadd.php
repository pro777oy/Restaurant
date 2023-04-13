<?php

include('db.php');

if(isset($_POST['submit'])){

 $mail = $_POST['mail'];
  

  	$insert_data = "INSERT INTO subscribe (mail) VALUES ('$mail')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>