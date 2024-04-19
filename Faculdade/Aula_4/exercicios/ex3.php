<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
<?php
    $idades = array(0,20, 22, 25, 30, 15, 17, 19, 13, 11, 12, 14, 23, 35, 40, 18);
    $menores = 0;
    for($x = 1; $x <=15; $x++){
        if($idades[$x] >=18){
            echo "A pessoa $x é maior de idade com $idades[$x] anos. <br/>";
        }

        if($idades[$x] < 18){
            $menores++;
        }
    }

    echo "$menores pessoas são menores de idade!";
?>
</body>
</html>