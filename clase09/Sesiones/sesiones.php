<?php
echo ($_GET["op"]);


if(isset($_GET["op"])){

	switch($_GET["op"]){
		case "1":
		
//session_start();
session_start();
			$_SESSION["clave"] = "valor";

			var_dump($_SESSION);
			
			echo '<a href="verificar_sesion.php" >Ir a otra p&aacute;gina</a><br/>';
			break;
		case "2":
		session_start();
			session_unset();			
			var_dump($_SESSION);
			

//			session_destroy();		
//			var_dump($_SESSION);
			break;
			
	}
}
?>
<a href="../index.html" >Volver al Inicio</a>