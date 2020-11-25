<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio04-Tanda2</title>
  </head>
  <body>
        Por favor, introduzca el número de horas trabajadas durante la semana: <br>
        <form  method="post">
            <input type="text" name="horasTrabajadas" autofocus><br>
            <input type="submit" value="Aceptar">
        </form>
        <?php
          $horasTrabajadas  = $_POST['horasTrabajadas'];

          if ($horasTrabajadas  < 40) {
            $sueldoSemanal = 12 * $horasTrabajadas ;
          } else {
            $sueldoSemanal = (40 * 12) + (($horasTrabajadas  - 40) * 16);
          }

          echo "El sueldo semanal es : $sueldoSemanal euros";
        ?>
  </body>
</html>