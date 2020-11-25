<! DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <title>Ejercicio 02</title>
  </head>
  <body>
        <form method="post">
          Euros <input type="text" name="euros"><br />
          <input type="submit" value="Aceptar">
        </form>
        <?php
            // El round es para redondear 
            echo $_POST['euros'], " Euros son ", round($_POST['euros'] * 166.386), " pesetas.";
        ?>
  </body>
</html>