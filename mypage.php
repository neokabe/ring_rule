<?php
include 'header.php';

?>

 

<?php
		include 'includes/dhb.inc.php';
		if(!isset($_SESSION['u_id'])){
			//if no ones logged in redirect to the front page or login page
			header('Location ../index.php');
				exit();


		} else {
				echo " <link rel='stylesheet' type='text/css' href='cgrids/mypage.css'>";
				echo "<h2> My portfolio</h2>";
		// show profile image of whoever is logged in or default img
			$sessionid= $_SESSION['u_id'];
				$first = $_SESSION['u_first'];
			//$sql = "SELECT * FROM users";
			 $sql = "SELECT * FROM users WHERE user_id= '$sessionid' AND user_first= '$first';";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0 ) {
				while ($row = mysqli_fetch_assoc($result)){
					// query user database
						$id = $row['user_id']; //
						//set user table 'id' equal to profile img table 'userid'
						$sqlImg ="SELECT * FROM profileimg WHERE userid= '$id'";
						$resultImg = mysqli_query($conn, $sqlImg);

						while ($rowImg = mysqli_fetch_assoc($resultImg)) {
							// query profile image database
							echo "<div class = 'userprofile'>";
							if ($rowImg['status'] == 0 && $_SESSION['u_id'] == $id) {
								$sessionid= $_SESSION['u_id'];
								
								$filename = "uploads/profile".$sessionid."*";
								$fileinfo = glob($filename);
								$fileext = explode(".", $fileinfo[0]);
								$fileactualext = $fileext[1];
								// if status field is 0 then user has a profile image
								echo "<img class ='pic' src= 'uploads/profile".$id.".".$fileactualext."?".mt_rand().">'";
							} else {
								// if status field isn't 0 then user hasn't uploaded a profile img so display default
								echo "<img class ='pic' src= 'uploads/profiledefault.png'>";
							}
								//show user name
								echo "<p>".$row['user_uid']."</p>";
							echo "</div><br><br>";
						}





 				}



			}

}

?>









<div class ='box'>
<!-- show uploaded content -->
<?php
?>

 </div>













<?php
include 'footer.php';
?>