<?php 
include './dbConfig.php';
include '../pages/createUser.php';

//Sados enviados do formulário
$nome = trim($_POST['nome'] ?? '');
$senha = trim($_POST['senha'] ?? '');
$email = trim($_POST['email'] ?? '');
$tipo = $_POST['tipoDeUsuario'] ?? '';

$msg = '';

//Seleciona o db
$pdo->exec("USE $db");

if($_SERVER['REQUEST_METHOD']==='POST'){

if(!in_array($tipo,['usuario', 'organizador'])){
    die("Tipo de Usuário inválido");
}

//Tabela de destino
$tabela = $tipo === 'usuario' ? 'usuarios' : 'organizadores';

//Verifica se o nome ou email já existe no db
$stmt = $pdo->prepare("SELECT COUNT(*) FROM $tabela WHERE nome=:nome OR email=:email");
$stmt->execute([
    ':nome' => $nome,
    ':email' => $email
]);

$existe = $stmt->fetchColumn();

if($existe>0){
    header("Location: dbUSer.php?erro=1");
    exit;
} 



//Validar
if(!empty($nome) && !empty($senha)){
    //transformar a senha em hash 
    $senhaParaHash = password_hash($senha, PASSWORD_DEFAULT);

      

    //declaração sql
    $stmt = $pdo->prepare("INSERT INTO $tabela (nome, email, senha) 
    VALUES (:nome, :email, :senha)");

    try{
      //Executa o sql
    $stmt->execute([
        ':nome'=>$nome,
        ':email'=>$email,
        ':senha'=>$senhaParaHash
    ]);
    
    header("Location: dbUser.php?sucesso=1");
    exit;
    
    }catch(PDOException $error){
    
        echo "Error ao tentar criar o usuário";
    }
}


}
?>

