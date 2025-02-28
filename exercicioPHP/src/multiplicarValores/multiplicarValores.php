<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar Valores do Vetor</title>
</head>
<body>

<h2>Digite 10 valores numéricos</h2>

<form method="POST">
    <?php
    
    for ($i = 0; $i < 10; $i++) {
        echo "Valor " . ($i + 1) . ": <input type='number' name='valores[]' required><br><br>";
    }
    ?>
    <input type="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $valores = $_POST['valores'];

    
    echo "<h3>Valores Digitados:</h3>";
    echo "<ul>";
    foreach ($valores as $valor) {
        echo "<li>" . $valor . "</li>";
    }
    echo "</ul>";

    
    echo "<h3>Digite um número para multiplicar todos os valores:</h3>";
    echo '<form method="POST">';
    echo 'Número para multiplicar: <input type="number" name="multiplicador" required><br><br>';
    echo '<input type="hidden" name="valores" value="' . htmlspecialchars(serialize($valores)) . '">';
    echo '<input type="submit" value="Multiplicar">';
    echo '</form>';
}


if (isset($_POST['multiplicador'])) {
    
    $multiplicador = $_POST['multiplicador'];
    $valores = unserialize($_POST['valores']);

    
    echo "<h3>Resultados da Multiplicação:</h3>";
    echo "<ul>";
    foreach ($valores as $valor) {
        echo "<li>" . $valor . " * " . $multiplicador . " = " . ($valor * $multiplicador) . "</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>
