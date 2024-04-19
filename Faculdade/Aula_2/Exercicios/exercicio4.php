<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
</head>
<body>
    <?php 
   
        $x = 3;


        $z = ((2 * pow($x, 2) - 3 * pow($x, $x + 1)) / (2 * $x) + sqrt($x + 1) / 4) / sqrt(4 * $x + pow(2, $x));


        echo "O valor de Z é: $z" ;     
    ?>
</body>
</html>