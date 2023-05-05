<?php
	$basePath = "http://learn-php/api/index.php";

	$res = file_get_contents($basePath);
	
	echo $res;
?>