<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
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

    <div class="footer">
        <button onclick="location.href = '../../'">
            <h3>James Edward Nuñez Cuzcano</h3>
        </button>
    </div>
</body>

</html>