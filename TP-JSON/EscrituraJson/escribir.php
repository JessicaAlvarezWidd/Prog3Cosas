<?php

$stringJSON=file_get_contents("archivo/auto.json");

$decJson=json_encode(json_decode($stringJSON));

$nuevoObjeto=new stdClass();
$nuevoObjeto->Id="666";
$nuevoObjeto->Marca="Pamela";
$nuevoObjeto->Precio="$98756";
$nuevoObjeto->Color="Rosa";
$nuevoObjeto->Modelo="90";

$transformar=json_encode($nuevoObjeto);

$puntero=fopen("archivo/auto.json", "a");
fwrite($puntero, "\n".$transformar);
fclose($puntero);

?>