<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nomeCliente = htmlspecialchars($_POST['nomeCliente'] ?? '');
    $produto1 = htmlspecialchars($_POST['produto1'] ?? '');
    $valor1 = floatval($_POST['valor1'] ?? 0);
    $produto2 = htmlspecialchars($_POST['produto2'] ?? '');
    $valor2 = floatval($_POST['valor2'] ?? 0);
    $valorPago = floatval($_POST['valorPago'] ?? 0);

    // Calcula total e troco
    $total = $valor1 + $valor2;
    $troco = $valorPago - $total;

    // Exibe a "nota fiscal"
    echo "<h2>Nota Fiscal</h2>";
    echo "<p><strong>Cliente:</strong> $nomeCliente</p>";
    echo "<p><strong>Produto 1:</strong> $produto1 - R$ " . number_format($valor1, 2, ',', '.') . "</p>";
    echo "<p><strong>Produto 2:</strong> $produto2 - R$ " . number_format($valor2, 2, ',', '.') . "</p>";
    echo "<p><strong>Total:</strong> R$ " . number_format($total, 2, ',', '.') . "</p>";
    echo "<p><strong>Valor Pago:</strong> R$ " . number_format($valorPago, 2, ',', '.') . "</p>";
    echo "<p><strong>Troco:</strong> R$ " . number_format($troco, 2, ',', '.') . "</p>";
} else {
    echo "Acesso inválido.";
}
?>
