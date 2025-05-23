<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla dinámica y marca X respecto x e y</title>
</head>
<body>
    <form action="" method="post">
        <label for="filas">Número de filas:</label>
        <input type="number" id="f" name="filas" required>
        <br><br>
        <label for="columnas">Número de columnas:</label>
        <input type="number" id="c" name="columnas" required>
        <br><br>
        <label for="x">Fila de la X (empezando desde 1):</label>
        <input type="number" id="x" name="x" required>
        <br><br>
        <label for="y">Columna de la X (empezando desde 1):</label>
        <input type="number" id="y" name="y" required>
        <br><br>
        <input type="submit" value="Mandar">
    </form>

    <?php
    if(isset($_POST["filas"]) && isset($_POST["columnas"]) && isset($_POST["x"]) && isset($_POST["y"])) {
        $f = (int)$_POST["filas"];
        $c = (int)$_POST["columnas"];
        $x = (int)$_POST["x"] - 1;
        $y = (int)$_POST["y"] - 1;

        echo "<h3>Tabla generada:</h3>";
        echo "<table border='1' cellpadding='10'>";
        for($i = 0; $i < $f; $i++) {
            echo "<tr>";
            for($j = 0; $j < $c; $j++) {
                if($i == $x && $j == $y) {
                    echo "<td><strong>X</strong></td>";
                } else {
                    echo "<td>-</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
