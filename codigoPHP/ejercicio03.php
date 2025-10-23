<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>

<body>
    <div class="header">
        <div class="title">
            <h1>Desarrollo web en entorno servidor</h1>
            <h2>Tema 3: Caracteristicas del lenguaje PHP</h2>
        </div>
    </div>

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

    <div class="footer">
        <button onclick="location.href = '../../'">
            <h3>James Edward Nuñez Cuzcano</h3>
        </button>
    </div>
</body>

</html>