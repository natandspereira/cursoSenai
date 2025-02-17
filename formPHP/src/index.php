<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css//index.css">
    <title>Formulario PHP</title>
</head>

<body>

     <form action="./form/form.php" method="POST">
        <div class="divAllForm"> 
            <div class="divName"> 
                <!-- NOME -->
                <label for="firstName">Nome:</label>
                <input type="text" name="name" id="firstName">
                <!-- NOME -->

                <!-- SOBRENOME -->
                <label for="lastName">Sobrenome:</label>
                <input type="text" name="lastName" id="lastName">
                <!-- SOBRENOME -->
            </div>
            <div class="divEmailAndTelephone"> 
            <!-- EMAIL  -->
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            <!-- EMAIL  --> 

            <!-- TELEFONE -->
               <label for="telephone">Telefone:</label>
                <input type="text" name="telephone" id="telephone">
            <!-- TELEFONE -->
            </div>

           <!-- ENDEREÇO -->
            <div class="divRoadAndComplement"> 
                <label for="road">Rua:</label>
                <input type="text" name="road" id="road">

                <label for="complement">Complemento:</label>
                <input type="text" name="complement" id="complement">
            </div>

            <div class="divCityAndState">             
                <label for="city">Cidade:</label>
                <input type="text" name="city" id="city">

                <label for="state">Estado:</label>
                <input type="text" name="state" id="state">
            </div>

            <div class="divCep"> 
                <label for="cep">CEP:</label>
                <input type="text" name="cep" id="cep">
            </div>
            <!-- ENDEREÇO -->

            <div class="divSubmit"> 
            <!-- BOTÃO -->
            <input type="submit">
            </div>
        </div>
    </form>


    <!-- CÓDIGO PHP -->
    <?php

    ?>
    <!-- CÓDIGO PHP -->
</body>

</html>