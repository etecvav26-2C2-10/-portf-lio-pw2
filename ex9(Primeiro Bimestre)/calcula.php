<?php

// Calcula a média dos elementos de um array

function media($v) {
    // Calcula a soma de todos os elementos do array
    $soma = array_sum($v);
    
    // Determina a quantidade de elementos no array
    $quantidade = count($v);

    // Se o array estiver vazio, retorna 0 para evitar divisão por zero
    if ($quantidade == 0) {
        return 0;
    }

    // Retorna o resultado da média
    return $soma / $quantidade;
}

// Recebe a string do formulário
$input = $_POST['lista_numeros'];

// Transforma a string em um array de números (removendo espaços extras)
$numeros = explode(',', $input);
$numeros = array_map('trim', $numeros);

// Calcula a média usando a sua função
$resultado = media($numeros);

// Exibe os números e a média no navegador
echo "<h3>Exercício 9 - Média Aritmética</h3>";
echo "Os números informados são: " . implode(", ", $numeros) . "<br>";
echo "<b>A média aritmética é: " . number_format($resultado, 2, ',', '.') . "</b>";

echo "<br><br><a href='index.php'>Voltar</a>";
?>