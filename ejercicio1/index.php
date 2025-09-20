<?php
//recuerda usar el localhost:60940, ya que lo mapeaste a ese puerto!
function calculo($base, $altura){
    $a = ((1/2)*$base)**2;
    $c = $base ** 2;
    $b = sqrt($c - $a);

    $areaT = (1/2)*$base*$b;

    $volumen = $areaT * $altura;
    return ($volumen);
}

$vol = round(calculo(4, 7), 2);

echo "El volumen es: $vol unidades cubicas.";
?>