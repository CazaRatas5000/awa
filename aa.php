<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla dinámica</title>
</head>
<body>
    <form action="" method="post">
        <label for="filas">Número de filas:</label>
        <input type="number" id="f" name="filas" min="1" required>
        <br><br>
        <label for="columnas">Número de columnas:</label>
        <input type="number" id="c" name="columnas" min="1" required>
        <br><br>
        <input type="submit" value="Mandar">
    </form>

    <?php
    if (isset($_POST["filas"]) && isset($_POST["columnas"])) {
        $f = (int)$_POST["filas"];
        $c = (int)$_POST["columnas"];

        if ($f >= 1 && $c >= 1) {
            echo "<h3>Tabla generada:</h3>";
            echo "<table border='1' cellpadding='10'>";

            for ($i = 0; $i < $f; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $c; $j++) {
                    if (($i == 0 && $j == 0) || ($i == $f - 1 && $j == $c - 1)) {
                        echo "<td><strong>X</strong></td>";
                    } else {
                        echo "<td>-</td>";
                    }
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p style='color:red;'>Debe ingresar al menos 1 fila y 1 columna.</p>";
        }
    }
    ?>
</body>
</html>
