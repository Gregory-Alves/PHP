<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora PHP</title>
</head>
<body>
    

    <!-- Formulário -->
    <form method="post">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="text" id="numero1" name="numero1">

        <label for="operacao">Escolha a operação:</label>
        <select id="operacao" name="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>

        <label for="numero2">Digite o segundo número:</label>
        <input type="text" id="numero2" name="numero2">

        <button type="submit">Calcular</button>
    </form>

    <hr>

    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se os campos foram preenchidos
        if (!empty($_POST["numero1"]) && !empty($_POST["numero2"])) {
            // Obtém os números do formulário
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $operacao = $_POST["operacao"];

            // Verifica se são números válidos
            if (is_numeric($numero1) && is_numeric($numero2)) {
                // Realiza a operação selecionada
                switch ($operacao) {
                    case 'soma':
                        $resultado = $numero1 + $numero2;
                        echo "<p>A soma de $numero1 e $numero2 é: $resultado</p>";
                        break;
                    case 'subtracao':
                        $resultado = $numero1 - $numero2;
                        echo "<p>A subtração de $numero1 por $numero2 é: $resultado</p>";
                        break;
                    case 'multiplicacao':
                        $resultado = $numero1 * $numero2;
                        echo "<p>A multiplicação de $numero1 por $numero2 é: $resultado</p>";
                        break;
                    case 'divisao':
                        if ($numero2 != 0) {
                            $resultado = $numero1 / $numero2;
                            echo "<p>A divisão de $numero1 por $numero2 é: $resultado</p>";
                        } else {
                            echo "<p>Erro: Divisão por zero não é permitida.</p>";
                        }
                        break;
                    default:
                        echo "<p>Operação inválida.</p>";
                        break;
                }
            } else {
                echo "<p>Por favor, digite números válidos.</p>";
            }
        } else {
            echo "<p>Por favor, preencha todos os campos.</p>";
        }
    }
    ?>
</body>
</html>
