<?php
include "header.php";
?>

<body>
	<?php
	include "menue.php";
	//require "submenue.php";  //use whe you don't want your code to 								run further from this point.
	inclde_once "menue.php";	// it will check if this is already 								included and it only include the 									file once.
	?>

<h1>How to Include FILES</h1>

<?php
include "footer.htm";
?>