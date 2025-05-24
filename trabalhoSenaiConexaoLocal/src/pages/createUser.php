<?php 
if (isset($_GET['erro']) && $_GET['erro'] == 1) {
    echo "<script>alert('Nome ou Email já cadastrado');</script>";
}
if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) {
    echo "<script> 
    alert('Usuário cadastrado com sucesso!');
    window.location.href='../../index.php';
    </script>";
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
    <!-- LINK CSS -->
     <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <form action="../data/dbUser.php" method="POST" id="formulario">
        <h2>criar usuário</h2>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <button href="../data/dbUser.php">criar</button>
    </form>
</body>
</html>