<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>

<body>
    <?php /** 
      *@author James Edward
      *@since 20/10/2025
      *@version 20/10/2025
      */
    $extensions = get_loaded_extensions();

    echo "<h1>Extensiones PHP cargadas:</h1>";

    foreach ($extensions as $ext) {
        echo "<h3>$ext</h3>";
    }
    ?>
</body>

</html>