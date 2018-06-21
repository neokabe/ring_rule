<?php

session_start();

include_once 'dhb.inc.php';
$sessionid= $_SESSION['u_id'];

$filename = "uploads/profile".$sessionid."*";
$fileinfo = glob($filename);
$fileext = explode(".", $fileinfo[0]);
$fileactualext = $fileext[1];

$file = "uploads/profile".$sessionid.".".$fileactualext;

if (!unlink($file)) {
	echo "File was not removed";
} else{

	echo "File was deleted";
}

$sql = "UPDATE profileimg SET status=1 WHERE userid ='$sessionid';";
mysqli_query($conn, $sql);

header("Location: profile.php?deletesucess");