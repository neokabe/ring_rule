<?php

session_start();

include_once 'dhb.inc.php';
$sessionid= $_SESSION['u_id'];

$filename = "uploads/profile".$sessionid."*";
$fileinfo = glob($filename);
$fileext = explode(".", $fileinfo[0]);
$fileactualext = $fileext[1];

$file = "uploads/profile".$sessionid.".".$fileactualext;
if (isset($_POST['delpro'])) {
if (!unlink($file)) {
	echo "File was not removed";
} else{

	echo "File was deleted";
}

$sql = "UPDATE profileimg SET status=1 WHERE userid='$sessionid';";
// prepared statement
 	$stmt= mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
	 header("Location: ../profile.php?delete=error");
	 		exit();
	 		} else {
	 		$stat = 1;
	 		mysqli_stmt_bind_param($stmt, "s", $stat); 
	 		mysqli_stmt_execute($stmt);

 				// $result = mysqli_query($conn, $sql);
 				// $result;
 			header("Location: profile.php?delete?=success"); 
 					} // end of preparede statement
 			}

// mysqli_query($conn, $sql);

// header("Location: profile.php?deletesucess");
?>