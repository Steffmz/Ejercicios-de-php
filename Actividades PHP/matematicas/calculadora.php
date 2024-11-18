<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
</head>
<body>
    <h1>Calculadora Simple</h1>

    <!-- Formulario de la calculadora -->
    <form action="" method="POST">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" step="any" required>
        <br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" step="any" required>
        <br><br>

        <label for="operacion">Operación:</label>
        <select id="operacion" name="operacion" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <h2>Resultado:</h2>
    <?php
    // Validar si el formulario fue enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los valores ingresados
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

        // Inicializar el resultado
        $resultado = null;

        // Ejecutar la operación seleccionada
        switch ($operacion) {
            case 'sumar':
                $resultado = $numero1 + $numero2;
                break;
            case 'restar':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicar':
                $resultado = $numero1 * $numero2;
                break;
            case 'dividir':
                // Verificar si el divisor es distinto de 0
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $resultado = "Error: No se puede dividir entre 0.";
                }
                break;
            default:
                $resultado = "Operación no válida.";
        }

        // Mostrar el resultado
        echo "<p><strong>Resultado:</strong> " . htmlspecialchars($resultado) . "</p>";
    }
    ?>
</body>
</html>