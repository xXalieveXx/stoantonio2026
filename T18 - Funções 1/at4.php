<?php
function calcularFatorial($numero) {
    if ($numero < 0) {
        return "Não existe fatorial de número negativo.";
    }
    
    $fatorial = 1;
    for ($i = $numero; $i > 1; $i--) {
        $fatorial *= $i;
    }
    
    return $fatorial;
}

// Exemplo de uso:
echo "O fatorial de 5 é: " . calcularFatorial(5); // Saída: O fatorial de 5 é: 120
?>