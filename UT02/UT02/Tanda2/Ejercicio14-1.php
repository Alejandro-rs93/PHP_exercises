<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ejercicio14-Tanda2</title>
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
        <?php
        
          $n = $_POST['n'];

          //Comprobar si es PAR o IMPAR
          if ($n % 2) {
            echo "El número introducido es impar";
          } else {
            echo "El número introducido es par";
          }

          //Comprobart si es divisible entre 5
          if ($n % 5) {
            echo " y no es divisible entre 5.";
          } else {
            echo " y divisible entre 5.";
          }

        ?>
        <br><br>
        <a href="Ejercicio14.php">>> Volver</a>
  </body>
</html>