<?php
//print_r($_POST);
include_once("./controlacceso.php");
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$preferencias = isset($_POST["chk_preferencias"]) ? $_POST["chk_preferencias"] :"";

if ($_POST["nombre"] == "" || $_POST["clave"] == "") {
    header("Location: index.php");
}
if ($_POST["nombre"] != "" && $_POST["clave"] != "") {
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["clave"] = $_POST["clave"];
    #concatenacion
    header("Location: panelprincipal.php?idioma=" . $_GET['idioma']);
}
if ($preferencias !="") { //Marca recordarme
    ##Crear cookie
    setcookie("c_nombre", $nombre);
    setcookie("c_clave", $clave);
    setcookie("c_preferencias", $preferencias);
    setcookie("idioma",$_GET['idioma']);
} else { //Si no marco el recordarme
     ##SI existen las borro
     if (isset($_COOKIE)) {
        foreach ($_COOKIE as $clave => $valor) {
            setcookie($clave, "", 1);
        }
    }
}
?>