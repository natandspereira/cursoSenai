<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'estoque_construcao';

try {
    // Criar a conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Criar o banco de dados se não existir
    $sql = "CREATE DATABASE IF NOT EXISTS estoque_construcao";
    $pdo->exec($sql);

    //Seleciona o banco de dados
    $pdo->exec("USE $db");

    // Criar a tabela categoria com a chave única
    $sql = "CREATE TABLE IF NOT EXISTS categoria (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL UNIQUE
    )";
    $pdo->exec($sql);

    // Criar a tabela material
    $sql = "CREATE TABLE IF NOT EXISTS material (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        quantidade INT NOT NULL,
        preco DECIMAL(10,2) NOT NULL,
        categoriaID INT NOT NULL,
        FOREIGN KEY (categoriaID) REFERENCES categoria(id)
    )";
    $pdo->exec($sql);

    // Categorias a serem inseridas
    $categorias = ['ferramentas', 'eletrico'];

    // Inserir categorias
    $sql = "INSERT IGNORE INTO categoria (nome) VALUES (?)";
    $stmt = $pdo->prepare($sql);

    foreach ($categorias as $categoria) {
        $stmt->execute([$categoria]);
    }

    

} catch (PDOException $error) {
    echo "Erro ao tentar criar o banco de dados: " . $error->getMessage();
}

?>
