<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    // Redireciona para o login se não estiver logado
    header("Location: ../../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</p>
    <a href="./dbLogout.php">Logout</a>
</body>
</html>