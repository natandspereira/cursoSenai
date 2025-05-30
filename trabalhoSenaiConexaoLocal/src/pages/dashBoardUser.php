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
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- LINK CSS -->
     <link rel="stylesheet" href="../css/dashBoardUser.css">
</head>
<body>
    <!-- //HEADER -->
    <header>
        <div class="btnMenu">
            <i class="material-icons">menu</i>
        </div>
        <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</p>
    </header>
    <!-- LINHA -->
    <hr class="linha">
    <!-- MENU -->
     <aside class="menu">
        <div class="eventos">
            <a href="event.php">
                <i class="material-icons" id="eventos">event_note</i>
                <label for="eventos">Eventos</label>
            </a>
            
        </div>
        <div class="senha">
            <a href="http://">
                <i class="material-icons">key</i>
                <label for="senha">senha</label>
            </a>
        </div>
         <div class="logout">
            <a href="./dbLogout.php">
                  <i class="material-icons" id="sair">logout</i>
                   <label for="sair">sair</label>
            </a>
           
        </div>
     </aside> 
</body>
</html>