<?php
$valor = $_POST['temp_valor'];
$unidade = $_POST['unidade'];

if ($unidade == "C") {
    // Converte de Celsius para Fahrenheit
    $resultado = ($valor * 9/5) + 32;
    $msg = "$valor °C equivale a " . number_format($resultado, 2) . " °F";
} else {
    // Converte de Fahrenheit para Celsius usando a fórmula: C = 5/9 * (F - 32)
    $resultado = (5/9) * ($valor - 32);
    $msg = "$valor °F equivale a " . number_format($resultado, 2) . " °C";
}

echo "<h3>Resultado: $msg</h3>";
echo "<br><a href='index.php'>Voltar</a>";
?>