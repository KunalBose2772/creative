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
             <form action="<?= BASE_URL ?>contact" method="POST" id="heroContactForm" class="row g-3">
                <input type="hidden" name="message" value="Requested an audit from the Contact Page Hero Form">
                <div class="col-12">
                    <input type="text" name="name" class="form-control br-input-v2" placeholder="Full Name" required>
                </div>
                <div class="col-12">
                    <input type="email" name="email" class="form-control br-input-v2" placeholder="Work Email" required>
                </div>
                <div class="col-12">
                     <button type="submit" class="btn btn-dark-punchy w-100 py-3 mt-2">INITIALIZE AUDIT</button>
                </div>
             </form>
        </div>
    </div>
    <a href="https://www.instagram.com/crea8vecool/" target="_blank" rel="noopener noreferrer" class="floating-social s-1" title="Follow Crea8ve Cool on Instagram"><i class="bi bi-instagram"></i></a>
    <a href="https://www.linkedin.com/company/crea8ve-cool/" target="_blank" rel="noopener noreferrer" class="floating-social s-2" title="Connect with Crea8ve Cool on LinkedIn"><i class="bi bi-linkedin"></i></a>
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
                    <a href="mailto:crea8vecool@gmail.com" class="h3 fw-900 text-dark text-decoration-none d-inline-block hover-accent mb-3" title="Send an Email to Crea8ve Cool Support" style="word-break: break-all;">crea8vecool@gmail.com</a>
                    <p class="text-muted mb-0">For partnerships, speaking engagements, or just a quick chat about your next big idea.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-method-card p-5 bg-dark text-white rounded-5 border-3 border border-dark shadow-punchy-sm h-100">
                    <span class="text-accent-dynamic fw-bold small letter-spacing-2 mb-3 d-block">ACCELERATED SUPPORT</span>
                    <a href="tel:+919972988194" class="h3 fw-900 text-white text-decoration-none d-inline-block hover-accent mb-3">+91 99729 88194</a>
                    <p class="text-light opacity-75 mb-0">Direct access for current partners and high-priority enterprise audit requests.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Geographic Hubs Section -->
<section class="py-5 bg-light border-top border-bottom border-dark border-opacity-10">
    <div class="container" style="max-width: 1240px;">
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-up">
                <div class="p-4 bg-white rounded-4 border border-dark border-2 shadow-punchy-sm d-flex align-items-start gap-3">
                    <div class="icon-box-punchy p-3 bg-light border border-dark rounded-3" style="min-width: 54px; display: flex; justify-content: center; align-items: center;">
                        <i class="bi bi-geo-alt-fill text-accent-dynamic fs-3"></i>
                    </div>
                    <div>
                        <span class="badge bg-dark text-white rounded-pill px-2 py-1 mb-2 fw-bold small">MUMBAI HEADQUARTERS</span>
                        <h4 class="fw-900 text-dark mb-1">Crea8ve Cool Mumbai</h4>
                        <p class="text-muted mb-0 small">Powai, Mumbai, Maharashtra 400076, India</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 bg-white rounded-4 border border-dark border-2 shadow-punchy-sm d-flex align-items-start gap-3">
                    <div class="icon-box-punchy p-3 bg-light border border-dark rounded-3" style="min-width: 54px; display: flex; justify-content: center; align-items: center;">
                        <i class="bi bi-geo-alt-fill text-accent-dynamic fs-3"></i>
                    </div>
                    <div>
                        <span class="badge bg-dark text-white rounded-pill px-2 py-1 mb-2 fw-bold small">REGIONAL GROWTH HUB</span>
                        <h4 class="fw-900 text-dark mb-1">Crea8ve Cool Ranchi</h4>
                        <p class="text-muted mb-0 small">Ranchi, Jharkhand 834001, India</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- General Contact Section -->
<section class="section-padding bg-light-soft border-top border-bottom">
    <div class="container" style="max-width: 1000px;">
        <div class="row g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="text-accent-dynamic fw-bold small letter-spacing-2 mb-3 d-block">GENERAL INQUIRY</span>
                <h2 class="display-5 fw-900 text-dark mb-4">Let's start a <br><span class="gradient-text">Conversation.</span></h2>
                <p class="fs-5 text-muted mb-5">Have a simple question, feedback, or a partnership idea? Drop us a line and our core team will respond directly to you.</p>
                
                <div class="contact-perks d-grid gap-3 d-none d-lg-grid">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-shield-check text-accent-dynamic fs-4"></i>
                        <span class="fw-bold small opacity-75">DIRECT SECURE CHANNEL</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-lightning-charge text-accent-dynamic fs-4"></i>
                        <span class="fw-bold small opacity-75">12H AVERAGE RESPONSE TIME</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="p-5 bg-white border-3 border border-dark shadow-punchy rounded-5">
                    <?php if ($data['success']): ?>
                        <div class="alert alert-success border-3 border-dark rounded-4 mb-4 p-4 shadow-punchy-sm" style="background: #28C840; color: white;">
                            <h4 class="fw-900 mb-1">TRANSMISSION_SUCCESS</h4>
                            <p class="small fw-bold mb-0">Your message has been securely sent. We will get back to you within a few business hours!</p>
                        </div>
                    <?php endif; ?>

                    <form action="<?= BASE_URL ?>contact" method="POST" id="contactFormSimple" class="row g-4">
                        <div class="col-12">
                            <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Full Name</label>
                            <input type="text" name="name" class="form-control br-input-v3" placeholder="John Doe" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Email Address</label>
                            <input type="email" name="email" class="form-control br-input-v3" placeholder="john@company.com" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-900 text-uppercase small opacity-50 letter-spacing-1">Message</label>
                            <textarea name="message" class="form-control br-input-v3" rows="5" placeholder="Your questions, ideas, or feedback..." required></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-dark w-100 py-3 fw-900 text-uppercase border-3 border-dark" style="letter-spacing: 0.1em; border-radius: 12px; box-shadow: 6px 6px 0px var(--accent);">
                                SEND MESSAGE <i class="bi bi-send-fill ms-2"></i>
                            </button>
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
