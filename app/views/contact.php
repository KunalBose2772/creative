<?php 
$data['page_hero_badge'] = 'Direct Access';
$data['page_title_html'] = 'Let\'s Build Your <br><span class="gradient-text">Legendary Product.</span>';
$data['page_subtitle'] = "We only take on 3 new partners per month to ensure absolute focus. Schedule your strategy audit today.";

// Visual element for contact hero
ob_start(); ?>
<div class="contact-hero-visual" style="--accent: <?= $data['hero_color'] ?>;">
    <div class="terminal-box shadow-lg border-3 border-dark border">
        <div class="terminal-head p-2 border-bottom border-dark border-opacity-10 d-flex justify-content-between">
            <div class="d-flex gap-1">
                <span class="dot red"></span><span class="dot yellow"></span><span class="dot green"></span>
            </div>
            <span class="small fw-900 opacity-50">AUDIT_REQUEST</span>
        </div>
        <div class="p-4">
             <form id="heroContactForm" class="row g-3">
                <div class="col-12">
                    <input type="text" class="form-control br-input-v2" placeholder="Full Name" required>
                </div>
                <div class="col-12">
                    <input type="email" class="form-control br-input-v2" placeholder="Work Email" required>
                </div>
                <div class="col-12">
                     <button type="submit" class="btn btn-dark-punchy w-100 py-3 mt-2">INITIALIZE AUDIT</button>
                </div>
             </form>
        </div>
    </div>
    <a href="https://www.instagram.com/crea8vecool/" target="_blank" class="floating-social s-1"><i class="bi bi-instagram"></i></a>
    <a href="https://www.linkedin.com/company/crea8ve-cool/" target="_blank" class="floating-social s-2"><i class="bi bi-linkedin"></i></a>
</div>
<?php 
$data['page_hero_visual'] = ob_get_clean();
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<!-- Direct Contact Section -->
<section class="section-padding bg-white">
    <div class="container" style="max-width: 1240px;">
        <div class="row g-5">
            <div class="col-md-6" data-aos="fade-up">
                <div class="contact-method-card p-5 bg-light rounded-5 border-3 border border-dark shadow-punchy-sm h-100">
                    <span class="text-accent-dynamic fw-bold small letter-spacing-2 mb-3 d-block">GENERAL INQUIRY</span>
                    <a href="mailto:info@crea8vecool.com" class="h2 fw-900 text-dark text-decoration-none d-inline-block hover-accent">info@<br>CREA8VECOOL.com</a>
                    <p class="text-muted mb-0">For partnerships, speaking engagements, or just a quick chat about your next big idea.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-method-card p-5 bg-dark text-white rounded-5 border-3 border border-dark shadow-punchy-sm h-100">
                    <span class="text-accent-dynamic fw-bold small letter-spacing-2 mb-3 d-block">ACCELERATED SUPPORT</span>
                    <a href="tel:+919972988194" class="h2 fw-900 text-white text-decoration-none d-inline-block hover-accent">+91 99729<br>88194</a>
                    <p class="opacity-50 mb-0">Direct access for current partners and high-priority enterprise audit requests.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategic Inbound Section -->
<section class="section-padding bg-light-soft border-top border-bottom">
    <div class="container" style="max-width: 1000px;">
        <div class="row g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="text-accent-dynamic fw-bold small letter-spacing-2 mb-3 d-block">STRATEGY AUDIT</span>
                <h2 class="display-5 fw-900 text-dark mb-4">Let's blueprint <br>your <span class="gradient-text">Success.</span></h2>
                <p class="fs-5 text-muted mb-5">Our multi-step audit helps us understand your business at a molecular level before we even hop on a call.</p>
                
                <div class="audit-steps-progress mb-5">
                    <div class="step-indicator active" data-step="1">
                        <div class="step-dot"></div>
                        <span>IDENTIFICATION</span>
                    </div>
                    <div class="step-indicator" data-step="2">
                        <div class="step-dot"></div>
                        <span>SCOPE & SCALE</span>
                    </div>
                    <div class="step-indicator" data-step="3">
                        <div class="step-dot"></div>
                        <span>THE VISION</span>
                    </div>
                </div>

                <div class="contact-perks d-grid gap-3 d-none d-lg-grid">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-shield-check text-accent-dynamic fs-4"></i>
                        <span class="fw-bold small opacity-75">NDA PROTECTED BY DEFAULT</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-lightning-charge text-accent-dynamic fs-4"></i>
                        <span class="fw-bold small opacity-75">24H RESPONSE GUARANTEE</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="p-5 bg-white border-3 border border-dark shadow-punchy rounded-5">
                    <?php if ($data['success']): ?>
                        <div class="alert alert-success border-3 border-dark rounded-4 mb-4 p-4 shadow-punchy-sm" style="background: #28C840; color: white;">
                            <h4 class="fw-900 mb-1">TRANSMISSION_SUCCESS</h4>
                            <p class="small fw-bold mb-0">Your proposal has been securely logged. Our architects will review it within 24 hours.</p>
                        </div>
                    <?php endif; ?>

                    <form action="<?= BASE_URL ?>contact" method="POST" id="auditForm" class="row g-4">
                        <!-- Step 1: Identification -->
                        <div class="audit-step" id="step-1">
                            <div class="mb-4">
                                <h4 class="fw-900 mb-1">01. Identification</h4>
                                <p class="text-muted small">Who are we building this for?</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Full Name</label>
                                    <input type="text" name="name" class="form-control br-input-v3" placeholder="John Doe" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Work Email</label>
                                    <input type="email" name="email" class="form-control br-input-v3" placeholder="john@company.com" required>
                                </div>
                                <div class="col-12 mt-5">
                                    <button type="button" class="btn btn-dark w-100 py-3 fw-900 text-uppercase border-3 border-dark next-step" style="letter-spacing: 0.1em; border-radius: 12px; box-shadow: 6px 6px 0px var(--accent);">
                                        NEXT: PROJECT SCOPE <i class="bi bi-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Scope & Scale -->
                        <div class="audit-step d-none" id="step-2">
                            <div class="mb-4">
                                <h4 class="fw-900 mb-1">02. Scope & Scale</h4>
                                <p class="text-muted small">What is the magnitude of the project?</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Service Required</label>
                                    <select name="service_type" class="form-select br-input-v3">
                                        <option value="" selected disabled>Select Service</option>
                                        <option>Web Design & Dev</option>
                                        <option>SEO Domination</option>
                                        <option>SaaS Engineering</option>
                                        <option>Performance Marketing</option>
                                        <option>ERP/Automation</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Investment Range (₹)</label>
                                    <select name="budget" class="form-select br-input-v3">
                                        <option value="" selected disabled>Select Budget</option>
                                        <option>₹50,000 - ₹2,00,000</option>
                                        <option>₹2,00,000 - ₹5,00,000</option>
                                        <option>₹5,00,000 - ₹15,00,000</option>
                                        <option>₹15,00,000+</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-5 d-flex gap-3">
                                    <button type="button" class="btn btn-outline-dark py-3 fw-900 text-uppercase prev-step" style="border-radius: 12px; flex: 1;">
                                        BACK
                                    </button>
                                    <button type="button" class="btn btn-dark py-3 fw-900 text-uppercase next-step" style="letter-spacing: 0.1em; border-radius: 12px; box-shadow: 6px 6px 0px var(--accent); flex: 2;">
                                        NEXT: THE VISION <i class="bi bi-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: The Vision -->
                        <div class="audit-step d-none" id="step-3">
                            <div class="mb-4">
                                <h4 class="fw-900 mb-1">03. The Vision</h4>
                                <p class="text-muted small">Describe the "Why" behind the project.</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-12">
                                    <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Project Brief</label>
                                    <textarea name="message" class="form-control br-input-v3" rows="5" placeholder="Goals, target audience, technical hurdles, and your ultimate vision..."></textarea>
                                </div>
                                <div class="col-12 mt-5 d-flex gap-3">
                                    <button type="button" class="btn btn-outline-dark py-3 fw-900 text-uppercase prev-step" style="border-radius: 12px; flex: 1;">
                                        BACK
                                    </button>
                                    <button type="submit" class="btn btn-dark py-3 fw-900 text-uppercase" style="letter-spacing: 0.1em; border-radius: 12px; box-shadow: 6px 6px 0px var(--accent); flex: 2;">
                                        TRANSMIT PROPOSAL <i class="bi bi-send-fill ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map or Location placeholder (Optional, keeping it clean) -->

<!-- CTA -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
.contact-hero-visual {
    position: relative;
    width: 320px;
}
.terminal-box {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    width: 100%;
}
.dot { width: 8px; height: 8px; border-radius: 50%; }
.red { background: #ff5f56; }
.yellow { background: #ffbd2e; }
.green { background: #27c93f; }

.br-input-v2 {
    border: 2px solid #eee;
    background: #f8faff;
    border-radius: 12px;
    padding: 12px 15px;
    font-weight: 700;
    font-size: 14px;
}
.br-input-v2:focus {
    border-color: var(--accent);
    background: white;
    box-shadow: none;
}
.btn-dark-punchy {
    background: var(--text-dark);
    color: white;
    border-radius: 12px;
    font-weight: 900;
    letter-spacing: 1px;
    box-shadow: 6px 6px 0px var(--accent);
    transition: all 0.3s;
}
.btn-dark-punchy:hover {
    transform: translate(-2px, -2px);
    box-shadow: 10px 10px 0px var(--accent);
    color: white;
}

.floating-social {
    position: absolute;
    width: 50px;
    height: 50px;
    background: white;
    border: 2px solid var(--text-dark);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    box-shadow: 5px 5px 0px var(--text-dark);
    z-index: 10;
}
.s-1 { top: -20px; left: -20px; color: #25D366; }
.s-2 { bottom: -20px; right: -20px; color: #0077B5; }

.contact-method-card {
    transition: all 0.4s ease;
}
.contact-method-card:hover {
    transform: translateY(-8px);
}
.br-input-v3 {
    border: 3px solid var(--text-dark);
    padding: 15px 20px;
    border-radius: 12px;
    font-weight: 700;
    background: transparent;
    transition: all 0.3s;
}
.br-input-v3:focus {
    background: white;
    border-color: var(--accent);
    box-shadow: 6px 6px 0px var(--text-dark);
    outline: none;
}
.shadow-punchy {
    box-shadow: 20px 20px 0px var(--text-dark);
}
/* Audit Form Progress */
.audit-steps-progress {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.step-indicator {
    display: flex;
    align-items: center;
    gap: 15px;
    opacity: 0.4;
    transition: all 0.3s ease;
}
.step-indicator.active {
    opacity: 1;
}
.step-dot {
    width: 12px;
    height: 12px;
    border: 2px solid var(--text-dark);
    border-radius: 50%;
    position: relative;
}
.step-indicator.active .step-dot {
    background: var(--primary-gradient);
    border-color: transparent;
    box-shadow: 0 0 10px var(--primary-start);
}
.step-indicator span {
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.1em;
}

.audit-step {
    animation: fadeInSlide 0.5s ease forwards;
}

@keyframes fadeInSlide {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
