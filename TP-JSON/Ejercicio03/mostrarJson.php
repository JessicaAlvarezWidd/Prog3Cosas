<?php

if (isset($_POST["miobjeto"])) 
{

	$objeroRecibido=json_decode(json_encode($_POST["miobjeto"]));

	echo $objeroRecibido->Codigo."-".$objeroRecibido->Producto."-".$objeroRecibido->Precio;
}


?>