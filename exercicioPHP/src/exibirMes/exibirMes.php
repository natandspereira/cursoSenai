<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome do Mês</title>
</head>
<body>
    <h1>Verifique o Nome do Mês</h1>

    <form method="POST">
        <label for="mes">Digite um número de 1 a 12:</label>
        <input type="number" name="mes" id="mes" min="1" max="12" required>
        <input type="submit" value="Ver Mês">
    </form>

    <?php
    $meses = 
    [
    "", "Janeiro", "Fevereiro", 
    "Março", "Abril", "Maio", 
    "Junho", "Julho", "Agosto", 
    "Setembro", "Outubro", "Novembro", "Dezembro"
    ];

    if (isset($_POST['mes'])) {
        $mes = (int)$_POST['mes'];
        if ($mes >= 1 && $mes <= 12) {
            echo "<p>O mês correspondente ao número $mes é: " . $meses[$mes] . "</p>";
        } else {
            echo "<p style='color: red;'>Número inválido! Digite um número entre 1 e 12.</p>";
        }
    }
    ?>
</body>
</html>
