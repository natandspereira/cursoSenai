<?php 
$host = 'localhost';
$db = 'eventosDB';
$user = 'root';
$password = ''; 

try{
$pdo = new PDO("mysql:host:$host;dbname:$db", $user, $password);

echo "Conectado ao Banco de Dados";

}catch(PDOException $error){
    echo "Erro ao tentar conectar ao banco de dados" . $error->getMessage();
}
?>