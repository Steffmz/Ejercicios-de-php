<?php
// Función para determinar si un número es par o impar
function esParOImpar($numero) {
    if ($numero % 2 === 0) {
        return "El número $numero es Par.";
    } else {
        return "El número $numero es Impar.";
    }
}
?>