<?php 
include_once("./controlacceso.php");

## Obtnego el param "borrar"

$seleccion = $_GET["idioma"];
##si borrar es = 1 Borro cookie y regreso
$contenido = $seleccion == "es"? file_get_contents('./resources/categorias_es.txt') : file_get_contents('./resources/categorias_en.txt');
setcookie('idioma', $contenido);
$titulo = $seleccion == "es"? "Lista de Productos": "Product list";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PANEL PRINCIPAL</h1>
        <p>Bienvenido usuario: <?php echo $_SESSION['nombre']?> </p>

        <a href="panelprincipal.php?idioma=es">ES (Español)</a> | <a href="panelprincipal.php?idioma=en">EN (English)</a> <br> 
        <a href="cerrarSesion.php">Cerrar Sesion</a>

        <h2><?php echo $titulo ?></h2>
        <!--Se debe hacer la lectura en Español-->
        <p> <?php echo nl2br($contenido);?></p>


</body>
</html>