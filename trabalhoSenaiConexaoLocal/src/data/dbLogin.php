<?php
include './src/data/dbConfig.php';

$msg = '';

//Seleciona o db
$pdo->exec("USE $db");

if($_SERVER["REQUEST_METHOD"]=== "POST"){
    $nome =$_POST['nome'];
    $senha =$_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome");
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if($usuario && password_verify($senha, $usuario['senha'])){
        $_SESSION['usuario'] = $usuario['nome'];
         header("Location: ./src/pages/dashBoardUser.php");
        exit;
    }

    $stmt = $pdo->prepare("SELECT * FROM organizadores WHERE nome = :nome");
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();

    $organizador = $stmt->fetch(PDO::FETCH_ASSOC);

    if($organizador && password_verify($senha, $organizador['senha'])){
        $_SESSION['usuario'] = $organizador['nome'];
        $_SESSION['tipo'] = 'organizador';
        header("Location: ./src/pages/dashBoardOrganizer.php");
        exit;
    }

}
?>