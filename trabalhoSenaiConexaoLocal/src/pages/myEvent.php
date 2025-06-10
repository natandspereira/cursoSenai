<?php
session_start();
include '../../src/data/dbConfig.php';

$pdo->exec("USE eventosDB");


if (!isset($_SESSION['organizadoresID'])) {
    die("ID do organizador não encontrado na sessão.");
}

$organizadoresID = $_SESSION['organizadoresID'];
$eventos = [];

try {
   
    $sql = "SELECT titulo, descricao, data, hora, local 
            FROM eventos 
            WHERE organizadoresID = :organizadoresID 
            ORDER BY data, hora";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['organizadoresID' => $organizadoresID]);
    $eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao buscar eventos: " . $e->getMessage());
}
?>





<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Hora</th>
            <th>Local</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($eventos) > 0): ?>
            <?php foreach ($eventos as $evento): ?>
                <tr>
                    <td><?= htmlspecialchars($evento['titulo']) ?></td>
                    <td><?= htmlspecialchars($evento['descricao']) ?></td>
                    <td><?= htmlspecialchars($evento['hora']) ?></td>
                    <td><?= htmlspecialchars($evento['local']) ?></td>
                    <td><?= date('d/m/Y', strtotime($evento['data'])) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">Nenhum evento encontrado para este usuário.</td></tr>
        <?php endif; ?>
    </tbody>
</table>