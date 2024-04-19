<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Exemplo</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php 
            $nome =array ("Gabriel","Andre", "Giovani", "Douglas", "Matheus", "Vinicius");
            $idade = array(18,19,22,25,21,20);
            $peso = array(70.5, 75.8, 80, 63.2, 55.2, 82,7);
            $altura = array(1.82, 1.80, 1.72, 1.70, 1.75, 1.68);

            
     ?>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Peso</th>
                <th>Altura</th>
            </tr>
        </thead>

        <tbody>
            <?php for ($i=0; $i<6; $i++) { ?>
                <tr>
                    <td><?php echo $nome[$i]; ?></td>
                    <td><?php echo $idade[$i]; ?></td>
                    <td><?php echo $peso[$i]; ?></td>
                    <td><?php echo $altura[$i]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tbody>

           
    </table>
   
</body>
</html>