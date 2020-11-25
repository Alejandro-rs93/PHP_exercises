<! DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <title>Ejercicio 04</title>
  </head>
  <body>
        <form method="post">
          Numero1 <input type="text" name="num1"><br />
          Numero2 <input type="text" name="num2"><br />
          <input type="submit" value="Aceptar">
        </form>
        <?php
            
            echo  "La Suma: " , $_POST['num1'] + $_POST['num2'],"<br>";
            echo  "La Resta: " , $_POST['num1'] - $_POST['num2'],"<br>";
            echo  "La Multiplicacion: " , $_POST['num1'] * $_POST['num2'],"<br>";
            echo  "La Division: " , $_POST['num1'] / $_POST['num2'];
        ?>
  </body>
</html>