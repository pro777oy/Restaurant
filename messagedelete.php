<?php

include('db.php');
$id = $_GET['id'];
$delete = "DELETE FROM message WHERE id = $id";
$run_data = mysqli_query($con,$delete);

if($run_data){
	header('location:message.php');
}else{
	echo "Donot Delete";
}


?>