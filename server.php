<?php
    $json_string = file_get_contents ("./database/data.json");
    header ("Content_Type: application/json");
    $json_array = json_decode ($json_string);
    // var_dump($json_array);
?>