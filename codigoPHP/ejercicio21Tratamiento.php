<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21 Tratamiento</title>
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
      *@since 24/10/2025
      *@version 24/10/2025
      */

    if (isset($_REQUEST["submit"])) {
        //Si se ha recibido el formulario saca por pantalla las respuestas
        echo "Respuestas recibidas y correctas<br>";
        echo "El nombre es: " . $_REQUEST["nombre"] . "<br>";
        echo "Los apellidos son: " . $_REQUEST["apellidos"] . "<br>";
    } else {
        //Si no saca un mensaje de que no hay respuestas
        echo "No hay respuestas";
    } ?>

    <div class="footer">
        <button onclick="location.href = '../../'">
            <h3>James Edward Nuñez Cuzcano</h3>
        </button>
    </div>
</body>

</html>