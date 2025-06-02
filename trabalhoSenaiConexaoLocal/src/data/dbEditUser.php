<?php

require './dbConfig.php';


$usuarioLogado = $_SESSION['usuario'] ?? null;

// As duas tabelas que iremos buscar
$tabelas = ['usuarios', 'organizadores'];

// Verifica se veio do POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $senhaAtual = $_POST['senhaAtual'] ?? '';
    $novaSenha = $_POST['novaSenha'] ?? '';
    $confirmarSenha = $_POST['confirmarSenha'] ?? '';
    $email = trim($_POST['email']);

    if (empty($senhaAtual) || empty($novaSenha) || empty($confirmarSenha)) {
        die("Os campos senha atual, nova senha e confirma senha são obrigatórios.");
    }

    if ($novaSenha !== $confirmarSenha) {
        die("As novas senhas não coincidem.");
    }

    $pdo->exec("USE eventosDB");

    $usuario = null;
    $tabelaEncontrada = null;

    // Tenta encontrar o usuário em cada tabela
    foreach ($tabelas as $tabela) {
        $stmt = $pdo->prepare("SELECT * FROM $tabela WHERE nome = :nome");
        $stmt->execute([':nome' => $usuarioLogado]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            $tabelaEncontrada = $tabela;
            break;
        }
    }

    if (!$usuario) {
        die("Usuário não encontrado em nenhuma tabela.");
    }

    if (!password_verify($senhaAtual, $usuario['senha'])) {
        die("Senha atual incorreta.");
    }

    // Atualiza email e senha na tabela correta
    $novaSenhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);

    // Assume que o campo ID da tabela usuarios é usuariosID e na organizadores é organizadoresID
    $idCampo = ($tabelaEncontrada === 'usuarios') ? 'usuariosID' : 'organizadoresID';

    $stmt = $pdo->prepare("UPDATE $tabelaEncontrada SET email = :email, senha = :senha WHERE $idCampo = :id");
    $stmt->execute([
        ':email' => $email,
        ':senha' => $novaSenhaHash,
        ':id' => $usuario[$idCampo]
    ]);

    header("Location: ../pages/dashboardUser.php?atualizado=1");
    exit;
}
?>
