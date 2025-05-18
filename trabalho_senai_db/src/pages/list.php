<?php
include '../../src/data/dbConfig.php';

// Configurações de filtro e ordenação
$orderBy = isset($_GET['order_by']) ? $_GET['order_by'] : 'nome'; 
$orderDir = isset($_GET['order_dir']) ? $_GET['order_dir'] : 'ASC'; 

// Consulta por ordenação
$stmt = $pdo->prepare("SELECT m.*, c.nome AS categoria_nome FROM material m 
                       LEFT JOIN categoria c ON m.categoriaID = c.id
                       ORDER BY m.{$orderBy} {$orderDir}");
$stmt->execute();
$materiais = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiais Cadastrados</title>
</head>
<body>
    <h2>Materiais Cadastrados</h2>

    <form method="get">
        <label for="order_by">Ordenar por:</label>
        <select name="order_by" id="order_by">
            <option value="nome" <?= ($orderBy == 'nome') ? 'selected' : '' ?>>Nome</option>
            <option value="quantidade" <?= ($orderBy == 'quantidade') ? 'selected' : '' ?>>Quantidade</option>
            <option value="id" <?= ($orderBy == 'id') ? 'selected' : '' ?>>ID</option>
        </select>

        <label for="order_dir">Ordem:</label>
        <select name="order_dir" id="order_dir">
            <option value="ASC" <?= ($orderDir == 'ASC') ? 'selected' : '' ?>>Crescente</option>
            <option value="DESC" <?= ($orderDir == 'DESC') ? 'selected' : '' ?>>Decrescente</option>
        </select>

        <button type="submit">Aplicar Filtro</button>
    </form>

    <?php if (count($materiais) > 0): ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materiais as $material): ?>
                  <tr style="<?= $material['quantidade'] <= 5 ? 'background-color: #ff0000; color: #000;' : '' ?>">  
                        <td><?= $material['id'] ?></td>
                        <td><?= htmlspecialchars($material['nome']) ?></td>
                        <td><?= $material['quantidade'] ?></td>
                        <td>R$ <?= number_format($material['preco'], 2, ',', '.') ?></td>
                        <td><?= htmlspecialchars($material['categoria_nome']) ?></td>
                        <td>
                            <a href="edit.php?id=<?= $material['id'] ?>">Editar</a> |
                            <a href="delete.php?id=<?= $material['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este material?');">Deletar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum material cadastrado.</p>
    <?php endif; ?>
</body>
</html>
