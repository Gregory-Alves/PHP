<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Retangulo</title>
</head>
<body>
    <header>
        <h1></h1>
    </header>
    <main>
        <?php 
        
        $Lado_1 = $_GET['Lado_1'];
        $Lado_2 = $_GET['Lado_2'];

        if(!empty($_GET['Lado_1']) && !empty($_GET['Lado_2']))
        {
           echo "O valor do dado 1 é: $Lado_1 <br>";
           echo "O valor do dado 2 é: $Lado_2 <br>";
           $area = $Lado_1*$Lado_2;
           echo "O valor da area do retangulo é: $area";
        }
        else{
            echo"Um dos dados informados foi zero!";
        }

        ?>
        <p><a href="javascript:history.go(-1)">voltar para pagina anterior </a></p>
    </main>
</body>
</html>