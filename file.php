<?php 
	header("Content-Type: application/json");

	$token = "12345";
	
	function checkDateFormat($date) {
		return preg_match("#[0-9]{4}-[0-9]{2}-[0-9]{2}#", $date);
	}
	if (isset($_POST['birthday']) and $_POST['token'] === $token) {
		if (checkDateformat($_POST['birthday'])) {
			$birthday = date_create($_POST['birthday']);
			$today = date_create((date('Y-m-d')));
			$diff = date_diff($birthday, $today);

			echo json_encode($diff->format("%a дня(дней)"));
		} else {
			echo json_encode("Incorrect date format");
		}
	} else {
		echo json_encode("Incorrect token");
	}
?>