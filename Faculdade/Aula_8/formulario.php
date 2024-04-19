    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /*Crie um formulario onde o usuario informe os seguintes dados:
                - Dados nao devem ser enviados se algum campo estiver vazio
                - Dados nao devem ser enviados se o preço de venda for menor que o preço de custo
                - Dados nao devem ser enviados se o e-mail for invalido
                - Deve-se implementar uma mascara para os inputs que contem valores monetarios
                - Mensagem(s) para o usuario devem ser apresentada(s) em caso de sucesso ou erro
            */  

            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $assunto = $_POST['assunto'];
                $valor_custo = $_POST['valor_custo'];
                $valor_venda = $_POST['valor_venda'];
                $conteudo = $_POST['conteudo'];

                if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['assunto']) || empty($_POST['valor_custo']) || empty($_POST['valor_venda']) || empty($_POST['conteudo'])){

                    echo "Preencha todos os campos!";
                }
                
                if($valor_venda < $valor_custo){
                    echo "O valor de venda não pode ser menor que o valor de custo!";
                }

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "E-mail inválido!";
                }

                else {
                    echo "Formulário enviado com sucesso!";
                }
            }
        ?>
    </body>
    </html>