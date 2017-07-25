<?php
    //IMPLEMENTAR...
    require_once "verificar_sesion.php";
    $objUser = json_decode($_SESSION["Usuario"]);
    /*if (isset($_COOKIE["theme" . $objUser->id]))
    {
        $theme = "background-color:" . $_COOKIE["theme" . $objUser->id];
    }*/
    echo "Hola $objUser->email";

    /*session_start();

        if (isset($_SESSION["Usuario"]))
        {
            session_unset();
           header("location:login.php");
        }
        else
            echo "No Ok";

        break; */
    
?>
