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
					




								
									






		<footer>(c) 2013 Digifoilio </footer>



			<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	 <script src="j_query\jquery.js"></script>


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




			// 	<script type="text/javascript">
			// 	$(document).ready(function(){

			// 	$(".list").hide();
			// 	$("#last").hide();

			// 	$("#field_btn").on("click", function(){

			// 		 for(i=0; i<= $(".list").length().last(); i++){

			// 		$('list').find('li').slideToggle(500);
			// 			})

			// 			// .eq(i)

			// 		 // 	$(".form1.email").slideToggle(500);
							
			// 			// i++;
			// 	})

			// })

		</script>

			<script src ="J_script/reg_events.js"></script>
						<!-- 	<script type="text/javascript"></script>
							if(button("Next"== 1)){

											link(person_id)

										} else{

											print("please agree to terms and conditions.")
										}

									</script> -->
 







		</body>
</html> 