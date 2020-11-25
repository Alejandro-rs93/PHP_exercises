<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 05</title>
  </head>
  <body>
    <form method="post">
      Anchura en cm <input type="number" name="ancho" min="0" autofocus><br>
      Altura en cm <input type="number" name="alto" min="0"><br>
      <input type="submit" value="Aceptar">
    </form>
    <?php
      echo "El área del rectángulo es : ";
      //$precision se utiliza para que te de los decimales que quieras en ente ejemplo hemos puesto que muestre 2
      echo round($_POST['ancho'] * $_POST['alto'], $precision = 2), " cm<sup>2</sup>";
    ?>
  </body>
</html>