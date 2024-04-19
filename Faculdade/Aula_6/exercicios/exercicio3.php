<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frase = "&u gosto d& estudar a linguag&m PHP &m finais de semana";
        echo ucfirst(str_replace("&", "e", $frase));
    ?>
</body>
</html>