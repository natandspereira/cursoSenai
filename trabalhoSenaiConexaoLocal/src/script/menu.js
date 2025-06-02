 const btnMenu = document.getElementById('btnMenu');
    const menuLateral = document.getElementById('aside');

    btnMenu.addEventListener('click', () => {
        menuLateral.classList.toggle('exibirMenu');
    });