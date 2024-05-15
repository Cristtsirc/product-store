<?php 
include_once("./controlacceso.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PRINCIPAL PANEL</h1>
        <p>Welcome user: <?php echo $_SESSION['nombre']?> </p>

        <a href="panelprincipal.php">ES (Español)</a> | <a href="panelEN.php">EN (English)</a> <br> 
        <a href="cerrarSesion.php">Log out</a>

        <h2>Product List</h2>
        <!--Se debe hacer la lectura en Ingles-->
        <p> <?php include_once("./readEnglish.php");?></p>


</body>
</html>