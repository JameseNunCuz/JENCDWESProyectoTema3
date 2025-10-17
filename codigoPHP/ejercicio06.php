<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
</head>

<body>
    <?php /** 
      *@author James Edward
      *@since 17/10/2025
      *@version 17/10/2025
      */
    $date = new DateTime('now', new DateTimeZone('Europe/Madrid'));
    $date->add(new DateInterval('P30D'));
    echo $date->format('d-m-Y');
    ?>
</body>

</html>