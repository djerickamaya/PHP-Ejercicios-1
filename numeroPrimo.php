<?php
function esPrimo($num)
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

$num = 4; // cambia este dato para probar otros numeros

if (esPrimo($num)) {
    echo "$num es un número primo.";
} else {
    echo "$num no es un número primo.";
}
