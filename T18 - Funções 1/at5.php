<?php
function calcularComDesconto($valorTotal, $percentualDesconto) {
    $valorDesconto = ($valorTotal * $percentualDesconto) / 100;
    return $valorTotal - $valorDesconto;
}

// Exemplo de uso:
$totalFinal = calcularComDesconto(200, 15); // Compra de R$ 200 com 15% de desconto
echo "Valor final com desconto: R$ " . number_format($totalFinal, 2, ',', '.'); // Saída: R$ 170,00
?>