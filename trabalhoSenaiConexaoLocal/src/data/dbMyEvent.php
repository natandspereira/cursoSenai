<?php 
session_start();
include './dbConfig.php';

// Verifica se a sessão existe antes de acessar
if (!isset($_SESSION['organizadores']['organizadoresID'])) {
    die("ID do organizador não encontrado na sessão.");
}

$organizadoresID = $_SESSION['organizadores']['organizadoresID'];

try {
    $stmt = $pdo->prepare("SELECT * FROM organizadores WHERE organizadoresID = :organizadoresID ORDER BY data DESC");
    $stmt->execute([
        'organizadoresID' => $organizadoresID
    ]);

    $eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $erro) {
    echo "Erro ao buscar eventos: " . $erro->getMessage();
}
?>
