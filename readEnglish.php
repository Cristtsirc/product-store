<?php
# abrimos fichero
$fp = fopen("categorias_en.txt", "r");

#leemos el fichero utilizando un bucle. Usamos feof 
# para comprobar si el puntero a un archivo está al final del archivo. 
# Si feof ==TRUE significa que el puntero está al final del archivo
while (!feof($fp)){
    #fgets permite obtener una línea desde el puntero a un fichero
    $linea = fgets($fp);
    #imprimimos la línea
    echo $linea. "<br>";
}

#cerramos fichero
fclose($fp);

?>