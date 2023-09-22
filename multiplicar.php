<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar</title>
</head>
<body>
<?php
    /*$primerValor = 2;
    $segundoValor = 4;
    if (isset($_GET['x']))
        $primerValor = $_GET['x'];

    if (isset($_GET['x']))
        $segundoValor = $_GET['y'];
*/
    $primerValor = $_GET['x'] ?? 2;
    $segundoValor = $_GET['y'] ?? 4;
    echo "El resultado es: ". $primerValor * $segundoValor;
?>
</body>
</html>