<?php
// Captura o valor enviado pelo formulário
$numero = $_POST['numero'];

// Lógica de verificação usando operadores lógicos
if ($numero >= 100 && $numero <= 200) {
    $mensagem = "O número $numero está no intervalo de 100 a 200.";
} else {
    $mensagem = "O número $numero NÃO está no intervalo de 100 a 200.";
}

// Exibição do resultado
echo "<h3>Resultado: $mensagem</h3>";
echo "<br><a href='index.php'>Voltar</a>";
?>