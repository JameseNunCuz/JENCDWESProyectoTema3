<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>

<body>
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
</body>

</html>