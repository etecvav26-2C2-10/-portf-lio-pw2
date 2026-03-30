<!--
Data: 18/03/2026
Autor: Pedro Menezes Duque José
Objetivo: 
Informar se um ano é bissexto
Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.

Um ano é bissexto se:

É múltiplo de 400
ou
É múltiplo de 4 e não é múltiplo de 100
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10 - Ano Bissexto</title>
</head>
<body>
    <h2>Verificador de Ano Bissexto</h2>
    
    <form action="calcula.php" method="POST">
        <label>Informe o ano:</label>
        <input type="number" name="ano_digitado" required>
        
        <button type="submit">Verificar</button>
    </form>
</body>
</html>