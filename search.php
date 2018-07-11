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

	if (empty($search)) {
		exit();
	} else {
				

			// union sql query
			$usql = "SELECT 'users' OriginatingTable, id, user_uid FROM users WHERE user_uid LIKE ? OR user_first LIKE ? 
			union all 
			SELECT 'Articles',userid, username FROM article WHERE userid LIKE ? OR username LIKE ? OR a_title LIKE ?
			union all
			SELECT 'Images',userid, username FROM images WHERE  userid LIKE ? OR username LIKE ? OR img_title LIKE ?
			union all 
			SELECT 'Media', userid, username FROM audiovis WHERE WHERE userid LIKE ? OR username LIKE ? OR media_desc LIKE ?


			"; 

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
			mysqli_stmt_bind_param($stmt, "ssss", $binditem, $binditem, $binditem, $binditem);

	 	 	mysqli_stmt_execute($stmt);


	 	 $result = mysqli_stmt_get_result($stmt);
	 	 $check =mysqli_num_rows($result);

	 	 	echo "There are ".$check." results";


	 	 	if ($check > 0 ) {
	 	 	while ($row =mysqli_fetch_assoc($result)) {
			  echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class= 'article-box'>
			  	<h3>".$row['a_title']."</h3>
			  	<p>".$row['a_text']."</p>
			  	<p>".$row['a_date']."</p>
			  	<p>".$row['a_author']."</p>
			  	</div></a>";
			  	}
	 	 	} else {
				// check for gaps/ individual words
				$searchbit = explode(" ", $search);

				foreach($searchbit as $value) {
					$bindbit= $searchbit($value);

				$sql = "SELECT * FROM article WHERE a_title LIKE ? OR a_text LIKE ? OR a_author LIKE ? OR a_date LIKE ?;";
				mysqli_stmt_bind_param($stmt, "ssss", $bindbit, $bindbit, $bindbit,$bindbit);
					mysqli_stmt_execute($stmt);

					 $result = mysqli_stmt_get_result($stmt);
					 $check2 = mysqli_num_rows($result);
				if ($check2 > 0 ) {
	 	 			while ($row =mysqli_fetch_assoc($result)) {
			 echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class= 'article-box'>
			  	<h3>".$row['a_title']."</h3>
			  	<p>".$row['a_text']."</p>
			  	<p>".$row['a_date']."</p>
			  	<p>".$row['a_author']."</p>
			  	</div></a>";
			  				}
	 	 		} else {
	 	 		echo "<p>There are no matching results</p>";
	 	 							}

				}

				 
	 	 		
	 			
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