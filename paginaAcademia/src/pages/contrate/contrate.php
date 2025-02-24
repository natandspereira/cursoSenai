<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- GOOGLE FONTS (fonte Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Pré-carrega a conexão com os servidores do Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Pré-carrega a conexão com os servidores do Google Fonts (com dados cruzados permitidos) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Inclui a fonte "Poppins" do Google Fonts no site -->
    <!-- GOOGLE FONTS -->

    <!-- LINK CSS (arquivo de estilo do formulario) -->
    <link rel="stylesheet" href="./contrate.css">
    <!-- Conecta o arquivo CSS "contrate.css" para estilizar a página -->
    <!-- LINK CSS -->

    <title>Contrate</title>
    <!-- Define o título da página que aparecerá na aba do navegador -->
</head>

<body>
    <!-- FORM (formulario para cadastro) -->
    <form action="../form/form.php" method="POST" enctype="multipart/form-data">
    <!-- Inicia o formulário, que será enviado para o script PHP em "form.php", usando o método POST e permitindo envio de arquivos -->

        <!-- TITULO (titulo do formulario) -->
        <h1>Energy Gym</h1>
        <!-- Exibe o título principal do formulário -->

        <!-- DIV CONTAINER (div que contem todos os input do formulario) -->
        <div class="divContainer">
        <!-- Container que agrupa todos os campos do formulário -->

            <!-- NOME (inputs que recebem nome e sobrenome) -->
            <span>
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <!-- Campo para o nome do usuário, obrigatório -->
                <input type="text" name="sobreNome" id="sobreNome" placeholder="Sobrenome" required>
                <!-- Campo para o sobrenome do usuário, obrigatório -->
            </span>
            <!-- NOME -->

            <!-- EMAILTELEFONE (inputs que recebem email e telefone) -->
            <span>
                <input type="email" name="email" id="email" placeholder="Email">
                <!-- Campo para o e-mail do usuário -->
                <input type="number" name="telefone" id="telefone" placeholder="Telefone" required>
                <!-- Campo para o telefone do usuário, obrigatório -->
            </span>
            <!-- EMAILTELEFONE -->

            <!-- ENDEREÇO (inputs que recebem dados de endereço, [rua, complemento, cidade, estado, cep]) -->
            <span>
                <input type="text" name="rua" placeholder="Rua" required>
                <!-- Campo para o nome da rua, obrigatório -->
                <input type="text" name="complemento" placeholder="Complemento">
                <!-- Campo para o complemento do endereço (opcional) -->
            </span>

            <span class="cidadeEstadoCep">
                <input type="text" name="cidade" placeholder="Cidade" required>
                <!-- Campo para a cidade, obrigatório -->
                <input type="text" name="estado" placeholder="Estado" required>
                <!-- Campo para o estado, obrigatório -->
                <input type="text" name="cep" placeholder="CEP">
                <!-- Campo para o CEP, opcional -->
            </span>
            <!-- ENDEREÇO -->

            <!-- PLANO DE PAGAMENTO (div que exibe as opções de plano e pagamento) -->
            <div class="planoPagamento">

                <!-- OPÇÕES DE PLANO -->
                <select class="escolhaUmPlano" name="plano" id="plano" required>
                <!-- Campo de seleção para escolha do plano, obrigatório -->
                    <option value="" disabled selected>Escolha um plano</option>
                    <!-- Opção inicial que solicita ao usuário escolher um plano -->
                    <option value="Plano Básico – Energia Inicial">Plano Básico – Energia Inicial</option>
                    <!-- Opção de plano básico -->
                    <option value="Plano Intermediário – Energia Plus">Plano Intermediário – Energia Plus</option>
                    <!-- Opção de plano intermediário -->
                    <option value="Plano Premium – Energia Master">Plano Premium – Energia Master</option>
                    <!-- Opção de plano premium -->
                </select>
                <!-- OPÇÕES DE PLANO -->

                <!-- FORMAS DE PAGAMENTO -->
                <select class="formasDePagamento" name="pagamento" id="pagamento" required>
                <!-- Campo de seleção para escolha da forma de pagamento, obrigatório -->
                    <option value="" disabled selected>Escolha uma forma de pagamento</option>
                    <!-- Opção inicial que solicita ao usuário escolher uma forma de pagamento -->
                    <option value="cartao">Cartão</option>
                    <!-- Opção de pagamento por cartão -->
                    <option value="boleto">Boleto</option>
                    <!-- Opção de pagamento por boleto -->
                    <option value="pix">Pix</option>
                    <!-- Opção de pagamento por Pix -->
                </select>
                <!-- FORMAS DE PAGAMENTO -->

            </div>
            <!-- PLANO DE PAGAMENTO -->

            <!-- DIV IMC -->
            <span>
                <input type="number" name="peso" id="peso" step="0.1" placeholder="Peso(kg) Ex: 70.5" required>
                <!-- Campo para o peso do usuário, obrigatório e com formato decimal -->
                <input type="number" name="altura" id="altura" step="0.01" placeholder="Altura(m) Ex: 1.75" required>
                <!-- Campo para a altura do usuário, obrigatório e com formato decimal -->
            </span>
            <!-- DIV IMC -->

            <!-- DIV UPLOAD (div que exibe a opção de upload) -->
            <div class="divUpload">
                <input type="file" name="file" value="Upload">
                <!-- Campo de upload de arquivo -->
            </div>
            <!-- DIV UPLOAD -->

            <!-- DIV SUBMIT (div que exibe botão [submit], para envio do formulário) -->
            <div class="divSubmit">
                <input type="submit" value="Enviar">
                <!-- Botão de envio do formulário -->
            </div>
            <!-- DIV SUBMIT -->

        </div>
        <!-- DIV CONTAINER -->
    </form>
    <!-- FORM -->
</body>

</html>
