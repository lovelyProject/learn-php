<?php 
	$link = require "./connect.php";
	if (!empty($_GET) and isset($_GET['id'])) {
		$id = $_GET['id'];

		$query  = "SELECT * FROM authors WHERE id = '$id'";
		$res = mysqli_query($link, $query) or die(mysqli_error($link));
		$user = mysqli_fetch_array($res);

		echo json_encode($user['Name_author']);
	} else {
		echo 'no data';
	}
?>