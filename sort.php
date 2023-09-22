<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort</title>
</head>
<body>
    <?php
        $perfiles=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
        $temp = $temp2 = $temp3 = $temp4 = $perfiles;
        ksort($temp);
        echo "Ordenado por nombre ascendente: <br>";
        foreach ($temp as $key => $val) {
            echo "$key = $val ";
        }
        echo "<br>";
        asort($temp2);
        echo "Ordenado por edad ascendente: <br>";
        foreach ($temp2 as $key => $val) {
            echo "$key = $val ";
        }
        echo "<br>";
        krsort($temp3);
        echo "Ordenado por nombre descendente: <br>";
        foreach ($temp3 as $key => $val) {
            echo "$key = $val ";
        }
        echo "<br>";
        arsort($temp4);
        echo "Ordenado por edad descendente: <br>";
        foreach ($temp4 as $key => $val) {
            echo "$key = $val ";
        }
    ?>
</body>
</html>