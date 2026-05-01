<?php 
$data['page_hero_badge'] = 'The Advantage';
$data['page_title_html'] = 'Why Brands Choose <br><span class="gradient-text">Crea8ve Cool.</span>';
$data['page_subtitle'] = "We don't just build websites; we engineer revenue-generating assets. Discover the technical and strategic edge that sets us apart from the noise.";

// Visual element for why-us hero
ob_start(); ?>
<div class="why-hero-visual" style="--accent: <?= $data['hero_color'] ?>;">
    <div class="floating-benefit b-1" data-aos="zoom-in" data-aos-delay="200">
        <i class="bi bi-speedometer2"></i>
        <span>100/100 Speed</span>
    </div>
    <div class="floating-benefit b-2" data-aos="zoom-in" data-aos-delay="400">
        <i class="bi bi-shield-check"></i>
        <span>Bank-Grade Security</span>
    </div>
    <div class="floating-benefit b-3" data-aos="zoom-in" data-aos-delay="600">
        <i class="bi bi-graph-up-arrow"></i>
        <span>ROI Obsessed</span>
    </div>
    <div class="central-orb"></div>
</div>
<?php 
$data['page_hero_visual'] = ob_get_clean();
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<!-- Core Advantages Section -->
<section class="section-padding bg-white">
    <div class="container" style="max-width: 1240px;">
        <div class="row g-4 bento-grid">
            <div class="col-lg-6" data-aos="fade-up">
                <div class="bento-card p-5 h-100 bg-glossy-black text-white">
                    <span class="badge text-uppercase mb-3" style="background: rgba(255,255,255,0.1);">Precision</span>
                    <h3 class="display-6 fw-900 mb-4">Engineering-First <br>Approach.</h3>
                    <p class="opacity-60 fs-5 mb-0">Unlike "creative" agencies that focus solely on aesthetics, we treat every project like a mission-critical piece of software. Every pixel is backed by performance data.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="bento-card p-5 h-100">
                    <span class="badge bg-light text-dark text-uppercase mb-3">Transparency</span>
                    <h3 class="display-6 fw-900 mb-4 text-dark">Zero Fluff. <br>Just Results.</h3>
                    <p class="text-muted fs-5 mb-0">We don't hide behind marketing jargon. You get direct access to our architects, real-time dashboards, and weekly impact reports that show exactly how your investment is growing.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="bento-card p-4 h-100 text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="bg-light p-3 rounded-circle mb-4">
                        <i class="bi bi-lightning-charge-fill text-accent-dynamic fs-2"></i>
                    </div>
                    <h4 class="fw-900 mb-2">99% Delivery</h4>
                    <p class="small text-muted mb-0">We take deadlines seriously. Our agile workflows ensure your project stays on track and launches on schedule.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="bento-card p-4 h-100 text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="bg-light p-3 rounded-circle mb-4">
                        <i class="bi bi-headset text-accent-dynamic fs-2"></i>
                    </div>
                    <h4 class="fw-900 mb-2">Elite Support</h4>
                    <p class="small text-muted mb-0">Post-launch isn't the end. We provide dedicated engineers for maintenance and continuous scaling strategies.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="bento-card p-4 h-100 text-center d-flex flex-column align-items-center justify-content-center">
                    <div class="bg-light p-3 rounded-circle mb-4">
                        <i class="bi bi-stack text-accent-dynamic fs-2"></i>
                    </div>
                    <h4 class="fw-900 mb-2">Modern Stack</h4>
                    <i class="small text-muted mb-0">We use only the latest, most robust technologies like React 19, PHP 8.4, and AWS to build for the future.</i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<?php require_once APP_PATH . '/views/components/stats.php'; ?>

<!-- CTA -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
.why-hero-visual {
    position: relative;
    width: 300px;
    height: 300px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
}
.central-orb {
    width: 150px;
    height: 150px;
    background: var(--accent);
    border-radius: 50%;
    filter: blur(40px);
    opacity: 0.2;
    animation: pulseOrb 4s infinite alternate;
}
@keyframes pulseOrb {
    from { transform: scale(0.8); opacity: 0.1; }
    to { transform: scale(1.2); opacity: 0.3; }
}
.floating-benefit {
    position: absolute;
    background: white;
    padding: 12px 20px;
    border-radius: 100px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 800;
    font-size: 14px;
    border: 2px solid #eee;
    z-index: 10;
}
.floating-benefit i {
    color: var(--accent);
    font-size: 18px;
}
.b-1 { top: 0; left: -20px; animation: floatY 5s infinite ease-in-out; }
.b-2 { bottom: 20%; right: -30px; animation: floatY 4.5s infinite ease-in-out reverse; }
.b-3 { top: 60%; left: -50px; animation: floatY 6s infinite ease-in-out 1s; }

@keyframes floatY {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
}
</style>
