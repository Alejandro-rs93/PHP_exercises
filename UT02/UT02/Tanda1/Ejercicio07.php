<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 07</title>
  </head>
  <body>
      <form method="post">
        Base imponible (euros) <input type="number" name="baseImponible"  min="0" step="0.01" autofocus><br>
        <input type="submit" value="Aceptar">
      </form>
    <?php
      echo "El total de la factura es ";
      echo round($_POST['baseImponible'] * 1.21), " euros.";
    ?>
    </body>
</html>