<?php
// Incluir el archivo con la función
include 'funciones.php';

// Validar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el número enviado
    $numero = $_POST['numero'];

    // Llamar a la función y obtener el resultado
    $resultado = esParOImpar($numero);
} else {
    $resultado = "No se recibió ningún dato.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Par o Impar</title>
</head>
<body>
    <h1>Resultado</h1>

    <!-- Mostrar el resultado -->
    <p><?php echo htmlspecialchars($resultado); ?></p>

    <!-- Enlace para regresar al formulario -->
    <a href="index.html">Regresar</a>
</body>
</html>