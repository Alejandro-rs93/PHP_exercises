<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio02-Tanda2</title>
  </head>
  <body>
        Por favor, introduzca una hora del día (del 0 al 23):
        <form method="post">
          <input type="text" name="hora" autofocus><br>
          <input type="submit" value="Aceptar">
        </form>

        <?php
          $hora = $_POST['hora'];
          if (($hora >= 24) || ($hora < 0)) {
            echo "La hora introducida no es correcta.";
          } elseif (($hora >= 6) && ($hora <= 11)) {
            echo "Buenos días";
          } elseif (($hora >= 12) && ($hora <= 20)) {
            echo "Buenas tardes";
          } elseif ((($hora >= 21) && ($hora < 24)) || (($hora <= 5) && ($hora >= 0))) {
            echo "Buenas noches";
          }
        ?>

  </body>
</html>