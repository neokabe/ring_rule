<?php

	include 'header.php' ;

?>

<?php

if (isset($_SESSION['u_id'])) {


echo '<div class= "left-panel">
	<h3>upload my profile image  </h3>
	<form action="uploads2.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file"><br>
		<button type="submit" name="submitpro" class="btn btn-success" > Upload</button>
		

	</form>

</div>




<container></container>
	
<div class="right-panel">
	<h4>settings</h4>

	<form action="includes/deleteprofile.inc.php" method="POST"> 
		<button type="submit" name="delpro" class="btn btn-success" > Delete profile image</button> </form>



</div>';



} else {

	echo "page not avaliable";
	exit;
}

?>



<?php
include 'footer.php';


?>