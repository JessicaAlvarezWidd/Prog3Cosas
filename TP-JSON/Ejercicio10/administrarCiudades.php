<?php

$datos=file_get_contents("archivo/city.list.min.json");

$arrstring=explode("\n", $datos);

array_pop($arrstring);

$stringarr=implode(",", $arrstring);

$stringarr="[".$stringarr.="]";

$decstring=json_decode($stringarr);

$encArr=json_encode($decstring);

echo $encArr;
?>