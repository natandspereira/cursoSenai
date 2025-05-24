<?php 
$host = 'localhost';
$db = 'eventosDB';
$user = 'root';
$password = ''; 

try{
$pdo = new PDO("mysql:host:$host;dbname:$db;charset=utf8", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



}catch(PDOException $error){
    echo "Erro ao tentar conectar ao banco de dados" . $error->getMessage();
}
?>