/**
 * service_detail.js
 * Scripts for the service detail page template.
 */

window.addEventListener('scroll', function() {
    const nav = document.querySelector('.floating-sub-nav');
    if (!nav) return; // guard: element may not exist on every page
    
    const hero = document.querySelector('.service-bento-hero');
    const heroBottom = hero ? (hero.offsetTop + hero.offsetHeight) : 600;
    
    // Slide in immediately after scrolling past the hero section
    if (window.scrollY > (heroBottom - 120)) {
        nav.classList.remove('scrolled-up');
    } else {
        nav.classList.add('scrolled-up');
    }
});

// Premium High-Performance ScrollSpy & Smooth Scroll Offset
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.sub-nav-link');
    
    function updateActiveSubNav() {
        const scrollPos = window.scrollY || document.documentElement.scrollTop || document.body.scrollTop;
        const offset = 220; // Offset to trigger active state responsively
        
        let activeSectionId = '';
        
        sections.forEach(section => {
            const id = section.getAttribute('id');
            if (!['pitching-intro', 'strategy', 'performance', 'technology', 'packages', 'ecosystem'].includes(id)) return;
            
            const sectionTop = section.offsetTop - offset;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                activeSectionId = id;
            }
        });
        
        // Default to highlight the first tab ('pitching-intro') right away once scrolled past the hero
        if (!activeSectionId) {
            const hero = document.querySelector('.service-bento-hero');
            const heroBottom = hero ? (hero.offsetTop + hero.offsetHeight) : 600;
            if (scrollPos > (heroBottom - 150)) {
                activeSectionId = 'pitching-intro';
            }
        }
        
        if (activeSectionId) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + activeSectionId) {
                    link.classList.add('active');
                }
            });
        }
    }
    
    window.addEventListener('scroll', updateActiveSubNav);
    window.addEventListener('resize', updateActiveSubNav);
    updateActiveSubNav(); // Run immediately on load
    
    // Smooth scrolling aligner
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                const targetOffset = targetSection.offsetTop - 80; // Perfect vertical heading offset
                window.scrollTo({
                    top: targetOffset,
                    behavior: 'smooth'
                });
            }
        });
    });
});

/* ---- next block ---- */

document.addEventListener('DOMContentLoaded', function() {
    const tInput = document.getElementById('trafficInput');
    const vInput = document.getElementById('valueInput');
    const tVal = document.getElementById('trafficVal');
    const vVal = document.getElementById('valueVal');
    const rOut = document.getElementById('revenueOutput');

    function calcROI() {
        const traffic = parseInt(tInput.value);
        const value = parseInt(vInput.value);
        tVal.innerText = traffic.toLocaleString() + ' Visitors';
        vVal.innerText = '₹' + value.toLocaleString();
        
        // Assume 3% conversion with engineered site
        const revenue = traffic * 0.03 * value;
        rOut.innerText = '₹' + Math.round(revenue).toLocaleString();
    }

    tInput.addEventListener('input', calcROI);
    vInput.addEventListener('input', calcROI);
});

/* ---- next block ---- */

document.querySelectorAll('.vtab-item').forEach(function(tab) {
    tab.addEventListener('click', function() {
        document.querySelectorAll('.vtab-item').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.vtab-pane').forEach(p => p.classList.remove('active'));
        tab.classList.add('active');
        document.getElementById(tab.dataset.tab).classList.add('active');
    });
});