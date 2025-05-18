<?php 
include '../../src/data/dbConfig.php';

$stmt = $pdo->prepare("SELECT * FROM categoria");
$stmt->execute();
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="save.php" method="POST">
        <label>Nome: <input type="text" name="nome" required></label>
        <label>Quantidade: <input type="number" name="quantidade" required></label>
        <label>Preço: <input type="number" step="0.01" name="preco" required></label>
        <label>
            Categoria:
            <select name="categoriaID" required>
                <option value="">Selecione</option>
                <?php foreach($categorias as $categoria): ?>
                    <option value="<?=$categoria['id'] ?>"><?= htmlspecialchars($categoria['nome'])?></option>
                <?php endforeach; ?>    
            </select>
        </label>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>