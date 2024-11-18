<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['cantidad'];
        $precio_total = $_POST['precio_total'];

        $salario_basico = 737000;
        $comision_fija = $cantidad * 50000;
        $comision_variable = $precio_total * 0.05;

        $salario_total = $salario_basico + $comision_fija + $comision_variable;

        echo "Nombre del vendedor: $nombre<br>";
        echo "Salario Básico: $" . number_format($salario_basico, 2) . "<br>";
        echo "Comisión Fija: $" . number_format($comision_fija, 2) . "<br>";
        echo "Comisión 5%: $" . number_format($comision_variable, 2) . "<br>";
        echo "<strong>Salario Total: $" . number_format($salario_total, 2) . "</strong>";
    } else {
    echo "Error: No se enviaron datos.";
    }
?>
</body>
</html>