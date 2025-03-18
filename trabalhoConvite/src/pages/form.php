<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os valores dos campos de texto, data e cor
    $title = $_POST["title"] ?? "";
    $start = $_POST["start"] ?? "";
    $end = $_POST["end"] ?? "";
    $location = $_POST["location"] ?? "";
    $description = $_POST["descriptionLabel"] ?? "";
    $color = $_POST["color"] ?? "";
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefone = $_POST["telefone"] ?? "";

    // Captura o valor do botão de rádio selecionado
    $tipoEvento = $_POST["btnradio"] ?? "Presencial";

    // Captura os valores dos checkboxes
    $termo = isset($_POST["termo"]) ? "Aceito" : "Não aceito";
    $promocoesEmail = isset($_POST["checkbox"][0]) ? "Sim" : "Não";
    $promocoesSMS = isset($_POST["checkbox"][1]) ? "Sim" : "Não";

    // Captura o arquivo enviado
    if (isset($_FILES["fotoDeCapa"]) && $_FILES["fotoDeCapa"]["error"] == 0) {
        $fotoNome = $_FILES["fotoDeCapa"]["name"];
        $fotoTemp = $_FILES["fotoDeCapa"]["tmp_name"];
        $destino = "uploads/" . $fotoNome; // Define o destino do upload
        
        // Move o arquivo para a pasta de destino
        if (move_uploaded_file($fotoTemp, $destino)) {
            $fotoStatus = "Upload realizado com sucesso!";
        } else {
            $fotoStatus = "Erro no upload da foto.";
        }
    } else {
        $fotoStatus = "Nenhuma foto enviada.";
    }

   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Capturados</title>
    <link rel="stylesheet" href="../assets/css/form.css">
</head>
<body>
<div class="container">
        <h2>Dados Capturados</h2>
        <div class="data">
            <?php 
            echo "<p><span>Título:</span> $title</p>";
            echo "<p><span>Início:</span> $start</p>";
            echo "<p><span>Fim:</span> $end</p>";
            echo "<p><span>Local:</span> $location</p>";
            echo "<p><span>Descrição:</span> $description</p>";
            echo "<p><span>Cor escolhida:</span> $color</p>";
            echo "<p><span>Nome:</span> $name</p>";
            echo "<p><span>Email:</span> $email</p>";
            echo "<p><span>Telefone:</span> $telefone</p>";
            echo "<p><span>Tipo de evento:</span> $tipoEvento</p>";
            echo "<p><span>Aceitou os Termos?</span> $termo</p>";
            echo "<p><span>Aceita promoções por Email?</span> $promocoesEmail</p>";
            echo "<p><span>Aceita promoções por SMS?</span> $promocoesSMS</p>";
            echo "<p><span>Status do Upload:</span> $fotoStatus</p>";
            ?>
        </div>
    </div>
</body>
</html>