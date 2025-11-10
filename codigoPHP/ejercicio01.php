<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 01</title>
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
      *@since 10/10/2025
      *@version 09/11/2025
      */
    $varString = "Esto es un string";
    $varInt = 999;
    $varFloat = 3.24;
    $varBool = false; ?>

    <h1>String</h1>
    <h2><?php echo $varString; ?></h2>
    <h2><?php print $varString; ?></h2>
    <h2><?php printf($varString); ?></h2>
    <h2><?php print_r($varString); ?></h2>
    <h2><?php var_dump($varString); ?></h2>
    <br>

    <h1>Integer</h1>
    <h2><?php echo $varInt; ?></h2>
    <h2><?php print $varInt; ?></h2>
    <h2><?php printf($varInt); ?></h2>
    <h2><?php print_r($varInt); ?></h2>
    <h2><?php var_dump($varInt); ?></h2>
    <br>

    <h1>Float</h1>
    <h2><?php echo $varFloat; ?></h2>
    <h2><?php print $varFloat; ?></h2>
    <h2><?php printf($varFloat); ?></h2>
    <h2><?php print_r($varFloat); ?></h2>
    <h2><?php var_dump($varFloat); ?></h2>
    <br>

    <h1>Boolean</h1>
    <h2><?php echo $varBool; ?></h2>
    <h2><?php print $varBool; ?></h2>
    <h2><?php printf($varBool); ?></h2>
    <h2><?php print_r($varBool); ?></h2>
    <h2><?php var_dump($varBool); ?></h2>
    <br>

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