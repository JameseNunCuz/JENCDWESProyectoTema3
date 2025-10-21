<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>

<body>
    <?php /** 
      *@author James Edward
      *@since 21/10/2025
      *@version 21/10/2025
      */

    if (isset($_REQUEST["submit"])) {
        echo "Respuestas recibidas y correctas<br>";
        echo "El nombre es: " . $_REQUEST["nombre"] . "<br>";
        echo "Los apellidos son: " . $_REQUEST["apellidos"] . "<br>";
    } else {
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
            <br>

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
            <br>

            <button type="submit" name="submit">Enviar</button>
        </form>`;

    <?php } ?>
</body>

</html>