<?php 
session_start();
session_destroy();
if(isset($_COOKIE['preferencias'])){
    foreach ($_COOKIE as $clave => $valor) {
        setcookie($clave, "");
    }   
}
header("Location: index.php");
?>