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
                    <a href="mailto:info@crea8vecool.com" class="footer-cta-pill">GET IN TOUCH <i class="bi bi-arrow-down-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <!-- Main Footer Grid -->
        <div class="row g-0">
            <!-- Branding & Social -->
            <div class="col-lg-6 col-md-12 py-5 pe-lg-5 border-end border-bottom" style="border-color: rgba(255,255,255,0.1) !important;">
                <a href="<?= BASE_URL ?>" class="d-block mb-4">
                    <img src="<?= BASE_URL ?>public/assets/images/logo-dark.png" alt="Crea8ve Cool" style="height: 60px;">
                </a>
                <p class="footer-tagline text-white opacity-50 mb-4" style="font-size: 16px; max-width: 420px;">
                    A premium digital agency engineering high-performance identities and conversion engines for the next generation of industry leaders.
                </p>
                <div class="social-grid d-flex gap-3 mb-5">
                    <a href="https://www.linkedin.com/company/crea8ve-cool/" target="_blank" class="footer-social-pill"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.instagram.com/crea8vecool/" target="_blank" class="footer-social-pill"><i class="bi bi-instagram"></i></a>
                </div>
                <!-- Contact info moved here -->
                <div class="d-flex flex-wrap gap-4 opacity-50 mt-4">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt"></i>
                        <span class="small fw-bold">CHANDIGARH, INDIA</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-envelope"></i>
                        <span class="small fw-bold">INFO@CREA8VECOOL.COM</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-phone"></i>
                        <span class="small fw-bold">+91 99729 88194</span>
                    </div>
                </div>
            </div>

            <!-- Links: Company -->
            <div class="col-lg-3 col-md-6 col-6 py-5 px-lg-5 border-end border-bottom" style="border-color: rgba(255,255,255,0.1) !important;">
                <h4 class="text-uppercase fw-bold mb-4 opacity-50" style="font-size: 14px; letter-spacing: 2px; color: #fff;">Company</h4>
                <ul class="list-unstyled footer-links-new">
                    <li><a href="<?= BASE_URL ?>#home">Home</a></li>
                    <li><a href="<?= BASE_URL ?>#why">About Us</a></li>
                    <li><a href="<?= BASE_URL ?>#work">Portfolio</a></li>
                    <li><a href="<?= BASE_URL ?>#process">Process</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>

            <!-- Links: Services -->
            <div class="col-lg-3 col-md-6 col-6 py-5 px-lg-5 border-bottom" style="border-color: rgba(255,255,255,0.1) !important;">
                <h4 class="text-uppercase fw-bold mb-4 opacity-50" style="font-size: 14px; letter-spacing: 2px; color: #fff;">Excellence</h4>
                <ul class="list-unstyled footer-links-new">
                    <?php if (isset($data['catalog'])): ?>
                        <?php foreach (array_slice($data['catalog'], 0, 5) as $s): ?>
                            <li><a href="<?= BASE_URL ?>services/<?= $s['slug'] ?>"><?= htmlspecialchars($s['title']) ?></a></li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li><a href="<?= BASE_URL ?>#services">Web & 3D</a></li>
                        <li><a href="<?= BASE_URL ?>#services">Performance</a></li>
                        <li><a href="<?= BASE_URL ?>#services">SEO & Scaling</a></li>
                        <li><a href="<?= BASE_URL ?>#services">Automation</a></li>
                        <li><a href="<?= BASE_URL ?>#services">Branding</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center py-4 gap-3">
            <span class="small fw-bold opacity-25">© <?= date('Y') ?> CREA8VE COOL / ALL RIGHTS RESERVED.</span>
            <div class="d-flex gap-4">
                <a href="#" class="small text-white text-decoration-none fw-bold opacity-25 hover-opacity-100">PRIVACY</a>
                <a href="#" class="small text-white text-decoration-none fw-bold opacity-25 hover-opacity-100">TERMS</a>
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
