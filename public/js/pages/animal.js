(function () {
	const gallery = document.querySelector('[data-animal-gallery]');
	const interestModal = document.querySelector('[data-adoption-interest-modal]');
	const shareButtons = document.querySelectorAll('[data-share-animal-profile]');
	const shareFeedback = document.querySelector('[data-share-feedback]');

	shareButtons.forEach((shareButton) => shareButton.addEventListener('click', async () => {
		const shareData = {
			title: shareButton.dataset.shareTitle ?? document.title,
			text: shareButton.dataset.shareText ?? '',
			url: window.location.href,
		};

		try {
			if (navigator.share) {
				await navigator.share(shareData);
				return;
			}

			await navigator.clipboard.writeText(shareData.url);
			if (shareFeedback) {
				shareFeedback.textContent = 'Link copiado! Agora é só compartilhar onde quiser.';
			}
		} catch (error) {
			if (error.name !== 'AbortError' && shareFeedback) {
				shareFeedback.textContent = 'Não foi possível compartilhar o perfil. Tente novamente.';
			}
		}
	}));

	if (interestModal) {
		const interestForm = interestModal.querySelector('[data-adoption-interest-form]');
		const openButtons = document.querySelectorAll('[data-adoption-interest-open]');
		const closeButtons = interestModal.querySelectorAll('[data-adoption-interest-close]');
		const panel = interestModal.querySelector('[data-adoption-interest-panel]');
		const feedback = interestModal.querySelector('[data-adoption-interest-feedback]');
		let lastFocusedElement = null;

		const closeModal = () => {
			interestModal.classList.add('hidden');
			interestModal.classList.remove('flex');
			document.body.classList.remove('overflow-hidden');
			lastFocusedElement?.focus();
		};

		const openModal = () => {
			lastFocusedElement = document.activeElement;
			interestModal.classList.remove('hidden');
			interestModal.classList.add('flex');
			document.body.classList.add('overflow-hidden');
			feedback.classList.add('hidden');
			panel.querySelector('input')?.focus();
		};

		openButtons.forEach((button) => {
			button.closest('button')?.addEventListener('click', openModal);
		});

		closeButtons.forEach((button) => button.addEventListener('click', closeModal));

		interestModal.addEventListener('click', (event) => {
			if (event.target === interestModal) {
				closeModal();
			}
		});

		document.addEventListener('keydown', (event) => {
			if (interestModal.classList.contains('hidden')) {
				return;
			}

			if (event.key === 'Escape') {
				closeModal();
			}
		});

		interestForm.addEventListener('submit', (event) => {
			event.preventDefault();
			feedback.textContent = 'Obrigado! A ONG Patinhas da Vila recebeu seu interesse e entrará em contato em breve.';
			feedback.classList.remove('hidden');
			interestForm.reset();
		});
	}

	if (!gallery) {
		return;
	}

	const viewport = gallery.querySelector('[data-animal-gallery-viewport]');
	const thumbnails = [...gallery.querySelectorAll('[data-animal-gallery-thumbnail]')];

	if (!viewport || !thumbnails.length) {
		return;
	}

	const EmblaCarousel = window.EmblaCarousel;
	const embla = typeof EmblaCarousel === 'function'
		? EmblaCarousel(viewport, {
			align: 'start',
			containScroll: false,
			dragFree: false,
			duration: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 0 : 25,
		})
		: null;

	const updateThumbnails = (selectedIndex) => {
		thumbnails.forEach((thumbnail, index) => {
			const isSelected = index === selectedIndex;

			thumbnail.classList.toggle('border-[#b63817]', isSelected);
			thumbnail.classList.toggle('ring-2', isSelected);
			thumbnail.classList.toggle('ring-[#f3cabd]', isSelected);
			thumbnail.classList.toggle('border-[#ebddd7]', !isSelected);
			thumbnail.setAttribute('aria-current', String(isSelected));
		});
	};

	const scrollToIndex = (index) => {
		if (embla) {
			embla.scrollTo(index);
			return;
		}

		viewport.scrollTo({
			left: viewport.clientWidth * index,
			behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
		});
		updateThumbnails(index);
	};

	thumbnails.forEach((thumbnail) => {
		thumbnail.addEventListener('click', () => {
			scrollToIndex(Number(thumbnail.dataset.animalGalleryThumbnail));
		});
	});

	viewport.addEventListener('keydown', (event) => {
		if (!embla) {
			return;
		}

		if (event.key === 'ArrowLeft') {
			event.preventDefault();
			embla.scrollPrev();
		}

		if (event.key === 'ArrowRight') {
			event.preventDefault();
			embla.scrollNext();
		}
	});

	if (embla) {
		viewport.classList.replace('overflow-x-auto', 'overflow-hidden');
		embla.on('select', () => updateThumbnails(embla.selectedScrollSnap()));
		embla.on('reInit', () => updateThumbnails(embla.selectedScrollSnap()));
	} else {
		viewport.addEventListener('scroll', () => {
			updateThumbnails(Math.round(viewport.scrollLeft / viewport.clientWidth));
		}, { passive: true });
	}

	updateThumbnails(embla ? embla.selectedScrollSnap() : 0);
})();
