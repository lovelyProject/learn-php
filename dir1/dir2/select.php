<?php 
        $arr = [1 => "пн", "вт","ср", "чт" , "пт", "сб", "вс"];
        echo "<select>";
        foreach ($arr as $value) {
            echo "<option value='$value'>$value</option>";
        }

echo "</select>";
?>