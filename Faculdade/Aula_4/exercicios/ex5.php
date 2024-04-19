<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
<?php

    $base = 5;
    $expoente = 4;

    $result_pow = pow($base, $expoente);
    echo "Resultado: $base^$expoente = $result_pow (usando POW) <br/>";

    $escala = 2;
    $result_bcpow = bcpow($base, $expoente, $escala); 
    echo "Resultado: $base^$expoente = $result_bcpow (usando BCPOW)<br/>";

    $laco_rept = $base;
    for($x=0;$x<($expoente-1); $x++){
        $laco_rept *= $base;
    }
    echo "Resultado: $base^$expoente = $laco_rept (usando FOR) <br/>";

?>
</body>
</html> 