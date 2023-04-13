<?php

include('db.php');

if(isset($_POST['submit'])){

 $title = $_POST['title'];
  $description = $_POST['description'];

	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	$insert_data = "INSERT INTO blog (image,title,description) VALUES ('$image','$title','$description')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:blog.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>