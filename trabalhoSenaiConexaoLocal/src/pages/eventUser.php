<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../../index.php");
    exit;
}

require_once __DIR__ . '/../data/dbEventUser.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Eventos</title>
    <link rel="stylesheet" href="../css/eventUser.css">
    
</head>
<body>
    
<div class="tabela">
    <h2>Eventos Cadastrados</h2>
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
        <?php if (is_array($eventos) && count($eventos) > 0): ?>
            <?php foreach ($eventos as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['titulo']) ?></td>
                    <td><?= htmlspecialchars($row['descricao']) ?></td>
                    <td><?= htmlspecialchars($row['hora']) ?></td>
                    <td><?= htmlspecialchars($row['local']) ?></td>
                    <td><?= date('d/m/Y', strtotime($row['data'])) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">Nenhum evento encontrado.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
</div>

</body>
</html>
