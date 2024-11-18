<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par o Impar</title>
</head>
<body>
    <h1>Par-inpar</h1>

    <form action="" method="POST">
        <label for="numero">Ingresa un número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <button type="submit">Comprobar</button>
    </form>

    <h2>Resultado:</h2>
    <?php
    function par_inpar($numero) {
        if ($numero % 2 === 0) {
            return "El número $numero es Par.";
        } else {
            return "El número $numero es Impar.";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = $_POST['numero'];

        echo "<p>" . htmlspecialchars(par_inpar($numero)) . "</p>";
    }
    ?>
</body>
</html>