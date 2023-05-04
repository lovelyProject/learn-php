<?php
	$day1 = "2023-05-04";
	$day2 = "2023-05-06";

	$basePath = "http://learn-php/api/index.php?day1=$day1&day2=$day2";

	$res = file_get_contents($basePath);
	echo $res;
?>