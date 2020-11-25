<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio16-Tanda2</title>
  </head>
  <body>
        <?php
            $n = $_POST['n'];
            echo "La última cifra de $n es : ", $n % 10;
        ?>
        <br><br>
        <a href="Ejercicio16.php">>> Volver</a>
  </body>
</html>