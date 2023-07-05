<?php
    header ("Content-Type: application/json"); // preparo il server a ricevere un json dal database
    $json_string = file_get_contents ("./database/data.json"); // ricevo il json grezzo sotto forma di stringa
    echo $json_string;
    // json_decode ($json_string) ; modifica al json ; json_encode ($json_string) 
?>