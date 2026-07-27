const header = document.querySelector('[data-site-header]');
const menuToggle = document.querySelector('[data-menu-toggle]');
const navLinks = Array.from(document.querySelectorAll('[data-nav-link]'));
const scrollProgress = document.querySelector('[data-scroll-progress]');
const sections = Array.from(document.querySelectorAll('.section-observe[id]'));

document.documentElement.classList.add('js');

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const setMenuState = (isOpen) => {
    if (!header || !menuToggle) {
        return;
    }

    header.classList.toggle('is-open', isOpen);
    menuToggle.classList.toggle('is-open', isOpen);
    menuToggle.setAttribute('aria-expanded', String(isOpen));
};

const updateScrollState = () => {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = totalHeight > 0 ? Math.min(scrollTop / totalHeight, 1) : 0;

    if (scrollProgress) {
        scrollProgress.style.transform = `scaleX(${progress})`;
    }

    if (header) {
        header.classList.toggle('is-scrolled', scrollTop > 8);
    }
};

if (menuToggle) {
    menuToggle.addEventListener('click', () => {
        const isOpen = !header?.classList.contains('is-open');
        setMenuState(isOpen);
    });
}

navLinks.forEach((link) => {
    link.addEventListener('click', () => setMenuState(false));
});

document.addEventListener('click', (event) => {
    if (!header || !header.classList.contains('is-open')) {
        return;
    }

    if (header.contains(event.target)) {
        return;
    }

    setMenuState(false);
});

window.addEventListener('scroll', updateScrollState, { passive: true });
window.addEventListener('resize', updateScrollState, { passive: true });
updateScrollState();

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        setMenuState(false);
    }
});

if (sections.length > 0 && !prefersReducedMotion) {
    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '-40px 0px -40px 0px' },
    );

    sections.forEach((section) => revealObserver.observe(section));
} else {
    sections.forEach((section) => section.classList.add('is-visible'));
}

if (sections.length > 0 && navLinks.length > 0) {
    const navObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                const activeId = entry.target.id;

                navLinks.forEach((link) => {
                    link.classList.toggle('is-active', link.getAttribute('href') === `#${activeId}`);
                });
            });
        },
        { threshold: 0.35, rootMargin: '-30% 0px -55% 0px' },
    );

    sections.forEach((section) => navObserver.observe(section));
}

const showcaseTabs = Array.from(document.querySelectorAll('[data-showcase-tab]'));
const showcasePanels = Array.from(document.querySelectorAll('[data-showcase-panel]'));

showcaseTabs.forEach((tab) => {
    tab.addEventListener('click', () => {
        const activePanel = tab.dataset.showcaseTab;

        showcaseTabs.forEach((item) => {
            const isActive = item === tab;

            item.classList.toggle('is-active', isActive);
            item.setAttribute('aria-selected', String(isActive));
        });

        showcasePanels.forEach((panel) => {
            const isActive = panel.dataset.showcasePanel === activePanel;

            panel.classList.toggle('is-active', isActive);
            panel.hidden = !isActive;
        });
    });
});
