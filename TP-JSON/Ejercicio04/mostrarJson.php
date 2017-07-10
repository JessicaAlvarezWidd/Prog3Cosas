<?php

if (isset($_POST["miobjeto"])) 
{

	$objeroRecibido=json_decode(json_encode($_POST["miobjeto"]));
	$datos=" ";
	for ($i=0; $i < count($objeroRecibido) ; $i++) 
	{ 
		$datos.=$objeroRecibido[$i]->Codigo."-".$objeroRecibido[$i]->Producto;
	}	


	echo $datos;
}


?>