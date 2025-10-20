<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>

<body>
    <?php /** 
      *@author James Edward
      *@since 20/10/2025
      *@version 20/10/2025
      */

    // Inicializar el array asociativo con sueldos por día
    $sueldoPorDia = [
        'Lunes' => 100,
        'Martes' => 120,
        'Miércoles' => 110,
        'Jueves' => 130,
        'Viernes' => 150,
        'Sábado' => 90,
        'Domingo' => 80
    ];

    // Función para mostrar el sueldo por día
    function mostrarSueldo($sueldo, $dia)
    {
        echo "Sueldo del $dia: $sueldo<br>";
    }

    // Recorrer el array con array_walk
    array_walk($sueldoPorDia, 'mostrarSueldo');

    // Calcular la suma total con array_sum
    $sueldoTotal = array_sum($sueldoPorDia);

    echo "<br><strong>Sueldo total de la semana: $sueldoTotal</strong>";
    ?>
</body>

</html>