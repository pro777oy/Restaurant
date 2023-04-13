<?php
include('db.php');
$id = $_GET['id'];

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$description = $_POST['description'];
    $price = $_POST['price'];
	

	$update = "UPDATE menu SET name = '$name',description='$description', price='$price' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:menu.php');
	}else{
		echo "Data not update";
	}
}

?>