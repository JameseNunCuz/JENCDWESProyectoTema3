<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 01</title>
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
    *@version 17/10/2025
    */
  $varString = "Esto es un string";
  $varInt = 999;
  $varFloat = 3.24;
  $varBool = false; ?>

  <h2><?php echo $varBool; ?></h2>
  <h2><?php print $varString; ?></h2>
  <h2><?php printf($varFloat); ?></h2>
  <h2><?php print_r($varInt); ?></h2>
  <h2><?php var_dump($varInt); ?></h2>

  <div class="footer">
    <button onclick="location.href = '../../'">
      <h3>James Edward Nuñez Cuzcano</h3>
    </button>

  </div>
</body>

</html>