<?php
	if (isset($_GET['day1']) and isset($_GET['day2'])) {
        // var_dump(preg_match("#[0-9]{4}-[0-9]{2}-[0-9]{2}#", $date));
        if (preg_match("#[0-9]{4}-[0-9]{2}-[0-9]{2}#",$_GET['day1']) and 
            preg_match("#[0-9]{4}-[0-9]{2}-[0-9]{2}#",$_GET['day2'])) {
            $day1 = date_create($_GET['day1']);
            $day2 = date_create($_GET['day2']);
    
            $diff = date_diff($day1, $day2);
            echo $diff->format('%a');
        } else {
            echo "Invalid format of date";
        }

    } else {
        echo "there is not date";
    }

?>