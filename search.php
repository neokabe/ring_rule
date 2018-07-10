<?php

include 'header.php'
include 'includes/dhb.inc.php';

?>

<h1>Search Results </h1>
<!--div for search page format has sepperate containers for individual -->
<div class="search-container">
<?php
// check button is clicked

if (isset($_POST['submit-search'])) {
	$search = mysqli_real_escape_string($conn, $_POST['search']);
 $Search = $_POST('Search');
	//check if search field is empty 

	if (empty($Search)) {
		exit();
	} else {
		// check for gaps 
		if (condition) {
			# code...
		} else{
			// check if title is keyword conained in search string
			 $sql = "SELECT * FROM article WHERE a_title LIKE ? OR a_text LIKE ? OR a_author LIKE ? OR a_date LIKE ?;";

			// **prepared statement version of search field**
			 $stmt= mysqli_stmt_init($conn);
			 $item =$_POST['search'];
			 $binditem = '%'.$search.'%';
			//prepared statment
				// check for sql injection
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../header.php?search=error");
	 	 	exit();
			} else{

			}
		}
		
	}

echo '
<div class="model container">

	<?php?>





</div>

<div class = "article-container">

	</div>

	<div class="img-container">
	</div>	';

} 

	?>
		
	</div>