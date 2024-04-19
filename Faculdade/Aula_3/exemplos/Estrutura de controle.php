<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Controle - Parte 01</title>
</head>
<body>
    <?php 
        
        $varA = 10;
        $varB = 5;

        if($varA == $varB)
        {
            echo "As variáveis $varA e $varB são iguais.";
        }
        else
        {
            echo "As variáveis são diferentes.";
        }

        echo "<br><br>";

        if($varA === $varB)
        {
            echo "As variáveis $varA e $varB são de tipos e valores idênticos.";
        }
        else
        {
            echo "As variáveis $varA e $varB são de tipos diferentes.";
        }

        echo "<br><br>";
        
        $varC = 5.5;
        $varD = 8.3;

        if($varC == $varD)
        {
            echo "As variáveis $varC e $varD são iguais";
        }
        elseif($varC > $varD)
        {
            echo "$varC é maior que $varD";
        }
        elseif($varC < $varD)
        {
            echo "O resultado da multiplicação é " .($varC*$varD);
        }
        elseif($varC === $varD)
        {
            echo "Variáveis idênticas";
        }
        
        $idade = 25;
        $peso = 120;
        $risco = "";

        if($idade < 18 and $peso < 50)
        {
            $risco = "médio";
            echo "A idade é $idade anos e o peso é $peso kg." . "A pessoa está no grupo de risco $risco";
        }
        elseif($idade < 18 && ($peso >= 60 && $peso <= 90))
        {
            $risco = "normal";
            echo "A idade é $idade anos e o peso é $peso kg." . "A pessoa está no grupo de risco $risco";
        }
        elseif($idade < 18 && ($peso > 90 && $peso <= 120))
        {
            $risco = "alto";
            echo "A idade é $idade anos e o peso é $peso kg." . "A pessoa está no grupo de risco $risco";
        }
        elseif($idade < 18 &&  $peso > 120)
        {
            $risco = "extremamente alto";
            echo "A idade é $idade anos e o peso é $peso kg." . "A pessoa está no grupo de risco $risco";
        }

        elseif(($idade >= 18 && $idade <= 50) && $peso < 60)
        {
            $risco = "médio";
            echo "A idade é $idade anos e o peso é $peso kg." . "A pessoa está no grupo de risco $risco";
        }
        elseif(($idade >= 18 && $idade <= 50) && ($peso >= 60 and $peso <= 100))
        {
            $risco = "normal";
            echo "A idade é $idade anos e o peso é $peso kg." . "A pessoa está no grupo de risco $risco";
        }
        elseif(($idade >= 18 && $idade <= 50) && ($peso > 100 and $peso <= 140))
        {
            $risco = "alto";
            echo "A idade é $idade anos e o peso é $peso kg." . "A pessoa está no grupo de risco $risco";
        }
        elseif(($idade >= 18 && $idade <= 50) && ($peso > 140 and $peso <= 200))
        {
            $risco = "extremamente alto";
            echo "A idade é $idade anos e o peso é $peso kg." . "A pessoa está no grupo de risco $risco";
        }

        echo "<br><br>";
        //Operador ternário
        
        $idade01 = 17;
        $situacao = $idade01 >= 18 ? "Adulto" : "Adolescente";
        echo "O aluno é: $situacao";

        echo "<br><br>";

        $pais_00 = "Brasil";
        switch($pais_00)
        {
            case "Brasil":
                echo "O País escolhido é o Brasil";
                break;
            case "Dinamarca":
                echo "O País escolhido é a Dinamarca";
                break;
            case "Rússia":
                echo "O País escolhido é a Rússia";
                break;
            default:
                echo "Escolha um País...";
                break;
        }

        echo "<br><br>";

        $pais_01 = "Coréia do Sul";
        echo match($pais_01)
        {
            "Coréia do Sul" => "O País escolhido é o Coréia do Sul",
            "Portugal" => "O País escolhido é Portugal",
            "Japão" => "O País escolhido é o Japão",
            default => "Escolha uma das opções...",
        };
        
        $idadeFinal = 53;
        echo match(true)
        {
            ($idadeFinal < 5) => "Sem categoria",
            ($idadeFinal >= 5 and $idadeFinal < 8) => "Categoria infantil",
            ($idadeFinal >= 8 and $idadeFinal < 12) => "Categoria juvenil",
            ($idadeFinal >= 12 and $idadeFinal < 17) => "Categoria adolescente",
            ($idadeFinal >= 17 and $idadeFinal < 40) => "Categoria adulto",
            ($idadeFinal >= 40 and $idadeFinal < 60) => "Categoria sênior",
            default => "Aguardando..."

        };
    ?>
</body>
</html>