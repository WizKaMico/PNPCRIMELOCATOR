<?php
	session_start();
	include_once('../../../../connection/connection.php');

	if(isset($_POST['add'])){
		$input_Barangay = $_POST["input_Barangay"];
        $input_DateCommitted = $_POST["input_DateCommitted"];
        $input_TimeCommitted = $_POST["input_TimeCommitted"];
        $input_Year = $_POST["input_Year"];
        $input_Month = $_POST["input_Month"];
        $input_Day = $_POST["input_Day"];
        $input_CrimeClock = $_POST["input_CrimeClock"];
        $input_CrimeCommitted = $_POST["input_CrimeCommitted"];
        $input_CrimeType = $_POST["input_CrimeType"];
        $input_SuspectStatus = $_POST["input_SuspectStatus"];
        $input_Gender = $_POST["input_Gender"];
        $input_SuspectAge = $_POST["input_SuspectAge"];
        $input_CaseStatus = $_POST["input_CaseStatus"];
		$sql = "INSERT INTO `clean_data`( `BARANGAY`, `DATE_COMMITTED`, `TIME_COMMITTED`, `YEAR`, `MONTH`, 
        `DAY`, `CRIME_CLOCK`, `CRIME_COMMITTED`, `CRIME_TYPE`, `SUSPECTS_Status`, `Gender`, `SUSPECTS_Age_CLEAN`,
         `CASE_STATUS`)
         VALUES ('$input_Barangay','$input_DateCommitted','$input_TimeCommitted','$input_Year','$input_Month',
         '$input_Day','$input_CrimeClock','$input_CrimeCommitted','$input_CrimeType','$input_SuspectStatus',
         '$input_Gender','$input_SuspectAge','$input_CaseStatus')";

		//use for MySQLi OOP
		if($con->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>