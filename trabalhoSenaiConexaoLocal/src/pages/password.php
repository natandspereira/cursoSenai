<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../../index.php");
    exit;
}
?>

<link rel="stylesheet" href="../css/password.css">


<form action="../data/dbEditUser.php" method="POST">
    <h2>Alterar Senha</h2>
   <div class="container">
    <input type="password" id="senhaAtual" name="senhaAtual" placeholder="Senha atual" required><br><br>
    <input type="password" id="novaSenha" name="novaSenha" placeholder="Nova senha" required><br><br>
    <input type="password" id="confirmarSenha" name="confirmarSenha" placeholder="Confirmar nova senha" required><br><br> 
    <input type="email" name="email" id="email" placeholder="Email"><br><br> 
    <button type="submit">Salvar nova senha</button>
   </div>
</form>
