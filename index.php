<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>James Edward Nuñez Cuzcano</title>
    <link rel="stylesheet" href="./webroot/css/style.css">
</head>

<body>
    <div class="header">
        <div class="title">
            <h1>Desarrollo web en entorno servidor</h1>
            <h2>Tema 3: Caracteristicas del lenguaje PHP</h2>
        </div>
        <button class="home active" onclick="location.href = '../'"><img src="./webresources/home.png"></button>
    </div>

    <div class="center-container">
        <table>
            <tr>
                <th>Nº de ejercicio</th>
                <th>Descripción del ejercicio</th>
                <th>Ejecutar</th>
                <th>Ver codigo</th>
            </tr>
            <tr>
                <td><h3>0</h3></td>
                <td>
                    <h3>Hola mundo y phpinfo().</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio00.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio00.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>1</h3></td>
                <td>
                    <h3>Iniciatrzar variables de los distintos tipos de datos básicos y mostrar los datos por
                        pantalla</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio01.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio01.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>2</h3></td>
                <td>
                    <h3>Iniciatrzar y mostrar una variable heredoc</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio02.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio02.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>3</h3></td>
                <td>
                    <h3>Mostrar en tu página index la fecha y hora actual formateada en castellano.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio03.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio03.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>4</h3></td>
                <td>
                    <h3>Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio04.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio04.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>5</h3></td>
                <td>
                    <h3>Iniciatrzar y mostrar una variable que tiene una marca de tiempo</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio05.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio05.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>6</h3></td>
                <td>
                    <h3>Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio06.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio06.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>7</h3></td>
                <td>
                    <h3>Mostrar el nombre del fichero que se está ejecutando.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio07.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio07.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>8</h3></td>
                <td>
                    <h3>Mostrar la dirección IP del equipo desde el que estás accediendo.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio08.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio08.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>9</h3></td>
                <td>
                    <h3>Mostrar el path donde se encuentra el fichero que se está ejecutando</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio09.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio09.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>10</h3></td>
                <td>
                    <h3>Mostrar el path y el nombre del fichero que se está ejecutando</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio10.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio10.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>11</h3></td>
                <td>
                    <h3>Mostrar el documento PHPDoc del proyecto que se está ejecutando generado con PHP Documentor o ApiGen</h3>
                </td>
                <td><button class="active" style="visibility: hidden" onclick="location.href = './codigoPHP/ejercicio11.php'">Ejecutar</button></td>
                <td><button class="active" style="visibility: hidden" onclick="location.href = './mostrarcodigo/muestraEjercicio11.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>12</h3></td>
                <td>
                    <h3>Mostrar el contenido de las variables superglobales</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio12.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio12.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>13</h3></td>
                <td>
                    <h3>Crear una función que cuente el número de visitas a la página actual desde una fecha
                        concreta</h3>
                </td>
                <td><button style="visibility: hidden">Ejecutar</button></td>
                <td><button style="visibility: hidden">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>14</h3></td>
                <td>
                    <h3>Comprobar las trbrerías que estás utitrzando en tu entorno de desarrollo y explotación.
                        Crear tu
                        propia trbrería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el
                        de
                        explotación.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio14.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio14.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>15</h3></td>
                <td>
                    <h3>Crear e iniciatrzar un array con el sueldo percibido de lunes a domingo. Recorrer el array
                        para
                        calcular el sueldo percibido durante la semana.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio15.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio15.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>16</h3></td>
                <td>
                    <h3>Recorrer el array anterior utitrzando funciones para obtener el mismo resultado</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio16.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio16.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>17</h3></td>
                <td>
                    <h3>Iniciatrzar un array donde almacenamos el nombre de las personas que tienen reservado el
                        asiento
                        en un teatro de 20 filas y 15 asientos por fila.Recorrer el array con distintas técnicas para
                        mostrar los asientos ocupados en cada fila y las personas que lo ocupan.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio17.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio17.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>18</h3></td>
                <td><h3>Recorrer el array anterior utitrzando funciones para obtener el mismo resultado.</h3></td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio18.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio18.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>19</h3></td>
                <td>
                    <h3>Construir una librería de funciones de vatrdación de campos de formularios para utitrzarla en los siguientes ejercicios.</h3>
                </td>
                <td><button style="visibility: hidden">Ejecutar</button></td>
                <td><button style="visibility: hidden">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>20</h3></td>
                <td>
                    <h3>Convertir la libreriaVatrdacionFormularios.php en una clase VatrdacionFormularios.php. El profesor facitrtará a los alumnos la clase AAMMDDVatrdacionFormularios.php desarrollada en el curso anterior como punto de partida.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio20.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio20.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>21</h3></td>
                <td>
                    <h3>Construir un formulario para recoger un cuestionario reatrzado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio21.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio21.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>22</h3></td>
                <td>
                    <h3>Construir un formulario para recoger un cuestionario reatrzado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio22.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio22.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>23</h3></td>
                <td>
                    <h3>Construir un formulario para recoger un cuestionario reatrzado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a satrr el formulario con el mensaje correspondiente.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio23.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio23.php'">Mostrar codigo</button></td>
            </tr>
            <tr>
                <td><h3>24</h3></td>
                <td>
                    <h3>Construir un formulario para recoger un cuestionario reatrzado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a satrr el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.</h3>
                </td>
                <td><button class="active" onclick="location.href = './codigoPHP/ejercicio24.php'">Ejecutar</button></td>
                <td><button class="active" onclick="location.href = './mostrarcodigo/muestraEjercicio24.php'">Mostrar codigo</button></td>
            </tr>
        </table>
    </div>

    <div class="footer">
        <button onclick="location.href = '../'"><h3>James Edward Nuñez Cuzcano</h3></button>
        
    </div>
</body>

</html>