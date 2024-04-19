<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
</head>
<body>
    <?php 
        $raio = 10;
        echo "o raio do circulo e = $raio";
        echo "<br/>calculo do perimetro: $raio * 3,14";
        $perimetro = ((2*3.14)*$raio);
        echo "<br/>perimetro = $perimetro<br/>";
        echo "<br/>calculo da area =  3,14 * $raio";
        $area = 3.14 * ($raio ** 2);
        echo "<br/>area = $area <br/>";
    
        echo "<br/>O raio do circulo é: ".gettype($raio);
        echo "<br/>O perimetro do circulo é: ".gettype($perimetro);
        echo "<br/>A area do perimetro é: ".gettype($area);
            
    ?>
</body>
</html>