/**
 * Insynia — small front-end behaviors (hand-written, no dependencies).
 */
(function () {
	'use strict';

	var site = document.querySelector('.wp-site-blocks');
	if (!site || !site.firstElementChild) {
		return;
	}

	var headerShell = site.firstElementChild;
	headerShell.classList.add('insynia-header-shell');

	var pinned = false;
	var threshold = 12;

	function onScroll() {
		var y = window.scrollY || document.documentElement.scrollTop;
		var next = y > threshold;
		if (next === pinned) {
			return;
		}
		pinned = next;
		headerShell.classList.toggle('is-insynia-pinned', pinned);
	}

	var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	if (!reducedMotion) {
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	}
})();
