<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort3</title>
</head>
<body>
    <?php
        $asociativo=array("Pera"=>"Se denomina pera al fruto de distintas especies del género Pyrus, integrado por árboles caducifolios conocidos comúnmente como perales.<br>",
        "Manzana"=>"La manzana o poma es el fruto comestible de la especie Malus domestica, el manzano común.<br>",
        "Platano"=>"La banana, conocida también como banano, plátano, guineo maduro, guineo, cambur o gualele, es un fruto comestible de varios tipos de grandes plantas herbáceas del género Musa<br>");

        function orden($a, $b) {
            if (strlen($a) == strlen($b)) {
            return 0;
        }
        return (strlen($a) < strlen($b)) ? -1 : 1;
        }
        uasort($asociativo, 'orden');
        print_r($asociativo);
    ?>
</body>
</html>