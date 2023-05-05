<?php 
	if (!empty($_POST)) {
		echo array_sum(json_decode($_POST['json']));
	} else {
		echo 'error';
	}
?>