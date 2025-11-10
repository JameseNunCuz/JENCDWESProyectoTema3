<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 20</title>
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
    *@version 09/11/2025
    */

  require("../core/231018libreriaValidacion.php");

  $validacion = new validacionFormularios();
  echo $validacion->comprobarAlfaNumerico("Hola", 100, 7, 1);
  echo "<br>";
  echo validacionFormularios::comprobarAlfaNumerico("Hola", 2, 1, 1);

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