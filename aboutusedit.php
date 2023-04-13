<?php
include('db.php');
$id = $_GET['id'];

if(isset($_POST['submit']))
{
	
	$description = $_POST['description'];
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

	$update = "UPDATE aboutus SET image = '$image',description='$description' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:aboutus.php');
	}else{
		echo "Data not update";
	}
}

?>