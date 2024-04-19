<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 
    /*
        function minhaPrimeiraFuncao()
        {
            echo "Minha primeira função";
        }
        minhaPrimeiraFuncao();

        echo "<br><br>";

        function minhaFuncao()
        {
            return "Usando o return pela primeira vez.";
            echo "Minha segunda função";
        }
        echo minhaFuncao();

        echo "<br><br>";

        function minhaOutraFuncao()
        {
            return "Usando o return pela segunda vez.";
            echo "Minha terceira função";
        }
        $var = minhaOutraFuncao();
        echo $var;

        echo "<br><br>";

        function exponenciacao($num01, $num02)
        {
            $total = pow($num01, $num02);
            return $total;
        }

        echo "O resultado da operação de exponenciação é " . exponenciacao(5,3);

        echo "<br><br>";

        function referencia(&$num_03)
        {
            $num_03 *= 5;
            return $num_03;
        }

        $num_04 = 4;
        referencia($num_04);
        echo $num_04;

        echo "<br><br>";

        function passagem_padrao($num_05 = 14)
        {
            return $num_05;
        }

        echo passagem_padrao();

        echo "<br><br>";

        function divisao($num01, $num02)
        {
            $operacao = ($num01/$num02);
            echo "O resultado da divisão é " . $operacao;
        }
        divisao(4,3);
        */
        /*
            - is_bool() - Verifica se a variável é um booleano;
            - is_int() - Verifica se a variável é um inteiro;
            - is_numeric() - Verifica se a variável é um número ou uma string;
            - is_string() - Verifica se a variável é uma string;
            - is_array() - Verifica se a variável é um array;
            - is_float() - Verifica se a variável é um float;
            - is_object() - Verifica se a variável é um objeto

        */
        /*
        Crie uma função que faça a conversão de uma variável de string para float.
        - Primeiro informe o tipo da variável antes de ser convertida;
        - Em um segundo momento apresente o tipo da variável após ser convertida.
        

        function convertToFloat($var)
        {
            if(is_float($var))
            {
                return $var;
            }
            else
            {
                return (float)$var;
            }
        }

        $var_01 = "7";
        echo "<br> Variável ainda não foi convertida: ";
        echo gettype($var_01);
        $var_01 = convertToFloat($var_01);
        echo "<br> Foi convertido para Float: ";
        echo gettype($var_01);

        echo "<br><br>";
        */
        /*
            Suponha que você queira criar um sistema que calcule o valor dos descontos mensais de um funcionário de uma academia.

            - Salário <= R$ 2.000,00 - Desconto igual a 12,5% do salário bruto;
            - Salário > R$ 2.000,00 e Salário <= R$ 3.500,00 - Desconto igual a 22,5% do salário bruto mais uma contribuição para a previdência social de R$ 50,00;
            - Salário > R$ 3.500,00 - Desconto igual 27,5% do salário bruto mais uma contribuição para a previdência social de R$ 75,00.
            Os valores de desconto devem apresentar duas casas decimais após a vírgula.
            - Informe no navegador o nome do funcionário e o valor do desconto.
        
        function calcularDescontos($salario, $previdencia)
        {
            if($salario <= 2000)
            {
                return $salario*0.125;
            }
            elseif($salario > 2000 and $salario <= 3500)
            {
                return ($salario*0.225 + $previdencia);
            }
            elseif($salario > 3500)
            {
                return ($salario*0.275 + $previdencia);
            }
        }

        $funci01Nome = "José da Silva";
        $funci01Descontos = calcularDescontos(1000, 0);

        $funci02Nome = "Lívia Midori";
        $funci02Descontos = calcularDescontos(2500, 50);

        $funci03Nome = "Alberto Fonseca";
        $funci03Descontos = calcularDescontos(5000, 75);

        echo "O valor do desconto na folha salarial do funcionário $funci01Nome é " . "R$ " . number_format($funci01Descontos,2,",",".") . "<br>";

        echo "O valor do desconto na folha salarial do funcionário $funci02Nome é " . "R$ " . number_format($funci02Descontos,2,",",".") . "<br>";

        echo "O valor do desconto na folha salarial do funcionário $funci03Nome é " . "R$ " . number_format($funci03Descontos,2,",",".") . "<br>";

        echo "<br><br>";
        */
        /*
            Crie uma função que apresente ao usuário se as variáveis digitadas são iguais ou idênticas, além de mostrar o tipo da variável. Utilize o operador ternário.
        */
        /*include("./pagina.php");
        echo "<hr>";
        include("./pagina.php");

        include("./pagina.php");
        echo "<hr>";
        include_once("./pagina.php");

        include("./pagina.php");
        echo "<hr>";
        require("./pagina.php");*/

        include_once("./pagina.php");
        echo "<hr>";
        require_once("./pagina.php");

        $var01 = 3;
        $var02 = "3";
        $resultado = "";

        function identidade($x, $y, $r)
        {
            $r=($x==$y)?"SIM":"NÃO";
            echo "As variáveis A e B são iguais? $r . O tipo da variável informada informada é " . gettype($x) . "<br>";

            $r=($x===$y)?"SIM":"NÃO";
            echo "As variáveis A e B são iguais? $r . O tipo da variável informada informada é " . gettype($y) . "<br>";
        }

        $varFuncao = identidade($var01, $var02, $resultado);
        echo "$varFuncao <br>";
        echo "$varFuncao <br>";
    ?>
</body>
</html>