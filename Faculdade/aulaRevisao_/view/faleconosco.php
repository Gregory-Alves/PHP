<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro usuário</title>
</head>

<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }

    function somenteLetras(num) {
        var er = /[^A-Z a-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }

    function NumerosTraco() {

        var telefone = document.getElementById('telefone');
        if(telefone.value.length == 5)
        {
          telefone.value += "-";
        }
    }

    function marcaDesmarca(caller) {
      var checks = document.querySelectorAll('input[type="checkbox"]');    
      checks.forEach(c => c.checked = (c == caller) );
  }

 </script>


<body>
<form method="post"> 
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome_" placeholder="Preecha seu nome" onkeyup="somenteLetras(this);"><br>
  </div>
  <div class="form-group">
    <label for="sobrenome">Sobrenome</label>
    <input type="text" name="sobrenome" class="form-control" id="sobrenome" aria-describedby="sobrenome_" placeholder="Preecha seu sobrenome" onkeyup="somenteLetras(this);"><br>
  </div>
  <div class="form-group">
    <label for="ddd">DDD</label>
    <input type="text" name="ddd" class="form-control" id="ddd" aria-describedby="ddd_" placeholder="Preecha seu DDD" onkeyup="somenteNumeros(this);" maxlength="3">
  </div>
  <div class="form-group">
    <label for="telefone">telefone</label>
    <input type="text" name="telefone" class="form-control" id="telefone" aria-describedby="telefone_" placeholder="Preecha seu telefone" onkeyup="NumerosTraco()" maxlength="10">
  </div>

  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" name="email" class="form-control" id="email" aria-describedby="email_" placeholder="Informe seu e-mail">
  </div>

  <div class="form-group">
    <label for="mensagem">Mensagem</label>
    <textarea id="mensagem" name="mensagem" class="form-control" rows="4" cols="60" placeholder="Informe sua dúvida.">
    </textarea>
  </div>

  <div class="form-group">
    <label for="checkboxCadastro">Você é cadastrado em nosso site?</label><br>
    <input type="checkbox" id="usuarioCadastrado" name="usuarioCadastrado" value="1" onclick="marcaDesmarca(this)">
    <label for="sim"> Sim</label><br>
    <input type="checkbox" id="usuarioCadastrado" name="usuarioCadastrado" value="2" onclick="marcaDesmarca(this)">
    <label for="sim"> Não</label><br>
  </div>

  <button type="submit" class="btn btn-primary" title="Clique aqui para realizar o envio dos dados informados acima.">Enviar</button>
</form>
</body>
</html>

<?php

if(isset($_POST["nome"])){
    CadastroController::cadastrarFaleConosco();
}

CadastroController::listarFaleConosco();


?>