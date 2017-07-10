<?php

$arr=array();

$obj=new stdClass();
$obj->Codigo="001";
$obj->Producto="Chocolate";
$obj2=new stdClass();
$obj2->Codigo="002";
$obj2->Producto="Papas";
$obj3=new stdClass();
$obj3->Codigo="003";
$obj3->Producto="Gaseosa";

array_push($arr, $obj);
array_push($arr, $obj2);
array_push($arr, $obj3);

$dato=json_encode($arr);

echo $dato;


?>