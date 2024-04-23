<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    /*Desenvolva um código onde se tenha uma função que tem como argumento as notas de um dado aluno quesão armazenadas em um vetor, na sequência calcule a média geral. Caso a média final seja maior ou igual a 6o aluno está aprovado, caso seja menor que 6 o aluno está reprovado. Por fim, faça uma condição que se amédia final for maior que 10 seja apresentada uma mensagem dizendo que alguma(s) das notas digitadas pelousuário é inválida.*/

    function calcularMediaAluno($nome, $notas)
    {
        $media = array_sum($notas) / count($notas);
        if ($media >= 6 && $media <= 10) {
            $situacao = "Aprovado";
        } elseif ($media < 5) {
            $situacao = "Reprovado";
        } else if ($media >= 5 && $media < 6) {
            $situacao = "Em recuperação";
        } else if ($media > 10) {
            $situacao = "Alguma(s) das notas digitadas pelo usuário é inválida";
        }
        return [$nome, $media, $situacao];
    }

    $alunos = [
        ["nome" => "João", "notas" => [8, 7, 6, 8]],
        ["nome" => "Maria", "notas" => [5, 6, 7, 4]],
        ["nome" => "Pedro", "notas" => [6, 5, 6, 2]],
        ["nome" => "Ana", "notas" => [10, 10, 10, 15]],
    ];

    foreach ($alunos as $aluno) {
        $resultado = calcularMediaAluno($aluno["nome"], $aluno["notas"]);
        echo "O aluno " . $resultado[0] . " obteve média " . $resultado[1] . " e está " . $resultado[2] . "<br>";
    }

    ?>

</body>

</html>