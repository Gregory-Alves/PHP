    <?php
    $resultado;
    $operacao = '';
    $exibir = '';
    $num1 = 0;
    $num2 = 0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (($_POST['num1'] == 0 || $_POST['num2'] == 0) && ($_POST['operacao'] == 'divisao')) 
        {
            $exibir = "Não é possível dividir quando um dos numeros é 0!";
        } 
        elseif ($_POST['num1'] == 0 && $_POST['num2'] == 0) 
        {

            $exibir = "Não é possível realizar operações quando os dois numeros são 0!";
        } 
        elseif (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) 
        {

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacao = $_POST['operacao'];

            if ($num1 + $num2 <= 0 && ($operacao == 'exponenciacao' || $operacao == 'raiz quadrada' || $operacao == 'fatorial')) {
                $exibir = "Não é possível realizar a operação de $operacao quando a soma dos dois numeros é menor ou igual a 0!";
            } else {

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
                        $exibir = "O resultado da divisão é: " . number_format($resultado, 2);
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
        
        elseif (empty($_POST['num2']) && !empty($_POST['num1']) && !is_numeric($_POST['num1'])) {
            $exibir = "Por favor, insira apenas números no campo 1 e em seguida insira um número no campo 2";
        } 

        elseif (empty($_POST['num1']) && !empty($_POST['num2']) && !is_numeric($_POST['num2'])) {
            $exibir = "Por favor, insira um número no campo 1 e em seguida insira apenas números no campo 2";
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
            background: rgb(34, 193, 195);
            background: radial-gradient(circle, rgba(34, 193, 195, 1) 0%, rgba(104, 50, 219, 1) 100%);
        }

        h1 {
            border-bottom: 3px solid black;
            text-shadow: 5px 5px 5px black;
            margin-top: -30px;
            font-size: 60px;
        }

        .container {
            box-sizing: border-box;
            text-align: center;
            top: 50%;
            left: 50%;
            width: 110vh;
            /*width: 400px;*/
            transform: translate(-50%, -50%);
            position: absolute;
            border: 3px black solid;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 4%;
            background-color: #6832DB;
            color: lightblue;

            input[type="text"] {
                background-color: lightblue;
            }

            input[type="text"]:focus {
                background-color: white;
            }

            select {
                background-color: lightblue;
            }

            input[type="text"] {
                text-align: center;
            }

            select:focus {
                background-color: white;
            }
        }

        input {
            width: 80%;
            height: 40px;
            border-radius: 10px;
            border: 5px solid black;
            margin: 1%;
            margin-bottom: 3%;
            transition: border-color 0.5s;
            outline: none;
        }

        ::placeholder {
            text-align: center;
            color: black;
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
            transition: border-color 0.3s;
        }



        button {
            width: 80%;
            height: 40px;
            background-color: black;
            color: white;
            border-radius: 10px;
            border: 5px solid lightblue;
            cursor: pointer;
        }

        button:hover {
            background-color: lightblue;
            color: black;
        }

        p {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: -50px;
            color: black;
        }
    </style>

    <body>
        <form method="post">
            <div class="container">
                <h1>Calculadora</h1>
                <input type="text" name="num1" placeholder="Digite o primeiro número"><br />
                <input type="text" name="num2" placeholder="Digite o segundo número"><br />

                <button type="submit" name="operacao" value="adicao">Adição</button>
                <button type="submit" name="operacao" value="subtracao">Subtração</button>
                <button type="submit" name="operacao" value="divisao">Divisão</button>
                <button type="submit" name="operacao" value="multiplicacao">Multiplicação</button>
                <button type="submit" name="operacao" value="exponenciacao">Exponenciação</button>
                <button type="submit" name="operacao" value="raiz quadrada">Raiz Quadrada</button>
                <button type="submit" name="operacao" value="fatorial">Fatorial</button>

                
                <?php if (!empty($exibir)) : ?>
                    <p><?php echo $exibir ?></p>
                <?php endif; ?>
                <br/><br/>
                <footer>
                    <p>Desenvolvido por: Gregory</p>
                </footer>
            </div>
        </form>
    </body>

    </html>