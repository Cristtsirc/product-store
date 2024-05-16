<?php
$nombre ="";
$clave ="";
$preferencias ="";
$idioma = "es";
    if (isset($_COOKIE["c_preferencias"]) && $_COOKIE["c_preferencias"]!="") {
        $preferencias = true;
        $nombre = isset($_COOKIE['c_nombre']) ? $_COOKIE['c_nombre']: "";
        $clave = isset($_COOKIE['c_clave']) ? $_COOKIE['c_clave']: "";
        if(isset($_COOKIE['idioma'])){
            $idioma = $_COOKIE['idioma'];
        }
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
        <form action="acceso.php?idioma=<?php echo $idioma;?>" method="POST">
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