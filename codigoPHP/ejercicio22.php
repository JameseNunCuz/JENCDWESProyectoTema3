<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
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
          *@since 21/10/2025
          *@version 24/10/2025
          */

        //El formulario ha sido enviado
        if (isset($_REQUEST["submit"])) {
            echo "Respuestas recibidas y correctas<br>";
            echo "El nombre es: " . $_REQUEST["nombre"] . "<br>";
            echo "Los apellidos son: " . $_REQUEST["apellidos"] . "<br>";

            //El formulario todavia no ha sido enviado, mostrarlo
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
            </form>

        <?php } ?>


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