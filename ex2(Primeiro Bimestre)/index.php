<!--
Data: 19/03/2026
Autor: Pedro Menezes Duque José
Objetivo: 
Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.
-->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2 - Temperatura</title>
</head>
<body>
    <h2>Exercício 2 - Conversão de Temperatura</h2>
    
    <form action="calcula.php" method="POST">
        <label>Valor da Temperatura:</label>
        <input type="number" name="temp_valor" step="0.1" required>

        <label>Unidade atual:</label>
        <select name="unidade" required>
            <option value="C">Celsius (C)</option>
            <option value="F">Fahrenheit (F)</option>
        </select>
        
        <button type="submit">Converter</button>
    </form>
</body>
</html>