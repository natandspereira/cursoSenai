<?php 
include '../../src/data/dbConfig.php';

// Validação do ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('ID inválido.');
}

$id = (int)$_GET['id'];

//Para pesquisar material
$stmt = $pdo->prepare("SELECT * FROM material WHERE id = ?");
$stmt->execute([$id]);
$material = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$material) {
    die('Material não encontrado.');
}

//Para pesquisar categorias
$stmt = $pdo->prepare("SELECT * FROM categoria");
$stmt->execute();
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Material</title>
</head>
<body>
    <h2>Editar Material</h2>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($material['id']) ?>">

        <label>
            Nome:
            <input type="text" name="nome" value="<?= htmlspecialchars($material['nome']) ?>" required>
        </label><br><br>

        <label>
            Quantidade:
            <input type="number" name="quantidade" value="<?= htmlspecialchars($material['quantidade']) ?>" required>
        </label><br><br>

        <label>
            Preço:
            <input type="number" step="0.01" name="preco" value="<?= htmlspecialchars($material['preco']) ?>" required>
        </label><br><br>

        <label>
            Categoria:
            <select name="categoriaID" required>
                <option value="">Selecione</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id'] ?>" <?= ($categoria['id'] == $material['categoriaID']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($categoria['nome']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label><br><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>

