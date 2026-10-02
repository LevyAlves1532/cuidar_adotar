(function () {
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const menu = document.querySelector('[data-menu]')

    menuToggle?.addEventListener('click', () => {
        const isOpen = menuToggle.getAttribute('aria-expanded') === 'true'

        menuToggle.setAttribute('aria-expanded', String(!isOpen))
        menu?.classList.toggle('hidden', isOpen)
    });
})()
