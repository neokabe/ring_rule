<?php
	include 'header.php';

?>

			<link rel="stylesheet" type="text/css" href="cgrids\sign.css">
						<!-- top sign in by form origianlly by Captain Anonymous ON CODE PEN -->

							<centre><form  method ='POST'action="#">
				  
				  <fieldset>
				    
				    <legend>Sign In</legend>
				    
				    <label for="username" class="vhide">Username</label>
				    <input id="username" name="username" type="text" placeholder="Username" required minlength="2">
				    
				    <label for="password" class="vhide">Password</label>
				    <input id="password" name="password" type="password" placeholder="Password" required autocomplete="off" required minlength="6">
				    
				    <input type="checkbox" name="remember" id="remember" class="vhide"><br>
				    <label for="remember">
				      <i class="octicon octicon-check"></submit></i> 
				    </label>Remember me?
				      
				        
				    <button class="signin">Sign in</button>
				    
				  </fieldset>
				  
				</form></centre>
					



				<!-- 	<div class="form2">
						<center>
					<ul>	
					<li>Username</li> <li> <input type="username" name="userid"></li>


					<li>Password</li> <input type=password" name="password checked=""></li>
					</center>
						</div>


						<center><a href="#" class="btn btn-info">Log in</a></center> -->








<?php
	include 'footer.php';
?>