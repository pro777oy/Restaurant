<?php
include('db.php');
$id = 1;

if(isset($_POST['submit']))
{
	
	$latestnews = $_POST['latestnews'];
	
	$update = "UPDATE news SET latestnews='$latestnews' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:newseditform.php');
	}else{
		echo "Data not update";
	}
}

?>