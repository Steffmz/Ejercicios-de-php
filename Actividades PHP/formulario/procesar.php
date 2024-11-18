<?php

// Recibir datos

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

// inicializar para almacenar info

session_start();
if (!isset($_SESSION['datos'])) {
    $_SESSION['datos'] = [];
}

// Agregar ñps datos nuevos

$_SESSION['datos'][] = [
    'nombre' => $nombre,
    'correo' => $correo
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos</title>
</head>

<body>
    <main>
        <h1>Datos Recibidos</h1>
        <p><strong>Nombre:</strong> <?= htmlspecialchars($nombre) ?></p>
        <p><strong>Correo:</strong> <?= htmlspecialchars($correo) ?></p>

        <h2>Todos los datos enviados:</h2>
        <ul>
            <?php foreach ($_SESSION['datos'] as $dato): ?>
                <li><?= htmlspecialchars($dato['nombre']) ?> - <?= htmlspecialchars($dato['correo']) ?></li>
            <?php endforeach; ?>
        </ul>

        <a href="index.php">Volver al formulario</a>

    </main>
</body>

</html>