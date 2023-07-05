<?php
    header ("Content_Type: application/json"); // preparo il server a ricevere un json dal database
    $json_string = file_get_contents ("./database/data.json"); // ricevo il json grezzo sotto forma di stringa
    $json_array = json_decode ($json_string); // trasformo il json stringa in json array
    // var_dump($json_array);
?>