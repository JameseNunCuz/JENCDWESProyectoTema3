<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>

<body>
    <?php /** 
      *@author James Edward
      *@since 17/10/2025
      *@version 20/10/2025
      */
    foreach ($GLOBALS as $keyGlobal => $valueGlobal) {
        print_r("<p>Variable superglobal:$keyGlobal Contenido: </p>");
        foreach ($valueGlobal as $subKey => $subValue) {
            print_r($subValue);
        }
    }
    ?>
</body>

</html>