<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort2</title>
</head>
<body>
    <?php
        $temperatura = "12 32 6 13 24 15 31";
        $temp = $temp2 = explode(" ", $temperatura);
        asort($temp);
        arsort($temp2);
        $cincomenores = array_slice($temp, 0, 5);
        $cincomayores = array_slice($temp2, 0, 5);
        $suma = array_sum($temp);
        $contador = count($temp);
        echo "Las 5 temperaturas mínimas: ";
        foreach ($cincomenores as $numero) {
            echo "$numero \n";
        }
        echo "<br>Las 5 temperaturas máximas: ";
        foreach ($cincomayores as $numero) {
            echo "$numero \n";
        }
        echo "<br>La media de todas las temperaturas es: ". $suma / $contador;
    ?>
</body>
</html>