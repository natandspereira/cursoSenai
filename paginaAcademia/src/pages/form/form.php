<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configuração de fuso horario
    date_default_timezone_set('America/Sao_Paulo');
    
    // Captura os dados do formulário com validação
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $sobreNome = isset($_POST['sobreNome']) ? htmlspecialchars($_POST['sobreNome']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $telefone = isset($_POST['telefone']) ? htmlspecialchars($_POST['telefone']) : '';
    $rua = isset($_POST['rua']) ? htmlspecialchars($_POST['rua']) : '';
    $complemento = isset($_POST['complemento']) ? htmlspecialchars($_POST['complemento']) : '';
    $cidade = isset($_POST['cidade']) ? htmlspecialchars($_POST['cidade']) : '';
    $estado = isset($_POST['estado']) ? htmlspecialchars($_POST['estado']) : '';
    $cep = isset($_POST['cep']) ? htmlspecialchars($_POST['cep']) : '';
    $pagamento = isset($_POST['pagamento']) ? htmlspecialchars($_POST['pagamento']) : '';
    $plano = isset($_POST['plano']) ? htmlspecialchars($_POST['plano']) : '';
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    // Exibir Data e Hora
    $dataEHora = date("d/m/Y H:i:s");

    // Calcular o IMC
    $imc = $peso / ($altura * $altura);

    // Determinar a classificação
    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $classificacao = "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        $classificacao = "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 34.9) {
        $classificacao = "Obesidade grau 1";
    } elseif ($imc >= 35 && $imc < 39.9) {
        $classificacao = "Obesidade grau 2";
    } else {
        $classificacao = "Obesidade grau 3";
    }

    // HTML e CSS para formatação
    echo '<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dados Recebidos</title>
         <link rel="stylesheet" href="./form.css">
    </head>
    <body>
        <div class="container">
            <h1>Dados Recebidos</h1>';
    
    // Exibe Data e Hora
    echo "<p><strong>Data e Hora de Envio:</strong> $dataEHora</p>";

    // Mostra os dados recebidos
    echo "<p><strong>Nome Completo:</strong> $nome $sobreNome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Endereço:</strong> $rua, $complemento - $cidade, $estado, CEP: $cep</p>";
    echo "<p><strong>Forma de Pagamento:</strong> $pagamento</p>";
    echo "<p><strong>Plano Escolhido:</strong> $plano</p>";
    
    // Exibir o resultado do IMC
    echo "<h2>Resultado do IMC:</h2>";
    echo "<p>IMC: " . number_format($imc, 2) . "</p>";
    echo "<p>Classificação: $classificacao</p>";

    // Verifica o envio do arquivo
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
        $fileUpload = $_FILES['file'];
        $uploadDirectory = __DIR__ . '/uploads/';
        
        $allowedFileTypes = ['image/jpeg', 'image/png', 'application/pdf'];
        $fileType = $fileUpload['type'];

        if (in_array($fileType, $allowedFileTypes)) {
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0755, true);
            }

            $fileName = basename($fileUpload['name']);
            $targetFilePath = $uploadDirectory . $fileName;

            if (move_uploaded_file($fileUpload['tmp_name'], $targetFilePath)) {
                echo "<p class='success'><strong>Arquivo enviado com sucesso!</strong></p>";
            } else {
                echo "<p class='warning'><strong>Erro ao enviar o arquivo.</strong></p>";
            }
        } else {
            echo "<p class='warning'><strong>Tipo de arquivo não permitido. Por favor, envie um arquivo JPEG, PNG ou PDF.</strong></p>";
        }
    } else {
        echo "<p class='warning'><strong>Nenhum arquivo enviado ou houve um erro no envio do arquivo.</strong></p>";
    }

    echo '</div>
    </body>
    </html>';
}
?>
