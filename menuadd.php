<?php

include('db.php');

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
	

  	$insert_data = "INSERT INTO menu (name,description,price) VALUES ('$name','$description','$price')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:menu.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>