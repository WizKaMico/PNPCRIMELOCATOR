<?php
	include_once('../../../connection/connection.php');
	if(ISSET($_POST['edit'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
        $UserID = $_POST['UserID'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($con, "UPDATE userdetails SET imagesrc = '$path' WHERE UserID = '$UserID'") or die(mysqli_error());
				echo "<script>alert('User account saved!')</script>";
				header("location: ../index.php?view=SETTINGS");
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>