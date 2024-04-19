<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>usuario</title>
</head>
<body>
    <header>
        <h1>usuario cadastrodo</h1>
    </header>
    <main>
        <?php 
        
        $nome = $_GET['nome'];
        $sobrenome = $_GET['sobrenome'];

        if(!empty($_GET['nome']))
        {
            echo"<p> bem vindo ao site $nome $sobrenome</p>";
        }
        else
        {
            echo"nao foram preenchidos os campos do formulario";
        }

        ?>
        <p><a href="javascript:history.go(-1)">voltar para pagina anterior </a></p>
    </main>
</body>
</html>