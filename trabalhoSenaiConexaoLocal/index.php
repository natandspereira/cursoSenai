<?php 
session_start();
include './src/data/dbLogin.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Conexão Local</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="./src/css/index.css">
</head>
<body>
    <form action="" method="POST">
        <h2>Conexão Local</h2>
        <div class="login">
            <input type="text" name="nome" placeholder="Login">
            <input type="password" name="senha" placeholder="Password">
        </div>
       <div class="btnLogin">
             <button  type="submit" id="login">Login</button>
             <button id="createUser"><a href="./src/pages/createUser.php">criar usuário</a></button>
       </div>
    </form>
</body>
</html>