<?php

$quehago=isset($_POST["quehago"]) ? $_POST["quehago"]: null;

switch ($quehago) {
	case 'Mostrar':
					$datos=file_get_contents("archivo/city.list.min.json");

					$arrstring=explode("\n", $datos);

					array_pop($arrstring);

					$stringarr=implode(",", $arrstring);

					$stringarr="[".$stringarr.="]";

					$decstring=json_decode($stringarr);

					$encArr=json_encode($decstring);

					echo $encArr;
		break;

	case 'Agregar':
					$objeto=$_POST["objeto"];

					$enc=json_encode($objeto);

					$puntero=fopen("archivo/city.list.min.json", "a");

					fwrite($puntero, $enc."\n");

					fclose($puntero);
		break;

		case 'Eliminar':

					$idRecibido=$_POST["idCity"];

					$datos=file_get_contents("archivo/city.list.min.json");

					$arrstring=explode("\n", $datos);

					array_pop($arrstring);

					$stringarr=implode(",", $arrstring);

					$stringarr="[".$stringarr.="]";

					$decstring=json_decode($stringarr,true);					
					

					for ($i=0; $i < count($decstring); $i++) 
					{ 
						if ($decstring[$i]["_id"]==$idRecibido) 
						{							
							array_splice($decstring,$i,1);
							break;
						}
					}

					$puntero=fopen("archivo/city.list.min.json", "w");

					for ($i=0; $i < count($decstring); $i++) 
					{ 
						$dato=json_encode($decstring[$i]);
						fwrite($puntero, $dato."\n");
					}

					fclose($puntero);

		break;

	default:	
		break;
}




?>