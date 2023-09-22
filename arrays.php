<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $array = array('Alejandro','Andrea','Pilar','Jose'); //ej. 1
        echo 'En el array tenemos un total de '. count($array) .' valores. <br>'; //ej. 2
        $alumnos = array('Carmen','Hector','Alejandro','Toni'); //ej. 3
        $alumnosreverse = array_reverse($alumnos);
        $miposicion = array_search('Alejandro',$alumnos);
        echo 'Aqui tenemos el listado de los alumnos separados con un espacio: '. implode(" ", $alumnos). '<br>';
        asort($alumnos); //ej. 4
        echo 'Ahora mostramos el mismo listado pero ordenado alfabeticamente: '. implode(" - ", $alumnos). '<br>';
        echo 'Este es el orden inverso con el que se creo el array: '. implode(" - ", $alumnosreverse) .'<br>'; //ej. 5
        echo 'El alumno Alejandro aparece en la posicion '. $miposicion .' del aray ORIGINAL. <br>'; //ej. 6
        $alumnosextended = [ //ej. 7
            [
                'id' => 12345678,
                'name' => 'Alejandro',
                'edad' => 24,
            ],
            [
                'id' => 32165498,
                'name' => 'Hector',
                'edad' => 19,
            ],
            [
                'id' => 74185296,
                'name' => 'Carmen',
                'edad' => 19,
            ],
            [
                'id' => 98765432,
                'name' => 'Toni',
                'edad' => 20,
            ],
            
        ];
    ?> 
    <h1 align="center">LISTADO DE ALUMNOS</h1> <!-- //ej. 8 -->
    <table width="20%" border="1px" align="center">
    <tr align="center">
        <td>Identificacion</td>
        <td>Nombre</td>
        <td>Edad</td>
    <?php
        $concat = '';
        foreach ($alumnosextended as $student) {
            echo '<tr>';
            echo "<td align='center'>" . $student['id'] .'</td>';
            echo "<td align='center'>" . $student['name'] .'</td>';
            echo "<td align='center'>" . $student['edad'] .'</td>';
            echo '</tr>';
        }
    ?>
    </tr>
    </table>
    <?php
        $nombresarray = array_column($alumnosextended, 'name'); //ej. 9
        echo 'Estos son los nombres de los alumnos: '. implode(" - ", $nombresarray). '<br>';
        $arraynumeros = array(3,67,12,68,54,112,9,43); //ej. 10
        echo 'La suma de los numeros del array es: '. array_sum($arraynumeros);
    ?>
</body>
</html>