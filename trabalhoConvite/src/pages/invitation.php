<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../assets/css/invitation.css">
    <link rel="stylesheet" href="../assets/css/btnToogle.css">
    <!-- LINK ICON GOOGLE -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,calendar_month,format_paint,toggle_on" />
    
    <title>Page Invitation</title>
</head>

<body>
    <!-- <?php include './upload.php'; ?> -->
    <div class="container">
        <aside>
            <img src="../assets/img/Brand.svg" alt="brand">
        </aside>
        <form action="form.php" method="post" enctype="multipart/form-data">
            <h4>Crie seu convite</h4>
            <span class="material-symbols-outlined">
                calendar_month
                <p class="titleSize">Sobre o Evento</p>
            </span>
            <!-- INPUTFORM -->
            <div class="inputForm">
                <label for="title">Título</label>
                <input type="text" name="title" placeholder="Nome do evento">
                <!-- DATE -->
                <div class="date">
                    <span>
                        <label for="start">Inicio</label>
                        <input type="date" name="start" placeholder="DD/MM/AAAA">
                    </span>
                    <span>
                        <label for="end">Fim</label>
                        <input type="date" name="end" placeholder="DD/MM/AAAA">
                    </span>
                </div>
                <!-- TYPELOCATION -->
                <div class="typeLocation">
                    <span>
                        <label for="type">Tipo</label>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                            <label class="btn btn-outline-light" for="btnradio1">Presencial</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-light" for="btnradio2">Online</label>
                        </div>
                    </span>
                    <span>
                        <label for="location">Local</label>
                        <input type="text" name="location" placeholder="Link ou endereço">
                    </span>
                </div>
                <!-- DESCRIPTION -->
                <div class="description">
                    <label for="descriptionLabel">Descrição</label>
                    <textarea
                        name="descriptionLabel" id="descriptionLabel"
                        rows="5" cols="50">
                            
                        </textarea>
                </div>
                <!-- CUSTOMIZATION     -->
                <div class="customization">
                    <span class="material-symbols-outlined">
                        format_paint
                        <p class="titleSize">Personalização</p>
                    </span>
                </div>
                <!-- COLOR -->
                <div class="colorContainer">
                    <input type="color" name="color" id="color" value="#ffffff">
                </div>
                
                <!-- EVENT -->
                <div class="event">
    <p class="titleSize">Tema do Evento</p>
    <span>
        <label class="aniversario">
            <input type="checkbox" class="selecionar-item" id="aniversario">
            <img src="../assets/img/aniversario.png" alt="aniversario">
        </label>

        <label class="infantil">
            <input type="checkbox" class="selecionar-item" id="infantil">
            <img src="../assets/img/infantil.svg" alt="infantil">
        </label>

        <label class="formatura">
            <input type="checkbox" class="selecionar-item" id="formatura">
            <img src="../assets/img/formatura.svg" alt="formatura">
        </label>

        <label class="casamento">
            <input type="checkbox" class="selecionar-item" id="casamento">
            <img src="../assets/img/casamento.svg" alt="casamento">
        </label>
    </span>

    <span>
        <label class="chaDeBebe">
            <input type="checkbox" class="selecionar-item" id="chaDeBebe">
            <img src="../assets/img/chaDeBebe.svg" alt="chaDeBebe">
        </label>

        <label class="chaDePanela">
            <input type="checkbox" class="selecionar-item" id="chaDePanela">
            <img src="../assets/img/chaDePanela.png" alt="chaDePanela">
        </label>

        <label class="carnaval">
            <input type="checkbox" class="selecionar-item" id="carnaval">
            <img src="../assets/img/carnaval.svg" alt="carnaval">
        </label>

        <label class="pascoa">
            <input type="checkbox" class="selecionar-item" id="pascoa">
            <img src="../assets/img/pascoa.svg" alt="pascoa">
        </label>
    </span>

    <span>
        <label class="saoJoao">
            <input type="checkbox" class="selecionar-item" id="saoJoao">
            <img src="../assets/img/saoJoao.svg" alt="saoJoao">
        </label>

        <label class="haloween">
            <input type="checkbox" class="selecionar-item" id="haloween">
            <img src="../assets/img/haloween.svg" alt="haloween">
        </label>

        <label class="natal">
            <input type="checkbox" class="selecionar-item" id="natal">
            <img src="../assets/img/natal.svg" alt="natal">
        </label>

        <label class="outro">
            <input type="checkbox" class="selecionar-item" id="outro">
            <img src="../assets/img/outro.png" alt="outro">
        </label>
    </span>
</div>

                <!-- UPLOAD -->
               <div class="upload">
                        <label class="titleSize" for="fotoDeCapa">Foto de capa</label>
                        <input type="file" name="fotoDeCapa" id="fotoDeCapa" accept="image/*">
                </div>
                <!-- CONTATOS -->
                <div class="contatos">
                        <span class="material-symbols-outlined">
                            account_circle
                            <p class="titleSize">Dados para contato</p>
                        </span>
                        <span class="nome">
                            <label for="name">Nome</label>
                            <input type="text" name="name" placeholder="Nome completo">
                        </span>
                        <span class="emailTelefone">
                            <div> 
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="Email">
                            </div>
                            <div> 
                                    <label for="telefone">Telefone</label>
                                    <input type="text" name="telefone" placeholder="Telefone">
                            </div>
                        </span>
                </div>
                <!-- TERMO -->
                <div class="termo">
                    <p><input type="checkbox" name="termo" id="termo">
                    Li e concordo com os Termos e Condições e com a Política de Privacidade
                    </p>
                    <p><input type="checkbox" name="checkbox" id="checkbox">
                    Aceito receber atualizações e promoções por e-mail
                    </p>
                    <p><input type="checkbox" name="checkbox" id="checkbox">
                    Aceito receber atualizações e promoções por SMS
                    </p>
                </div>
                <!-- BOTÃO GERAR CONVITE -->
                <div class="btnGerarConvite">
                    <button>Gerar convite</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>