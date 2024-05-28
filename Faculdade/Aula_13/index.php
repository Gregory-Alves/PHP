<?php 
$url = strtoupper($_GET['url'] ?? '');

if ($url == 'CADASTRO') {
    require_once('View/Cadastro.php');
} elseif ($url == 'CADASTRARUSUARIO') {
    require_once('./Controller/UsuarioController.php');
    $usuarioController = new UsuarioController();
    $usuarioController->processa('C');
} else {
    echo "Página não encontrada!";
}
?>