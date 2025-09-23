<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distancia 2 puntos</title>
</head>
<body>
    <form action="" method="post">
        <h2>Punto 1</h2><br>
        X: <input type="number" name="x1" id="x1" step="0.1">
        Y: <input type="number" name="y1" id="y1" step="0.1">
        Z: <input type="number" name="z1" id="z1" step="0.1"><br>
        <h2>Punto 2</h2><br>
        X: <input type="number" name="x2" id="x2" step="0.1">
        Y: <input type="number" name="y2" id="y2" step="0.1">
        Z: <input type="number" name="z2" id="z2" step="0.1">
        <button type="submit">Calcular</button>
    </form>

    <?php
    if(isset($_POST['x1']) && isset($_POST['x2']) && isset($_POST['y1']) && isset($_POST['y2']) && isset($_POST['z1']) && isset($_POST['z2'])){
        $x1 = $_POST['x1'];
        $x2 = $_POST['x2'];
        $y1 = $_POST['y1'];
        $y2 = $_POST['y2'];
        $z1 = $_POST['z1'];
        $z2 = $_POST['z2'];

        $distancia = sqrt(($x2-$x1)**2 + ($y2-$y1)**2 + ($z2-$z1)**2);

        $distancia = round($distancia, 2);
        echo "<h1>La distancia es: $distancia</h1>";
    }
    ?>
</body>
</html>