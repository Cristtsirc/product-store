<?php
$nombre ="";
$clave ="";
$preferencias ="";

    if (isset($_COOKIE["c_preferencias"]) && $_COOKIE["c_preferencias"]!="") {
        $nombre = $_COOKIE["c_nombre"];
        $clave = $_COOKIE["c_clave"];
        $preferencias = true;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <h1>LOGIN</h1>
        <form action="acceso.php" method="POST">
            <br>
            <label for="txUsuario"></label> Usuario*: <br>
            <input type="text" name="nombre" value="<?php echo $nombre;?>" >
            <br>
            <label for="txtClave"></label> Clave*: <br>
            <input type="password" name="clave"  value="<?php echo $clave;?>" >
            <br>
            <input type="checkbox" name="chk_preferencias" <?php echo ($preferencias)? "checked" : "" ?>> Recordarme
            <br>
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

</body>

</html>