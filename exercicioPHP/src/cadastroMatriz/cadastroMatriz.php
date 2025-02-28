<?php
// Definindo os registros dos veículos em uma matriz
$veiculos = [
    ["modelo" => "Uno", "fabricante" => "Fiat", "cor" => "prata", "portas" => 4, "ano" => 2014],
    ["modelo" => "Fiesta", "fabricante" => "Ford", "cor" => "preto", "portas" => 2, "ano" => 2015],
    ["modelo" => "Doblo", "fabricante" => "Fiat", "cor" => "verde", "portas" => 4, "ano" => 2013],
    ["modelo" => "Celta", "fabricante" => "GM", "cor" => "preto", "portas" => 2, "ano" => 2012],
    ["modelo" => "March", "fabricante" => "Nissan", "cor" => "prata", "portas" => 2, "ano" => 2015],
    ["modelo" => "Corsa", "fabricante" => "GM", "cor" => "branco", "portas" => 2, "ano" => 2010],
    ["modelo" => "Ranger", "fabricante" => "Ford", "cor" => "prata", "portas" => 4, "ano" => 2012],
    ["modelo" => "Trail Blazer", "fabricante" => "GM", "cor" => "branco", "portas" => 4, "ano" => 2014],
    ["modelo" => "Ecosport", "fabricante" => "Ford", "cor" => "preto", "portas" => 4, "ano" => 2013],
    ["modelo" => "Tucson", "fabricante" => "Hyundai", "cor" => "vinho", "portas" => 4, "ano" => 2012]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
</head>
<body>
    <h1>Cadastro de Veículos</h1>

    <h2>Modelos e Anos dos Veículos:</h2>
    <ul>
        <?php foreach ($veiculos as $veiculo): ?>
            <li><?php echo $veiculo['modelo'] . " - " . $veiculo['ano']; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Veículos Cor Prata:</h2>
    <ul>
        <?php foreach ($veiculos as $veiculo): ?>
            <?php if ($veiculo['cor'] == 'prata'): ?>
                <li><?php echo $veiculo['modelo'] . " - " . $veiculo['cor']; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h2>Veículos com Cor e Quantidade de Portas:</h2>
    <ul>
        <?php foreach ($veiculos as $veiculo): ?>
            <li><?php echo $veiculo['modelo'] . " - " . $veiculo['cor'] . " - " . $veiculo['portas'] . " portas"; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Veículos da Marca Ford:</h2>
    <ul>
        <?php foreach ($veiculos as $veiculo): ?>
            <?php if ($veiculo['fabricante'] == 'Ford'): ?>
                <li><?php echo $veiculo['modelo'] . " - " . $veiculo['fabricante']; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h2>Veículos com Ano de Fabricação 2013 ou Superior:</h2>
    <ul>
        <?php foreach ($veiculos as $veiculo): ?>
            <?php if ($veiculo['ano'] >= 2013): ?>
                <li><?php echo $veiculo['modelo'] . " - " . $veiculo['ano']; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

</body>
</html>
