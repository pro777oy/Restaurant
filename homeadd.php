<?php

include('db.php');

if(isset($_POST['submit'])){

	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	$insert_data = "INSERT INTO home (image) VALUES ('$image')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:home.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>