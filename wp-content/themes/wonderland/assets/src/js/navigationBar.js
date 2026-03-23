
function navigationBar() {
    const nav = document.querySelector('.navigation-bar');
    const toggle = document.querySelector('.menu-toggle');

    if (!nav || !toggle) return;

    toggle.addEventListener('click', () => {
        nav.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (!nav.contains(e.target)) {
            nav.classList.remove('active');
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            nav.classList.remove('active');
        }
    });
}

document.addEventListener('DOMContentLoaded', navigationBar);