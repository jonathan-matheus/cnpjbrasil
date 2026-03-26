<?php
require __DIR__ . '/../models/cnpjApi.model.php';
$cnpjApi = new cnpjApi();

$cnpj = $_GET['cnpj'] ?? null;

if (!$cnpj) {
    view('index', [
        'title' => 'Home',
        'dados' => null
    ]);
    exit;
}

$dados = $cnpjApi->getCNPJ($cnpj);

view('index', [
    'title' => 'Home',
    'dados' => $dados
]);