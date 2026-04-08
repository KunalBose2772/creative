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
     11. Custom Cursor
  —————————————————————————————— */
  const cursor = document.querySelector('.custom-cursor');
  const cursorFollower = document.querySelector('.custom-cursor-follower');
  if(cursor && cursorFollower) {
    document.addEventListener('mousemove', (e) => {
      cursor.style.left = e.clientX + 'px';
      cursor.style.top = e.clientY + 'px';
      
      // Delay follower slightly for smooth effect
      setTimeout(() => {
        cursorFollower.style.left = e.clientX + 'px';
        cursorFollower.style.top = e.clientY + 'px';
      }, 50);
    });
  }

});
