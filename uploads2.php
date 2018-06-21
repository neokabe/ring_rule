<?php
session_start();
include_once 'includes/dhb.inc.php';
$id = $_SESSION['u_id'];

if (isset($_POST['submitpro'])) {
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];


	$fileExt = explode('.', $fileName);
 	$fileActualExt = strtolower(end($fileExt));


 	$allowed = array('jpg','jpeg', 'png', 'pdf');

 	if (in_array($fileActualExt, $allowed)) {
 		if ($fileError === 0) {
 			if ($fileSize < 100000) {
 			$fileNameNew = "profile".$id.".".$fileActualExt;

 				$fileDestination = 'uploads/'.$fileNameNew;

 				move_uploaded_file($fileTmpName, $fileDestination);
 				// update profile table upload status
 			$sql = "UPDATE profileimg SET status=0 WHERE userid ='$id;";
 				$result = mysqli_query($conn, $sql);
 				
 				header("Location: profile.php?upload?success");
 			} else{
 				echo "Your file size is too large";
 			}

 		} else{
 			echo "There was an error uploading this file";
 		}

 	} else {
 		echo "You cannot upload files of this type";
 	}

}