<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla dinámica y marca X respecto x e y</title>
</head>
<body>
    <form action="" method="post">
        <label for="filas">Número de filas:</label>
        <input type="number" id="f" name="filas" min="1" required>
        <br><br>
        <label for="columnas">Número de columnas:</label>
        <input type="number" id="c" name="columnas" min="1" required>
        <br><br>
        <label for="x">Fila de la X (empezando desde 1):</label>
        <input type="number" id="x" name="x" min="1" required>
        <br><br>
        <label for="y">Columna de la X (empezando desde 1):</label>
        <input type="number" id="y" name="y" min="1" required>
        <br><br>
        <input type="submit" value="Mandar">
    </form>

    <?php
    if (isset($_POST["filas"], $_POST["columnas"], $_POST["x"], $_POST["y"])) {
        $f = (int)$_POST["filas"];
        $c = (int)$_POST["columnas"];
        $x = (int)$_POST["x"];
        $y = (int)$_POST["y"];

        // Validaciones en PHP
        if ($f < 1 || $c < 1) {
            echo "<p style='color:red;'>La tabla debe tener al menos 1 fila y 1 columna.</p>";
        } elseif ($x < 1 || $x > $f || $y < 1 || $y > $c) {
            echo "<p style='color:red;'>La posición de la X está fuera del rango de la tabla.</p>";
        } else {
            echo "<h3>Tabla generada:</h3>";
            echo "<table border='1' cellpadding='10'>";
            for ($i = 0; $i < $f; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $c; $j++) {
                    if ($i == $x - 1 && $j == $y - 1) {
                        echo "<td><strong>X</strong></td>";
                    } else {
                        echo "<td>-</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>
