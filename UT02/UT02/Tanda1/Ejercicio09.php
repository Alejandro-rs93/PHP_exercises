<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 09</title>
  </head>
  <body>
    <form method="post">
      Radio (en cm) <input type="number" name="r" min="0" autofocus><br>
      Altura (en cm) <input type="number" name="a" min="0"><br>
      <input type="submit" value="Aceptar">
    </form>
    <?php
      echo "El volumen del cono es : ";
      $v = (1 / 3) * Math.pi() * $_POST['r'] * $_POST['r'] * $_POST['a'];
      echo round($v), " cm<sup>2</sup>.";
    ?>
  </body>
</html>