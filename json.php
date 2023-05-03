<?php 
	$json = '{
		"user": {
			"name": "john",
			"surn": "smit"
		},
		"city": "London"
	}';

    $data = json_decode($json);

    echo $data->user->name;
    echo $data->user->surn;
    echo $data->city;
?>