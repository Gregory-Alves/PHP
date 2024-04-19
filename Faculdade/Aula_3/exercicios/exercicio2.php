<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
</head>
<body>
    <?php 
       
       $lado1 = 3;
       $lado2 = 3;
       $lado3 = 3;
       //equilatero - todos os lados iguais
       //isosceles - 2 lados iguais
       //escaleno - se nenhum dos lados for iguais

       if ($lado1 == $lado2 && $lado1 == $lado3){
        echo "O triangulo é equilatero!";
       }

       elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "O triangulo é isosceles!";
       }

       else {
        echo "O triangulo é escaleno!";
       }
    ?>
</body>
</html>