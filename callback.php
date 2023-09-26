<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback</title>
</head>

<body>
    <?php
    $cadenas = array("Hola", "Buenos dias", "Me llamo Alejandro", "Tengo 24 años", "y", "Estoy estudiando informatica");
    function obtenerLongitud($cadena)
    {
        return strlen($cadena);
    }
    $longitudes = array_map("obtenerLongitud", $cadenas);

    $longitudMaxima = max($longitudes);
    $longitudMinima = min($longitudes);

    echo "Longitud máxima: " . $longitudMaxima . "<br>";
    echo "Longitud mínima: " . $longitudMinima . "<br>";
    ?>
    </tr>
    </table>
    <?php
    $nombresarray = array_column($alumnosextended, 'name'); //ej. 9
    echo 'Estos son los nombres de los alumnos: ' . implode(" - ", $nombresarray) . '<br>';
    $arraynumeros = array(3, 67, 12, 68, 54, 112, 9, 43); //ej. 10
    echo 'La suma de los numeros del array es: ' . array_sum($arraynumeros);
    ?>
</body>

</html>