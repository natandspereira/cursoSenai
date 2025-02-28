<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Contrária</title>
</head>
<body>

    <form method="POST">
        <?php
       
        for ($i = 1; $i <= 10; $i++) {
            echo "<input type='text' name='valor$i' placeholder='Valor $i'><br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $valores = [];
        
        
        for ($i = 1; $i <= 10; $i++) {
            $valores[] = $_POST["valor$i"];
        }
        
       
        echo "<h2>Valores na ordem contrária:</h2>";
        for ($i = 9; $i >= 0; $i--) {
            echo $valores[$i] . "<br>";
        }
    }
    ?>

</body>
</html>
