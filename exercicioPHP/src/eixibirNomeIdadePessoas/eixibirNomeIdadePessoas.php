<?php
$pessoas = array();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    for ($i = 0; $i < 10; $i++) {
        $pessoas[$i] = array(
            "nome" => $_POST["nome" . $i],
            "cidade" => $_POST["cidade" . $i],
            "idade" => $_POST["idade" . $i],
            "sexo" => $_POST["sexo" . $i]
        );
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>

    <form method="POST">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <fieldset>
                <legend>Pessoa <?php echo $i + 1; ?></legend>
                <label for="nome<?php echo $i; ?>">Nome:</label>
                <input type="text" name="nome<?php echo $i; ?>" required><br>

                <label for="cidade<?php echo $i; ?>">Cidade:</label>
                <input type="text" name="cidade<?php echo $i; ?>" required><br>

                <label for="idade<?php echo $i; ?>">Idade:</label>
                <input type="number" name="idade<?php echo $i; ?>" required><br>

                <label for="sexo<?php echo $i; ?>">Sexo:</label>
                <select name="sexo<?php echo $i; ?>" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select><br><br>
            </fieldset>
        <?php endfor; ?>
        <button type="submit">Cadastrar</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Resultado do Cadastro</h2>

        <h3>1. Nomes e Idades:</h3>
        <ul>
            <?php foreach ($pessoas as $pessoa): ?>
                <li><?php echo $pessoa["nome"] . " - " . $pessoa["idade"]; ?></li>
            <?php endforeach; ?>
        </ul>

        <h3>2. Pessoas que moram em Santos:</h3>
        <ul>
            <?php
            foreach ($pessoas as $pessoa) {
                if (strtolower($pessoa["cidade"]) == "santos") {
                    echo "<li>" . $pessoa["nome"] . "</li>";
                }
            }
            ?>
        </ul>

        <h3>3. Pessoas com mais de 18 anos:</h3>
        <ul>
            <?php
            foreach ($pessoas as $pessoa) {
                if ($pessoa["idade"] > 18) {
                    echo "<li>" . $pessoa["nome"] . "</li>";
                }
            }
            ?>
        </ul>

        <h3>4. Quantidade de pessoas do sexo masculino:</h3>
        <p>
            <?php
            $masculino_count = 0;
            foreach ($pessoas as $pessoa) {
                if ($pessoa["sexo"] == "Masculino") {
                    $masculino_count++;
                }
            }
            echo "Total de pessoas masculinas: " . $masculino_count;
            ?>
        </p>
    <?php endif; ?>
</body>
</html>
