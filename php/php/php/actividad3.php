<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = htmlspecialchars($_POST['nombre']);
        $peso = floatval($_POST['peso']);
        $estatura = floatval($_POST['estatura']);

        if ($peso > 0 && $estatura > 0) {
            $imc = $peso / ($estatura * $estatura);
            $imc = round($imc, 2);

            if ($imc < 18.5) {
                $categoria = "Por debajo del peso";
            } elseif ($imc >= 18.5 && $imc < 25) {
                $categoria = "Saludable";
            } elseif ($imc >= 25 && $imc < 30) {
                $categoria = "Con sobrepeso";
            } else {
                $categoria = "Obeso";
            }

            echo "<div class='resultado'>
                    <h2>Resultado para: $nombre</h2>
                    <p><strong>IMC:</strong> $imc</p>
                    <p><strong>Categoría:</strong> $categoria</p>
                  </div>";
        } else {
            echo "<p class='resultado'>Por favor, ingresa valores válidos.</p>";
        }
    }
    ?>
</body>
</html>

