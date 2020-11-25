<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio12-Tanda2</title>
  </head>
  <body>
        <?php
          $puntos = $_POST['r1'] + $_POST['r2'] + $_POST['r3'] + $_POST['r4'] + $_POST['r5'];
          echo "Ha obtenido $puntos puntos.";
        ?>
        <br><br>
        <a href="Ejercicio12.php">>> Volver</a>
  </body>
</html>