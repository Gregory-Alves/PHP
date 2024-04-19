<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
</head>
<body>
    <?php 
        
        $a = 2;
        echo "O valor de A é $a " ;
        $b = 4;
        echo "<br/>O valor de B é $b ";
        $c = 6;
        echo "<br/>O valor de c é $c ";
        $m = (($c+$b)/2)**(--$c);
        echo "<br/>O valor de M é $m ";
        $t = --$c**($b+$a);
        echo "<br/>O valor de t é $t ";
        $x= --$c + $b;
        echo "<br/>O valor de X é $x ";
        $y= $b++ + $a;
        echo "<br/>O valor de Y é $y ";
        $z= $a - $b--;
        echo "<br/>O valor de Z é $z ";
        
            $a = (double) $a;
            $b = (double) $b;
            $c = (string) $c;
            
            echo "<br/> A em double: " . number_format($a, 1);
            echo "<br/> b em double: " . number_format($b, 1);
            echo "<br/> C em string: $c "; 
            
    ?>
</body>
</html>