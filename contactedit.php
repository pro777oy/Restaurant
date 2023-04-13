<?php
include('db.php');
$id = 1;

if(isset($_POST['submit']))
{
	
	
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$mail = $_POST['mail'];
	$firstpost = $_POST['firstpost'];
	$secondpost = $_POST['secondpost'];
	$firstdescription = $_POST['firstdescription'];
	$seconddescription = $_POST['seconddescription'];
	$mediaone = $_POST['mediaone'];
	$mediatwo = $_POST['mediatwo'];
	$mediathree = $_POST['mediathree'];
	$mediafour = $_POST['mediafour'];

	$update = "UPDATE contact SET phone='$phone',address='$address',mail='$mail ',firstpost='$firstpost', secondpost='$secondpost',firstdescription='$firstdescription',seconddescription='$seconddescription',mediaone='$mediaone',mediatwo='$mediatwo',mediathree='$mediathree',mediafour='$mediafour' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:contacteditform.php');
	}else{
		echo "Data not update";
	}
}

?>