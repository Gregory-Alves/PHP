<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
</head>
<body>
    
<?php 

function fatorial($num){

    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        return $num * fatorial($num - 1);
    }
}
$num = 5;
$fatorial = fatorial($num);
echo " Fatorial de $num = $fatorial";

?>

</body>
</html>