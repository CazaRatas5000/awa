<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla dinámica</title>
</head>
<body>
    <form action="" method="post">
        <label for="filas">Número de filas:</label>
        <input type="number" id="f" name="filas" required>
        <br><br>
        <label for="columnas">Número de columnas:</label>
        <input type="number" id="c" name="columnas" required>
        <br><br>
        <input type="submit" value="Mandar">
    </form>

    <?php
    if (isset($_POST["filas"]) && isset($_POST["columnas"])) {
        $f = (int)$_POST["filas"];
        $c = (int)$_POST["columnas"];

        echo "<h3>Tabla generada:</h3>";
        echo "<table border='1' cellpadding='10'>";

        for ($i = 0; $i < $f; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $c; $j++) {
                $texto = (($i + $j) % 2 == 0) ? "Libre" : "Ocupado";
                echo "<td>$texto</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
