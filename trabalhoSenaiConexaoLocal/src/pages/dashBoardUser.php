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
    <!-- LINK ICON GOOGLE -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=logout" />
    <!-- LINK CSS -->
     <link rel="stylesheet" href="../css/dashBoardUser.css">
</head>
<body>
    <header>
        <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</p>
        <div class="logout">
            <p>Sair</p>
            <a href="./dbLogout.php">
                <span class="material-symbols-outlined">
                    logout
                </span>
            </a>
        </div>
    </header>
    <form action="">
        
    </form>
    
</body>
</html>