<!--
Data: 19/03/2026
Autor: Pedro Menezes Duque José
Objetivo: 
Exercício 4 - Triângulo Numérico
Faça um programa que leia um número n e imprima n linhas com o seguinte formato (exemplo para n = 6):
1
1 2
1 2 3
...
-->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4 - Triângulo</title>
</head>
<body>
    <h2>Gerador de Triângulo Numérico</h2>
    
    <form action="calcula.php" method="POST">
        <label>Informe o valor de N (linhas):</label>
        <input type="number" name="n" min="1" required>
        
        <button type="submit">Gerar Triângulo</button>
    </form>
</body>
</html>