<footer id="footer" class="footer-section pt-5 bg-glossy-black" style="border-top: 1px solid rgba(255,255,255,0.1); color: #fff;">
    <div class="container-fluid px-md-5">
        <!-- Big Statement Header -->
        <div class="row align-items-center py-5 border-bottom" style="border-color: rgba(255,255,255,0.1) !important;">
            <div class="col-lg-8">
                <h2 data-aos="reveal-text" style="font-size: clamp(40px, 10vw, 120px); font-weight: 800; letter-spacing: -0.05em; line-height: 0.8; margin-bottom: 20px; color: #fff;">
                    LET'S MAKE IT <br><span class="gradient-text">LEGENDARY.</span>
                </h2>
            </div>
            <div class="col-lg-4 text-lg-end">
                <p class="fs-5 mb-4 opacity-75" style="max-width: 400px; margin-left: auto;">Stop being just another website. Be the benchmark in your industry.</p>
                <div class="d-flex gap-3 justify-content-lg-end">
                    <a href="mailto:crea8vecool@gmail.com" class="footer-cta-pill" title="Send an Email to Crea8ve Cool Support">GET IN TOUCH <i class="bi bi-arrow-down-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <!-- Main Footer Grid -->
        <div class="row g-0">
            <!-- Branding & Social -->
            <div class="col-lg-6 col-md-12 py-5 pe-lg-5 border-end border-bottom" style="border-color: rgba(255,255,255,0.1) !important;">
                <a href="<?= BASE_URL ?>" class="d-block mb-4">
                    <img src="<?= BASE_URL ?>public/assets/images/logo-dark.webp" alt="Crea8ve Cool Logo" title="Crea8ve Cool Logo" style="height: 60px;" loading="lazy" width="200" height="60">
                </a>
                <p class="footer-tagline text-white opacity-50 mb-4" style="font-size: 16px; max-width: 420px;">
                    A premium digital agency engineering high-performance identities and conversion engines for the next generation of industry leaders.
                </p>
                <div class="social-grid d-flex gap-3 mb-5">
                    <a href="https://www.linkedin.com/company/crea8ve-cool/" target="_blank" rel="noopener noreferrer" class="footer-social-pill" title="Connect with Crea8ve Cool on LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.instagram.com/crea8vecool/" target="_blank" rel="noopener noreferrer" class="footer-social-pill" title="Follow Crea8ve Cool on Instagram"><i class="bi bi-instagram"></i></a>
                </div>
                <!-- Contact info moved here -->
                <div class="d-flex flex-wrap gap-4 opacity-50 mt-4">
                    <div class="d-flex align-items-start gap-2">
                        <i class="bi bi-geo-alt-fill mt-1"></i>
                        <div class="d-flex flex-column">
                            <span class="small fw-bold text-white">MUMBAI HQ</span>
                            <span class="small text-white-50" style="font-size: 13px;">Powai, Mumbai, MH, India</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-2">
                        <i class="bi bi-geo-alt-fill mt-1"></i>
                        <div class="d-flex flex-column">
                            <span class="small fw-bold text-white">RANCHI HUB</span>
                            <span class="small text-white-50" style="font-size: 13px;">Ranchi, JH, India</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-envelope"></i>
                        <a href="mailto:crea8vecool@gmail.com" class="small fw-bold text-white text-decoration-none">CREA8VECOOL@GMAIL.COM</a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-phone"></i>
                        <a href="tel:+919972988194" class="small fw-bold text-white text-decoration-none">+91 99729 88194</a>
                    </div>
                </div>
            </div>

            <!-- Links: Company -->
            <div class="col-lg-3 col-md-6 col-6 py-5 px-lg-5 border-end border-bottom" style="border-color: rgba(255,255,255,0.1) !important;">
                <h3 class="text-uppercase fw-bold mb-4 opacity-50" style="font-size: 14px; letter-spacing: 2px; color: #fff;">Company</h3>
                <ul class="list-unstyled footer-links-new">
                    <li><a href="<?= BASE_URL ?>#home" title="Navigate to Home">Home</a></li>
                    <li><a href="<?= BASE_URL ?>#why" title="Learn about Our Team & Advantages">About Us</a></li>
                    <li><a href="<?= BASE_URL ?>video-portfolio" title="View our Work Showcase">Portfolio</a></li>
                    <li><a href="<?= BASE_URL ?>#process" title="Learn about Our Delivery Process">Process</a></li>
                    <li><a href="<?= BASE_URL ?>careers" title="Browse job openings and Careers">Careers</a></li>
                </ul>
            </div>

            <!-- Links: Services -->
            <div class="col-lg-3 col-md-6 col-6 py-5 px-lg-5 border-bottom" style="border-color: rgba(255,255,255,0.1) !important;">
                <h3 class="text-uppercase fw-bold mb-4 opacity-50" style="font-size: 14px; letter-spacing: 2px; color: #fff;">Excellence</h3>
                <ul class="list-unstyled footer-links-new">
                    <?php if (isset($data['catalog'])): ?>
                        <?php foreach (array_slice($data['catalog'], 0, 5) as $s): ?>
                            <li><a href="<?= BASE_URL ?>services/<?= $s['slug'] ?>" title="Explore our <?= htmlspecialchars($s['title']) ?> services"><?= htmlspecialchars($s['title']) ?></a></li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li><a href="<?= BASE_URL ?>#services" title="Explore Web & 3D Design Services">Web & 3D</a></li>
                        <li><a href="<?= BASE_URL ?>#services" title="Explore Performance Marketing Services">Performance</a></li>
                        <li><a href="<?= BASE_URL ?>#services" title="Explore SEO & Brand Scaling Services">SEO & Scaling</a></li>
                        <li><a href="<?= BASE_URL ?>#services" title="Explore Business Process Automation">Automation</a></li>
                        <li><a href="<?= BASE_URL ?>#services" title="Explore Creative Branding Services">Branding</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center py-4 gap-3">
            <span class="small fw-bold opacity-25">© <?= date('Y') ?> CREA8VE COOL / ALL RIGHTS RESERVED.</span>
            <div class="d-flex gap-4">
                <a href="#" class="small text-white text-decoration-none fw-bold opacity-25 hover-opacity-100" title="View our Privacy Policy">PRIVACY</a>
                <a href="#" class="small text-white text-decoration-none fw-bold opacity-25 hover-opacity-100" title="View our Terms and Conditions">TERMS</a>
            </div>
        </div>
    </div>
</footer>

<style>
.footer-cta-pill {
    padding: 12px 28px;
    background: #fff;
    color: #000 !important;
    font-weight: 700;
    text-decoration: none;
    border-radius: 100px;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    display: inline-block;
}
.footer-cta-pill:hover {
    transform: scale(1.05);
    background: var(--primary-gradient);
    color: #fff !important;
}
.footer-social-pill {
    width: 48px;
    height: 48px;
    border: 2px solid rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff !important;
    text-decoration: none;
    font-size: 18px;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.footer-social-pill:hover {
    background: #fff;
    color: #000 !important;
    transform: translateY(-4px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.5);
    border-color: #fff;
}
.footer-links-new li {
    margin-bottom: 12px;
}
.footer-links-new a {
    text-decoration: none;
    color: #fff;
    font-weight: 600;
    font-size: 15px;
    opacity: 0.5;
    transition: all 0.2s;
}
.footer-links-new a:hover {
    opacity: 1;
    padding-left: 5px;
}
.hover-opacity-100:hover {
    opacity: 1 !important;
}
</style>

<!-- LEAD POPUP: Compact Premium Neo-Brutalist Design -->
<div class="modal fade" id="consultationOnlyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 520px;">
        <div class="modal-content border-0 bg-transparent">
            <div class="lp-card position-relative">

                <!-- Close -->
                <button type="button" class="lp-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>

                <!-- Header -->
                <div class="lp-header mb-4">
                    <span class="section-tag mb-3 d-inline-block">Free Consultation</span>
                    <h3 class="lp-title">Let's Build Your <span class="gradient-text">Brand Together.</span></h3>
                    <p class="lp-subtitle mt-2">Tell us about your project and we'll get back to you within 24 hours.</p>
                </div>

                <!-- Service label (populated by JS) -->
                <div class="lp-service-pill mb-4 d-none" id="lp-service-wrapper">
                    <span class="lp-service-label">Enquiring about:</span>
                    <span id="modal-service-name" class="lp-service-name"></span>
                </div>

                <!-- Form -->
                <form id="consultationMachineForm">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="lp-field">
                                <label>Your Name</label>
                                <input type="text" name="name" placeholder="John Doe" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="lp-field">
                                <label>Phone / WhatsApp</label>
                                <input type="tel" name="phone" placeholder="+91 99XXXXXXXX" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="lp-field">
                                <label>Email Address</label>
                                <input type="email" name="email" placeholder="you@company.com" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="lp-field">
                                <label>What do you need help with?</label>
                                <select name="service_type">
                                    <option value="" disabled selected>Select a service</option>
                                    <option value="Website Design & Development">Website Design & Development</option>
                                    <option value="3D Motion & Video Production">3D Motion & Video Production</option>
                                    <option value="Search Engine Optimization">Search Engine Optimization</option>
                                    <option value="Performance Marketing (Ads)">Performance Marketing (Ads)</option>
                                    <option value="Social Media Management">Social Media Management</option>
                                    <option value="Full Brand Strategy">Full Brand Strategy</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 mt-1">
                            <button type="submit" class="btn btn-gradient w-100 py-3 fw-bold fs-6 border-0 rounded-3" title="Submit your consultation request">
                                Book Free Consultation <i class="bi bi-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                    <p class="lp-notice mt-3"><i class="bi bi-shield-check me-1"></i> Your information is private and will never be shared.</p>
                </form>

            </div>
        </div>
    </div>
</div>

<style>
/* =============================================
   LEAD POPUP — Compact Premium Neo-Brutalist
   ============================================= */
.lp-card {
    background: #FFFFFF;
    border: 2px solid var(--text-dark);
    border-radius: 28px;
    box-shadow: 10px 10px 0px var(--text-dark);
    padding: 36px 36px 28px;
}

.lp-close {
    position: absolute;
    top: 18px;
    right: 18px;
    width: 36px;
    height: 36px;
    background: #f5f5f5;
    border: 2px solid #eee;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    color: var(--text-dark);
    transition: var(--transition);
    cursor: pointer;
}
.lp-close:hover {
    background: var(--text-dark);
    color: #fff;
    transform: rotate(90deg);
    border-color: var(--text-dark);
}

.lp-title {
    font-family: 'Avenir', 'Montserrat', sans-serif;
    font-size: clamp(22px, 3vw, 28px);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -0.03em;
    color: var(--text-dark);
}

.lp-subtitle {
    font-size: 14px;
    color: var(--text-light);
    line-height: 1.6;
    margin: 0;
}

/* Service pill */
.lp-service-pill {
    display: flex;
    align-items: center;
    gap: 10px;
    background: var(--bg-soft);
    border: 1px solid var(--border);
    border-radius: 50px;
    padding: 8px 16px;
    width: fit-content;
}
.lp-service-label {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: var(--text-muted);
}
.lp-service-name {
    font-size: 13px;
    font-weight: 800;
    color: var(--primary-start);
}

/* Field styling */
.lp-field {
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.lp-field label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--text-muted);
}
.lp-field input,
.lp-field select {
    background: var(--bg-soft);
    border: 2px solid var(--border);
    border-radius: 12px;
    padding: 12px 16px;
    font-size: 14px;
    font-weight: 500;
    color: var(--text-dark);
    outline: none;
    transition: var(--transition);
    width: 100%;
    font-family: 'Inter', sans-serif;
}
.lp-field input:focus,
.lp-field select:focus {
    border-color: var(--primary-start);
    background: #fff;
    box-shadow: 0 0 0 4px rgba(106, 90, 224, 0.08);
}
.lp-field input::placeholder { color: var(--text-muted); }

/* Submit button */
#consultationOnlyModal .btn-gradient {
    border-radius: 12px !important;
    box-shadow: 4px 4px 0 var(--text-dark) !important;
    font-size: 15px !important;
    padding: 14px 24px !important;
}
#consultationOnlyModal .btn-gradient:hover {
    transform: translate(-2px, -2px) !important;
    box-shadow: 6px 6px 0 var(--text-dark) !important;
}

.lp-notice {
    font-size: 11px;
    color: var(--text-muted);
    text-align: center;
    margin: 0;
}

@media (max-width: 575px) {
    .lp-card { padding: 24px 20px 20px; border-radius: 20px; }
    .lp-title { font-size: 22px; }
}
</style>
