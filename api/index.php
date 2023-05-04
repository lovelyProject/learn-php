<?php
	if (isset($_GET['day1']) and isset($_GET['day2'])) {
        $day1 = date_create($_GET['day1']);
        $day2 = date_create($_GET['day2']);

        $diff = date_diff($day1, $day2);
        echo $diff->format('%a');
    } else {
        echo "there is not date";
    }
?>