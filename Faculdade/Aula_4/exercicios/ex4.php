<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
<?php
    $multi = array(1,2,3,4,5,6,7,8,9,10);
    $total = 1;
    for($i=0;$i<10;$i++){
        echo "$total x $multi[$i] = ".($total*$multi[$i])."<br>";
        $total*=$multi[$i];
    }
?>
</body>
</html> 