<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio17-Tanda2</title>
  </head>
  <body>
          <?php
          $n = $_POST['n'];

          if ($n<0){
            $n = -$n;
          }

          if ( $n < 10 ) {
            $primera = n;
          }

          if (( $n >= 10 ) && ( $n < 100 )) {
            $primera = $n / 10;
          }

          if (( $n >= 100 ) && ( $n < 1000 )) {
            $primera = $n / 100;
          }

          if (( $n >= 1000 ) && ( $n < 10000 )) {
            $primera = $n / 1000;
          }

          if ( $n >= 10000 ) {
            $primera = $n / 10000;
          }

          echo "La primera cifra del número introducido es: ", floor($primera);
        ?>
        <br><br>
        <a href="Ejercicio17.php">>> Volver</a>
  </body>
</html>