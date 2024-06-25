<?php 
if(!empty($clientes))
{
?>
<table>
    <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>DDD</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Usuário cadastrado?</th>
        <th>Mensagem Fale Conosco?</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    <?php foreach($clientes as $cli): ?>
    <tr>
        <td><?= $cli->nome ?></td>
        <td><?= $cli->sobrenome ?></td>
        <td><?= $cli->ddd ?></td>
        <td><?= $cli->telefone ?></td>
        <td><?= $cli->email ?></td>
        <?php if($cli->usuCadastro == 1)
        {
        ?>
        <td><?= "Sim" ?></td>
        <?php 
        }
        else{
        ?>
        <td><?= "Não" ?></td>
        <?php }?>

        <?php if($cli->mensagem != NULL)
        {
        ?>
        <td><?= "Sim" ?></td>
        <?php 
        }
        else{
        ?>
        <td><?= "Não" ?></td>
        <?php }?>
        <td><a title="Clique aqui para atualizar os dados escolhidos!" href="?page=editar&id=<?= $cli->id ?>">Editar</a></td>
        <td><a title="Clique aqui para excluir os dados escolhidos!" href="?page=excluir&id=<?= $cli->id ?>">Excluir</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php 
}
else
{
?>
    <h1><strong>Não existem informações a serem apresentadas até o momento!!!</strong></h1>
<?php
}
?>
