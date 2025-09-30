<?php
function fatorial($n) {
    if ($n <= 1) return 1;
    return $n * fatorial($n - 1);
}
$numero = isset($_GET['num']) ? (int)$_GET['num'] : 0;
$resultado = fatorial($numero);

header('Content-Type: application/json');
echo json_encode([
    'numero_original' => $numero,
    'resultado_fatorial' => $resultado,
    'algoritmo' => 'recursividade'
]);
?>