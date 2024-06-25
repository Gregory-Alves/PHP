<?php 
    $page = isset($_GET['page'])? $_GET['page'] : "home";
    require_once "./functions.php";
    require_once "./controller/cadastroController.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php loadingTitulo($page); ?></title>
        <link rel="stylesheet" type="text/css" href="./assets/css/boostrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap.grid.css">
        <link rel="stylesheet" href="assets/css/bootstrap.grid.css.map">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css.map">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/js/bootstrap.bundle.js">
        <link rel="stylesheet" href="assets/js/bootstrap.bundle.js.map">
        <link rel="stylesheet" href="assets/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="assets/js/bootstrap.bundle.min.js.map">
        <link rel="stylesheet" href="assets/js/bootstrap.js">
        <link rel="stylesheet" href="assets/js/bootstrap.js.map">
        <link rel="stylesheet" href="assets/js/bootstrap.min.js">
        <link rel="stylesheet" href="assets/js/bootstrap.min.js.map">
        <link rel="stylesheet" href="assets/js/teste.js">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <head>
<body>
    
<?php
        exibirMenu();
        loadingPage($page);

?>

</body>
<html>