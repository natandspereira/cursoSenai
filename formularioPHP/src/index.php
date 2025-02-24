<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Formulario PHP</title>
</head>

<body>
    <form action="./form/form.php" method="POST" enctype="multipart/form-data">
        <h1>Cadastro</h1>

        <div class="divPeopleInformation">
            <div class="divLabelPersonalData">
                <label for="personalData">Dados Pessoais</label>
            </div>

            <!-- DIV FIRST NAME AND LAST NAME -->
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
            <!-- DIV FIRST NAME AND LAST NAME -->

            <!-- DIV EMAIL AND TELEPHONE -->
            <div class="divEmailAndTelephone">
                <!-- EMAIL -->
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <!-- EMAIL -->

                <!-- TELEFONE -->
                <label for="telephone">Telefone:</label>
                <input type="text" name="telephone" id="telephone">
                <!-- TELEFONE -->
            </div>
            <!-- DIV EMAIL AND TELEPHONE -->
        </div>

        <!-- DIV ADDRES -->
        <div class="divAddress">
            <label for="address">Endereço</label>

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
        </div>
        <!-- ENDEREÇO -->

        <!-- DIV SUBMIT -->
            <div class="divSubmit">
                <input type="submit">
            </div>
        <!-- DIV SUBMIT -->

        <!-- DIV UPLOAD -->
            <div class="divUpload">
                <input type="file" name="file" value="Upload">
            </div>
        <!-- DIV UPLOAD -->
       
    </form>
</body>

</html>
