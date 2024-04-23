<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

function equacoes($tipo, $num1, $num2){
    switch($tipo){
        case 1 :
            $resultado = $num1 - $num2;
            echo "opção subtração <br>";
        break;
        case 2 :
            $resultado = $num1 + $num2;
            echo "opção soma <br>";
        break;
        case 3 :
            $resultado = $num1 * $num2;
            echo "opção multiplicação <br>";
        break;
        case 4 :
            $resultado = $num1 ** $num2;
            echo "opção exponenciação <br>";
        break;
        case 5 :
            $resultado = $num1 / $num2;
            echo "opção divisão <br>";
        break;

        default :
        echo "opção invalidada";
        break;

        
    }
    return $resultado;
}

$operacao = equacoes(1, 15, 3);
echo "o resultado da sua operação é de = $operacao";


?>

</body>
</html>