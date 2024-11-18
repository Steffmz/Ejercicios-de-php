<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $parcial1 = $_POST['parcial1'];
    $parcial2 = $_POST['parcial2'];
    $parcial3 = $_POST['parcial3'];
    $examen_final = $_POST['examen_final'];
    $trabajo_final = $_POST['trabajo_final'];

    $promedio_parciales = ($parcial1 + $parcial2 + $parcial3) / 3;

    $nota_final = ($promedio_parciales * 0.35) + ($examen_final * 0.35) + ($trabajo_final * 0.30);

    $resultado = $nota_final >= 3 ? "Aprobó" : "No aprobó";

    echo "<h1>Resultado</h1>";
    echo "<p>Nota Final: " . number_format($nota_final, 2) . "</p>";
    echo "<p>Estado: $resultado</p>";
} else {
    echo "<p>Por favor, complete el formulario primero.</p>";
}
?>
</body>
</html>