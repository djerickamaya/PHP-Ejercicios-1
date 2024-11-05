<?php
function generarFibonacci($num)
{
    $fibonacci = [0, 1];

    if ($num <= 0) {
        return "Por favor, ingresa un número mayor a 0.";
    } elseif ($num == 1) {
        return [0];
    } elseif ($num == 2) {
        return $fibonacci;
    }

    for ($i = 2; $i < $num; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}


$num = 15; // para probar otros numeros solo cambia este valor
$resultado = generarFibonacci($num);

foreach ($resultado as $valor) {
    echo $valor . " ";
}
