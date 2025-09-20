<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cono truncado</title>
</head>
<body>
    <form action="" method="post">
        <label for="rbase">Radio base: </label>
        <input type="number" name="rbase" id="rbase" step="0.1"><br>
        <label for="rtop">Radio arriba: </label>
        <input type="number" name="rtop" id="rtop" step="0.1"><br>
        <label for="altura">Altura cono: </label>
        <input type="number" name="altura" id="altura" step="0.1"><br>
        <button type="submit">Calcular volumen</button>
    </form>
    <?php
    //V = pi/3*h*(rBase^2+(rBase*rTop)+rTop^2)
    if(isset($_POST['rbase']) && isset($_POST['rtop']) && isset($_POST['altura'])){
        $rtop = $_POST['rtop'];
        $rbase = $_POST['rbase'];
        $altura = $_POST['altura'];

        $volumen = (3.14159/3)*$altura*($rbase**2 + ($rbase*$rtop) + $rtop**2);

        echo "El volumen total es: $volumen";
    }else{
        echo "INGRESE DATOS BUENOS PUES";
    }
    ?>
</body>
</html>