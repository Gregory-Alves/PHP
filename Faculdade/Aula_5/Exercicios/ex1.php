<?php

function calcularMediaAluno($nome, $notas) {
    $media = array_sum($notas) / count($notas);
    if ($media >= 6) {
        $situacao = "Aprovado";
    } elseif ($media < 5) {
        $situacao = "Reprovado";
    } else if($media >=5 && $media < 6) {
        $situacao = "Em recuperação";
    }
    return [$nome, $media, $situacao];
}

$alunos = [
    ["nome" => "João", "notas" => [8, 7, 6, 8]],
    ["nome" => "Maria", "notas" => [5, 6, 7, 4]],
    ["nome" => "Pedro", "notas" => [6, 5, 6, 2]]
];

foreach ($alunos as $aluno) {
    $nome = $aluno["nome"];
    $notas = $aluno["notas"];
    list($nome_aluno, $media_aluno, $situacao_aluno) = calcularMediaAluno($nome, $notas);
    echo "Aluno: $nome_aluno - Média: $media_aluno - Situação: $situacao_aluno<br>";
}

?>