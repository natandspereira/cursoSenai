<!-- CÓDIGO PHP -->
<?php
    $numerosNegativos = 0;
    $numerosPositivos = 0;
    $numerosPares = 0;
    $numerosImpares = 0;

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $numeros = $_POST['numeros'];

        foreach($numeros as $numero){
            if($numero < 0){
                $numerosNegativos++;
            }elseif($numero >0){
                $numerosPositivos++;
            }

            if($numero % 2 == 0){
                $numerosPares++;
            }else{
                $numerosImpares++;
            }
        }
    }
?>
<!-- CÓDIGO PHP -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir valores Pares/Impares/Positivos/Negativos</title>
</head>
<body>
    <h3>Entre com 10 números</h3>
    <form method="post">
        <?php 
             for ($i = 1; $i <= 10; $i++) {
                echo "<label for='numero$i'>Número $i:</label>";
                echo "<input type='number' name='numeros[]' id='numero$i' required><br><br>";
            }
        ?>
         <input type="submit" value="Enviar">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <h3>Resultado:</h3>
        <p>Quantos números negativos: <?php echo $numerosNegativos; ?></p>
        <p>Quantos números positivos: <?php echo $numerosPositivos; ?></p>
        <p>Quantos números pares: <?php echo $numerosPares; ?></p>
        <p>Quantos números ímpares: <?php echo $numerosImpares; ?></p>
    <?php endif; ?>
</body>
</html>

