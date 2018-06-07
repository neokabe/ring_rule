<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="cgrids\base.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

		<link rel="stylesheet" type="text/css" href="cgrids/main-slide.css">

	<title>Digifolio</title>
	<link rel="stylesheet" type="text/css" href="cgrids\blockstyle.css">
	</head>
		<body>
			
			<header class= "navbar-inverse" role="banner">
				<div class = "container-fluid">
						<nav class="navbar navbar-inverse">
						  <!-- <div class="container-fluid"> -->
						    <!-- Brand and toggle get grouped for better mobile display -->
						   <div class="navbar-header">
						    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a class="navbar-brand" href="index.php">Creatorio</a>
						    </div>

						    <!-- Collect the nav links, forms, and other content for toggling -->
						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						      <ul class="nav navbar-nav">
						        <!-- <li class="active"><a href="#">All <span class="sr-only">(current)</span></a></li> -->
						        <li><a href="Register.php"> Register</a></li>
								<li><a href="Logon.php">Sign in</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact_us.php">Contact</a></li>



						        <li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
						          <ul class="dropdown-menu">
						            <li><a href="terms.php">Terms</a></li>
						            <li><a href="#">Promo</a></li>
						            <li><a href="#">Something else here</a></li>
						            <li role="separator" class="divider"></li>
						            <li><a href="#">Separated link</a></li>
						            <li role="separator" class="divider"></li>
						            <li><a href="#">One more separated link</a></li>
						          </ul>
						        </li>
						      </ul>
						      <form class="navbar-form navbar-left">
						        <div class="form-group">
						          <input type="text" class="form-control" placeholder="Search">
						        </div>
						        <button type="submit" class="btn btn-default">Search</button>
						      </form>

						      if (isset($_SESSION['u_id'])) {
					   echo '<form action="includes/logout.inc.php" method="POST"> 
					<button type="submit" name="submit">Logout</button>
				</form>';
					} else {
					//Display sign in form is no user (no SESSION) is logged in
					echo '<class =navbar-form navbar-left form action="includes/login.inc.php" method="POST"> 
					<input type="text" name="uid" placeholder="Username/email">
					<input type="password" name="pwd" placeholder="password">
					<button class ="btn-success" type ="submit" name="submit">Login</button>
					</form>';
					

					}		// end of script
						      ?>
						     
						    </div><!-- /.navbar-collapse -->
						  <!-- </div> --><!-- /.container-fluid -->
						</nav>
					</div>
				
			</header>