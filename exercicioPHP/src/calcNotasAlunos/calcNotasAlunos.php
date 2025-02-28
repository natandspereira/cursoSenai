<?php 
       $somarNotas = 0;
       $maiorNota = 0;
       $nomeMaiorNota = '';

       if($_SERVER['REQUEST_METHOD'] === 'POST'){
            for($i = 1; $i <= 10; $i++){
                $nome = $_POST["nome$i"];
                $nota = $_POST["nota$i"];

                $somarNotas += $nota;

                if($nota > $maiorNota){
                    $maiorNota = $nota;
                    $nomeMaiorNota = $nome;
                }
            }

            $media = $somarNotas / 10; 

            echo "<h3>Resultados</h3>";
            echo "A média dos alunos é: " . number_format($media,2) . "<br>";
            echo "O aluno com maior nota: $nomeMaiorNota com nota $maiorNota";
       }else{
         echo '<h2>Cadastrar Alunos</h2>';
         echo '<form method="POST">';

         for($i = 1; $i <= 10; $i++){
            echo"<h4>Aluno $i</h4>";
            echo"Nome: <input type='text' name='nome$i' required><br>";
            echo"Nota: <input type='number' name='nota$i' step='0.1' required><br>";
         }

         echo "<input type='submit' value='Calcular Resultados'>";
         echo "</form>";
       }

       
?>