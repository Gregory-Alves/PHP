<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>aula get</title>
</head>
<body>
    <header>
        <h1>informe seus dados</h1>
        <section>
            <form action="cadastro.php" method="get">
                
                <label for="nome">Nome:</label>
                <input type="text" placeholder="Digite seu nome" name="nome" id="idnome">

                <br> <br>

                <label for="sobrenome">Sobrenome:</label>
                <input type="text" placeholder="Digite seu sobre nome" name="sobrenome" id="idsobrenome">
                <input type="submit" value="Enviar">
               
            </form>
        </section>
    </header>
</body>
</html>