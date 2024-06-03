<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<script>
    function mascaraCPF() {
        var cpf = document.getElementById('cpf');
        if (cpf.value.length == 3 || cpf.value.length == 7) 
        {
            cpf.value += ".";
        } else if (cpf.value.length == 11) {
            cpf.value += "-";
        }
    }
</script>


<body>
    <h1>Cadastrar</h1>

    <form method="POST" action="index.php?url=cadastrarUsuario">
        <label>Nome:</label>
        <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome completo"><br><br>

        <label>Estado Civil:</label>
        <select name="estadoCivil" id="estadoCivil">
            <option value="opcao">Escolha uma opção</option>
            <option value="casado">Casado</option>
            <option value="solteiro">Solteiro</option>
            <option value="nao_informar">Não Informar</option>
        </select><br><br>

        <label>Data de Nascimento:</label>
        <input type="text" name="dataNascimento" id="dataNascimento" placeholder="dd/mm/aaaa" maxlength="10"><br><br>

        <label>Estado de Nascimento:</label>
        <input type="text" name="estadoNascimento" id="estadoNascimento" placeholder="Estado"><br><br>

        <label>CPF:</label>
        <input type="text" name="cpf" id="cpf" placeholder="Informe seu CPF" maxlength="14" onkeyup="mascaraCPF()"><br><br>

        <label>Profissão:</label>
        <input type="text" name="profissao" id="profissao" placeholder="Informe sua profissão" maxlength="14"><br><br>

        <button type="submit" name="cadastrarUsu">Cadastrar</button>
    </form>
</body>
</html>
