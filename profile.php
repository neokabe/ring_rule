<?php

	include 'header.php' ;

?>


<div class= "left-panel">
	<h3>upload my profile image  </h3>
	<form action="uploads.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="submitpro" class="btn btn-success" >Upload</button>
		

	</form>

</div>


<container></container>
	
<div class="right-panel">
	<h4>settings</h4>
</div>









<?php
include 'footer.php';


?>