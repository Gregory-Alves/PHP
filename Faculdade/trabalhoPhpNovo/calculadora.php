<?php
$resultado;
$operacao = '';
$exibir = '';
$num1 = 0;
$num2 = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (($_POST['num1'] == 0 || $_POST['num2'] == 0) && ($_POST['operacao'] == 'divisao')) {
        $exibir = "Não é possível dividir quando um dos numeros é 0!";
    } 
    
    elseif ($_POST['num1'] == 0 && $_POST['num2'] == 0) {
        $exibir = "Não é possível realizar operações quando os dois numeros são 0!";
    } 
    
    elseif (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];

        if ($num1 + $num2 <= 0 && ($operacao == 'exponenciacao' || $operacao == 'raiz quadrada' || $operacao == 'fatorial')) {
            $exibir = "Não é possível realizar a operação de $operacao quando a soma dos dois numeros é menor ou igual a 0!";
        } 
        
        else {

            switch ($operacao) {
                case 'adicao':
                    $resultado = $num1 + $num2;
                    $exibir = "O resultado da soma é: " . number_format($resultado, 2);
                    break;

                case 'subtracao':
                    $resultado = $num1 - $num2;
                    $exibir = "O resultado da subtração é: " . number_format($resultado, 2);
                    break;

                case 'divisao':
                    $resultado = $num1 / $num2;
                    $exibir = "O resultado da divisão é: ". number_format($resultado, 2);
                    break;

                case 'multiplicacao':
                    $resultado = $num1 * $num2;
                    $exibir = "O resultado da multiplicação é: " . number_format($resultado, 2);
                    break;

                case 'exponenciacao':
                    $resultado = $num1 ** $num2;
                    $exibir = "O resultado da exponenciação é: " . number_format($resultado, 2);
                    break;

                case 'raiz quadrada':
                    $resultado = sqrt($num1 + $num2);
                    $exibir = "O resultado da raiz quadrada da soma dos dois numeros é: " . number_format($resultado, 2);
                    break;

                case 'fatorial':
                    $resultado = array_product(range($num1 + $num2, 1));
                    $exibir = "O resultado do fatorial da soma dos dois numeros é: " . number_format($resultado, 2);
                    break;
            }
        }
    } 
    
    elseif (!empty($_POST['num1']) && !empty($_POST['num2']) && !is_numeric($_POST['num1']) && !is_numeric($_POST['num2'])) {
        $exibir = "Por favor, insira apenas números nos campos 1 e 2";
    } 
    
    elseif (!empty($_POST['num1']) && !is_numeric($_POST['num1'])) {
        $exibir = "Por favor, insira apenas números no campo 1";
    } 
    
    elseif (!empty($_POST['num2']) && !is_numeric($_POST['num2'])) {
        $exibir = "Por favor, insira apenas números no campo 2";
    } 
    
    elseif (empty($_POST['num1']) && empty($_POST['num2'])) {
        $exibir = "Por favor, insira um número no campo 1 e no campo 2";
    } 
    
    elseif (empty($_POST['num1'])) {
        $exibir = "Por favor, insira um número no campo 1";
    } 
    
    elseif (empty($_POST['num2'])) {
        $exibir = "Por favor, insira um número no campo 2";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<style>

    body {
        background-color: black;
        color: white;
    }

    h1 {
        border-bottom: 3px solid black;
        text-shadow: 5px 5px 5px black;
        margin-top: -50px;
        font-size: 60px;
    }

    .container {
        text-align: center;
        top: 50%;
        left: 50%;
        width: 400px;
        transform: translate(-50%, -50%);
        position: absolute;
        border: 3px white solid;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 5%;
        background-color: grey;
        
    }

    input {
        width: 80%;
        height: 40px;
        border-radius: 10px;
        border: 5px solid black;
        margin: 1%;
        margin-bottom: 3%
    }

    ::placeholder {
        text-align: center;
    }

    label {
        margin: 2%;
    }

    select {
        width: 80%;
        height: 40px;
        border: 5px solid black;
        border-radius: 10px;
        text-align: center;
        color: black;
        cursor: pointer;
    }

    option {
        color: black;
        background-color: white;  
    }

    button {
        width: 80%;
        height: 50px;
        background-color: black;
        color: white;
        border-radius: 10px;
        border: 5px solid white;
        cursor: pointer;
    }

    p {
        font-size: 25px;
        font-weight: bold;
        margin-bottom: -50px;
        color:black;
    }
</style>

<body>
    <form method="post">
        <div class="container">
            <h1>Calculadora</h1>
            <input type="text" name="num1" placeholder="Digite o primeiro número"><br />
            <input type="text" name="num2" placeholder="Digite o segundo número"><br />
            <select name="operacao">
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="divisao">Divisão</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="exponenciacao">Exponenciação</option>
                <option value="raiz quadrada">Raiz Quadrada</option>
                <option value="fatorial">Fatorial</option>
            </select>

            <br /><br />
            <button type="submit" value="Calcular">Calcular</button>

            <br /><br />
            <p><?php echo $exibir ?></p>
        </div>
    </form>
</body>

</html>