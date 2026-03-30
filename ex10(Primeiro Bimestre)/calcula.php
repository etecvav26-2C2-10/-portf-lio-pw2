<?php
//Função que verifica se um ano é bissexto

function verificarBissexto($ano) {
    // Lógica: (Múltiplo de 400) OU (Múltiplo de 4 E NÃO múltiplo de 100)
    if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) {
        return "O ano $ano é bissexto.";
    } else {
        return "O ano $ano NÃO é bissexto.";
    }
}

// Recebe o ano do formulário via POST
$ano = $_POST['ano_digitado'];

// Executa a função e armazena a mensagem
$resultado = verificarBissexto($ano);

// Exibe o resultado na tela
echo "<h3>$resultado</h3>";

echo "<br><a href='index.php'>Voltar</a>";
?>