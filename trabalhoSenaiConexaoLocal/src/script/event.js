document.addEventListener('DOMContentLoaded', function () {
    const btnEvento = document.getElementById('btnEvent');
    const conteudoEvento = document.getElementById('createEvent');
    const conteudoSenha = document.getElementById('contentPassword');

    btnEvento.addEventListener('click', function (e) {
        e.preventDefault();

        // Oculta o conteúdo de senha
        conteudoSenha.style.display = 'none';

        fetch('event.php')
            .then(response => {
                if (!response.ok) throw new Error('Erro ao carregar o conteúdo.');
                return response.text();
            })
            .then(data => {
                conteudoEvento.innerHTML = data;
                conteudoEvento.style.display = 'flex'; // Mostra conteúdo de evento
            })
            .catch(error => {
                conteudoEvento.innerHTML = '<p>Erro ao carregar a página de eventos.</p>';
                conteudoEvento.style.display = 'flex';
                console.error(error);
            });
    });
});
