<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="base">Base: </label>
        <input type="number" name="base" id="base" step="0.1"><br>
        <label for="altura">Altura: </label>
        <input type="number" name="altura" id="altura" step="0.1"><br>
        <button type="submit">Calcular Tercer Lado (H)</button>
    </form>

    <?php
    if(isset($_POST['base']) && isset($_POST['altura'])){
        $base = $_POST['base'];
        $altura = $_POST['altura'];

        $hipotenusa = sqrt($base ** 2 + $altura ** 2);

        echo "El largo del tercer lado (H) es: $hipotenusa";
    }else{
        echo "Ingresa los datos.";
    }
    ?>    
</body>
</html>