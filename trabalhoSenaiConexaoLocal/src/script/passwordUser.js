document.addEventListener('DOMContentLoaded', function () {
    const btnSenha = document.getElementById('btnSenha');
    const conteudoSenha = document.getElementById('contentPasswordUser');
    const conteudoEvento = document.getElementById('contentEventUser');

    btnSenha.addEventListener('click', function (e) {
        e.preventDefault();

        // Oculta o conteúdo de eventos
        conteudoEvento.style.display = 'none';

        fetch('passwordUser.php')
            .then(response => {
                if (!response.ok) throw new Error('Erro ao carregar o conteúdo.');
                return response.text();
            })
            .then(data => {
                conteudoSenha.innerHTML = data;
                conteudoSenha.style.display = 'flex'; // Mostra conteúdo de senha
            })
            .catch(error => {
                conteudoSenha.innerHTML = '<p>Erro ao carregar a página de senha.</p>';
                conteudoSenha.style.display = 'flex';
                console.error(error);
            });
    });
});
