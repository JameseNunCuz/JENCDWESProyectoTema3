<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>

<body>
    <div class="header">
        <div class="title">
            <h1>Desarrollo web en entorno servidor</h1>
            <h2>Tema 3: Caracteristicas del lenguaje PHP</h2>
        </div>
        <button class="home active" onclick="location.href = '../'">Volver</button>
    </div>

    <?php /** 
      *@author James Edward
      *@since 20/10/2025
      *@version 20/10/2025
      */

    // Inicializamos el array 20 filas x 15 asientos
    $asientos = array_fill(0, 20, array_fill(0, 15, null));

    // Ocupamos 5 asientos con nombres
    $asientos[0][2] = "Ana";
    $asientos[4][10] = "Luis";
    $asientos[10][5] = "Marta";
    $asientos[15][7] = "Carlos";
    $asientos[19][14] = "Elena";

    echo "<h3>Recorrido con foreach</h3>";
    foreach ($asientos as $fila => $asientosFila) {
        foreach ($asientosFila as $asiento => $nombre) {
            if (!is_null($nombre)) {
                echo "Fila " . ($fila + 1) . ", Asiento " . ($asiento + 1) . ": $nombre<br>";
            }
        }
    }

    echo "<h3>Recorrido con while</h3>";
    $fila = 0;
    while ($fila < count($asientos)) {
        $asiento = 0;
        while ($asiento < count($asientos[$fila])) {
            if (!is_null($asientos[$fila][$asiento])) {
                echo "Fila " . ($fila + 1) . ", Asiento " . ($asiento + 1) . ": " . $asientos[$fila][$asiento] . "<br>";
            }
            $asiento++;
        }
        $fila++;
    }

    echo "<h3>Recorrido con for</h3>";
    for ($fila = 0; $fila < count($asientos); $fila++) {
        for ($asiento = 0; $asiento < count($asientos[$fila]); $asiento++) {
            if (!is_null($asientos[$fila][$asiento])) {
                echo "Fila " . ($fila + 1) . ", Asiento " . ($asiento + 1) . ": " . $asientos[$fila][$asiento] . "<br>";
            }
        }
    }

    ?>

    <div class="footer">
        <button onclick="location.href = '../../'">
            <h3>James Edward Nuñez Cuzcano</h3>
        </button>
    </div>
</body>

</html>