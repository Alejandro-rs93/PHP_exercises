<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio08-Tanda2</title>
</head>
<body>

<?php
    $not1 = $_POST['nota1'];
    $not2 = $_POST['nota2'];
    $not3 = $_POST['nota3'];
    $media = ($not1 + $not2 + $not3)/3;

    echo "La nota media de los tres es : ".round($media, $precision = 2);
?>
    
</body>
</html>