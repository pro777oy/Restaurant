<?php
include('db.php');
$id = $_GET['id'];

if(isset($_POST['submit']))
{
	
	$description = $_POST['description'];
    
	$update = "UPDATE desmenu SET description='$description' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:menu.php');
	}else{
		echo "Data not update";
	}
}

?>