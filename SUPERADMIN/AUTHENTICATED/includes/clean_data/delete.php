<?php
	session_start();
	include_once('../../../../connection/connection.php');

	if(isset($_GET['ID'])){
		$sql = "DELETE FROM clean_data WHERE ID = '".$_GET['ID']."'";

		//use for MySQLi OOP
		if($con->query($sql)){
			$_SESSION['success'] = 'Deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: index.php');
?>