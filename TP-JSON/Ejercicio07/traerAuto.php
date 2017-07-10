<?php

$stringJSON=file_get_contents("archivo/auto.json");

$decJson=json_encode(json_decode($stringJSON));

echo $decJson;

?>