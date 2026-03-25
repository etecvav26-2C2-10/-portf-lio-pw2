<!--
Data: 19/03/2026
Autor: Pedro Menezes Duque José
Objetivo: 
Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e em seguida um caractere que representa um operador aritmético ('+', '-', '*', ou '/'). Seu programa deve imprimir o resultado do operador aplicado aos dois números dados.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3 - Calculadora</title>
</head>
<body>
    <h2>Calculadora Aritmética</h2>
    
    <form action="calcula.php" method="POST">
        <label>Número 1:</label>
        <input type="number" name="num1" step="any" required>

        <label>Operador:</label>
        <select name="operador" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <label>Número 2:</label>
        <input type="number" name="num2" step="any" required>
        
        <button type="submit">Calcular</button>
    </form>
</body>
</html>