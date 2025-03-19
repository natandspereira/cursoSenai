<!DOCTYPE html> 
<html lang="pt-br"> 

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Pré-conexão com o servidor do Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Pré-conexão com o servidor de fontes do Google com crossorigin -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
    rel="stylesheet"> <!-- Inclusão da fonte Poppins -->
    <!-- GOOGLE FONTS -->

    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous"> <!-- Link para o CSS do Bootstrap -->
    <!-- LINK BOOTSTRAP -->

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous" defer> 
    </script> <!-- Link para o JavaScript do Bootstrap -->
    <!-- SCRIPT BOOTSTRAP -->

    <!-- LINK CSS -->
    <link rel="stylesheet" href="./css/index.css"> <!-- Link para o arquivo CSS local -->
    <!-- LINK CSS -->

    <!-- LINK FONT AWESOME -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Link para o Font Awesome, ícones -->
    <!-- LINK FONT AWESOME -->

    <title>Página Academia</title> <!-- Título da página, exibido na aba do navegador -->
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="divHeade"> <!-- Container principal do cabeçalho -->
            <div class="divLogo"> <!-- Container do logo -->
                <h6>Energy Gym</h6> <!-- Nome da academia -->
            </div>

            <ul> <!-- Menu de navegação -->
                <li><a href="#">Home</a></li> <!-- Link para a página inicial -->
                <li><a href="../src/pages/contrate/contrate.php">Contrate</a></li> <!-- Link para a página de contratação -->
            </ul>
        </div>
    </header>
    <!-- HEADER -->

    <!-- CAROUSEL (imagens que passam de forma automática) -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"> <!-- Início do carrossel de imagens -->
        <div class="carousel-inner"> <!-- Conteúdo do carrossel -->
            <div class="carousel-item active"> <!-- Primeira imagem ativa -->
                <img src="../public/img/img1.jpg" class="d-block w-100" alt="img1"> <!-- Imagem 1 -->
            </div>
            <div class="carousel-item"> <!-- Segunda imagem -->
                <img src="../public/img/img2.jpg" class="d-block w-100" alt="img2"> <!-- Imagem 2 -->
            </div>
            <div class="carousel-item"> <!-- Terceira imagem -->
                <img src="../public/img/img3.jpg" class="d-block w-100" alt="img3"> <!-- Imagem 3 -->
            </div>
        </div>
    </div>
    <!-- CAROUSEL -->

    <!-- CONTENT (conteúdo do site) -->
    <h6>Venha Treinar na <span>Energy Gym</span></h6> <!-- Título de introdução -->
    <div class="divContent"> <!-- Container para o conteúdo -->
        <p> <!-- Descrição do plano básico -->
            <span class="spanTitle">Plano Básico – Energia Inicial</span><br> <!-- Título do plano -->
            <strong>Preço: R$ 99,90/mês</strong><br> 
            <!-- Preço do plano -->
            <br>
            <strong>Incluso:</strong><br> <!-- O que está incluso no plano -->
            <i class="fas fa-check check"></i> Acesso ilimitado à academia durante o horário de funcionamento.<br> 
            <!-- Benefício -->
            <br>
            <i class="fas fa-check check"></i> Uso de equipamentos de musculação e cardio.<br> 
            <!-- Benefício -->
            <br>
            <i class="fas fa-check check"></i> Acompanhamento inicial de um instrutor.<br> 
            <!-- Benefício -->
            <br>
            <i class="fas fa-check check"></i> Ideal para: Pessoas que estão começando a treinar e querem algo acessível. 
            <!-- Benefício -->
        </p>

        <p> <!-- Descrição do plano intermediário -->
            <span class="spanTitle">Plano Intermediário – Energia Plus</span><br> <!-- Título do plano -->
            <strong>Preço: R$ 179,90/mês</strong><br> <!-- Preço do plano -->
            <br>
            <strong>Incluso:</strong><br> <!-- O que está incluso no plano -->
            <i class="fas fa-check check"></i> Acesso ilimitado à academia durante o horário de funcionamento.<br> 
            <!-- Benefício -->
            <br>
            <i class="fas fa-check check"></i> Uso completo de equipamentos de musculação, cardio e áreas específicas (como funcional).<br> 
            <!-- Benefício -->
            <br>
            <i class="fas fa-check check"></i> Acompanhamento personalizado com um instrutor a cada 30 dias.<br> 
            <!-- Benefício -->
            <br>
            <i class="fas fa-check check"></i> Participação em até 3 aulas coletivas por semana (ex: yoga, spinning, pilates, etc.).<br> 
            <!-- Benefício -->
            <br>
            <i class="fas fa-check check"></i> Ideal para: Pessoas que já têm algum nível de experiência e querem um plano mais completo. 
            <!-- Benefício -->
        </p>

        <p> <!-- Descrição do plano premium -->
            <span class="spanTitle">Plano Premium – Energia Master</span><br> <!-- Título do plano -->
            <strong>Preço: R$ 299,90/mês</strong><br> <!-- Preço do plano -->
            <br>
            <strong>Incluso:</strong><br> <!-- O que está incluso no plano -->
            <i class="fas fa-check check"></i> Acesso ilimitado à academia 24h por dia (com chave de acesso).<br> 
            <!-- Benefício -->

            <i class="fas fa-check check"></i> Uso completo de todos os equipamentos de musculação, cardio, área funcional e outras áreas exclusivas.<br> 
            <!-- Benefício -->

            <i class="fas fa-check check"></i> Acompanhamento personalizado semanal com um instrutor.<br> 
            <!-- Benefício -->

            <i class="fas fa-check check"></i> Participação em aulas coletivas ilimitadas.<br> 
            <!-- Benefício -->

            <i class="fas fa-check check"></i> Descontos em eventos e workshops exclusivos.<br> 
            <!-- Benefício -->

            <i class="fas fa-check check"></i> Acesso ao spa e serviços adicionais, como massagem relaxante.<br> 
            <!-- Benefício -->

            <i class="fas fa-check check"></i> Ideal para: Pessoas que buscam um plano completo e com um alto nível de personalização e benefícios extras. 
            <!-- Benefício -->
        </p>
    </div>
    <!-- CONTENT -->

    <!-- BOTÃO CONTRATE -->
    <div class="divBtnContrate"> <!-- Container do botão -->
        <button><a href="./pages/contrate/contrate.php">Contrate</a></button> <!-- Link para a página de contratação -->
    </div>
    <!-- BOTÃO CONTRATE -->

    <!-- FOOTER -->
    <footer>
        <h6>Energy Gym</h6> <!-- Nome da academia no rodapé -->
        <p class="pEndereco"> <!-- Endereço e informações de contato -->
            Rua Sem Nome, nº 000, Maceió, CEP 00000-000<br>
            faleconosco@teste.com<br>
            ENERGY GYM S.A<br>
            CNPJ: 00.000.000/0000-00
        </p>
    </footer>
    <!-- FOOTER -->
</body>

</html>
