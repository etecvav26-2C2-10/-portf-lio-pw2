<?php
// Recebe o número de linhas desejado via POST
$n = $_POST['n'];

//  (i) controla a altura (quantas linhas serão impressas)
for ($i = 1; $i <= $n; $i++) {
    
    // (j) controla a largura (os números impressos em cada linha)
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    
    // Salta uma linha para formar o desenho do triângulo no navegador
    echo "<br>";
}

echo "<br><a href='index.php'>Voltar</a>";
?>