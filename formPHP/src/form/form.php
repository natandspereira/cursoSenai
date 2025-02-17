<?php 
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $road = htmlspecialchars($_POST['road']);
    $complement = htmlspecialchars($_POST['complement']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $cep = htmlspecialchars($_POST['cep']);

    // Exibe os dados enviados
    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Nome Completo:</strong> " . $name . " " . $lastName . "</p>";
    echo "<p><strong>E-mail:</strong> " . $email . "</p>";
    echo "<p><strong>Telefone:</strong> " . $telephone . "</p>";
    echo "<p><strong>Endereço:</strong> " . $road . ", " . $complement . " - " . $city . ", " . $state . ", CEP: " . $cep . "</p>";
    
} else {
    echo "Dados não enviados.";
}
?>