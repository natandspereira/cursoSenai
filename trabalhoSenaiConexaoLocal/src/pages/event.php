<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    // Redireciona para o login se não estiver logado
    header("Location: ../../index.php");
    exit;
}
?>

    <link rel="stylesheet" href="../css/event.css">

    

   <form action="../data/dbEvent.php" method="POST">
    <h2>Cadastrar Evento</h2>
        <input type="text" id="titulo" name="titulo" placeholder="Nome" required>
        <input type="text" id="descricao" name="descricao" placeholder="Descrição" required>
        <input type="date" id="data" name="data" required>
        <input type="time" id="hora" name="hora" required>
        <input type="text" id="local" name="local" placeholder="local" required>
        <button type="submit">Salvar</button>
    </form>
