<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partlist</title>
</head>

<body>
    <?php
    $arr = array("uno", "dos", "tres", "cuatro");
    function partlist($arr)
    {
        $result = array();
        $count = count($arr);

        for ($i = 1; $i < $count; $i++) {
            $part1 = implode(" ", array_slice($arr, 0, $i));
            $part2 = implode(" ", array_slice($arr, $i));
            $result[] = array($part1, $part2);
        }

        return $result;
    }
    $particiones = partlist($arr);
    foreach ($particiones as $par) {
        echo "[" . $par[0] . ", " . $par[1] . "]\n";
    }
    ?>
</body>

</html>