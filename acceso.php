<?php
##sesion siempre es la priera imstruccion de php caso contrario no funciona
include_once("./controlacceso.php");
print_r($_POST);
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$preferencias = isset($_POST["chk_preferencias"]) ? $_POST["chk_preferencias"] :"";

if ($nombre == "" && $clave == "") {
    header("Location: index.php");
    exit();
}

if ($preferencias!="") {
    ##Crear cookie
    setcookie("c_nombre", $nombre,0);
    setcookie("c_clave", $clave,0);
    setcookie("c_preferencias", $preferencias,0);
    
} else {
     ##SI existen las borro
     if (isset($_COOKIE)) {
        foreach ($_COOKIE as $clave => $valor) {
            setcookie($clave, "", 1);

        }
    }
}
header("Location: panelprincipal.php");

?>