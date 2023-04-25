<?php 
if (!empty($_GET)) {
    echo array_key_exists("success", $_GET) ? "Операцию прошла успешно" : "Провал";
}

?>