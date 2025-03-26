<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../assets/css/Bank.css">
    <!-- TITLE -->
    <title>Bank</title>
</head>
<body>
   <?php 
        $saque = $_REQUEST['saque'] ?? 0;
   ?>
    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual o valor do saque?</label>
            <input type="number" name="saque" id="saque"
             required value="<?=$saque?>">
            <p>Notas disponiveis: R$100, R$50, R$20, R$10, R$5 e R$2</p>
            <input type="submit" value="sacar">
        </form>
    </main>
    <?php 
        $resto = $saque;
        // 100
        $total100 = floor($resto/100);
        $resto %= 100;
        // 50
        $total50 = floor($resto/50);
        $resto %= 50;
        // 20
        $total20 = floor($resto/20);
        $resto %= 20;
        // 10
        $total10 = floor($resto/10);
        $resto %= 10;
        // 5
        $total5 = floor($resto/5);
        $resto %= 5;
        // 2
        $total2 = floor($resto/2);
        $resto %= 2;
    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque,2,",",".")?> realizado</h2>
        <p>Notas entregues:</p>
        <ul>
           <div class="notas">
                <li>
                    <img src="../assets/img/100-reais.jpg" alt="nota de 100">x<?=$total100?>
                </li>
                <li>
                    <img src="../assets/img/50-reais.jpg" alt="nota de 50"
                    class="nota"> x<?=$total50?>
                </li>
            </div>
            <div class="notas">
                <li>
                    <img src="../assets/img/20-reais.jpg" alt="nota de 20"> x<?=$total20?>
                </li>
                <li>
                    <img src="../assets/img/10-reais.jpg" alt="nota de 10"> x<?=$total10?>
                </li>
            </div>
            <div class="notasDoisCinco">
                <li>
                    <img src="../assets/img/5-reais.jpg" alt="nota de 5"> x<?=$total5?>
                </li>
                <li>
                    <img src="../assets/img/2-reais.jpg" alt="nota de 2"> x<?=$total2?>
                </li>
            </div>
        </ul>
    </section>
</body>
</html>