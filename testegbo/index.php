<?php
// index.php
//require_once 'conexao.php'; // Arquivo fictício que cria a variável $db (PDO)
require_once './models/entrada.php';
require_once './controllers/entradacontroller.php';

use App\Controllers\EntradaController;

$action = $_GET['action'] ?? 'formulario';

$controller = new EntradaController($db);

// Rotas da aplicação baseadas na URL (?action=...)
if ($action === 'salvar') {
    $controller->armazenar();
} else {
    // Rota padrão: exibe o formulário da View
    include 'Views/criar-entrada.php';
}
