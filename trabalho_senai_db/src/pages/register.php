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
    <!-- LINK CSS -->
     <link rel="stylesheet" href="../../src/css/register.css">
</head>
<body>
    
    <form action="save.php" method="POST">
        <h2>Cadastro</h2>
        <label>Nome <input type="text" name="nome" required></label>
        <label>Quantidade <input type="number" name="quantidade" required></label>
        <label>Preço <input type="number" step="0.01" name="preco" required></label>
        <label>
            Categoria
            <select name="categoriaID" required>
                <option value="">Selecione</option>
                <?php foreach($categorias as $categoria): ?>
                    <option value="<?=$categoria['id'] ?>"><?= htmlspecialchars($categoria['nome'])?></option>
                <?php endforeach; ?>    
            </select>
        </label>
       <div class="btn">
            <button type="submit">Cadastrar</button>
            <button type="submit"><a href="list.php">materiais</a></button>
            <button type="submit"><a href="../../index.php">voltar</a></button>
       </div>
    </form>
</body>
</html>