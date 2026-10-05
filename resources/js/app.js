const initializeMobileMenu = () => {
	const menuToggle = document.querySelector('[data-menu-toggle]');
	const menu = document.querySelector('[data-menu]');

	if (!menuToggle || !menu) {
		return;
	}

	const closeMenu = () => {
		menu.classList.add('hidden');
		menuToggle.setAttribute('aria-expanded', 'false');
	};

	menuToggle.addEventListener('click', (event) => {
		event.stopPropagation();
		const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';

		menu.classList.toggle('hidden', isOpen);
		menuToggle.setAttribute('aria-expanded', String(!isOpen));
	});

	document.addEventListener('click', (event) => {
		if (!menu.contains(event.target) && !menuToggle.contains(event.target)) {
			closeMenu();
		}
	});

	menu.querySelectorAll('a').forEach((link) => {
		link.addEventListener('click', closeMenu);
	});

	document.addEventListener('keydown', (event) => {
		if (event.key === 'Escape') {
			closeMenu();
		}
	});
};

if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', initializeMobileMenu, { once: true });
} else {
	initializeMobileMenu();
}
