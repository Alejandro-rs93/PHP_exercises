<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio03-Tanda2</title>
  </head>
  <body>
        Introduce un número del 1 al 7 y te diré el día de la semana :
        <form method="post">
          <input type="text" name="n" autofocus><br>
          <input type="submit" value="Aceptar">
        </form>
        <?php
          $n = $_POST['n'];

          switch($n) {
            case 1:
              $dia  = "lunes";
              break;
            case 2:
              $dia  = "martes";
              break;
            case 3:
              $dia  = "miercoles";
              break;
            case 4:
              $dia  = "jueves";
              break;
            case 5:
              $dia  = "viernes";
              break;
            case 6:
              $dia  = "sabado";
              break;
            case 7:
              $dia  = "domingo";
              break;
            default:
              $dia  = "Un numero del 1 al 7";
          }

          echo $dia;
        ?>

    </body>
</html>