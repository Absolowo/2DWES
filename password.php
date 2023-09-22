<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <?php
        function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
            $pass = "";
            for ($i=0;$i<$upper;$i++){
                $upperchar = chr(rand(65, 90));
                $pass = $pass.$upperchar;
            }
            for ($i=0;$i<$lower;$i++){
                $lowerchar = chr(rand(97, 122));
                $pass = $pass.$lowerchar;
            }
            for ($i=0;$i<$numeric;$i++){
                $numericchar = chr(rand(48, 57));
                $pass = $pass.$numericchar;
            }
            for ($i=0;$i<$other;$i++){
                $otherchar = chr(rand(33, 47));
                $pass = $pass.$otherchar;
            }
            $shuffled = str_shuffle($pass);
            return $shuffled;

        }
        $password = rand_Pass();
        echo $password;
    ?>
</body>
</html>