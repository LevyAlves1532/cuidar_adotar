(function () {
	const gallery = document.querySelector('[data-animal-gallery]');

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
