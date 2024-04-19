<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function removerRepetidos($str) {
        $caracteres = array();
        $contagem = array();
      
        for ($i = 0; $i < strlen($str); $i++) {
          if (!isset($contagem[$str[$i]])) {
            $contagem[$str[$i]] = 0;
          }
          $contagem[$str[$i]]++;
        }
      
        $letraMaisRepetida = "";
        $maiorContagem = 0;
      
        foreach ($contagem as $letra => $numero) {
          if ($numero > $maiorContagem) {
            $maiorContagem = $numero;
            $letraMaisRepetida = $letra;
          }
        }
      
        return str_repeat($letraMaisRepetida, $maiorContagem);
      }
      
      $str = "ARARA";
      $resultado = removerRepetidos($str);
      
      echo "String original: $str<br>";
      echo "Letra mais repetida: $resultado";
    ?>
</body>
</html>