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
        <th>Mensagem</th>
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
        <td><?= $cli->mensagem ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php 
}
else
{
?>
    <h1><strong>Não existem mensagens de usuários!!!</strong></h1>
<?php
}
?>