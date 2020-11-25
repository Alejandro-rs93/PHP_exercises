<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio11-Tanda2</title>
  </head>
  <body>
        <?php
          $hora = $_POST['hora'];
          $minuto = $_POST['minuto'];

          $segundosTrans = ($hora * 3600) + ($minuto * 60);
          $segundosRestantes = (24*3600) - $segundosTrans ;
 
          echo "Desde las " .date('h:i', mktime($hora, $minuto)) ." hasta la medianoche faltan : $segundosRestantes seg.";
        ?>
        <br><br>
        <a href="Ejercicio11.php">>> Volver</a>
  </body>
</html>