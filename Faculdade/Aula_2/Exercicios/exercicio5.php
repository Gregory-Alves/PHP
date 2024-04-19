<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio5</title>
</head>
<body>
    <?php 
         $a = $_GET["a"];
         $b = $_GET["b"];
         $c = $_GET["c"];
     
         echo "A = ".$a."<br>";
         echo "B = ".$b."<br>";
         echo "C = ".$c."<br><br>";
     
         $r = ($a+$b)**2;
         $s = ($b+$c)**2;
     
         $d = ($r+$s)/2;
     
         echo "resultado de D = ".$d."<br><br>";
    ?>
</body>
</html>