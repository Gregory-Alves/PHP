<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
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
<form action="?page=atualizar&id=<?= $cliente->id ?>" method="post">
    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome_" placeholder="Preecha seu nome" onkeyup="somenteLetras(this);" value="<?= $cliente->nome ?>"><br>
  </div>
  <div class="form-group">
    <label for="sobrenome">Sobrenome</label>
    <input type="text" name="sobrenome" class="form-control" id="sobrenome" aria-describedby="sobrenome_" placeholder="Preecha seu sobrenome" onkeyup="somenteLetras(this);" value="<?= $cliente->sobrenome ?>"><br>
  </div>
  <div class="form-group">
    <label for="ddd">DDD</label>
    <input type="text" name="ddd" class="form-control" id="ddd" aria-describedby="ddd_" placeholder="Preecha seu DDD" onkeyup="somenteNumeros(this);" maxlength="3" value="<?= $cliente->ddd ?>">
  </div>
  <div class="form-group">
    <label for="telefone">telefone</label>
    <input type="text" name="telefone" class="form-control" id="telefone" aria-describedby="telefone_" placeholder="Preecha seu telefone" onkeyup="NumerosTraco()" maxlength="10" value="<?= $cliente->telefone?>">
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" name="email" class="form-control" id="email" aria-describedby="email_" placeholder="Informe seu e-mail" value="<?= $cliente->email?>">
  </div>
  <button type="submit" class="btn btn-primary" title="Clique aqui para realizar a atualização dos dados.">Atualizar</button>
</form>
</body>
</html>