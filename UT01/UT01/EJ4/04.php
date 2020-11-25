<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejer04</title>
  </head>
  <body>
  <table>
        <tr>
          <th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th>
        </tr>
        <?php
          echo "<tr><td>Cliente</td><td>Empresa</td><td>Servidor</td>";
          echo "<td>Despliegue</td><td>Interfaces</td></tr>";
        ?>
        <tr><td>Cliente</td><td>Empresa</td><td>Servidor</td><td>Empresa</td><td>Interfaces</td></tr>
        <tr><td colspan="5"><center>RECREO</center></td></tr>
        <tr><td>Interfaces</td><td>Despliegue</td><td>Interfaces</td><td>Empresa</td><td>Servidor</td></tr>
        <?php
          echo "<tr><td>Interfaces</td><td>Despliegue</td><td>Interfaces</td>";
          echo "<td>Servidor</td><td>Servidor</td></tr>";
        ?>
        <tr><td>Servidor</td><td>Servidor</td><td>Cliente</td><td>Servidor</td><td>Cliente</td></tr>
        <tr><td>Servidor</td><td>Servidor</td><td>Cliente</td><td>Servidor</td><td>Cliente</td></tr>
        
    </table>
  </body>
</html>