<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="./assets/css/invitation.css">
    <!-- LINK ICON GOOGLE -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=calendar_month,format_paint" />
    
    
    <title>Page Invitation</title>
</head>

<body>
    <div class="container">
        <aside>
            text
        </aside>
        <form action="" method="post">
            <h4>Crie seu convite</h4>
            <span class="material-symbols-outlined">
                calendar_month
                <p>Sobre o Evento</p>
            </span>
            <div class="inputForm">
                <label for="title">Título</label>
                <input type="text" placeholder="Nome do evento">

                <div class="date">
                    <span>
                        <label for="start">Inicio</label>
                        <input type="text" placeholder="DD/MM/AAAA">
                    </span>
                    <span>
                        <label for="end">Fim</label>
                        <input type="text" placeholder="DD/MM/AAAA">
                    </span>
                </div>

                <div class="typeLocation">
                    <span>
                        <label for="type">Tipo</label>
                        <input type="text">
                    </span>
                    <span>
                        <label for="location">Local</label>
                        <input type="text" placeholder="Link ou endereço">
                    </span>
                </div>

                <div class="description">
                        <label for="descriptionLabel">Descrição</label>
                        <textarea 
                        name="descriptionLabel" id="descriptionLabel" 
                        rows="5" cols="50"> 
                            Escreva sobre os detalhes do evento
                        </textarea>
                </div>

                <div class="customization">
                    <span class="material-symbols-outlined">
                        format_paint
                        <p>Personalização</p>
                    </span>
                </div>

                <div class="color">
                    <input type="color">
                </div>
            </div>
        </form>
    </div>
</body>

</html>