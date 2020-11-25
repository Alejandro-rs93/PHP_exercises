<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio05-Tanda2</title>
  </head>
  <body>
        Ecuaciones de primer grado
        <form method="post">
          <h2>
            <input type="number" name="a" step="any">x +
            <input type="number" name="b" step="any"> = 0<br>
          </h2>
          <input type="submit" value="Aceptar">
        </form>
        <?php
          $a = $_POST['a'];
          $b = $_POST['b'];

          if ($a == 0) {
            echo "Esa ecuacion no tiene solucion real.";
          } else {
            echo "x = ", (-$b / $a);
          }
        ?>
  </body>
</html>