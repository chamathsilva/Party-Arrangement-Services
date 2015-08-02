<? include ('../../resources/configuration/setup.php'); ?>

<?php

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$delete_query = "DELETE FROM `services` WHERE `id` = $id";
	mysqli_query($dbc, $delete_query);
	header('location: manage_services.php');	
}
?>
