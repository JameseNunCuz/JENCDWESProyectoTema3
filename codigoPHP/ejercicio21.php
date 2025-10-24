<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
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
      *@since 21/10/2025
      *@version 24/10/2025
      */ ?>

    <form action="ejercicio21Tratamiento.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <br>

        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
        <br>

        <button type="submit" name="submit">Enviar</button>
    </form>

    <div class="footer">
        <button onclick="location.href = '../../'">
            <h3>James Edward Nuñez Cuzcano</h3>
        </button>
    </div>
</body>

</html>