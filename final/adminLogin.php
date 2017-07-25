<?php

	//require_once "clases/AccesoDatos.php";
	//require_once "clases/Usuario.php";

	if (isset($_POST["email"]) && isset($_POST["password"]))
	{
		$objeto = new stdClass();
		$objeto->email = $_POST["email"];
		$objeto->password = $_POST["password"];

		$userlist = file_get_contents("usuario.txt");
		
        $checkUser =$userlist[0];   
        $success = false;

		$userlist = file_get_contents("usuario.txt");        
        $user_details = explode(' ', $userlist);
         //echo "$user_details[0]";

        if ($user_details[0] == $objeto->email && $user_details[1] == $objeto->password) 
         {
                $success = true;
				$usuario = $objeto;			               
                 
         }
		 else if($user_details[2] == $objeto->email && $user_details[3] == $objeto->password)
		 {
			  $success = true;
			  $usuario = $objeto;			               
              
		 }
		 else if($user_details[4] == $objeto->email && $user_details[5] == $objeto->password)
		 {
			  $success = true;
			  $usuario = $objeto;			               
              
		 }

      	if ($success)
		{
			session_start();

			$_SESSION["Usuario"] = json_encode($usuario);

			echo "Ok";
		}
		else
			echo "ERROR";
	}
	else
		header("location:login.php");

?>