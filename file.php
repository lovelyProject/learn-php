<?php 
	if (!empty($_POST)) {
		echo json_encode($_POST);
	} else {
		echo 'error';
	}
?>