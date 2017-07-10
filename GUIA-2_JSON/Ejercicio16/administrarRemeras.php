<?php
$quehago=isset($_POST["quehago"])?$_POST["quehago"]:null;

switch ($quehago) 
{
	case 'Mostrar':

			$datos=file_get_contents("archivos/remeras.json");
			$encodato=json_encode(json_decode($datos));

			echo $encodato;

		break;
	
	case 'traerRemerasFiltradas':
	
			$datoObtenido=$_POST["dato"];

			$datos=file_get_contents("archivos/remeras.json");

			$decodato=json_decode($datos,true);

			$nuevoArr=array();

			for ($i=0; $i < count($decodato); $i++) 
			{ 
				if (strcasecmp($decodato[$i]["manofacturer"]["location"]["country"], $datoObtenido)==0) 
				{
					array_push($nuevoArr, $decodato[$i]);
				}
			}

			$encodato=json_encode($nuevoArr);

			echo $encodato;

		break;

	case 'traerRemerasFiltradasPorCampo':
	
			$datoObtenido=$_POST["dato"];
			$opcion=$_POST["opcion"];

			$datos=file_get_contents("archivos/remeras.json");

			$decodato=json_decode($datos,true);

			$nuevoArr=array();

			switch ($opcion) 
			{
				case 'Tamano':
							for ($i=0; $i < count($decodato); $i++) 
							{ 
								if (strcasecmp($decodato[$i]["size"], $datoObtenido)==0) 
								{
									array_push($nuevoArr, $decodato[$i]);
								}
							}
					break;
				
				case 'Color':

						for ($i=0; $i < count($decodato); $i++) 
							{ 
								if (strcasecmp($decodato[$i]["color"], $datoObtenido)==0) 
								{
									array_push($nuevoArr, $decodato[$i]);
								}
							}
					
					break;

				case 'Pais':

						for ($i=0; $i < count($decodato); $i++) 
						{ 
							if (strcasecmp($decodato[$i]["manofacturer"]["location"]["country"], $datoObtenido)==0) 
							{
								array_push($nuevoArr, $decodato[$i]);
							}
						}

					break;
			}

			$encodato=json_encode($nuevoArr);

			echo $encodato;

		break;	
}

?>