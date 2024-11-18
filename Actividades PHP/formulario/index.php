<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario estandar</title>
</head>

<body>
    <main>
        <h1>Formulario</h1>
        <form action="procesar.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br><br>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>

</html>