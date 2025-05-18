<?php
include '../../src/data/dbConfig.php';

//Checar o ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('ID inválido.');
}

$id = (int)$_GET['id'];

//Checar se exesti o material
$stmt = $pdo->prepare("SELECT * FROM material WHERE id = ?");
$stmt->execute([$id]);
$material = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$material) {
    die('Material não encontrado.');
}

//Pra deletar o material cadastrado no banco de dados
try {
    $stmt = $pdo->prepare("DELETE FROM material WHERE id = ?");
    $stmt->execute([$id]);

    //Redireciona para pagina que exibe a lista de materiais cadastrado
    header('Location: list.php?sucesso=1');
    exit;

} catch (PDOException $e) {
    // Exebi menssagem se tiver algum error
    error_log('Erro ao excluir material: ' . $e->getMessage());
    die('Erro ao excluir o material.');
}
