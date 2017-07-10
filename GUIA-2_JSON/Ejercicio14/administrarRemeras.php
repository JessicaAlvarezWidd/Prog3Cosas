<?php
$quehago=isset($_POST["quehago"])?$_POST["quehago"]:null;

switch ($quehago) 
{
	case 'Mostrar':
			$datos=file_get_contents("archivos/remeras.json");
			$encodato=json_encode(json_decode($datos));

			echo $encodato;

		break;
	
	default:
		
		break;
}

?>