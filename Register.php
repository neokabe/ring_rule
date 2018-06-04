<?php
	include 'header.php';
?>

<link rel="stylesheet" type="text/css" href="cgrids\form1style.css">


				<center><blockquote class="reg_mssg">Register now to turn your creativity into a  portfolio  </blockquote>
				

					
					<div id = "info1" Method='POST'class="form1" action = "includes/signup.inc.php">

					<ul class = "list"> 
						

						<li  class="name">First Name<br> <input id ="field2" type="text" name="first" placeholder="First name"></li> <!-- <li></li> -->

						<li  class="name">Last Name<br> <input id ="field5" type="text" name="last" placeholder="Last name"></li>

						<li class="email">Email<br><input id ="field1" type="text" name="email" placeholder="E-mail"></li>
						<!-- <li>   </li> --> 

						<li class= "user">Username<br> <input id ="field3" type="text" name="uid" placeholder="Username"></li> <!-- <li> </li> -->

						<li class="password">Password<br><input id ="field4" type="password" name="pwd" placeholder="Password" required autocomplete="off" required minlength="6"><!-- </li> </li> -->

						<!-- <li class="passcheck">Repeat password<br><input id ="field5" type="is= password" name="check_password"> --><!-- </li> <li> --> </li>

						

					</ul><p>
					</p></div>	
					

					<!-- <button class ="ok" id ="field_btn"> <a href="person_id">Next</button><br> -->
					<!-- <center><a id= "field" href="#" class="btn btn-info">Next</a></center> <br>
 -->

						<section id = "last"><input type="checkbox" name="terms.php"> <a href="terms.php"> Agree to terms and conditions</a> <br>

						 <center><a  href="#" class="btn btn-info" type="submit" name="submit">Submit</a></center> <br>

						 </section>


				</center>
					




								
									




<?php
	include "footer.php";

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