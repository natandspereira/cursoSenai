<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação de Vetores</title>
</head>
<body>
    <h1>Multiplicação de Vetores</h1>

    <form method="post">
        <?php
        
        $vetor_a = array();
        $vetor_b = array();
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            for ($i = 0; $i < 10; $i++) {
                $vetor_a[$i] = $_POST["vetor_a_$i"];
                $vetor_b[$i] = $_POST["vetor_b_$i"];
            }
            
            
            echo "<h2>Resultados da multiplicação dos vetores:</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>Índice</th>
                        <th>vetor_a</th>
                        <th>vetor_b</th>
                        <th>Multiplicação</th>
                    </tr>";
            for ($i = 0; $i < 10; $i++) {
                $resultado = $vetor_a[$i] * $vetor_b[$i];
                echo "<tr>
                        <td>$i</td>
                        <td>{$vetor_a[$i]}</td>
                        <td>{$vetor_b[$i]}</td>
                        <td>$resultado</td>
                    </tr>";
            }
            echo "</table>";
        }

        
        echo "<h3>Insira os valores dos vetores:</h3>";
        echo "<h4>Vetor A:</h4>";
        for ($i = 0; $i < 10; $i++) {
            echo "Vetor A[$i]: <input type='number' name='vetor_a_$i' required><br>";
        }

        echo "<h4>Vetor B:</h4>";
        for ($i = 0; $i < 10; $i++) {
            echo "Vetor B[$i]: <input type='number' name='vetor_b_$i' required><br>";
        }

        
        echo "<br><input type='submit' value='Calcular Multiplicação'>";
        ?>
    </form>
</body>
</html>
