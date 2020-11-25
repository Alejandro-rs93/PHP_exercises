<! DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>Ejercicio 10</title>
  </head>
  <body>
      <form method = "post">
        Megabytes <input type = "number" name = "mb" min = "0" autofocus> <br>
        <input type="submit" value="Aceptar">
      </form>
    <?php
      echo $_POST['mb'], " Mb son : ", $_POST['mb'] * 1024, " Kb.";
    ?>
  </body>
</html>