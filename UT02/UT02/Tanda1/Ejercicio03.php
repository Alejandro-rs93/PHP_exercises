<! DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <title>Ejercicio 03</title>
  </head>
  <body>
        <form method="post">
          Pesetas <input type="text" name="pesetas"><br />
          <input type="submit" value="Aceptar">
        </form>
        <?php
            // El round es para redondear 
            echo $_POST['pesetas'], " pesetas son ";
            echo round($_POST['pesetas'] / 166.386, $precision = 2), " euros.";
        ?>
  </body>
</html>