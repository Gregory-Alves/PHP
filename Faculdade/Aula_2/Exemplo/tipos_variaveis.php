<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <?php 
        /*
        1 - Variáveis sempre começam com o símbolo $;
        2 - As variáveis aceitam caracteres acentuados á, õ, ç, etc;
        3 - A linguagem é case sensitive em relação os nomes;
        4 - Algumas palavras possuem o uso reservado ($this, por exemplo);
        5 - Tente atribuir nomes claros e de fácil identificação as variáveis;
        6 - Evite nomes muito curtos ou muito longos.
        */
        /*
        echo "Hello World!!! <br>";
        print "Hello World!!! <br><br>";

        echo "Olá Mundo!<br>";
        $varPrint = print "Olá Mundo <br>";

        //Por padrão o print é sempre 1, que dentro do PHP significa verdadeiro
        echo $varPrint;

        //echo - utiliza menos processamento do servidor, em um pequeno projeto não faz muita diferença.
        //PHP não tem linha de declaração de variáveis.
        */

        //$%var = "Errada";"
        //$1var = "Errada novamente";

        /*
        $var = "Correta";
        $_var01 = "Também está correta";

        echo "A variável é do tipo ".gettype($_var01);
        ?>
        <br>
        <?php
        echo "Variável A " . "Teste";
        */
    /*
    $varInt = 55;
    echo "Essa variável é do tipo " . gettype($varInt);

    ?>
    <br><br>
    <?php

    $varDouble = 1000.52;
    echo "Essa variável é do tipo " . gettype($varDouble);

    ?>
    <br><br>
    <?php

    $varBoolean = true;
    echo "Essa variável é do tipo " . gettype($varBoolean);

    ?>
    <br><br>
    <?php

    $varVetor = array(1, 2, 3, 4, 5);
    echo "Essa variável é do tipo " . gettype($varVetor);
    */
//-------------------CÓDIGO 02-----------------------
    /*
    $nome = "Carlos";
    $sobrenome = "Ferreira";
    echo "Muito prazer, $nome $sobrenome";
    */
//-------------------CÓDIGO 03-----------------------
    /*
    $nome = "Carlos";
    $sobrenome = "Ferreira";

    $nome = "Felipe";

    echo "Muito prazer, $nome $sobrenome";
    */
//-------------------CÓDIGO 04-----------------------
    /*
    $var01 = "Evoluindo";
    $var02 = $var01 . " no conhecimento de variáveis.<br>";
    echo $var02;
    */
//---------------Operadores aritméticos--------------
/*
    $var03 = 2;
    $var04 = 7;
    $var05 = "11.32";
    echo ($var03 + $var04);

    ?>
    <br><br>
    <?php
    
    echo $var04**$var03;
    ?>
    <br><br>
    <?php
    echo pow($var04, $var03);

    ?>
    <br><br>
    <?php

    echo $var04 % $var03

    ?>
    <br><br>
    <?php

    echo $var04 / $var03

    ?>
    <br><br>
    <?php

    echo $var05 - $var03;

    ?>
    <br><br>
    <?php

//----------Operadores de atribuição-----------------

    echo $var03+=$var04;  //$var03 = $var03 + $var04

    echo $var03**=$var04;

//---------------------------------------------------
 echo $pessoaNome; //Imprime o valor de uma variável
 $pessoaNome = "João da Silva";//Atribui um valor a uma variável
 $pessoaNome . $pessoaSobrenome; //Faz a concatenação do conteúdo de duas variáveis distintas
 */
/*
    $var03 = 2;
    $var04 = 7;
    $var05 = "11.32";

    echo "<br>".gettype($var03);
    echo "<br>".gettype($var05);

    ?>
    <br><br>
    <?php

    $var06 = (float)$var05;//Convertendo a variável
    echo "A variável foi convertida de string para  " . gettype($var06);
*/
//---------------------------------------------------
    $varTeste_01 = 33.666;
    var_dump($varTeste_01);

    ?>
    <br><br>
    <?php

    $a = 32;
    $b = "Olá Mundo";
    var_dump($a, $b);

    ?>
    <br><br>
    <?php

    $vetor = array("Java", "Python", "JavaScript", "PHP");
    var_dump($vetor);

    ?>
    <br><br>
    <?php

    $linguagens = array(
        array("PHP", "Hypertext PreProcessor"),
        array("SQL", "Structured Query Language")
    );

    var_dump($linguagens);

    ?>
    <br><br>
    <?php

    var_dump($linguagens[1][0]);










    ?>
</body>
</html>