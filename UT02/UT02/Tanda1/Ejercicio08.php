<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ejercicio 08</title>
  </head>
  <body>
      <form method="post">
        Horas trabajadas durante la semana <input type="number" name="horas" min="0" autofocus><br>
        <input type="submit" value="Aceptar">
      </form>
    <?php
      echo "Su salario semanal es ";
      echo $_POST['horas'] * 12, " euros.";
    ?>
    </body>
</html>