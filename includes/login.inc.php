<?php

session_start();

if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];


	//Error handlers
	//Check if inputs are empty

	if (empty($uid) || empty($pwd)) {

		header("Location: ../Logon.php?login=empty");
	 	exit();
	} else {

		//check if username exists in database

			//Create Template
	 $sql = "SELECT * FROM users WHERE user_uid=? OR user_email=?;";

	 //Create prepared statement
	 	$stmt= mysqli_stmt_init($conn);

	 		//Prepare prepared statement
	 	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 		header("Location: ../Logon.php?login=error");
	 		exit();
	 	} else{

	 		//bind  parameters to place holders
	 	
	 	mysqli_stmt_bind_param($stmt, "ss", $uid, $uid);

	 		//Run parameters inside database
	 	mysqli_stmt_execute($stmt);
	 	$result = mysqli_stmt_get_result($stmt);
	 	$check =mysqli_num_rows($result);
	 		//Check if username exists already 
	 		if ($check < 1) {
	 			header("Location: ../Logon.php?login=error2");
	 			exit();
	 		} else {

	 			if ($row = mysqli_fetch_assoc($result)) {
	 				
	 				//dehashing the password

	 				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);

	 				if ($hashedPwdCheck == false) {
	 				header("Location: ../Logon.php?login=error2");
	 				exit();
	 				} elseif ($hashedPwdCheck == true) {
	 					// log in the user here
	 				$_SESSION['u_id'] =$row['user_id'];
	 				$_SESSION['u_first'] =$row['user_first'];
	 				$_SESSION['u_last'] =$row['user_last'];
	 				$_SESSION['u_email'] =$row['user_email'];
	 				$_SESSION['u_uid'] =$row['user_uid'];

	 				header("Location: ../index.php?login=success");
	 					exit();

	 				}

	 			}

	 		}
	 	}

	}
} else{
	header("Location: ../Logon.php?login=error");
	 		exit();
}