<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don Martin</title>
</head>
<body>
    <?php
    $inversion = 93504;
    $ganancia = 0.323;

    $anual = $inversion * $ganancia;
    $meses = $anual / 12;
    $semanal = $meses / 4;

    $primero = $meses * 7;
    $segundo = $anual*8 + $meses*2 + $semanal;
 
    ?>
    <h1>DON MARTIN GANANAICAS</h1>
    <h4>7 meses: <?=$primero?></h4>
    <h4>8 años, 2 meses, 7 dias: <?=$segundo?></h4>
    <?php
    ?>
</body>
</html>