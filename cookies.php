<?php
    $mode = ($_GET["mode"] ?? ($_COOKIE["mode"] ?? "light"));
    setcookie("mode". $mode, time() + 30 * 24 *60 *60);
    
?>
<script>

</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style type="text/css">
.light{
    background-color: whitesmoke;
}
.dark{
    background-color: grey;
}
</style>

</head>
<body class= "<?= $mode ?>">
<a href="BlackCookies.php?mode=light">Modo claro</a>
<a href="BlackCookies.php?mode=dark">Modo oscuro</a>
    
</body>
</html>
