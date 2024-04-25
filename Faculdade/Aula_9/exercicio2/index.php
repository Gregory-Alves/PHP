<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<style>
    deixe ele alinhado ao centro e todas as textbox alinhadas
    h1{
        text-align: center;
    }
    form{
        text-align: center;
    }
    label{
        text-align: center;
    }
    input{
        text-align: center;
    }
    
</style>
<body>
   
    <h1>Formulário</h1>
    <form action="mostrarDados.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome"><br><br>
        <label for="estadoCivil">Estado Civil:</label>
        <input type="text" name="estadoCivil" id="estadoCivil"><br><br>
        <label for="formacao">Formação:</label>
        <input type="text" name="formacao" id="formacao"><br><br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>