<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04</title>
</head>

<body>
    <?php /** 
      *@author James Edward
      *@since 10/10/2025
      *@version 17/10/2025
      */
    setlocale(LC_TIME, 'pt_PT.UTF-8');
    $timeNow = new DateTime();
    echo $timeNow->format('d-m-Y H:i:s');
    ?>
</body>

</html>