<?php
$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
$id = $_GET["id"] ?? -1;
foreach ($productos as $key => $value){
    if (array_key_exists($id, $productos))
        $texto = "$id = $productos[$id]";
    else
        $texto = "ERROR: ".http_response_code(404);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <?php
    echo $texto;
    ?>
</body>
</html>