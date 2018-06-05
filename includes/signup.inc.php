<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

<<<<<<< HEAD
=======

>>>>>>> 9d7d2e4ed528695b2603e8d48852b4db30241d6a
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];


	// ***Error handlers***
	// check for emptly fields
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
		header("Location: ../Register.php?signup=empty");
		exit();
	} else {
		// Check if input characters are valid

		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../Register.php?signup=invalid");
			exit();
		} else {
			// Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../Register.php?signup=email");
<<<<<<< HEAD
				exit();
			} else {
				//create template

				$sql = "SELECT * FROM users WHERE user_uid =?;";
					//create prepared statement
				$stmt = mysqli_stmt_init($conn);
				//Prepare prepared statement
				} if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../Register.php?signup=error");
				exit();
				} else {
=======
			exit();
			} else {
				//create template

				$sql = "SELECT * FROM users where user_uid =?";
					//create prepared statement
				$stmt = mysqli_stmt_init($conn);
				//Prepare prepared statement
			} if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../Register.php?signup=error");
				exit();
			} else {
>>>>>>> 9d7d2e4ed528695b2603e8d48852b4db30241d6a
				//bind  parameters to place holders

				mysqli_stmt_bind_param($stmt, "s", $uid);
				//Run parameters inside database
	 			mysqli_stmt_execute($stmt);
	 			$result = mysqli_stmt_get_result($stmt);
	 			// $result = mysqli_query($conn, $sql);
				$check =mysqli_num_rows($result);
	 				//Check if username exists already

				if ($check > 0) {
					header("Location: ../Register.php?signup=usertaken");
				exit();
<<<<<<< HEAD
					} else {
=======
				} else {
>>>>>>> 9d7d2e4ed528695b2603e8d48852b4db30241d6a
					//Hashing password
	 					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	 					//**insert the user into the database**
	 					//Create a template
	 					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
							VALUES (?, ?, ?, ?, ?);";

							//Create a statement
						$stmt = mysqli_stmt_init($conn);

						if (!mysqli_stmt_prepare($stmt,$sql)) {
							echo "sql error";
<<<<<<< HEAD
							} else {
=======
						} else {
>>>>>>> 9d7d2e4ed528695b2603e8d48852b4db30241d6a

							mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $hashedPwd);
							mysqli_stmt_execute($stmt);

							header("Location: ../Register.php?signup=success");
							exit();
						}

				}
			}
		}
	}





}

else{
	header("Location: ../Register.php?signup=error4");
	exit();
}