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
         header("Location: ./src/pages/event.php");
        exit;
    }else{
        $msg = "Usuário não encontrado ou senha incorreta.";
    }
}
?>