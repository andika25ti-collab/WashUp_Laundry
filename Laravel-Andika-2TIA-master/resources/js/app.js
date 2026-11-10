const navigationToggle = document.querySelector('.nav-toggle');
const navigation = document.querySelector('#primary-navigation');

if (navigationToggle && navigation) {
	navigationToggle.addEventListener('click', () => {
		const isExpanded = navigationToggle.getAttribute('aria-expanded') === 'true';

		navigationToggle.setAttribute('aria-expanded', String(!isExpanded));
		navigationToggle.setAttribute('aria-label', isExpanded ? 'Buka menu' : 'Tutup menu');
		navigation.classList.toggle('open', !isExpanded);
	});

	navigation.querySelectorAll('a').forEach((link) => {
		link.addEventListener('click', () => {
			navigationToggle.setAttribute('aria-expanded', 'false');
			navigationToggle.setAttribute('aria-label', 'Buka menu');
			navigation.classList.remove('open');
		});
	});
}

const revealSections = document.querySelectorAll('main > .section');
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!prefersReducedMotion && 'IntersectionObserver' in window) {
	const sectionObserver = new IntersectionObserver((entries) => {
		entries.forEach((entry) => {
			entry.target.classList.toggle('is-visible', entry.isIntersecting);
		});
	}, { threshold: 0.16, rootMargin: '0px 0px -8% 0px' });

	revealSections.forEach((section) => {
		section.classList.add('scroll-reveal');
		sectionObserver.observe(section);
	});
}

const parallaxLayers = document.querySelectorAll('[data-parallax]');

if (!prefersReducedMotion && parallaxLayers.length > 0) {
	let frameRequested = false;

	const updateParallax = () => {
		const viewportCenter = window.innerHeight / 2;

		parallaxLayers.forEach((layer) => {
			const parentBounds = layer.parentElement.getBoundingClientRect();
			const parentCenter = parentBounds.top + parentBounds.height / 2;
			const distanceFromCenter = (viewportCenter - parentCenter) / viewportCenter;
			const travelDistance = Number(layer.dataset.parallax);
			const parallaxOffset = Math.max(-28, Math.min(28, distanceFromCenter * travelDistance));

			layer.style.setProperty('--parallax-offset', `${parallaxOffset}px`);
		});

		frameRequested = false;
	};

	const requestParallaxUpdate = () => {
		if (frameRequested) {
			return;
		}

		frameRequested = true;
		window.requestAnimationFrame(updateParallax);
	};

	window.addEventListener('scroll', requestParallaxUpdate, { passive: true });
	window.addEventListener('resize', requestParallaxUpdate);
	requestParallaxUpdate();
}
