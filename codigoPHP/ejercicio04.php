<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 04</title>
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
    *@since 10/10/2025
    *@version 20/10/2025
    */

  $meses = [  //Array bidimensional que contiene los meses del año en distintos idiomas
    "eng" => ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    "esp" => ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    "pt" => ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
  ];

  $timeNow = new DateTime("now", new DateTimeZone("Europe/Lisbon"));  //Fecha actual en portugal
  
  $dia = $dia = date('d');
  $mes = $meses["pt"][date('n') - 1];
  $ano = date('Y');
  $hora = date('H:i:s');

  echo $dia . " de " . $mes . " de " . $ano . " Houra: " . $hora;
  ?>

  <div class="footer">
    <button onclick="location.href = '../../'">
      <h3>James Edward Nuñez Cuzcano</h3>
    </button>
  </div>
</body>

</html>