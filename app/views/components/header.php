<nav id="navbar" class="navbar navbar-expand-lg fixed-top" aria-label="Main navigation">
    <div class="container" style="max-width:1320px;">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="<?= BASE_URL ?>" title="Crea8ve Cool — Homepage">
            <img src="<?= BASE_URL ?>public/assets/images/logo.webp" alt="Crea8ve Cool Logo" title="Crea8ve Cool Logo" class="img-fluid" style="height: 64px; width: auto; object-fit: contain;" width="213" height="64">
        </a>

        <!-- Mobile Trigger -->
        <button class="menu-trigger d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navOffcanvas" aria-label="Toggle mobile navigation menu">
            <span class="menu-trigger-inner">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
            </span>
        </button>

        <!-- Desktop Nav -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarDesktop">
            <ul class="navbar-nav align-items-center gap-2 me-4">
                <!-- Development -->
                <li class="nav-item has-mega-menu">
                    <a class="nav-link nav-link-custom" href="#" title="Browse Custom Development Services">Development <i class="bi bi-chevron-down ms-1 small"></i></a>
                    <div class="mega-menu mega-menu-wide">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="mega-menu-inner">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="mega-menu-title">Web & Products</div>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>services/website" title="Explore High-End Website Designing"><i class="bi bi-code-square"></i> <strong>High-End Websites</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/native-apps" title="Explore Custom Native iOS & Android Apps"><i class="bi bi-phone"></i> <strong>Native Mobile Apps</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/saas-platforms" title="Explore Scalable SaaS Platforms"><i class="bi bi-cloud-check"></i> <strong>SaaS Platforms</strong></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mega-menu-title">Business Systems</div>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>services/enterprise-erp" title="Explore Custom Enterprise ERP & CRM Systems"><i class="bi bi-layers"></i> <strong>Enterprise ERP & CRM</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/ecommerce" title="Explore Custom E-Commerce & Retail Sales Solutions"><i class="bi bi-cart4"></i> <strong>E-Commerce & Retail</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/custom-software" title="Explore Specialized Custom Software & API Integration"><i class="bi bi-cpu"></i> <strong>Custom Software & Systems</strong></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mega-menu-featured-col">
                                    <div class="featured-card">
                                        <span class="section-tag mb-3" style="font-size: 10px; background: #E9ECEF; color: var(--text-dark); padding: 4px 10px; border-radius: 4px; font-weight: 700; text-transform: uppercase;">Top Choice</span>
                                        <div class="fw-bold mb-3 fs-5">Next-Gen Tech Stack</div>
                                        <p class="small text-muted mb-4">We use bleeding-edge technologies like React 19, PHP 8.4, and AI-driven development workflows to engineer scalable platforms.</p>
                                        <a href="<?= BASE_URL ?>work" class="btn btn-dark btn-sm w-100 rounded-pill" title="View Next-Gen Technical Stack Showcase">View Tech Stack</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Creativities (3D & CGI Founder Focus) -->
                <li class="nav-item has-mega-menu">
                    <a class="nav-link nav-link-custom" href="#" title="Browse Creative Design & CGI Services">Creativities <i class="bi bi-chevron-down ms-1 small"></i></a>
                    <div class="mega-menu mega-menu-wide">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="mega-menu-inner">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="mega-menu-title">3D CGI & VFX</div>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>services/motion" title="Explore Dynamic Motion Graphics & 3D Video Production"><i class="bi bi-play-circle"></i> <strong>3D CGI Animation</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/motion" title="Explore photorealistic 3D Product Commercials"><i class="bi bi-box"></i> <strong>3D Product Ads</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/motion" title="Explore Cinematic CGI & Hollywood Visual Effects"><i class="bi bi-magic"></i> <strong>Cinematic VFX</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>founder" title="Explore Shakti's complete 3D Modeling & Rendering Portfolio"><i class="bi bi-vector-pen"></i> <strong>3D Modeling & CGI</strong></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mega-menu-title">Creative & Brand</div>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>services/motion" title="Explore professional Video Editing & Post-Production"><i class="bi bi-film"></i> <strong>Video Post-Production</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/motion" title="Explore Premium Color Grading & Film Finishing"><i class="bi bi-brightness-high"></i> <strong>Cinematic Color</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/ui-ux" title="Explore High-Conversion UI/UX Design"><i class="bi bi-palette2"></i> <strong>UI/UX Design</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/brand-identity" title="Explore Strategic Brand Identity Design"><i class="bi bi-bezier2"></i> <strong>Brand Identity</strong></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mega-menu-featured-col">
                                    <div class="featured-card">
                                        <span class="section-tag mb-3" style="font-size: 10px; background: #FFF3CD; color: #856404; padding: 4px 10px; border-radius: 4px; font-weight: 700; text-transform: uppercase;">The Founder</span>
                                        <div class="fw-bold mb-3 fs-5">Shakti Kumar Gupta</div>
                                        <p class="small text-muted mb-4">Master 3D Artist & Video Editor specializing in photorealistic CGI, 3D products, and Hollywood-grade visual effects.</p>
                                        <a href="<?= BASE_URL ?>founder" class="btn btn-dark btn-sm w-100 rounded-pill" title="Explore Shakti's complete 3D Art Portfolio">Explore Portfolio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Marketing -->
                <li class="nav-item has-mega-menu">
                    <a class="nav-link nav-link-custom" href="#" title="Browse Digital Marketing & Growth Services">Marketing <i class="bi bi-chevron-down ms-1 small"></i></a>
                    <div class="mega-menu mega-menu-wide">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="mega-menu-inner">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="mega-menu-title">Growth Marketing</div>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>services/seo" title="Explore Organic SEO Dominance Strategies"><i class="bi bi-search-heart"></i> <strong>Search Optimization (SEO)</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/performance" title="Explore Google Ads & Meta Ads Management"><i class="bi bi-megaphone"></i> <strong>Performance Marketing</strong></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mega-menu-title">Brand & Content</div>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>services/digital-marketing" title="Explore Comprehensive Digital Marketing Growth Plans"><i class="bi bi-activity"></i> <strong>Digital Strategy</strong></a></li>
                                                <li><a href="<?= BASE_URL ?>services/copywriting" title="Explore High-Converting Copywriting Suite"><i class="bi bi-pen"></i> <strong>Content & Copywriting</strong></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mega-menu-featured-col">
                                    <div class="featured-card">
                                        <span class="section-tag mb-3" style="font-size: 10px; background: #D1E7DD; color: #0F5132; padding: 4px 10px; border-radius: 4px; font-weight: 700; text-transform: uppercase;">ROI Focus</span>
                                        <div class="fw-bold mb-3 fs-5">Free Growth Audit</div>
                                        <p class="small text-muted mb-4">Get a complete, 360-degree audit of your organic search rankings and paid ad strategy potential within 24 hours.</p>
                                        <a href="<?= BASE_URL ?>contact" class="btn btn-dark btn-sm w-100 rounded-pill" title="Request your Free Growth Strategy Audit">Request Audit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Company -->
                <li class="nav-item has-mega-menu">
                    <a class="nav-link nav-link-custom" href="#" title="Browse Agency Information">Company <i class="bi bi-chevron-down ms-1 small"></i></a>
                    <div class="mega-menu mega-menu-wide">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="mega-menu-inner">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="mega-menu-title">About Us</div>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>about" title="Learn about Our Story & Mission"><i class="bi bi-info-circle"></i> <div><strong>Our Story</strong><span>Who we are</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>why-us" title="Learn about The Crea8ve Cool Advantage"><i class="bi bi-patch-check"></i> <div><strong>Why Us</strong><span>The advantage</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>testimonials" title="Read verified Client Testimonials"><i class="bi bi-chat-quote"></i> <div><strong>Testimonials</strong><span>What clients say</span></div></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mega-menu-title">Connect & Support</div>
                                            <ul class="list-unstyled mega-menu-list">
                                                <li><a href="<?= BASE_URL ?>process" title="Learn about Our Step-by-Step Delivery Process"><i class="bi bi-gear"></i> <div><strong>Our Process</strong><span>How we deliver</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>contact" title="Get in Touch and Connect with Us"><i class="bi bi-envelope"></i> <div><strong>Get in Touch</strong><span>Talk to us</span></div></a></li>
                                                <li><a href="<?= BASE_URL ?>careers" title="Explore Careers and Join the Squad"><i class="bi bi-briefcase"></i> <div><strong>Careers</strong><span>Join the squad</span></div></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mega-menu-featured-col">
                                    <div class="featured-card">
                                        <span class="section-tag mb-3" style="font-size: 10px; background: #D1E7DD; color: #0F5132; padding: 4px 10px; border-radius: 4px; font-weight: 700; text-transform: uppercase;">Direct Contact</span>
                                        <div class="fw-bold mb-3 fs-5">Expert Consultation</div>
                                        <p class="small text-muted mb-4">Book a 30-minute free strategy session with our lead architects and designers.</p>
                                        <a href="<?= BASE_URL ?>contact" class="btn btn-dark btn-sm w-100 rounded-pill" title="Book your free Expert Consultation">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Showcase Dropdown using Mega Menu classes -->
                <li class="nav-item has-mega-menu">
                    <a class="nav-link nav-link-custom" href="#" title="Explore our High-Performance Showcases">Showcase <i class="bi bi-chevron-down ms-1 small"></i></a>
                    <div class="custom-dropdown-clean">
                        <div class="mega-menu-title" style="margin-bottom: 15px;">Our Work Showcase</div>
                        <ul class="list-unstyled mega-menu-list m-0 p-0">
                            <li class="mb-2">
                                <a href="<?= BASE_URL ?>work" title="Explore our Web & System Engineering Showcase">
                                    <i class="bi bi-laptop" style="background: rgba(106, 90, 224, 0.1); border-color: rgba(106, 90, 224, 0.2); color: #6A5AE0;"></i>
                                    <div>
                                        <strong>Web & Systems</strong>
                                        <span>Web design, portals & custom software</span>
                                    </div>
                                </a>
                            </li>
                            <li class="m-0">
                                <a href="<?= BASE_URL ?>video-portfolio" title="Explore our Cinematic Motion Graphics & 3D Renders Showcase">
                                    <i class="bi bi-camera-video" style="background: rgba(255, 94, 54, 0.1); border-color: rgba(255, 94, 54, 0.2); color: #FF5E36;"></i>
                                    <div>
                                        <strong>3D Motion & Reels</strong>
                                        <span>Uncompressed 3D CGI & motion reels</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                            </ul>
                            <a href="<?= BASE_URL ?>contact" class="btn btn-gradient btn-sm px-4 ms-2" title="Get Started on your custom project">Get Started <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
    </div>
</nav>

<!-- Mobile Offcanvas -->
<div class="offcanvas offcanvas-end offcanvas-nav" tabindex="-1" id="navOffcanvas" aria-labelledby="navOffcanvasLabel" role="dialog">
    <div class="offcanvas-header border-bottom">
        <a class="navbar-brand d-flex align-items-center" href="<?= BASE_URL ?>" title="Crea8ve Cool — Homepage">
            <img src="<?= BASE_URL ?>public/assets/images/logo.webp" alt="Crea8ve Cool Logo" title="Crea8ve Cool Logo" class="img-fluid" style="height: 48px; width: auto; object-fit: contain;" width="160" height="48">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column">
        <div class="mobile-nav-section mb-4">
            <div class="small fw-bold text-uppercase text-muted mb-3">Core Solutions</div>
            <ul class="navbar-nav flex-grow-1 gap-1">
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>services/website" title="Explore High-Performance Website Designing"><i class="bi bi-code-square me-2"></i> Website Dev</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>services/native-apps" title="Explore Custom Native iOS & Android Apps"><i class="bi bi-phone me-2"></i> Mobile Apps</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>services/saas-platforms" title="Explore Scalable SaaS Platforms"><i class="bi bi-cloud-check me-2"></i> SaaS Platforms</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>services/enterprise-erp" title="Explore Premium Enterprise ERP & CRM Systems"><i class="bi bi-layers me-2"></i> ERP & CRM Systems</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>services/ecommerce" title="Explore Custom E-Commerce & Retail Sales Solutions"><i class="bi bi-cart4 me-2"></i> E-Commerce & Retail</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>services/custom-software" title="Explore Specialized Custom Software & API Integration"><i class="bi bi-cpu me-2"></i> Custom Software & Systems</a></li>
            </ul>
        </div>
        <div class="mobile-nav-section mb-4">
            <div class="small fw-bold text-uppercase text-muted mb-3">Agency & Company</div>
            <ul class="navbar-nav flex-grow-1 gap-1">
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>about" title="Learn about Our Story"><i class="bi bi-info-circle me-2"></i> About Us</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>process" title="Learn about Our Delivery Process"><i class="bi bi-gear me-2"></i> Our Process</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>services/motion" title="Explore Motion & 3D Video Production"><i class="bi bi-vector-pen me-2"></i> 3D Motion & Video</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>services/seo" title="Explore SEO & Organic Scaling"><i class="bi bi-search me-2"></i> SEO Strategy</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>services/performance" title="Explore Performance Marketing"><i class="bi bi-megaphone me-2"></i> Performance Marketing</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>work" title="Explore our Web & Systems Showcase"><i class="bi bi-laptop me-2"></i> Web & Systems Showcase</a></li>
                <li class="nav-item"><a class="nav-link offcanvas-link" href="<?= BASE_URL ?>video-portfolio" title="Explore our Cinematic 3D Motion Showcase"><i class="bi bi-camera-video me-2"></i> 3D Motion Showcase</a></li>
            </ul>
        </div>
        <div class="mt-auto pt-4 border-top">
            <a href="<?= BASE_URL ?>booking" class="btn btn-gradient w-100 mb-3">Consult for Free <i class="bi bi-arrow-right ms-1"></i></a>
            <div class="d-flex justify-content-center gap-4 social-links">
                <a href="https://www.linkedin.com/company/crea8ve-cool/" target="_blank" rel="noopener noreferrer" class="text-dark" title="Connect with Crea8ve Cool on LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.instagram.com/crea8vecool/" target="_blank" rel="noopener noreferrer" class="text-dark" title="Follow Crea8ve Cool on Instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
</div>

