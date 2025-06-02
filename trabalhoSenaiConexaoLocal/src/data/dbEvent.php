<?php 
session_start();
require './dbConfig.php';

$pdo->exec("USE eventosDB");

try{

   if(!isset($_SESSION['organizadoresID'])){
      throw new Exception("O usuário não está logado!!");
   }

   $organizadoresID = $_SESSION['organizadoresID'];

    $titulo = $_POST['titulo'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $data = $_POST['data'] ?? '';
    $hora = $_POST['hora'] ?? '';
    $local = $_POST['local'] ?? '';

     $sql = "INSERT INTO eventos (titulo, descricao, data, hora, local, organizadoresID) 
     VALUES (:titulo, :descricao, :data, :hora, :local, :organizadoresID)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':titulo' => $titulo,
        ':descricao' => $descricao,
        ':data' => $data,
        ':hora' => $hora,
        ':local' => $local,
        ':organizadoresID' => $organizadoresID
    ]);
    echo "<script>alert('Evento salvo com sucesso!')</script>";
 }catch (PDOException $e) {
    echo "Erro ao salvar o evento: " . $e->getMessage();
}

?>