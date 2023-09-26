<?php
$server_host = $_SERVER['HTTP_HOST'];
echo "<p><strong>Escoger idioma predeterminado de mi página web</strong></p>";
foreach (getallheaders() as $key => $value) {
    if ($key == "Accept-Language")
        $idioma = substr($value, 0, 2);
}
if ($idioma == "es") {
    $texto =  "La página esta en español";
} else {
    $texto = "La página esta en ingles";
}
?>
<!DOCTYPE html>
<html lang=<?php echo $idioma ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma</title>
</head>
<body>
    <?php
        echo $texto;
    ?>
</body>
</html>