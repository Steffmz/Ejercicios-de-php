<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Amortización</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
        }
        form {
            background-color: #ffcc00;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 30px;
        }
        input[type="number"], input[type="text"] {
            display: block;
            width: 90%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #004999;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #0066cc;
            color: white;
        }
    </style>
</head>

<body>
    <form method="post" action="">
        <h1>Calculadora de Amortización</h1>
        <label>Cédula del cliente:</label>
        <input type="text" name="cedula" required>
        
        <label>Nombre del cliente:</label>
        <input type="text" name="nombre" required>
        
        <label>Monto del crédito:</label>
        <input type="number" name="monto" step="0.01" required>
        
        <label>Tasa de interés mensual (%):</label>
        <input type="number" name="tasa" step="0.01" required>
        
        <label>Plazo (en meses):</label>
        <input type="number" name="plazo" required>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cedula = htmlspecialchars($_POST['cedula']);
        $nombre = htmlspecialchars($_POST['nombre']);
        $monto = floatval($_POST['monto']);
        $tasa = floatval($_POST['tasa']) / 100;
        $plazo = intval($_POST['plazo']);

        $cuota = $monto * ($tasa * pow(1 + $tasa, $plazo)) / (pow(1 + $tasa, $plazo) - 1);
        $cuota = round($cuota, 2);

        echo "<h2>Tabla de Amortización</h2>";
        echo "<p>Cédula: $cedula</p>";
        echo "<p>Cliente: $nombre</p>";
        echo "<table>
                <tr>
                    <th>No. Cuota</th>
                    <th>Cuota Fija</th>
                    <th>Intereses</th>
                    <th>Amortización</th>
                    <th>Saldo</th>
                </tr>";
        
        $saldo = $monto;
        for ($i = 1; $i <= $plazo; $i++) {
            $interes = round($saldo * $tasa, 2);
            $amortizacion = round($cuota - $interes, 2);
            $saldo = round($saldo - $amortizacion, 2);

            echo "<tr>
                    <td>$i</td>
                    <td>$cuota</td>
                    <td>$interes</td>
                    <td>$amortizacion</td>
                    <td>$saldo</td>
                  </tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>

