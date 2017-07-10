<?php

$codigo=isset($_POST["objetoEnviar"]) ? $_POST["objetoEnviar"] : null;

$datos=file_get_contents("archivo/paises.json");

$decdatos=json_decode($datos,true);

$nuevoarr=array();

for ($i=0; $i < count($decdatos); $i++) 
{ 
	if (strcasecmp($decdatos[$i]["CodigoPais"], $codigo)==0) 
	{
		array_push($nuevoarr, $decdatos[$i]);
	}
}

$encDATO=json_encode($nuevoarr);

echo $encDATO;

?>