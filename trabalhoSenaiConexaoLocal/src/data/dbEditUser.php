<?php 
include './dbConfig.php';

$nomeUsuario = $_SESSION['usuario'];
$tabela = $tipo === 'usuario' ? 'usuarios' : 'organizadores';

$stmt = $pdo->prepare("SELECT * FROM $tipo WHERE nome = :nome");
$stmt->execute([':nome'=>$nomeUsuario]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario){
    die("Usuário não encontrado");
}


if($_SERVER["REQUEST_METHOD"]==="POST"){
    $nomeAlterado = trim($_POST['nome']);
    $emailAlterado = trim($_POST['email']);
    $senhaAlterada = trim($_POST['senha']);
}

if(!empty($nomeAlterado) && !empty($emailAlterado)){
    $paramt = [
        ':nome' => $nomeAlterado,
        ':email' => $emailAlterado,
        ':id' => $usuario['id']
    ];

    $sql = "UPDATE $tabela SET nome = :nome, email = :email";

    if(!empty($senhaAlterada)){
          $novaSenhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
          $sql .=", senha = :senha";
          $paramt[':senha'] =  $senhaAlterada;
    }

     $stmt = $pdo->prepare($sql);
     $stmt->execute($params);

      $_SESSION['usuario'] = $novoNome;
      header("Location: dashboardUser.php?atualizado=1");
      exit;

}

?>