<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
</head>
<body>
    <?php 
        function Soma($num1, $num2){
            $soma = $num1 + $num2;

            if($soma < 0){
                return 0;
            }
            else{
                return $soma;
            }
        }

        $soma = Soma(2, 5);
        echo "A soma dos 2 numeros: ". $soma;

    ?>
</body>
</html>