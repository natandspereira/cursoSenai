<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../assets/css/invitation.css">
    <link rel="stylesheet" href="../assets/css/btnToogle.css">
    <!-- LINK ICON GOOGLE -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,calendar_month,format_paint,toggle_on" />
    <title>Page Invitation</title>
</head>

<body>
    <?php include './upload.php'; ?>
    <div class="container">
        <aside>
            text
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
                        <input type="text" name="start" placeholder="DD/MM/AAAA">
                    </span>
                    <span>
                        <label for="end">Fim</label>
                        <input type="text" name="end" placeholder="DD/MM/AAAA">
                    </span>
                </div>
                <!-- TYPELOCATION -->
                <div class="typeLocation">
                    <span>
                        <label for="type">Tipo</label>
                        <input type="text" name="tyoe">
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
                            Escreva sobre os detalhes do evento
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
                <div class="color">
                    <input type="color" name="color">
                </div>
                <!-- EVENT -->
                <div class="event">
                    <p class="titleSize">Tema do Evento</p>
                    <span>
                        <div class="aniversario selecionado">
                            <img src="../assets/img/aniversario.png" alt="aniversario">
                        </div>

                        <div class="infantil selecionado">
                            <img src="../assets/img/infantil.svg" alt="infantil">
                        </div>
                        <div class="formatura selecionado">
                            <img src="../assets/img/formatura.svg" alt="formatura">
                        </div>
                        <div class="casamento selecionado">
                            <img src="../assets/img/casamento.svg" alt="casamento">
                        </div>
                    </span>
                    <span>
                        <div class="chaDeBebe selecionado">
                            <img src="../assets/img/chaDeBebe.svg" alt="chaDeBebe">
                        </div>
                        <div class="chaDePanela selecionado">
                            <img src="../assets/img/chaDePanela.png" alt="chaDePanela">
                        </div>
                        <div class="carnaval selecionado">
                            <img src="../assets/img/carnaval.svg" alt="carnaval">
                        </div>
                        <div class="pascoa selecionado">
                            <img src="../assets/img/pascoa.svg" alt="pascoa">
                        </div>
                    </span>
                    <span>
                        <div class="saoJoao selecionado">
                            <img src="../assets/img/saoJoao.svg" alt="saoJoao">
                        </div>
                        <div class="haloween selecionado">
                            <img src="../assets/img/haloween.svg" alt="haloween">
                        </div>
                        <div class="natal selecionado">
                            <img src="../assets/img/natal.svg" alt="natal">
                        </div>
                        <div class="outro selecionado">
                            <img src="../assets/img/outro.png" alt="outro">
                        </div>
                    </span>
                </div>
                <!-- CLARO -->
                <div class="claro">
                    <div class="btnToogle">
                        <label class="estilo titleSize">Estilo</label>
                        <span class="material-symbols-outlined">
                            toggle_on
                        </span>
                    </div>

                    <div class="upload">
                        <label class="titleSize" for="fotoDeCapa">Foto de capa</label>
                        <input type="file" name="fotoDeCapa" id="fotoDeCapa" accept="image/*">
                    </div>
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