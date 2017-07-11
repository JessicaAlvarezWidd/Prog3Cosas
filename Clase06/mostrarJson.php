<?php

if (isset($_REQUEST["valor"])) 
{
	$transformar = json_decode($_REQUEST["valor"]);

	echo $transformar->codigo + "-" + $transformar->nombre + "-" $transformar->precio;


}

?>