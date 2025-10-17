<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>

<body>
    <?php /** 
      *@author James Edward
      *@since 10/10/2025
      *@version 17/10/2025
      */
    $timeNow = new DateTime('now', new DateTimeZone('Europe/Madrid'));
    ?>

    <h2>
        <?php echo $timeNow->format('d-m-Y H:i:s');
        $timeNow->modify('+1 month, 7 day, -2 hour, -5 minute, +2 second');
        ?>
    </h2>

    <h2><?php echo $timeNow->format('d-m-Y H:i:s'); ?></h2>
</body>

</html>