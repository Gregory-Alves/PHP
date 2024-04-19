<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
</head>
<body>
    <?php 
       
       $nota1 = 1.5;
       $nota2 = 2.3;
       $nota3 = 1.4;
       $media = $nota1 + $nota2 + $nota3;

       echo "O aluno teve media $media e está: ";

       echo match(true) {
        $media <4 => "Reprovado!",
        $media  >= 4 && $media <6 => "Aguardando prova substitutiva!",
        $media  >=62 && $media <9.9 => "Aprovado!",
        $media  =10 => "Aprovado sem dificuldades!",
      };

    ?>
</body>
</html>