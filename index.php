<?php
  include 'header.php';

?>
		
		<link rel="stylesheet" type="text/css" href="cgrids/main-slide.css">

		

		<center><div class="container">
				<?php

				include 'includes/dhb.inc.php';
			// show profile image of whoever is logged in or default img
			$sql = "SELECT * FROM user";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0 ) {
				while ($row = mysqli_fetch_assoc($result)){
					// query user database
						$id = $row['id'];
						//set user table 'id' equal to profile img table 'userid'
						$sql ="SELECT * FROM profileimg WHERE userid= '$id'";
						$resultImg = mysqli_query($conn, $sqlImg);

						while ($rowImg = mysqli_fetch_assoc($resultImg)) {
							// query profile image database
							echo "<div class = 'userprofile'>";
							if ($rowImg['status'] == 0) {
								// if status field is 0 then user has a profile image
								echo "<img src= 'uploads/profile".$id.".jpg'>";
							} else {
								// if status field isn't 0 then user hasn't uploaded a profile img so display default
								echo "<img src= 'uploads/profiledefault.jpg'>";
							}
								//show user name
								echo $row['username'];
							echo "</div>";
						}
				}
			} else{
				echo " no users yet";
			}


			if (isset($_SESSION['u_id'])) {
				 echo "<centre><h2> Welcome <h2></centre>".$_SESSION['u_first'];
				echo "<br><br><button class= btn .btn-primary> <a href='mypage.php'> My Profile</a></button>" ; 
			} else{
				echo "<h1>
				Wecome to Creatorio </h1>";
			}
		?>

			<div class="slider-outer">

				<img src="imgfiles/arrow-left.png" class="prev" alt="Prev">

						<div class="slider-inner">
							<img src="imgfiles/pex-cat.png" class="active">
							<img src="imgfiles/body-mesh.png">
							<!--<video src="vids/ball-3260.mp4"></video>-->
							<img src="imgfiles/pex-ani.png">
							<img src="imgfiles/pex-type.png">
							<img src="imgfiles/pex-voice.png">

						</div>



				<img src="imgfiles/arrow-right.png" class="next" alt="Next">

			</div>
		</div></center>
















			



				<!--! remove images belot up the 'motoo class'   -->


				<!-- <div class=box> -->

					<!--
				<div class="notcol">Art</div>
				<div class="pic">
					<img src="https://tag.ir/wp-content/uploads/2017/07/crow.jpg"> </div>


				<div> Models</div>

				<div class="pic2 col-sm-12">
					<img src="http://webneel.com/daily/sites/default/files/images/daily/10-2013/26-maya-3d-model.jpg">
				</div>

				<div class="pic">
					<img src="http://download.4-designer.com/files/20121227/Ancient-Temples-3D-models-of-ancient-temples-34027.jpg">

				</div>
				<div>Animation </div>

				<div class="pic">
					<img src="https://media.licdn.com/mpr/mpr/shrinknp_800_800/AAEAAQAAAAAAAAKsAAAAJDkyYmZkMTNiLTY3M2EtNDNkOC04ZTQ5LTczNDkwODJhNzVmMA.gif">
				</div>

				<div>Writing</div>

				<div class ="pic">
					<img src="http://cdn-static.denofgeek.com/sites/denofgeek/files/styles/main_wide/public/2015/11/scriptwriting_main.jpg?itok=QZV9WEQ8">
				</div>

				<div>Voice acting</div>

				<div class="pic6">
					<img src="https://d26oc3sg82pgk3.cloudfront.net/files/media/uploads/zinnia/2017/09/15/voiceoveracting.jpg.644x450_q100.jpg">
				</div>
				-->
				<center> <div class="motto">Let your creativity do the talking...  </div><br>

					<div class="intro"><a href="Register.php"> Register now</a></div></center>
				<!-- </div> -->
				<div class ="row"> </div><br>
			<!--
			
			 </div>
			



			 	-->

				


		


		 <?php

		 include 'footer.php';

		 ?>
		    

		    


			
			





	