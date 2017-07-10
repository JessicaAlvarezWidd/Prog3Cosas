<?php

$stringJSON=file_get_contents("archivo/autos.json");

$decJson=json_encode(json_decode($stringJSON));

echo $stringJSON;

?>