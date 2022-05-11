const menu = document.querySelectorAll('[data-action=menu]');
menu.forEach( (button) => {
    button.addEventListener('click', (e) => {
        document.body.classList.toggle('menu--active');
    });
});
