<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício1</title>
</head>
<body>
    <form action="" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $ePrimo = true;
        $multiplos = [];
        $totalMultiplos = 0;

        for ($i = 2; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                $ePrimo = false;
                $multiplos[] = $i;
                $totalMultiplos++;
            }
        }

        if ($ePrimo) {
            echo "<p>O número $numero é primo.</p>";
        } else {
            echo "<p>O número $numero não é primo.</p>";
            echo "<p>Múltiplos: " . implode(", ", $multiplos) . "</p>";
            echo "<p>Total de múltiplos: $totalMultiplos</p>";
        }
    }
    ?>
</body>
</html>