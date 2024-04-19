<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <?php 
        /*
        $nome = 'PHP';
        echo 'Minha linguagem favorita é $nome'. '<br>';
        echo 'Minha linguagem favorita é ' . $nome .'. <br><br>';

        $nome01 = "JavaScript";
        echo "Minha linguagem favorita é $nome01";

        echo "<br><br>";

        $teste = "PHP\u{1F418}";
        $teste01 = 'PHP\u{1F418}'; //Código unicode não é interpretado com o uso de aspas simples.
        echo $teste;

        //\u É chamado de sequência de escape em PHP. É utilizado da versão 7 em diante para exibição de caracteres especiais Unicode.
        */
        /*
        $name = "Acelino";
        $sname = "Freitas";
        //echo "$name "Popó" $sname <br>";
        //Abaixo tem-se um erro semântico e não um erro de sintaxe. CUIDADO!!!
        echo '$name "Popó" $sname <br>';
        echo "$name 'Popó' $sname <br>";
        echo "$name \"Popó\" $sname <br>";
        */

        /*
        //Sintaxe HEREDOC

        $nome02 = 'PHP';
        //$nome02 = "PHP";
        echo <<<TESTE
            Linguagem $nome02 é muito utilizada. <br>
        TESTE;

        echo "<br><br>";

        //Sintaxe NOWDOC
        //Aspas simples - não há interpretação do conteúdo.
        //Aspas duplas  - há interpretação do conteúdo.
        $nome03 = "Node";
        echo <<< "TESTE"
            Linguagem $nome03 é muito utilizada. <br>
        TESTE;
        */

        //Manipulação de strings:
        /*
        $nome01Manipula = 'linguagem javascript';
        $nome02Manipula = 'linguagem python';
        $nome03Manipula = 'LINGUAGEM PHP';

        //strlen
        echo "O número de caracteres é " . strlen($nome01Manipula);

        echo "<br><br>";

        //Converter o primeiro caracter de cada palavra para maiúsculo.
        echo "Os caracteres iniciais das palavras " . ucwords($nome02Manipula) . " foram convertidas para maiúsculas.";

        echo "<br><br>";

        //Converte o primeiro caracter para maiúsculo
        //
        echo "A primeira letra de uma das palavras foi convertida para maiúscula " . ucfirst($nome01Manipula);

        echo "<br><br>";

        //Converte string para minúscula
        echo "A string " . strtolower($nome03Manipula) . " foi convertida para minúsculo como um todo.";

        echo "<br><br>";

        //Converte string para maiúscula
        echo "A string " . strtoupper($nome02Manipula) . " foi convertida para maiúsculo como um todo.";

        echo "<br><br>";

        //substituir a string Linguagem pela string Aprendendo
        //str_replace(find, replace,string, count)
        echo str_replace('linguagem', 'Aprendendo', $nome02Manipula);

        echo "<br><br>";

        //substr_replace(string, replacement, start, length)
        echo substr_replace($nome01Manipula, 'Eu gosto da ', 0, 0);

        echo "<br><br>";

        echo substr_replace($nome01Manipula, 'Node', 10, 10);

        echo "<br><br>";

        //Retorno de parte de uma string
        //substr(string, start, length)
        echo "A função substr só retorna parte da string LINGUAGEM PHP, que é somente " . substr($nome03Manipula, 10, 3);
        */

        //Trabalhando com ARRAYS
        /*
        $primeiroArray = array(1, 2, 3, 4, 5);
        var_dump($primeiroArray);

        echo "<br><br>";

        $segundoArray = [1, 2, 3, 4, 5];
        var_dump($segundoArray);

        echo "<br><br>";

        $terceiroArray = array("Antonio", "Roberto", "Marcio", "Eduardo");
        var_dump($terceiroArray);

        echo "<br><br>";

        $array = array(
            "chave01" => "Primeiro valor",
            "chave02" => "Segundo valor", 
        );

        echo $array["chave01"];
        echo "<br>";
        echo $array["chave02"];


        echo "<br><br>";

        $array01 = array(
            "nome" => "Vagner",
            "sobrenome" => "Tanaka",
            "idade" => "33",
            "ddd" => "43",
            "telefone" => "99026622",
        );

        foreach($array01 as $key => $dados)
        {
            echo "$key = $dados <br>";
        }

        echo "<br><br>";

        $array02 = array(
            "cliente01" =>
                array(
                        "nome" => "Bernardo",
                        "sobrenome" => "Telles",
                        "ddd" => "41",
                        "telefone" => "3521-6699",
                    ),
            "cliente02" =>
            array(
                    "nome" => "Pedro",
                    "sobrenome" => "Parreira",
                    "ddd" => "42",
                    "telefone" => "98070255",
                ),

        );

        echo "O nome do primeiro cliente é " . $array02["cliente01"]["nome"];

        echo "<br>";

        echo "O ddd do segundo cliente é " . $array02["cliente02"]["ddd"];

        echo "<br><br>";

        foreach($array02 as $novo_array){
            foreach($novo_array as $key01 => $dados01){
                echo "$key01 = $dados01 <br>";
            }
            echo "<hr>";
        }

        */

        //A função array_merge mescla dois ou mais arrays.
        $first = array("Hello", "World");
        $second = array("exit", "here");
        $merged = array_merge($first, $second);
        //echo $merged;
        //O print_r() apresenta os dados de um vetor em um formato que mostra as chaves e os respectivos conteúdos.
        print_r($merged); 
        echo "<br>";
        foreach($merged as $valor)
        {
            echo $valor . " ";
        }

        echo "<br><br>";

        //A função array_sum soma os valores em um array
        $snumeros = array(98, 76, 56, 80);
        $total = array_sum($snumeros);
        echo $total;

        echo "<br><br>";

        //A função array_dif() identifica os valores de um array que não estão presentes em outros.
        //Esta função compara os valores de dois (ou mais) arrays e retorna um array que contém as entradas do primeiro array que não estão presentes nos demais arrays.

        $var01 = array("bill", "claire", "ella", "simon", "judy");
        $var02 = array("jack", "claire", "toni");
        $diferenca = array_diff($var01, $var02);
        print_r($diferenca) ;









    ?>
</body>
</html>