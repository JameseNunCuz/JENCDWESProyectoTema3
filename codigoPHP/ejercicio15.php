<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
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

    // Variable para acumular el sueldo total
    $sueldoTotal = 0;

    // Recorrer el array y sumar los sueldos
    foreach ($sueldoPorDia as $dia => $sueldo) {
        echo "Sueldo del $dia: $sueldo<br>";
        $sueldoTotal += $sueldo;
    }

    echo "<br><strong>Sueldo total de la semana: $sueldoTotal</strong>";
    ?>


  </main>

  <footer>
    <h2>James Edward Nuñez Cuzcano</h2>
    <div>
      <button class="active" onclick="window.open('https://github.com/JameseNunCuz')"><img
          src="../webresources/github.png"></button>
      <button class="active" onclick="location.href='../../../'"><img src="../webresources/home.png"></button>
    </div>
  </footer>
</body>

</html>