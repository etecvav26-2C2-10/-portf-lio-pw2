<?php
function somar($n) {
    $soma = 0;
    for ($i = 0; $i <= $n; $i++) {
        $soma += $i;
    }
    return $soma;
}

if (isset($_POST["n"])) {
    $n = $_POST["n"];
    echo "<h2>Resultado:</h2>";
    echo "A soma de 0 até <strong>$n</strong> é: <strong>" . somar($n) . "</strong><br>";

}
?>