<?php
$request = $_GET['action'] ?? ''; // Obtém a ação da URL
switch ($request) {
    case 'consulta_avaliacoes':
        require 'controller/controller_consulta.php';
        break; 
    default:
        echo json_encode(['erro' => 'Rota não encontrada']);
}
?>