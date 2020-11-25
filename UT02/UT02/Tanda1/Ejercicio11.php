<! DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>Ejercicio 11</title>
  </head>
  <body>
    <form method="post">
      Kilobytes <input type="number" name="kb" min="0" autofocus><br>
      <input type="submit" value="Aceptar">
    </form>
    <?php
      echo $_POST['kb'], " Kb son : ", round($_POST['kb'] / 1024), " Mb.";
    ?>
  </body>
</html>