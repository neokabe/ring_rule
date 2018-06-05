<?php
	include 'header.php';
?>

<link rel="stylesheet" type="text/css" href="cgrids\form1style.css">


				<center><blockquote class="reg_mssg">Register now to turn your creativity into a  portfolio  </blockquote>
				

					
					<form Method='POST'class="form1" action = "includes/signup.inc.php"> 
						<ul class = "list"> 
						

						<li  class="name"><br> <input  type="text" name="first" placeholder="First name"></li> <!-- <li></li> -->

						<li  class="name"><br> <input  type="text" name="last" placeholder="Last name"></li>

						<li class="email"><br><input  type="text" name="email" placeholder="E-mail"></li>
						<!-- <li>   </li> --> 

						<li class= "user"><br> <input  type="text" name="uid" placeholder="Username"></li> <!-- <li> </li> -->

						<li class="password"><br><input type="password" name="pwd" placeholder="Password" required autocomplete="off" required minlength="6"><!-- </li> </li> -->

						 </li>

						

					</ul><p>
					</p>

						<center><p><input type="checkbox" name="terms.php" required="yes"><a href="terms.php">Agree to terms and conditions</a></p></center> <br>
						 <button class="btn btn-info" type="submit" name="submit">Submit</button>

					</form>


				</center>
					




								
									






		

<?php
	include "footer.php";

?>
