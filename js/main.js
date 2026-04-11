document.addEventListener('DOMContentLoaded', () => {
    const hamburgerBtn = document.getElementById('dd-hamburger-btn');
    const mobileMenu   = document.getElementById('dd-mobile-menu');
    const iconOpen     = document.getElementById('dd-icon-open');
    const iconClose    = document.getElementById('dd-icon-close');
    const profileBtn   = document.getElementById('dd-profile-btn');
    const profileMenu  = document.getElementById('dd-profile-menu');

    if (hamburgerBtn && mobileMenu && iconOpen && iconClose) {
        hamburgerBtn.addEventListener('click', () => {
        const isNowHidden = mobileMenu.classList.toggle('hidden');
        hamburgerBtn.setAttribute('aria-expanded', String(!isNowHidden));
        iconOpen.classList.toggle('hidden', !isNowHidden);
        iconClose.classList.toggle('hidden', isNowHidden);
        });
    }

    if (profileBtn && profileMenu) {
        profileBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isNowHidden = profileMenu.classList.toggle('hidden');
        profileBtn.setAttribute('aria-expanded', String(!isNowHidden));
        });

        document.addEventListener('click', () => {
        profileMenu.classList.add('hidden');
        profileBtn.setAttribute('aria-expanded', 'false');
        });
    }
});
