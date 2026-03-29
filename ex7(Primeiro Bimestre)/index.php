<!--
Data 28/03/26
Autor: João Paulo Marques Pinto
Objetivo:
Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:
Um vetor com números positivos
Um vetor com números negativos
-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 7 - Positivos e Negativos</title>
</head>
<body>
    <h1>Exercício 7 - Separar Positivos e Negativos</h1>
    <p>Instruções:<br>
       Digite 8 números inteiros e clique em "Separar" para ver os números positivos e negativos.</p>
    
    <form method="post">
        <input type="number" name="n1" required><br>
        <input type="number" name="n2" required><br>
        <input type="number" name="n3" required><br>
        <input type="number" name="n4" required><br>
        <input type="number" name="n5" required><br>
        <input type="number" name="n6" required><br>
        <input type="number" name="n7" required><br>
        <input type="number" name="n8" required><br><br>
        <button type="submit">Separar</button>
    </form>

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
        echo "Positivos: " . implode(", ", $positivos) . "<br>";
        echo "Negativos: " . implode(", ", $negativos);
    }
    ?>

</body>
</html>