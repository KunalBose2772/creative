/* ==========================================
   CREA8VE COOL — main.js
   ========================================== */

document.addEventListener('DOMContentLoaded', () => {

  /* ——————————————————————————————
     1. AOS — Animate On Scroll
  —————————————————————————————— */
  AOS.init({
    duration: 700,
    easing: 'ease-out-cubic',
    once: true,
    offset: 60,
  });


  /* ——————————————————————————————
     2. Navbar: transparent → scrolled
  —————————————————————————————— */
  const navbar = document.getElementById('navbar');
  if (navbar) {
    const handleNavScroll = () => {
      if (window.scrollY > 40) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', handleNavScroll, { passive: true });
    handleNavScroll();
  }


  /* ——————————————————————————————
     3. Active nav link on scroll
  —————————————————————————————— */
  const sections = document.querySelectorAll('section[id], footer[id]');
  const navLinks = document.querySelectorAll('.nav-link-custom');

  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.getAttribute('id');
        navLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href').includes(`#${id}`)) {
            link.classList.add('active');
          }
        });
      }
    });
  }, { rootMargin: '-50% 0px -50% 0px' });

  sections.forEach(s => sectionObserver.observe(s));


  /* ——————————————————————————————
     4. Count-Up Animation
  —————————————————————————————— */
  const countEls = document.querySelectorAll('.count-up');

  const countUp = (el) => {
    const target = parseInt(el.dataset.target, 10);
    const duration = 1800;
    const step = target / (duration / 16);
    let current = 0;

    const update = () => {
      current += step;
      if (current >= target) {
        el.textContent = target;
        return;
      }
      el.textContent = Math.floor(current);
      requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
  };

  const countObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        countUp(entry.target);
        countObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  countEls.forEach(el => countObserver.observe(el));


  /* ——————————————————————————————
     5. Chart bars animation (stagger)
  —————————————————————————————— */
  const chartBars = document.querySelectorAll('.chart-bar');
  chartBars.forEach((bar, i) => {
    bar.style.animationDelay = `${i * 0.08 + 0.5}s`;
    bar.style.animationFillMode = 'forwards';
  });


  /* ——————————————————————————————
     6. Scroll to Top Button
  —————————————————————————————— */
  let scrollBtn = document.createElement('button');
  scrollBtn.id = 'scrollTop';
  scrollBtn.innerHTML = '<i class="bi bi-arrow-up"></i>';
  scrollBtn.setAttribute('aria-label', 'Scroll to top');
  document.body.appendChild(scrollBtn);

  window.addEventListener('scroll', () => {
    if (window.scrollY > 400) {
      scrollBtn.classList.add('show');
    } else {
      scrollBtn.classList.remove('show');
    }
  }, { passive: true });

  scrollBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });


  /* ——————————————————————————————
     7. Smooth anchor scroll with offset
  —————————————————————————————— */
  document.querySelectorAll('a[href^="#"], a[href*="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      const hash = href.includes('#') ? '#' + href.split('#')[1] : null;
      if (!hash || hash === '#') return;

      const target = document.querySelector(hash);
      if (target) {
        e.preventDefault();
        const offset = 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });


  /* ——————————————————————————————
     8. Newsletter form — prevent default
  —————————————————————————————— */
  const fnForm = document.querySelector('.fn-form');
  if (fnForm) {
    const btn = fnForm.querySelector('button');
    btn && btn.addEventListener('click', (e) => {
      e.preventDefault();
      const input = fnForm.querySelector('input[type="email"]');
      if (input && input.value.includes('@')) {
        btn.innerHTML = '<i class="bi bi-check-lg"></i>';
        btn.classList.add('btn-success');
        input.value = '';
        setTimeout(() => {
          btn.innerHTML = 'Subscribe';
          btn.classList.remove('btn-success');
        }, 3000);
      }
    });
  }


  /* ——————————————————————————————
     9. Hover tilt effect on cards
  —————————————————————————————— */
  const tiltCards = document.querySelectorAll('.service-card, .work-card, .why-card');
  tiltCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5;
      const y = (e.clientY - rect.top) / rect.height - 0.5;
      card.style.transform = `translateY(-8px) rotateX(${-y * 4}deg) rotateY(${x * 4}deg)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });


  /* ——————————————————————————————
     10. Lazy loading images
  —————————————————————————————— */
  if ('loading' in HTMLImageElement.prototype) {
    document.querySelectorAll('img[data-src]').forEach(img => {
      img.src = img.dataset.src;
    });
  }

  /* ——————————————————————————————
     11. Improved Custom Cursor
  —————————————————————————————— */
  const cursor = document.querySelector('.custom-cursor');
  const cursorFollower = document.querySelector('.custom-cursor-follower');
  
  if (cursor && cursorFollower && window.innerWidth > 991) {
    let mouseX = 0, mouseY = 0;
    let cursorX = 0, cursorY = 0;
    let followerX = 0, followerY = 0;

    document.addEventListener('mousemove', (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
    });

    const animateCursor = () => {
      // Smooth interpolation
      cursorX += (mouseX - cursorX) * 0.2;
      cursorY += (mouseY - cursorY) * 0.2;
      followerX += (mouseX - followerX) * 0.1;
      followerY += (mouseY - followerY) * 0.1;

      cursor.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0) translate(-50%, -50%)`;
      cursorFollower.style.transform = `translate3d(${followerX}px, ${followerY}px, 0) translate(-50%, -50%)`;

      requestAnimationFrame(animateCursor);
    };
    animateCursor();

    // Hover effect on links and buttons
    const interactives = document.querySelectorAll('a, button, .service-card, .work-card, .menu-trigger');
    interactives.forEach(el => {
      el.addEventListener('mouseenter', () => {
        cursor.classList.add('active');
        cursorFollower.classList.add('active');
      });
      el.addEventListener('mouseleave', () => {
        cursor.classList.remove('active');
        cursorFollower.classList.remove('active');
      });
    });
  }


  /* ——————————————————————————————
     12. Multi-Step Audit Form
  —————————————————————————————— */
  const auditForm = document.getElementById('auditForm');
  if (auditForm) {
    const steps = auditForm.querySelectorAll('.audit-step');
    const nextBtns = auditForm.querySelectorAll('.next-step');
    const prevBtns = auditForm.querySelectorAll('.prev-step');
    const indicators = document.querySelectorAll('.step-indicator');

    let currentStep = 0;

    const showStep = (index) => {
      steps.forEach((step, i) => {
        step.classList.toggle('d-none', i !== index);
      });
      indicators.forEach((ind, i) => {
        ind.classList.toggle('active', i === index);
      });
      currentStep = index;
    };

    nextBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        // Basic validation for current step
        const inputs = steps[currentStep].querySelectorAll('input, select, textarea');
        let valid = true;
        inputs.forEach(input => {
          if (input.hasAttribute('required') && !input.value) {
            input.classList.add('is-invalid');
            valid = false;
          } else {
            input.classList.remove('is-invalid');
          }
        });

        if (valid && currentStep < steps.length - 1) {
          showStep(currentStep + 1);
        }
      });
    });

    prevBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        if (currentStep > 0) {
          showStep(currentStep - 1);
        }
      });
    });
  }

  /* ——————————————————————————————
     13. Mega Menu Staggered Animation
  —————————————————————————————--— */
  const megaMenus = document.querySelectorAll('.has-mega-menu');
  megaMenus.forEach(menu => {
    menu.addEventListener('mouseenter', () => {
      const items = menu.querySelectorAll('.mega-menu-list li, .creative-grid-item, .featured-card, .mega-menu-visual');
      items.forEach((item, index) => {
        // Reset state for re-animation
        item.style.opacity = '0';
        item.style.transform = 'translateY(10px)';
        
        setTimeout(() => {
          item.style.transition = 'all 0.5s cubic-bezier(0.16, 1, 0.3, 1)';
          item.style.opacity = '1';
          item.style.transform = 'translateY(0)';
        }, index * 30 + 50);
      });
    });
  });

});
