<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $carros = [
        ["modelo" => "Mustang", "marca" => "Ford", "cor" => "Vermelho", "ano" => 2022],
        ["modelo" => "Argo", "marca" => "Fiat", "cor" => "Branco", "ano" => 2023],
        ["modelo" => "Onix", "marca" => "Gm", "cor" => "Prata", "ano" => 2024],
        ["modelo" => "Corolla", "marca" => "Toyota", "cor" => "Preto", "ano" => 2020],
        ["modelo" => "Versa", "marca" => "Nissan", "cor" => "Cinza", "ano" => 2018],
        ["modelo" => "Hb20", "marca" => "Hyundai", "cor" => "Marrom", "ano" => 2023],
        ["modelo" => "Prius", "marca" => "Toyota", "cor" => "Prata", "ano" => 2024],
        ["modelo" => "Endeavor", "marca" => "Mitsubishi", "cor" => "Azul", "ano" => 2019],
        ["modelo" => "Lamborghini Revuelto", "marca" => "Lamborghini", "cor" => "Amarelo", "ano" => 2024],
        ["modelo" => "Impreza", "marca" => "Subaru", "cor" => "Azul", "ano" => 2019]
    ];

    function PrintInfo($modelo, $marca, $cor, $ano){
        echo "MODELO DO CARRO: $modelo | MARCA DO CARRO: $marca | COR DO CARRO: $cor | ANO DO CARRO: $ano <br><br>";
    }

    function PrintInfo_2023($modelo, $marca, $cor, $ano){
        if($ano>=2023){
            echo "MODELO DO CARRO: $modelo | MARCA DO CARRO: $marca | COR DO CARRO: $cor | ANO DO CARRO: $ano <br><br>";
        }
        if($ano<2023){
            echo "MODELO DO CARRO: $modelo | MARCA DO CARRO: $marca | COR DO CARRO: $cor<br><br>";
        }
    }

    echo"TODOS OS CARROS NA LISTA<br><br>";
    foreach($carros as $carro){
        $modelo = $carro["modelo"];
        $marca = $carro["marca"];
        $cor = $carro["cor"];
        (int)$ano = $carro["ano"];
        list($modelo,$marca,$cor,$ano) = PrintInfo($modelo,$marca,$cor,$ano);
    }

    echo"<br><br>TODOS OS CARROS NA LISTA APENAS MOSTRANDO O ANO DE FABRICAÇÂO DOS FABRICADOS A PARTIR DE 2023<br><br>";

    foreach($carros as $carro){
        $modelo = $carro["modelo"];
        $marca = $carro["marca"];
        $cor = $carro["cor"];
        (int)$ano = $carro["ano"];
        list($modelo,$marca,$cor,$ano) = PrintInfo_2023($modelo,$marca,$cor,$ano);
    }
    ?>
</body>
</html>