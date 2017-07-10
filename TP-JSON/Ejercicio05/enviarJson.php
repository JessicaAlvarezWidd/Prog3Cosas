<?php

$obj=new stdClass();
$obj->Codigo="001";
$obj->Producto="Chocolate";

$dato=json_encode($obj);

echo $dato;


?>