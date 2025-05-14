<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nota Fiscal</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

        </head>
    
    <body>
        <nav class="navbar navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#navbar-brand">Caixa do Corinthians</a>
          </div>
        </nav>
<?php

$nomeCliente = htmlspecialchars($_POST['nomeCliente'] ?? '');
$produto1 = htmlspecialchars($_POST['produto1'] ?? '');
$valor1 = floatval($_POST['valor1'] ?? 0);
$produto2 = htmlspecialchars($_POST['produto2'] ?? '');
$valor2 = floatval($_POST['valor2'] ?? 0);
$valorPago = floatval($_POST['valorPago'] ?? 0);


$total = $valor1 + $valor2;
$troco = $valorPago - $total;?>


<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="bg-dark text-white p-4 rounded shadow" style="max-width: 400px; width: 100%;">
 <div class="nota-fiscal">
<?php
        echo "<h2>Nota Fiscal</h2>";
        echo "<p><strong>Cliente:</strong> $nomeCliente</p>";
        echo "<p><strong>Produto 1:</strong> $produto1 - R$ " . number_format($valor1, 2, ',', '.') . "</p>";
        echo "<p><strong>Produto 2:</strong> $produto2 - R$ " . number_format($valor2, 2, ',', '.') . "</p>";
        echo "<p><strong>Total:</strong> R$ " . number_format($total, 2, ',', '.') . "</p>";
        echo "<p><strong>Valor Pago:</strong> R$ " . number_format($valorPago, 2, ',', '.') . "</p>";
        echo "<p><strong>Troco:</strong> R$ " . number_format($troco, 2, ',', '.') . "</p>";
        ?>
        <div class="text-end mt-3">
            <a href="index.html" class="btn btn-light">Voltar</a>
        </div>

        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>