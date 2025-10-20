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

    echo "<h2>Contenidos _SERVER: </h2>";
    foreach ($_SERVER as $key => $value) {
        print_r($key . "=> " . $value . "<br>");
    }

    echo "<h2>Contenidos _SESSION: </h2>";
    if (isset($_SESSION)) {
        foreach ($_SESSION as $key => $value) {
            print_r($key . " => " . $value . "<br>");
        }
    }

    echo "<h2>Contenidos _COOKIE: </h2>";
    foreach ($_COOKIE as $key => $value) {
        print_r($key . "=> " . $value . "<br>");
    }

    echo "<h2>Contenidos _GET: </h2>";
    foreach ($_GET as $key => $value) {
        print_r($key . "=> " . $value . "<br>");
    }

    echo "<h2>Contenidos _POST: </h2>";
    foreach ($_POST as $key => $value) {
        print_r($key . "=> " . $value . "<br>");
    }

    echo "<h2>Contenidos _REQUEST: </h2>";
    foreach ($_REQUEST as $key => $value) {
        print_r($key . "=> " . $value . "<br>");
    }

    echo "<h2>Contenidos _FILES: </h2>";
    foreach ($_FILES as $key => $value) {
        print_r($key . "=> " . $value . "<br>");
    }

    echo "<h2>Contenidos _ENV: </h2>";
    foreach ($_ENV as $key => $value) {
        print_r($key . "=> " . $value . "<br>");
    }

    ?>
</body>

</html>