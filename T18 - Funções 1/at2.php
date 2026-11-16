<?php
function calcularMedia($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

// Exemplo de uso:
$media = calcularMedia(8, 7, 9);
echo "A média é: " . number_format($media, 2, ',', '.'); // Saída: A média é: 8,00
?>