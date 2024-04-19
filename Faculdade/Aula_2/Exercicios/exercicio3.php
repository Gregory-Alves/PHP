<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3</title>
</head>
<body>
    <?php 
        $num1 = "2";
        $num2 = "5";
        echo "Numero 1: $num1"; 
        echo "<br/>Numero 2: $num2";
        echo  "<br/>A soma dos dois valores é = " .($num1 + $num2);
        echo  "<br/>A subtração dos dois valores é = " .($num1 - $num2);
        echo  "<br/>A multiplicação dos dois valores é = " .($num1 * $num2);
        echo  "<br/>A divisão dos dois valores é = " .($num1 / $num2);
        echo  "<br/>O módulo do sinal do número após realizar a subtração dos dois valores é = " . abs($num1 - $num2);
        echo "<br/>o resto da divisão dos numeros é = " . ($num1 % $num2);
        echo "<br/>A exponenciação entre os numeros é = " . ($num1 ** $num2);
        echo "<br/>A media dos numero é : " . (($num1 + $num2)/2);
        echo "<br/>A raiz quadradada da soma dos numeros é = " . (sqrt($num1 + $num2));       
    ?>
</body>
</html>