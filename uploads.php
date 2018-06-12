<?php


if (isset($_POST['submit'])) {
	$file = $_FILES['file'];


	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

		// get file extension
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	// set allowed extensions
	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	// check if file extensions are in the allowed list
	if (!in_array($fileActualExt, $allowed)) {
		
		echo "you cannot upload this file type";
		exit();
	} else {

		if ($fileError === 0) {
			if (!$fileSize < 100000) {
				echo "your file exceeds the maximum sise";
			exit();
			} else{
			$fileNameNew = uniqid('', true).".".$fileActualExt;

			$fileDestination = 'uploads/'.$fileNameNew;
			move_uploaded_file($fileTmpName, $fileDestination);

			header("Location: index.php?uploadsuccess");

			}

		} else {
			echo "there was an error uploading your file";
		exit();
		}

	}
}	