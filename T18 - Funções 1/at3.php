<?php
function verificarParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
}

// Exemplo de uso:
echo "O número 7 é: " . verificarParOuImpar(7); // Saída: O número 7 é: Ímpar
?>