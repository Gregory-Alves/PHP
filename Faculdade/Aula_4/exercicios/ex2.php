<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
    <style>
        table {
            display: inline-block;
            margin: 10px;
            margin-right: 20px;
            margin-bottom: 20px;
            width: 300px; 
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align:center
        }

        th {
            background-color: #f2f2f2;
        }

        .table-container{
            display:flex
        }
    </style>
</head>
<body>
    <?php 
            $mult_1 = 7;
            $mult_2 = 9;
            $vetor_contagem= array(1,2,3,4,5,6,7,8,9,10);

     ?> 
     <table>
     <div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Tabuada do 7</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i<10; $i++) { ?>
                <tr>
                    <td><?php echo "$vetor_contagem[$i]" . " x " . "$mult_1" . " = " . ($vetor_contagem[$i] * $mult_1); ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tbody> 
    </table>

    <?php 
            $mult_2 = 9;
            $vetor_contagem= array(1,2,3,4,5,6,7,8,9,10);

     ?>
    <div class="table-container">
    <table>
    <br/>
    <table>
        <thead>
            <tr>
                <th>Tabuada do 9</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i<10; $i++) { ?>
                <tr>
                    <td><?php echo "$vetor_contagem[$i]" . " x " . "$mult_2" . " =  " . ($vetor_contagem[$i] * $mult_2); ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tbody> 
    </table>
</body>
</html>
