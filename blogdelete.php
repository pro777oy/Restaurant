<?php

include('db.php');
$id = $_GET['id'];
$delete = "DELETE FROM blog WHERE id = $id";
$run_data = mysqli_query($con,$delete);

if($run_data){
	header('location:blog.php');
}else{
	echo "Donot Delete";
}


?>