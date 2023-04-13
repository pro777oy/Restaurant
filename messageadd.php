<?php

include('db.php');

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $chat = $_POST['chat'];
	

  	$insert_data = "INSERT INTO message (name,mail,chat) VALUES ('$name','$mail','$chat')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>