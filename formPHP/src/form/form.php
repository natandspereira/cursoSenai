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
    echo "<p><strong>Nome:</strong> " . $name . "</p>";
    echo "<p><strong>Sobrenome:</strong> " . $lastName . "</p>";
    echo "<p><strong>E-mail:</strong> " . $email . "</p>";
    echo "<p><strong>Telefone:</strong> " . $telephone . "</p>";
    echo "<p><strong>Rua:</strong> " . $road . "</p>";
    echo "<p><strong>Complemento:</strong> " . $complement . "</p>";
    echo "<p><strong>Cidade:</strong> " . $city . "</p>";
    echo "<p><strong>Estado:</strong> " . $state . "</p>";
    echo "<p><strong>Cep:</strong> " . $cep . "</p>";
} else {
    echo "Dados não enviados.";
}
?>