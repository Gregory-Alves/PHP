<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
</head>
<body>
    <?php 
       
       $idade = 20;

       echo match(true) {
        $idade < 16 => "Voce nao pode votar!",
        $idade >= 16 && $idade <=17 || $idade > 70 => "O seu voto é facultativo",
        $idade  >=18 && $idade <=70 => "O seu voto é obrigatorio!"
      }; 
    ?>
</body>
</html>