<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejer09</title>
  </head>
  <body>
    <?php
      $pesetas = 1000;
      $euros = round($pesetas / 166.386, 2);
      echo $pesetas, " pesetas a euro son: ", $euros, " euros";
     ?>
  </body>
</html>