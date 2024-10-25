<?php
/** codigo para cerrar sesión */
    session_start();
    session_destroy();
    
   
    //redirect
    header("Location: contador.php");
    //  Si no le ponemos die() se queda el proceso abierto
    die();
    
?>
