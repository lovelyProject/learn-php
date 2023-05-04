<?php
	$num1 = 5;
	$num2 = 3;

	$basePath = "http://learn-php/api/index.php?num1=$num1&num2=$num2";

	$res = file_get_contents($basePath);
	echo $res;
?>