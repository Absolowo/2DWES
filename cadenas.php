<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php 
        $nombre = $_GET['nombre'] ?? 'Alejandro Perez Garcia';
        $nombre = trim($nombre);
        $longitud = strlen($nombre);
        $mayusculas = strtoupper($nombre);
        $minusculas = strtolower($nombre);
        echo 'El valor del parametro es: '. $nombre ."<br>"; //ej. 1
        echo 'Su longitud es: '. $longitud."<br>"; //ej. 2
        echo 'El valor en mayusculas es: '. $mayusculas."<br>"; //ej. 3
        echo 'El valor en minusculas es: '. $minusculas."<br>"; //ej. 4

        $prefijo = $_GET['prefijo'] ?? 0; //ej. 5
        if($prefijo == true) 
        {
            if($prefijo == substr($nombre, 0, strlen($prefijo)))
                echo 'El prefijo coincide con el principio del nombre <br>';
            else
                echo 'El prefijo no coincide con el principio del nombre <br>';
        }
        
        $letrasA = substr_count($mayusculas,'A'); //ej. 6
        echo 'La letra "a" aparece: '. $letrasA .' veces.<br>';
        
        $posicion = strpos($mayusculas, 'A'); //ej. 7
        if($posicion != -1){
            echo 'La primera "a" aparece en la posicion: '. $posicion .'<br>';
        }
        else
        {
            echo 'No aparece la letra "a" en el nombre <br>';
        }
        
        $nombre0 = str_ireplace('o', 0, $nombre);
        echo $nombre0 . '<br>';
        
        $url = 'http://username:password@hostname:9090/path?arg=value'; //ej. 8
        var_dump(parse_url($url,PHP_URL_SCHEME));
        var_dump(parse_url($url,PHP_URL_USER));
        var_dump(parse_url($url,PHP_URL_PATH));
        var_dump(parse_url($url,PHP_URL_QUERY));
    ?>
</body>
</html>