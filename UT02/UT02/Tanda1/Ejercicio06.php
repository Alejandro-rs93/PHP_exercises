<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 06</title>
  </head>
  <body>
      <form method="post">
        Anchura <input type="number" name="ancho" min="0" autofocus><br>
        Altura <input type="number" name="alto" min="0"><br>
        <input type="submit" value="Aceptar">
      </form>
    <?php
      echo "El área del triángulo es : ";
      echo round(($_POST['ancho'] * $_POST['alto']) / 2), " cm<sup>2</sup>";
    ?>
    </body>
</html>