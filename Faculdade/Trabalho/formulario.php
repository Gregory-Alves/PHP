<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <?php $mensagem = "";?>
    <form method="post">

        <label for="numero1">Numero 1:</label>
        <input type="number" name="numero1" id="numero1" placeholder="Digite o primeiro numero">
        <br>

        <label for="numero2">Numero 2:</label>
        <input type="number" name="numero2" id="numero2" placeholder="Digite o segundo numero">
        <br>

        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="divisao">Divisão</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="exponenciacao">Exponenciação</option>
            <option value="raiz">Raiz Quadrada</option>
            <option value="fatorial">Fatorial</option>
        </select>
        <br>

        <input type="submit" value="Calcular" id="Calcular">
        <br>

        <input type="reset" value="Limpar" id="Limpar">
        <br>

        <h1>Mensagens do Sistema</h1>
            <textarea id="mensagemSistema" rows="10" cols="50" readonly><?php echo "$mensagem" ; ?></textarea>

    </form>

    <?php
/*Faça uma verificacao para nao receber os dados do formulario se algum dos campos estiverem em branco, se estiver em branco, printar um aviso em baixo do formulario dizendo que tem dados nao informados*/
    if(empty($_POST['numero1']) || empty($_POST['numero2']) || empty($_POST['operacao'])){
        $mensagem = "Preencha todos os campos!";
    }
    

    else{
        $num_1 = $_POST['numero1'];
        $num_2 = $_POST['numero2'];
        $opcao = $_POST['operacao'];
       $mensagem ="Esse é o numero 1: $num_1 <br> Esse é o numero 2: $num_2 <br> Essa é a operação: $opcao <br>";
    }


    

 
    ?>
</body>
</html>