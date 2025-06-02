<?php
require_once __DIR__ . '/../data/dbConfig.php';

$pdo->exec("USE eventosDB");

$eventos = [];

try {
    $sql = "SELECT titulo, descricao, data, hora, local FROM eventos ORDER BY data, hora";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Em produção, use log e não exiba erro diretamente
    die("Erro ao buscar eventos: " . $e->getMessage());
}
