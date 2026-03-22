document.addEventListener('DOMContentLoaded', () => {

    /* --- 1. Light/Dark Theme Toggling --- */
    const themeBtn = document.getElementById('themeToggleBtn');
    const htmlEl = document.documentElement;
    const themeIcon = themeBtn.querySelector('i');
    
    // Check locally stored user preference
    const savedTheme = localStorage.getItem('drivex-theme');
    if (savedTheme) {
        htmlEl.setAttribute('data-theme', savedTheme);
        updateThemeIcon(savedTheme);
    } else {
        // Defaults to dark via HTML attribute
        updateThemeIcon('dark');
    }

    themeBtn.addEventListener('click', () => {
        const currentTheme = htmlEl.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        
        htmlEl.setAttribute('data-theme', newTheme);
        localStorage.setItem('drivex-theme', newTheme);
        updateThemeIcon(newTheme);
    });

    function updateThemeIcon(theme) {
        if(theme === 'light') {
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        } else {
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
        }
    }

    /* --- 2. Mobile Responsive Menu --- */
    const menuBtn = document.getElementById('menuBtn');
    const navMenu = document.getElementById('navMenu');
    const overlay = document.getElementById('mobileOverlay');
    let menuOpen = false;

    function toggleMenu() {
        menuOpen = !menuOpen;
        if(menuOpen) {
            navMenu.classList.add('active');
            overlay.classList.add('active');
            menuBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
        } else {
            navMenu.classList.remove('active');
            overlay.classList.remove('active');
            menuBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
        }
    }

    menuBtn.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', () => { if(menuOpen) toggleMenu(); });

    /* --- 3. Premium Scroll Animations (Reveal Up) --- */
    // Add reveal-up class automatically to certain elements if not already added
    const elementsToReveal = document.querySelectorAll('.premium-card, .section-header-split, .hero-text-area, .contact-info-block');
    elementsToReveal.forEach(el => el.classList.add('reveal-up'));

    const observeOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target); // Optional: animate only once
            }
        });
    }, observeOptions);

    const revealBlocks = document.querySelectorAll('.reveal-up');
    revealBlocks.forEach(block => {
        revealObserver.observe(block);
    });

    /* --- 4. Sticky Navbar Scrolled State --- */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

});
