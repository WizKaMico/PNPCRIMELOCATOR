<?php
	include('../connection/connection.php'); 
	if(ISSET($_POST['save'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$Fullname = $_POST['Fullname']; 
		$Alias = $_POST['Alias'];
		$EmailAddress = $_POST['EmailAddress'];
		$MobileNumber = $_POST['MobileNumber'];
		$Location = $_POST['Location'];
		$AuthorityNearby = $_POST['AuthorityNearby'];
		$Message = $_POST['Message'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("../includes/images"))
			mkdir("../includes/images");

		$rpath = "../includes/images/".$name;
		$path = "images/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $rpath)){
				mysqli_query($con, "INSERT INTO `user_complaint` VALUES('', '$Message', '$Fullname', '$Alias', '$Location', '$AuthorityNearby', '$EmailAddress', '$MobileNumber', '$path')") or die(mysqli_error());
				echo "<script>alert('SUCCESFULLY SAVED')</script>";
				header("location: ../index.php?view=CRIMEREPORT");
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>