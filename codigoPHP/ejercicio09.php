<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 09</title>
  <link rel="stylesheet" href="../webroot/css/style.css">
</head>

<body>
  <header>
    <table>
      <tr>
        <td>
          <h2>Desarrollo web en entorno servidor</h2>
        </td>
        <td>
          <h1>Tema 3: Caracteristicas del lenguaje PHP</h1>
        </td>
        <td>
          <button class="active" onclick="location.href = '../'">
            <h5>Volver</h5>
          </button>
        </td>
      </tr>
    </table>
  </header>

  <main>

    <?php /** 
      *@author James Edward
      *@since 17/10/2025
      *@version 17/10/2025
      */
    echo dirname(__FILE__);
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