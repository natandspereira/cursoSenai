<?php 
include '../../src/data/dbConfig.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $categoriaID = $_POST['categoriaID'];

    if($nome && $quantidade && $preco && $categoriaID ){
        $sql = "INSERT INTO material (nome, quantidade, preco, categoriaID) 
        VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $quantidade, $preco, $categoriaID]);
    }

    header("Location: register.php");
}
?>