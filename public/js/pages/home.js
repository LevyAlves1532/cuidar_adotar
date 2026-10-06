(function () {
	const carousel = document.querySelector('[data-testimonials-carousel]');

	if (!carousel) {
		return;
	}

	const viewport = carousel.querySelector('[data-carousel-viewport]');
	const track = carousel.querySelector('[data-carousel-track]');
	const previousButton = carousel.querySelector('[data-carousel-previous]');
	const nextButton = carousel.querySelector('[data-carousel-next]');

	if (!viewport || !track || !previousButton || !nextButton) {
		return;
	}

	const EmblaCarousel = window.EmblaCarousel;
	const embla = typeof EmblaCarousel === 'function'
		? EmblaCarousel(viewport, {
			align: 'start',
			containScroll: 'trimSnaps',
			duration: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 0 : 25,
		})
		: null;

	const updateNavigation = () => {
		if (embla) {
			previousButton.disabled = !embla.canScrollPrev();
			nextButton.disabled = !embla.canScrollNext();

			return;
		}

		previousButton.disabled = viewport.scrollLeft <= 1;
		nextButton.disabled = viewport.scrollLeft + viewport.clientWidth >= viewport.scrollWidth - 1;
	};

	const scrollFallback = (direction) => {
		viewport.scrollBy({
			left: direction * viewport.clientWidth,
			behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
		});
	};

	previousButton.addEventListener('click', () => {
		if (embla) {
			embla.scrollPrev();
		} else {
			scrollFallback(-1);
		}
	});

	nextButton.addEventListener('click', () => {
		if (embla) {
			embla.scrollNext();
		} else {
			scrollFallback(1);
		}
	});

	viewport.addEventListener('keydown', (event) => {
		if (event.key === 'ArrowLeft' && !previousButton.disabled) {
			event.preventDefault();
			embla ? embla.scrollPrev() : scrollFallback(-1);
		}

		if (event.key === 'ArrowRight' && !nextButton.disabled) {
			event.preventDefault();
			embla ? embla.scrollNext() : scrollFallback(1);
		}
	});

	if (embla) {
		viewport.classList.replace('overflow-x-auto', 'overflow-hidden');
		embla.on('select', updateNavigation);
		embla.on('reInit', updateNavigation);
	} else {
		viewport.addEventListener('scroll', updateNavigation, { passive: true });
		window.addEventListener('resize', updateNavigation);
	}

	updateNavigation();
})();
