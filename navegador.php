<?php
$server_host = $_SERVER['HTTP_HOST'];
echo "<p><strong>Escoger idioma predeterminado de mi página web</strong></p>";
foreach (getallheaders() as $key => $value) {
    if ($key == 'User-Agent')
        $navegador = substr($value, 65);
}
if (str_contains($navegador, 'Firefox'))
    $texto = "Tu navegador es Firefox, puedes entrar a la web";
else
    $texto = "Tu navegador no es Firefox, no puedes entrar a la web";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegador</title>
</head>
<body>
    <?php
    echo $texto;
    ?>
</body>
</html>