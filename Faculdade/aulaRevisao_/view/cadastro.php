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

 </script>

<body>
<form method="post"> 
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome_" placeholder="Preecha seu nome" onkeyup="somenteLetras(this);" value="<?php if(isset($_POST['nome'])){echo $_POST['nome'];}?>"><br>
  </div>

  <div class="form-group">
    <label for="sobrenome">Sobrenome</label>
    <input type="text" name="sobrenome" class="form-control" id="sobrenome" aria-describedby="sobrenome_" placeholder="Preecha seu sobrenome" onkeyup="somenteLetras(this);" value="<?php if(isset($_POST['sobrenome'])){echo $_POST['sobrenome'];}?>"><br>
  </div>

  <div class="form-group">
    <label for="ddd">DDD</label>
    <input type="text" name="ddd" class="form-control" id="ddd" aria-describedby="ddd_" placeholder="Preecha seu DDD" onkeyup="somenteNumeros(this);" maxlength="3" value="<?php if(isset($_POST['ddd'])){echo $_POST['ddd'];}?>">
  </div>
  
  <div class="form-group">
    <label for="telefone">telefone</label>
    <input type="text" name="telefone" class="form-control" id="telefone" aria-describedby="telefone_" placeholder="Preecha seu telefone" onkeyup="NumerosTraco()" maxlength="10" value="<?php if(isset($_POST['telefone'])){echo $_POST['telefone'];}?>">
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" name="email" class="form-control" id="email" aria-describedby="email_" placeholder="Informe seu e-mail" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
  </div>

  <button type="submit" class="btn btn-primary" title="Clique aqui para realizar o cadastro dos dados informados acima.">Cadastrar</button><br><br>
</form>
</body>
</html>

<?php

if(isset($_POST["nome"])){
    CadastroController::cadastrar();
}

CadastroController::listar();


?>