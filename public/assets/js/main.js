/* ==========================================
   CREA8VE COOL — main.js
   ========================================== */

document.addEventListener('DOMContentLoaded', () => {
  // Prevent browser from restoring scroll position
  if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
  }
  // Force scroll to top immediately without animation
  document.documentElement.style.scrollBehavior = 'auto';
  window.scrollTo(0, 0);
  setTimeout(() => {
    document.documentElement.style.scrollBehavior = ''; // Reset to CSS default
  }, 50);

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
      if (window.scrollY > 10) { // Reduced threshold for better responsiveness
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', handleNavScroll, { passive: true });
    // Run after a short delay to ensure browser has settled
    setTimeout(handleNavScroll, 100);
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
     8. Newsletter form — Real submission
  —————————————————————————————— */
  const fnForm = document.querySelector('.newsletter-form, .fn-form');
  if (fnForm) {
    const btn = fnForm.querySelector('button');
    fnForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = fnForm.querySelector('input[type="email"]');
      if (input && input.value.includes('@')) {
        const originalHtml = btn.innerHTML;
        btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span>';
        
        const formData = new FormData();
        formData.append('name', 'Newsletter Subscriber');
        formData.append('email', input.value);
        formData.append('service_type', 'Newsletter Subscription');
        formData.append('budget', 'N/A');
        formData.append('message', 'Subscribed to weekly pulse newsletter.');
        
        let basePath = window.location.pathname.includes('/cr/') ? '/cr/booking' : '/booking';

        fetch(window.location.origin + basePath, {
            method: 'POST',
            body: formData
        }).then(() => {
            btn.innerHTML = '<i class="bi bi-check-lg"></i> Subscribed!';
            btn.classList.add('btn-success');
            input.value = '';
            setTimeout(() => {
              btn.innerHTML = originalHtml;
              btn.classList.remove('btn-success');
            }, 3000);
        });
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

  /* ——————————————————————————————
     14. Service Slider Engine (Dynamic Narrative)
  —————————————————————————————--— */
  const ladderSteps = document.querySelectorAll('.ladder-step');
  const dynamicBadge = document.getElementById('dynamic-badge');
  const dynamicHeadline = document.getElementById('dynamic-headline');
  const dynamicSubtext = document.getElementById('dynamic-subtext');
  const dynamicContentContainer = document.getElementById('hero-content-dynamic');
  const bgOverlay = document.querySelector('.hero-bg-overlay');

  if (ladderSteps.length > 0 && dynamicContentContainer) {
    let currentIdx = 0;
    let sliderTimer;

    const updateSlider = (index) => {
      // Cleanup previous active states
      ladderSteps.forEach(step => step.classList.remove('is-sliding'));
      
      // Animate content transition
      dynamicContentContainer.style.opacity = '0';
      dynamicContentContainer.style.transform = 'translateY(10px)';
      
      setTimeout(() => {
        const step = ladderSteps[index];
        if (!step) return;
        
        step.classList.add('is-sliding');

        // Extract and inject new narrative data
        if (dynamicBadge) dynamicBadge.innerText = step.getAttribute('data-badge');
        if (dynamicHeadline) dynamicHeadline.innerHTML = step.getAttribute('data-headline');
        if (dynamicSubtext) dynamicSubtext.innerText = step.getAttribute('data-subtext');
        
        // Update background atmosphere
        if (bgOverlay) {
          bgOverlay.style.background = step.getAttribute('data-color');
          bgOverlay.style.opacity = '0.2'; // Slightly more intense when active
        }

        // Reveal new content
        dynamicContentContainer.style.opacity = '1';
        dynamicContentContainer.style.transform = 'translateY(0)';
      }, 400);
    };

    const nextSlide = () => {
      currentIdx = (currentIdx + 1) % ladderSteps.length;
      updateSlider(currentIdx);
    };

    // Staggered entrance animation for the stairs
    setTimeout(() => {
      ladderSteps.forEach((step, index) => {
        setTimeout(() => {
          step.classList.add('active');
          
          // Once the last stair arrives, start the engine
          if (index === ladderSteps.length - 1) {
            setTimeout(() => {
              sliderTimer = setInterval(nextSlide, 5000); // 5-second rotation
            }, 1200);
          }
        }, index * 200);
      });
    }, 800);
    
    // Interactive Navigation: Click a stair to jump to that service
    ladderSteps.forEach((step, index) => {
      step.style.cursor = 'pointer';
      step.addEventListener('click', () => {
        if (currentIdx === index) return; // Already here
        
        clearInterval(sliderTimer);
        currentIdx = index;
        updateSlider(currentIdx);
        // Resume auto-cycling
        sliderTimer = setInterval(nextSlide, 5000);
      });
    });
  }

  /* ——————————————————————————————
     15. Consultation Modal Trigger (Lead Machine)
  —————————————————————————————--— */
  const consultTriggers = document.querySelectorAll('.custom-consult-only-trigger');
  const modalServiceName = document.getElementById('modal-service-name');
  const lpServiceWrapper = document.getElementById('lp-service-wrapper');
  const consultModalEl = document.getElementById('consultationOnlyModal');
  
  if (consultTriggers.length > 0 && consultModalEl) {
    const consultModal = new bootstrap.Modal(consultModalEl);

    consultTriggers.forEach(trigger => {
      trigger.addEventListener('click', (e) => {
        e.preventDefault();
        const service = trigger.getAttribute('data-service') || '';
        if (modalServiceName) modalServiceName.innerText = service;
        // Show/hide service pill based on whether a service name exists
        if (lpServiceWrapper) {
          lpServiceWrapper.classList.toggle('d-none', !service);
        }
        consultModal.show();
      });
    });

    // Form Submission Handling
    const consultForm = document.getElementById('consultationMachineForm');
    if (consultForm) {
      consultForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = consultForm.querySelector('button[type="submit"]');
        const originalText = btn.innerHTML;
        
        btn.disabled = true;
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Sending...';
        
        const formData = new FormData(consultForm);
        // Construct message since DB requires it
        const phone = formData.get('phone') || 'N/A';
        const service = formData.get('service_type') || 'Not Specified';
        formData.append('message', 'Lead Popup submission. Phone: ' + phone);
        formData.append('budget', 'Not Specified');
        
        let basePath = window.location.pathname.includes('/cr/') ? '/cr/booking' : '/booking';

        fetch(window.location.origin + basePath, {
            method: 'POST',
            body: formData
        }).then(() => {
          btn.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i> We\'ll be in touch soon!';
          btn.style.background = '#27c93f';
          btn.style.borderColor = '#27c93f';
          btn.style.boxShadow = '4px 4px 0 #111';
          
          setTimeout(() => {
            consultModal.hide();
            setTimeout(() => {
              btn.disabled = false;
              btn.innerHTML = originalText;
              btn.style.background = '';
              btn.style.borderColor = '';
              btn.style.boxShadow = '';
              consultForm.reset();
            }, 500);
          }, 1800);
        }).catch(err => {
          btn.innerHTML = '<i class="bi bi-x-circle-fill me-2"></i> Error. Try again.';
          setTimeout(() => {
            btn.disabled = false;
            btn.innerHTML = originalText;
          }, 2000);
        });
      });
    }

    // CRITICAL FIX: Ensure no "Black Screen" (stuck backdrop) on close
    consultModalEl.addEventListener('hidden.bs.modal', function () {
      document.body.classList.remove('modal-open');
      document.body.style.overflow = '';
      document.body.style.paddingRight = '';
      const backdrops = document.querySelectorAll('.modal-backdrop');
      backdrops.forEach(b => b.remove());
    });
  }

  /* ——————————————————————————————
     16. Portfolio Category Filtering
  —————————————————————————————— */
  const portfolioTabBtns = document.querySelectorAll('.portfolio-tab-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

  if (portfolioTabBtns.length > 0 && portfolioItems.length > 0) {
    portfolioTabBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        portfolioTabBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const category = btn.getAttribute('data-category');

        portfolioItems.forEach(item => {
          item.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
          if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = '';
            setTimeout(() => {
              item.style.opacity = '1';
              item.style.transform = 'scale(1)';
            }, 50);
          } else {
            item.style.opacity = '0';
            item.style.transform = 'scale(0.9)';
            setTimeout(() => {
              item.style.display = 'none';
            }, 400);
          }
        });
      });
    });
  }

  /* ——————————————————————————————
     17. Auto-dismiss form success alerts after 5 seconds
  —————————————————————————————— */
  const successAlerts = document.querySelectorAll('.alert-success');
  successAlerts.forEach(alert => {
    setTimeout(() => {
      alert.style.transition = 'opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1)';
      alert.style.opacity = '0';
      alert.style.transform = 'translateY(-10px)';
      setTimeout(() => {
        alert.remove();
      }, 800);
    }, 5000);
  });

});

