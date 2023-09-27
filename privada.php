<?php
$dejameEntrar = $_GET["dejameEntrar"] ?? 0;
if ($dejameEntrar == 1)
    $texto = "Bienvenido";
else{
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privada</title>
</head>
<body>
<?php
    echo $texto;
?>
</body>
</html>