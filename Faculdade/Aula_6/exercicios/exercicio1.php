<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function FuncaoFor($numeros){
        $num_maior = 0;
        for ($i = 0; $i < count($numeros); $i++) {
            if ($num_maior < $numeros[$i]){
                $num_maior = $numeros[$i];
            }
        }
        return $num_maior;
    }

    function FuncaoForeach($numeros_2){
        $num_maior = 0;
        foreach ($numeros_2 as $value) {
            if ($num_maior < $value){
                $num_maior = $value;    
            }
        }
        return $num_maior;
    }
    
    $numeros = array(5,7,9,2,40);
    $numeros_2 = array(1,2,3,4,5);
    echo "O maior número é: ".FuncaoFor($numeros)." usando a funcao FOR <br><br>";
    echo "O maior número é: ".FuncaoForeach($numeros_2)." usando a funcao FOREACH <br><br>";
    ?>
</body>
</html>