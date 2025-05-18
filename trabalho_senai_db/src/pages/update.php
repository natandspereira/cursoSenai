<?php 
include '../../src/data/dbConfig.php';

// Checa se os dados foram enviados
if (
    !isset($_POST['id'], $_POST['nome'], $_POST['quantidade'], $_POST['preco'], $_POST['categoriaID']) ||
    !is_numeric($_POST['id']) ||
    !is_numeric($_POST['quantidade']) ||
    !is_numeric($_POST['preco']) ||
    !is_numeric($_POST['categoriaID'])
) {
    die('Dados inválidos ou incompletos.');
}

$id = (int)$_POST['id'];
$nome = trim($_POST['nome']);
$quantidade = (int)$_POST['quantidade'];
$preco = (float)$_POST['preco'];
$categoriaID = (int)$_POST['categoriaID'];

// Para atualizar os dados cadastrado no banco
$stmt = $pdo->prepare("UPDATE material SET nome = ?, quantidade = ?, preco = ?, categoriaID = ? WHERE id = ?");
$success = $stmt->execute([$nome, $quantidade, $preco, $categoriaID, $id]);

if ($success) {
    // Redireciona para pagina list.php
    header('Location: list.php');
    exit;
} else {
    echo "Erro ao atualizar o material.";
}

?>