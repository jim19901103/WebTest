<!DOCTYPE html>
<html>
<head>
<?php
	require("www/app/views/includes/head.php");
	echo getHead();?>
</head>

<body>

<header>
	<?php
	require("www/app/views/includes/header.php");
	//echo getHeader();?>
</header>

<div id="Body">
	<?php
	require("www/app/views/includes/body.php");
	echo getBodyTop();
	echo getBodyCenter();
	?>
</div>


<footer>
	<?php
	require("www/app/views/includes/footer.php");
	echo getFooter();?>
</footer>




</body>
</html>