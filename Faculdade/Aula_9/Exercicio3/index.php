<?php 
    session_start();
    $usuario = "Gregory";
    $senha = "1234"; 
    $exibir = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if ($_POST['usuario'] == $usuario && $_POST['senha'] == $senha){
            header("Location: calcularNotas.php");
        } else {
            $exibir = "Usuário ou senha inválidos!";
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
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
        p.error {
            background-color: red;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario"><br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha"><br><br>
        <input type="submit" value="Enviar">    
        <?php if (!empty($exibir)): ?>
            <p class="error"><?php echo $exibir; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
