<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio01-Tanda2</title>
  </head>
  <body>
        Introduzca un día de la semana  (en minúsculas) y le diré
        qué asignatura toca a primera hora ese día: <br>
        <form method="post">
          <input type="text" name="dia"><br>
          <input type="submit" value="Aceptar">
        </form>
        <?php
          $dia = $_POST['dia'];

          switch($dia) {
            case "lunes":
              echo "Desarrollo en Entorno Servidor";
              break;

            case "martes":
              echo "Desarrollo en Entorno Servidor";
              break;

            case "miercoles":
              echo "Libre Configuración";
              break;

            case "jueves":
              echo "Despliegue de Aplicaciones";
              break;

            case "viernes":
              echo "Diseño de Interfaces Web";
              break;

            case "sabado":
                echo "No hay clases";
              break;

            case "domingo":
              echo "No hay clases";
              break;

            default:
              echo "El día introducido no es correcto.";
          }
        ?>
    </body>
</html>