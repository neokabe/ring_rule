
<?php
	include 'header.php';
?>

		
<link rel="stylesheet" type="text/css" href="cgrids\constyle.css">
		


<main>
<p>SEND email </p>

<form class="contact-form" action="includes/contactform.php" method="post">

	<input type="text" name="name" placeholder="Full name">
	<input type="text" name="mail" placeholder="your email">
	<input type="text" name="subject" placeholder="Subject">
	<textarea name="message" placeholder="message"> </textarea>
	<button type="submit" name="submit">SEND MAIL</button>
	

</form>	
</main>

For use enquiries contact us at digiportfolio@thuneer.com

<?php

include 'footer.php';

?>