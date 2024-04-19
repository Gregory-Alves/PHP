<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
</head>
<body>
    <?php 
       
       $numero = 16;
       $opcao = 3;

       echo match(true) {
        $opcao == 1 => "O dobro de $numero é: " . ($numero * 2),
        $opcao == 2 => "O cubo de $numero é: " . (pow($numero,3)),
        $opcao == 3 => "A raiz quadrada de $numero é: " .  sqrt($numero),
        default => "Opção Inválida!"
      }; 
    ?>
</body>
</html>