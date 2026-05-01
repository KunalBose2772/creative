<nav id="navbar" class="navbar navbar-expand-lg fixed-top" aria-label="Main navigation">
    <div class="container" style="max-width:1320px;">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="<?= BASE_URL ?>">
            <img src="<?= BASE_URL ?>public/assets/images/logo.png" alt="Crea8ve Cool Logo" class="img-fluid" style="height: 64px; width: auto; object-fit: contain;">
        </a>

        <!-- Mobile Trigger -->
        <button class="menu-trigger d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navOffcanvas">
            <div class="menu-trigger-inner">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
            </div>
        </button>

        <!-- Desktop Nav -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarDesktop">
            <ul class="navbar-nav align-items-center gap-2 me-4">
                
                <!-- Platforms -->
                <li class="nav-item has-mega-menu">
                    <a class="nav-link nav-link-custom" href="#">Platforms <i class="bi bi-chevron-down ms-1 small"></i></a>
                    <div class="mega-menu mega-menu-wide">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="mega-menu-inner">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <h6 class="mega-menu-title">Digital Ecosystems</h6>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>erp"><i class="bi bi-layers"></i> <div><strong>Enterprise ERP</strong><span>Full business automation</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>crm"><i class="bi bi-people"></i> <div><strong>Customer CRM</strong><span>Relationship intelligence</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>hrms"><i class="bi bi-person-badge"></i> <div><strong>HRMS Tech</strong><span>Modern workforce management</span></div></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="mega-menu-title">Commerce Core</h6>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>ecommerce"><i class="bi bi-cart4"></i> <div><strong>E-Commerce</strong><span>Scalable online marketplaces</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>pos"><i class="bi bi-shop"></i> <div><strong>Retail POS</strong><span>Unified sales touchpoints</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>lms"><i class="bi bi-journal-check"></i> <div><strong>LMS Portals</strong><span>Expert learning systems</span></div></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mega-menu-featured-col">
                                    <div class="featured-card">
                                        <span class="section-tag mb-3" style="font-size: 10px;">Hot Update</span>
                                        <h5 class="fw-bold mb-3">AI-Integrated ERP 2.0</h5>
                                        <p class="small text-muted mb-4">Our new ERP suite now supports autonomous predictive inventory and smart lead scoring.</p>
                                        <a href="<?= BASE_URL ?>contact" class="btn btn-dark btn-sm w-100 rounded-pill">Book a Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Development -->
                <li class="nav-item has-mega-menu">
                    <a class="nav-link nav-link-custom" href="#">Development <i class="bi bi-chevron-down ms-1 small"></i></a>
                    <div class="mega-menu mega-menu-wide">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="mega-menu-inner">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <h6 class="mega-menu-title">Core Engineering</h6>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>website"><i class="bi bi-code-square"></i> <div><strong>High-End Websites</strong><span>Next.js & PHP Expert</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>mobile-apps"><i class="bi bi-phone"></i> <div><strong>Native Apps</strong><span>iOS & Android Solutions</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>saas"><i class="bi bi-cloud-check"></i> <div><strong>SaaS Platforms</strong><span>Scalable multi-tenant apps</span></div></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6 class="mega-menu-title">Advanced Services</h6>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>custom-software"><i class="bi bi-cpu"></i> <div><strong>Custom Software</strong><span>Tailored specialized tools</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>api"><i class="bi bi-braces"></i> <div><strong>System Architect</strong><span>API & Backend Integration</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>pwa"><i class="bi bi-lightning"></i> <div><strong>Fast PWA</strong><span>Mobile-first web experiences</span></div></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mega-menu-featured-col">
                                    <div class="featured-card">
                                        <span class="section-tag mb-3" style="font-size: 10px; background: #E9ECEF; color: var(--text-dark); padding: 4px 10px; border-radius: 4px; font-weight: 700; text-transform: uppercase;">Top Choice</span>
                                        <h5 class="fw-bold mb-3">Next-Gen Tech Stack</h5>
                                        <p class="small text-muted mb-4">We use bleeding-edge technologies like React 19, PHP 8.4, and AI-driven development workflows.</p>
                                        <a href="<?= BASE_URL ?>work" class="btn btn-dark btn-sm w-100 rounded-pill">View Tech Stack</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Creativities -->
                <li class="nav-item has-mega-menu">
                    <a class="nav-link nav-link-custom" href="#">Creativities <i class="bi bi-chevron-down ms-1 small"></i></a>
                    <div class="mega-menu mega-menu-wide">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="mega-menu-inner">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <h6 class="mega-menu-title">Design & Brand</h6>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>uiux"><i class="bi bi-palette2"></i> <div><strong>UI/UX Design</strong><span>Human-centric interfaces</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>branding"><i class="bi bi-bezier2"></i> <div><strong>Brand Identity</strong><span>Visual storytelling</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>motion"><i class="bi bi-play-circle"></i> <div><strong>Motion Graphics</strong><span>Engaging animations</span></div></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6 class="mega-menu-title">Digital Growth</h6>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>seo"><i class="bi bi-search-heart"></i> <div><strong>SEO Strategy</strong><span>Top organic rankings</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>marketing"><i class="bi bi-megaphone"></i> <div><strong>Ads Management</strong><span>ROI-driven performance</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>content"><i class="bi bi-pen"></i> <div><strong>Content Suite</strong><span>Powerful copy & assets</span></div></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mega-menu-featured-col">
                                    <div class="featured-card">
                                        <span class="section-tag mb-3" style="font-size: 10px; background: #FFF3CD; color: #856404; padding: 4px 10px; border-radius: 4px; font-weight: 700; text-transform: uppercase;">New Release</span>
                                        <h5 class="fw-bold mb-3">Design System 2.0</h5>
                                        <p class="small text-muted mb-4">Explore our comprehensive component library built for ultimate brand consistency and speed.</p>
                                        <a href="<?= BASE_URL ?>contact" class="btn btn-dark btn-sm w-100 rounded-pill">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Company -->
                <li class="nav-item has-mega-menu">
                    <a class="nav-link nav-link-custom" href="#">Company <i class="bi bi-chevron-down ms-1 small"></i></a>
                    <div class="mega-menu mega-menu-wide">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="mega-menu-inner">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <h6 class="mega-menu-title">About Us</h6>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>about"><i class="bi bi-info-circle"></i> <div><strong>Our Story</strong><span>Who we are</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>why-us"><i class="bi bi-patch-check"></i> <div><strong>Why Us</strong><span>The advantage</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>testimonials"><i class="bi bi-chat-quote"></i> <div><strong>Testimonials</strong><span>What clients say</span></div></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6 class="mega-menu-title">Connect & Support</h6>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>process"><i class="bi bi-gear"></i> <div><strong>Our Process</strong><span>How we deliver</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>contact"><i class="bi bi-envelope"></i> <div><strong>Get in Touch</strong><span>Talk to us</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>careers"><i class="bi bi-briefcase"></i> <div><strong>Careers</strong><span>Join the squad</span></div></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mega-menu-featured-col">
                                    <div class="featured-card">
                                        <span class="section-tag mb-3" style="font-size: 10px; background: #D1E7DD; color: #0F5132; padding: 4px 10px; border-radius: 4px; font-weight: 700; text-transform: uppercase;">Direct Contact</span>
                                        <h5 class="fw-bold mb-3">Expert Consultation</h5>
                                        <p class="small text-muted mb-4">Book a 30-minute free strategy session with our lead architects and designers.</p>
                                        <a href="<?= BASE_URL ?>contact" class="btn btn-dark btn-sm w-100 rounded-pill">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link nav-link-custom" href="<?= BASE_URL ?>work">Showcase</a></li>
            </ul>
            <a href="<?= BASE_URL ?>contact" class="btn btn-gradient btn-sm px-4 ms-2">Get Started <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
    </div>
</nav>

<!-- Mobile Offcanvas -->
<div class="offcanvas offcanvas-end offcanvas-nav" tabindex="-1" id="navOffcanvas" aria-labelledby="navOffcanvasLabel">
    <div class="offcanvas-header border-bottom">
        <a class="navbar-brand d-flex align-items-center" href="<?= BASE_URL ?>">
            <img src="<?= BASE_URL ?>public/assets/images/logo.png" alt="Crea8ve Cool Logo" class="img-fluid" style="height: 48px; width: auto; object-fit: contain;">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column">
        <div class="mobile-nav-section mb-4">
            <h6 class="small fw-bold text-uppercase text-muted mb-3">Core Solutions</h6>
            <ul class="navbar-nav flex-grow-1 gap-1">
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>website"><i class="bi bi-code-square me-2"></i> Website Dev</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>erp"><i class="bi bi-layers me-2"></i> ERP Systems</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>crm"><i class="bi bi-people me-2"></i> CRM Solutions</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>mobile-apps"><i class="bi bi-phone me-2"></i> Mobile Apps</a></li>
            </ul>
        </div>
        <div class="mobile-nav-section mb-4">
            <h6 class="small fw-bold text-uppercase text-muted mb-3">Agency & Company</h6>
            <ul class="navbar-nav flex-grow-1 gap-1">
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>about"><i class="bi bi-info-circle me-2"></i> About Us</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>process"><i class="bi bi-gear me-2"></i> Our Process</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>uiux"><i class="bi bi-vector-pen me-2"></i> UI/UX Design</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>seo"><i class="bi bi-search me-2"></i> SEO & Marketing</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>work"><i class="bi bi-briefcase me-2"></i> Showcase</a></li>
            </ul>
        </div>
        <div class="mt-auto pt-4 border-top">
            <a href="<?= BASE_URL ?>contact" class="btn btn-gradient w-100 mb-3">Consult for Free <i class="bi bi-arrow-right ms-1"></i></a>
            <div class="d-flex justify-content-center gap-4 social-links">
                <a href="https://www.linkedin.com/company/crea8ve-cool/" target="_blank" class="text-dark"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.instagram.com/crea8vecool/" target="_blank" class="text-dark"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
