(function () {
	const initializeCatalogScroll = () => {
		const scrollContainers = document.querySelectorAll(
			'nav[aria-label="Categorias do catálogo"]',
		);

		scrollContainers.forEach((container) => {
			let isDragging = false;
			let hasDragged = false;
			let startX = 0;
			let startScrollLeft = 0;

			container.addEventListener('pointerdown', (event) => {
				if (event.pointerType === 'touch' || event.button !== 0) {
					return;
				}

				isDragging = true;
				hasDragged = false;
				startX = event.clientX;
				startScrollLeft = container.scrollLeft;
				container.setPointerCapture(event.pointerId);
				container.classList.add('cursor-grabbing');
			});

			container.addEventListener('pointermove', (event) => {
				if (!isDragging) {
					return;
				}

				const distance = event.clientX - startX;

				if (Math.abs(distance) > 5) {
					hasDragged = true;
				}

				container.scrollLeft = startScrollLeft - distance;
			});

			const stopDragging = (event) => {
				if (!isDragging) {
					return;
				}

				isDragging = false;
				container.classList.remove('cursor-grabbing');

				if (container.hasPointerCapture(event.pointerId)) {
					container.releasePointerCapture(event.pointerId);
				}
			};

			container.addEventListener('pointerup', stopDragging);
			container.addEventListener('pointercancel', stopDragging);
			container.addEventListener('lostpointercapture', () => {
				isDragging = false;
				container.classList.remove('cursor-grabbing');
			});

			container.addEventListener(
				'click',
				(event) => {
					if (!hasDragged) {
						return;
					}

					event.preventDefault();
					event.stopPropagation();
					hasDragged = false;
				},
				true,
			);

			container.addEventListener('dragstart', (event) => {
				event.preventDefault();
			});
		});
	};

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initializeCatalogScroll, {
			once: true,
		});
	} else {
		initializeCatalogScroll();
	}
})();
