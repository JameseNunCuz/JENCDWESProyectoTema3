<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>

<body>
    <?php /** 
      *@author James Edward
      *@since 20/10/2025
      *@version 20/10/2025
      */

    function verAsientosOcupados($asientos)
    {/**
     *Esta funcion devuelve un array con los elementos ocupados del array que se introduzca
     *@param array $asientos: Array bidimensional con las filas y asientos de un teatro
     */
        $asientosOcupados = []; // Array en el que se guardan los asientos que esten ocupados
        foreach ($asientos as $fila => $asientosFila) {
            foreach ($asientosFila as $asiento => $nombre) {
                if (!is_null($nombre)) {
                    array_push($asientosOcupados, "Fila " . ($fila + 1) . ", Asiento " . ($asiento + 1) . ": $nombre");
                }
            }
        }

        return $asientosOcupados;
    }

    // Inicializamos el array 20 filas x 15 asientos
    $asientos = array_fill(0, 20, array_fill(0, 15, null));

    // Ocupamos 5 asientos con nombres
    $asientos[0][2] = "Ana";
    $asientos[4][10] = "Luis";
    $asientos[10][5] = "Marta";
    $asientos[15][7] = "Carlos";
    $asientos[19][14] = "Elena";

    //Llamamos a la funcion para ver los asientos ocupados
    $asientosOcupados = verAsientosOcupados($asientos);

    echo "<h2>Asientos ocuapdos:</h2><br>";
    foreach ($asientosOcupados as $asientoOcupado) {
        echo $asientoOcupado . "<br>";
    }

    ?>
</body>

</html>