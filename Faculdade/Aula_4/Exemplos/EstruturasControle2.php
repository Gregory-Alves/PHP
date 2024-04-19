<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Controle - Parte 2</title>
</head>
<body>
    <?php 
    /*
        $i = 1;
        while($i <= 15)
        {
            //echo "$i";
            echo "$i - ";
            //echo "$i <br>";
            $i++;
        }

        echo "<br><br>";

        $i_01 = 15;
        do
        {
            echo "$i_01 - ";
            $i_01--;
        }while($i_01 >= 0);

        echo "<br><br>";

        for($i_02 = 1; $i_02 <= 15; $i_02++)
        {
            echo "$i_02 - ";
        }

        echo "<br><br>";
        */
        /*
        $nomes = array("Guilherme", "Maria", "Joaquim", "Marcos", "Geraldo");

        for($i = 0; $i <= 4; $i++)
        {
            $valor = $nomes[$i];
            echo $valor . "<br>";
        }

        echo "<br><br>";

        foreach($nomes as $nome)
        {
            echo $nome . "<br>";
        }

        echo "<br><br>";

        $nomes_01 = array("José", "Lívia", "Beatriz", "Paula", "Roberto");
        $i_teste = 1;
        foreach($nomes_01 as $index => $valor)
        {
            echo "O nome é $valor no índice " . ($index+1) . "<br>";
           // $i_teste++;
        }

        echo "<br><br>";

        $nomes_02 = array("nome_01"=>"José", "nome_02"=>"Lívia", "nome_03"=>"Beatriz", "nome_04"=>"Paula", "nome_05"=>"Roberto");

        foreach($nomes_02 as $index => $valor)
        {
            echo "O nome é $valor no índice $index" . "<br>";
        }

        //Realize a soma dos números de 1 a 10 utilizando as estruturas de repetição while, do-while, for e foreach.

        echo "<br><br>";
        */
        /*
        $soma0 = 0;
        $contador0 = 1;

        while($contador0 <= 10)
        {
            $soma0+=$contador0; //$soma0 = $soma0 + $contador0;
            $contador0+= + 1;
        }
        echo "Soma com laço WHILE: " . $soma0;

        echo "<br><br>";

        $soma1 = 0;
        $contador1 = 1;
        do
        {
            $soma1=$soma1 + $contador1;
            $contador1 = $contador1 + 1;
        }while($contador1 <= 10);

        echo "Soma com laço DO-WHILE: " . $soma1;

        echo "<br><br>";

        $soma2 = 0;
        for($contador2 = 1; $contador2 <= 10; $contador2++)
        {
            $soma2+= $contador2;
        }
        echo "Soma com laço FOR tradicional: " . $soma2;

        echo "<br><br>";

        $soma3 = array(1,2,3,4,5,6,7,8,9,10);
        $somaTotal = 0;

        foreach($soma3 as $valor)
        {
            $somaTotal+=$valor;
        }
        echo "Soma com laço FOREACH: " . $somaTotal;
        */
        //Calcule a média de 10 números digitados pelo usuário e informe o tipo do dado referente a média. Utilize a estrutura de repetição de sua escolha.

        $numeros = array(1,2,3,4,5,6,7,8,9,10);
        $media = 0;
        foreach($numeros as $valorMedia)
        {
            $media = $media + $valorMedia;
        }
        echo "A média dos valores é " . $media/sizeof($numeros) . "<br>";
        echo "O tipo do dado referente a média é " . gettype($media/sizeof($numeros)) . "<br>";

        echo "<br><br>";

        //Criar um array simples onde seja possível visualizar os valores e chaves com o comando foreach. O vetor deve possuir as seguintes cidades: São Paulo, Rio de Janeiro, Recife, Manaus, Goiânia, Florianópolis e Rio Branco. As chaves devem ser os estados.
        //Por exemplo, a resposta deve ser algo como - "A capital do PR é Curitiba"

        $vetor = array("SP"=>"São Paulo", "RJ"=>"Rio de Janeiro", "PE"=>"Recife", "AM"=>"Manaus", "GO"=>"Goiânia", "SC"=>"Florianópolis", "AC"=>"Rio Branco");

        foreach($vetor as $estado => $capital)
        {
            print("A capital de $estado é $capital <br>");
        }

        echo "<br><br>";

        $estados = array("SP", "RJ", "PE", "AM", "GO", "SC", "AC");
        $capitais = array("São Paulo", "Rio de Janeiro", "Recife", "Manaus", "Goiânia", "Florianópolis", "Rio Branco");

        $x = 0;

        foreach($estados as $estados)
        {
            echo "A capital de " . $estados . " é " . $capitais[$x];
            $x++;

            echo "<br>";
        }

    ?>
</body>
</html>