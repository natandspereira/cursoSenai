<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = htmlspecialchars($_POST['name']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $road = htmlspecialchars($_POST['road']);
    $complement = htmlspecialchars($_POST['complement']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $cep = htmlspecialchars($_POST['cep']);

    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Nome Completo:</strong> $name $lastName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $telephone</p>";
    echo "<p><strong>Endereço:</strong> $road, $complement - $city, $state, CEP: $cep</p>";

    // File upload handling
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
        $fileUpload = $_FILES['file'];
        $uploadDirectory = __DIR__ . '/uploads/';
        
        $allowedFileTypes = ['image/jpeg', 'image/png', 'application/pdf'];
        $fileType = $fileUpload['type'];

        if (in_array($fileType, $allowedFileTypes)) {
            // Ensure upload folder exists
            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0755, true);
            }

            $fileName = basename($fileUpload['name']);
            $targetFilePath = $uploadDirectory . $fileName;

            if (move_uploaded_file($fileUpload['tmp_name'], $targetFilePath)) {
                echo "<p><strong>Arquivo enviado com sucesso!</strong></p>";
            } else {
                echo "<p><strong>Erro ao enviar o arquivo.</strong></p>";
            }
        } else {
            echo "<p><strong>Tipo de arquivo não permitido.</strong></p>";
        }
    }
}
?>





