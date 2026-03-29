<?php
if (isset($_POST["n1"])) {

    $positivos = [];
    $negativos = [];

    for ($i = 1; $i <= 8; $i++) {
        $num = $_POST["n".$i];

        if ($num >= 0) {
            $positivos[] = $num;
        } else {
            $negativos[] = $num;
        }
    }

    echo "<h2>Resultado:</h2>";
    echo "<strong>Positivos:</strong> " . implode(", ", $positivos) . "<br>";
    echo "<strong>Negativos:</strong> " . implode(", ", $negativos) . "<br>";

}
?>