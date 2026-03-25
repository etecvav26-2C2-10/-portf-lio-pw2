<?php
// Recebe os valores do formulário via POST
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operador = $_POST['operador'];
$resultado = "";

// O switch verifica qual foi o sinal matemático selecionado
switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        break;
    case '-':
        $resultado = $num1 - $num2;
        break;
    case '*':
        $resultado = $num1 * $num2; 
        break;
    case '/':
        // Trava de segurança para não dividir por zero
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            $resultado = "Erro: Divisão por zero";
        }
        break;
    default:
        $resultado = "Operador inválido";
        break;
}

// Exibe o resultado final
echo "<h3>Resultado: $num1 $operador $num2 = $resultado</h3>";
echo "<br><a href='index.php'>Voltar</a>";
?>