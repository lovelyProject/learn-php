<?php
	$catSlug = $params['catSlug'];
	$pageSlug = $params['pageSlug'];
	
	$query = "SELECT pages.title, pages.content 
		FROM pages
	LEFT JOIN
		category ON category.id=pages.category_id
	WHERE
		pages.slug='$pageSlug' AND category.slug='$catSlug'";
	
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$page = mysqli_fetch_assoc($result);
	
	return $page;
?>