<!DOCTYPE html>
  <!--
    Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.
  -->

<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 01</title>
  </head>
  <body>
    <p>
    Por favor, introduzca dos números cualesquiera: <br>
        <form method="post">
          x: <input type="text" name="x"><br>
          y: <input type="text" name="y"><br>
          <input type="submit" value="Multiplica">
        </form>

    <?php
      echo $_POST['x'], " x ", $_POST['y'], " = ", $_POST['x'] * $_POST['y'];
    ?>
  </body>
</html>