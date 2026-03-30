<!--
 Data: 18/03/2026
 Autor: Pedro Menezes Duque José
  Objetivo:
  Receber uma lista de numeros e retornar a média aritmética

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)
Que receba uma lista de números reais e retorne a média aritmética.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9 - Média</title>
</head>
<body>
    <h2>Cálculo de Média Aritmética</h2>
    
    <form action="calcula.php" method="POST">
        <label>Digite os números separados por vírgula (ex: 10, 5, 7.5):</label><br>
        <input type="text" name="lista_numeros" required style="width: 300px;">
        
        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>