<?php
	include 'header.php';
?>

<link rel="stylesheet" type="text/css" href="cgrids\form1style.css">


				<center><blockquote class="reg_mssg">Register now to turn your creativity into a  portfolio  </blockquote>
				
					<form Method='POST'class="form1" action = "includes/signup.inc.php"> 

<<<<<<< HEAD
					
					<form Method='POST'class="form1" action = "includes/signup.inc.php"> 
						<ul class = "list"> 
						

						<li  class="name"><br> <input  type="text" name="first" placeholder="First name"></li> <!-- <li></li> -->

						<li  class="name"><br> <input  type="text" name="last" placeholder="Last name"></li>

						<li class="email"><br><input  type="text" name="email" placeholder="E-mail"></li>
						<!-- <li>   </li> --> 

						<li class= "user"><br> <input  type="text" name="uid" placeholder="Username"></li> <!-- <li> </li> -->
=======
						<ul class = "list"> 
						

						<li  class="name"><br> <input type="text" name="first" placeholder="First name"></li> <!-- <li></li> -->

						<li  class="name"><br> <input type="text" name="last" placeholder="Last name"></li>

						<li class="email"><br><input type="text" name="email" placeholder="E-mail"></li>
						<!-- <li>   </li> --> 

						<li class= "user"><br> <input type="text" name="uid" placeholder="Username" required minlength="2"></li> <!-- <li> </li> -->
>>>>>>> 9d7d2e4ed528695b2603e8d48852b4db30241d6a

						<li class="password"><br><input type="password" name="pwd" placeholder="Password" required autocomplete="off" required minlength="6"><!-- </li> </li> -->

						 </li>

						

					</ul><p>
					</p>

<<<<<<< HEAD
						<center><p><input type="checkbox" name="terms.php" required="yes"><a href="terms.php">Agree to terms and conditions</a></p></center> <br>
						 <button class="btn btn-info" type="submit" name="submit">Submit</button>
=======
						<section id = "last">
						<input type="checkbox" name="terms.php"><label>Agree to terms and conditions</label>
						 <a href="terms.php"> </a> <br>

						
						 <button class="btn btn-info" type="submit" name="submit">Submit</button></section>
>>>>>>> 9d7d2e4ed528695b2603e8d48852b4db30241d6a

					</form>


				</center>
					




								
									




<?php
	include "footer.php";

<<<<<<< HEAD

		

<?php
	include "footer.php";

?>
=======
?>
<!-- <script src ="J_script/reg_events.js"></script> -->
			
<!-- 
		<script type="text/javascript">
			$(document).ready(function(){

				$(".list").hide();
				$("#last").hide();
				
				$("#field_btn").on("click", function(){
					 $('.list').show(900);
					 
					if($(this).is('clicked field_btn')){
					$('#last').show(500);


				 }
						
				})


			});

</script> -->


			 	<!-- <script type="text/javascript">
				$(document).ready(function(){

				$(".list").hide();
				$("#last").hide();

				$("#field_btn").on("click", function(){

					 for(i=0; i<= $(".list").length().last(); i++){

					$('list').find('li').slideToggle(500);
						})

						.eq(i)

					 	$(".form1.email").slideToggle(500);
							
						i++;
				})

			})

		 </script>  -->

			
						<!-- 	<script type="text/javascript"></script>
							if(button("Next"== 1)){

											link(person_id)

										} else{

											print("please agree to terms and conditions.")
										}

									</script> -->
>>>>>>> 9d7d2e4ed528695b2603e8d48852b4db30241d6a
