<?php

session_start();

if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];


	//Error handlers
	//Check if inputs are empty
}