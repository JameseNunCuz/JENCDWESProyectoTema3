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
      *@version 17/10/2025
      */
    foreach ($GLOBALS as $keyGlobal => $valueGlobal) {
        foreach ($value as $subKey => $subValue) {
            print_r($subKey . ": " . $subValue);
        }
    }
    ?>
</body>

</html>