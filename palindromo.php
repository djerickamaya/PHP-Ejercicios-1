<?php
function esPalindromo($palabra)
{
    // Eliminamos los  posibles espacios y convertimos a minúscula para trabajar con una base limpia
    $palabra = strtolower(str_replace(' ', '', $palabra));

    // usamos la variable contrario para almacenar la palabra usando (strrev)
    $contrario = strrev($palabra);

    // Comparamos la palabra original con la que se guardo en contrario para tener una valor true or false
    if ($palabra == $contrario) {
        return true;
    } else {
        return false;
    }
}


$palabra = "Anilina"; // Esta es la palabra a evaluar

if (esPalindromo($palabra)) {
    echo "$palabra es un palíndromo.";  //Si el valor que dio en el anterior if es true -> se ejecuta este codigo
} else {
    echo "$palabra no es un palíndromo.";  //Si el valor que dio en el anterior if es false -> se ejecuta este codigo
}
