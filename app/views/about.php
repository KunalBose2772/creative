<?php 
$data['page_hero_badge'] = 'The Origin';
$data['page_title_html'] = 'Engineers of the <br><span class="gradient-text">New Digital Age.</span>';
$data['page_subtitle'] = "Crea8ve Cool was born from a simple realization: the internet is crowded with beauty that doesn't sell. We combined elite aesthetics with aggressive ROI engineering.";

// Visual element for about hero
ob_start(); ?>
<div class="about-hero-visual" style="--accent: <?= $data['hero_color'] ?>;">
    <div class="cube-container">
        <div class="spinning-cube">
            <div class="face front">CORE</div>
            <div class="face back">SYNC</div>
            <div class="face right">SCALE</div>
            <div class="face left">ROI</div>
        </div>
    </div>
    <div class="about-tag">EST. 2020</div>
</div>
<?php 
$data['page_hero_visual'] = ob_get_clean();
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<!-- The Manifesto Section -->
<section class="manifesto-section section-padding bg-glossy-black text-white overflow-hidden" style="background-color: #050505 !important; color: #fff !important;">
    <div class="container" style="max-width: 1240px;">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="manifesto-visual position-relative p-2">
                    <img src="<?= BASE_URL ?>public/assets/images/about_marketing.webp" alt="Digital Engineering Authority" class="img-fluid rounded-5 border border-white border-opacity-10 shadow-lg">
                    <div class="manifesto-stat shadow-lg" data-aos="zoom-in" data-aos-delay="400">
                        <div class="ms-icon bg-accent-dynamic text-white"><i class="bi bi-activity"></i></div>
                        <div>
                            <span class="d-block h3 fw-900 mb-0">2.4ms</span>
                            <span class="small opacity-50 fw-bold letter-spacing-1">AVG RESPONSE SCALE</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="text-accent-dynamic fw-bold small letter-spacing-2 mb-3 d-block">THE MANIFESTO</span>
                <h2 class="display-4 fw-900 mb-4 lh-sm text-white">We don't just build. <br><span class="gradient-text">We Dominate.</span></h2>
                <p class="fs-5 opacity-75 mb-5">Our philosophy is built on three unbreakable pillars of modern digital engineering. We strip away the noise and focus entirely on the metrics that matter: **Scale, Authority, and ROI.**</p>
                
                <div class="pillars d-grid gap-4">
                    <div class="pillar d-flex gap-4">
                        <i class="bi bi-cpu text-accent-dynamic fs-2"></i>
                        <div>
                            <h4 class="fw-900 mb-1 text-white">Performance Logic</h4>
                            <p class="small opacity-50 mb-0">We treat marketing campaigns like high-frequency trading systems—optimizing every millisecond.</p>
                        </div>
                    </div>
                    <div class="pillar d-flex gap-4">
                        <i class="bi bi-eye text-accent-dynamic fs-2"></i>
                        <div>
                            <h4 class="fw-900 mb-1 text-white">Radical Authority</h4>
                            <p class="small opacity-50 mb-0">Your brand shouldn't just exist; it should set the benchmark for your entire industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section-padding bg-light">
    <div class="container" style="max-width: 1240px;">
        <div class="row g-4 bento-grid">
            <div class="col-lg-4" data-aos="fade-up">
                <div class="bento-card p-5 h-100 bg-white border-3 border border-dark shadow-punchy-sm">
                    <h3 class="fw-900 mb-3">01. Truth</h3>
                    <p class="text-muted">No vanity metrics. We focus on real business growth and verifiable ROI.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bento-card p-5 h-100 bg-white border-3 border border-dark shadow-punchy-sm">
                    <h3 class="fw-900 mb-3">02. Velocity</h3>
                    <p class="text-muted">We scale ideas into products at breakneck speed without sacrificing quality.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="bento-card p-5 h-100 bg-white border-3 border border-dark shadow-punchy-sm">
                    <h3 class="fw-900 mb-3">03. Impact</h3>
                    <p class="text-muted">Digital assets that don't move the needle are a waste of resources. We build for effect.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
.about-hero-visual {
    position: relative;
    width: 300px;
    height: 300px;
    perspective: 1000px;
}
.cube-container {
    width: 120px;
    height: 120px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.spinning-cube {
    width: 100%;
    height: 100%;
    position: relative;
    transform-style: preserve-3d;
    animation: rotateCube 10s infinite linear;
}
.face {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(var(--page-accent-rgb), 0.1);
    border: 3px solid var(--accent);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    font-size: 14px;
    color: var(--accent);
    backface-visibility: visible;
}
.front  { transform: translateZ(60px); }
.back   { transform: rotateY(180deg) translateZ(60px); }
.right  { transform: rotateY(90deg) translateZ(60px); }
.left   { transform: rotateY(-90deg) translateZ(60px); }

@keyframes rotateCube {
    from { transform: rotateX(0deg) rotateY(0deg); }
    to { transform: rotateX(360deg) rotateY(360deg); }
}

.about-tag {
    position: absolute;
    top: 20px;
    right: 0;
    background: var(--text-dark);
    color: white;
    padding: 6px 15px;
    border-radius: 6px;
    font-weight: 900;
    font-size: 11px;
    letter-spacing: 2px;
}

.manifesto-stat {
    position: absolute;
    bottom: 40px;
    left: -40px;
    background: white;
    padding: 20px 25px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    color: var(--text-dark);
    border: 3px solid var(--text-dark);
    z-index: 10;
}
.ms-icon {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}
</style>

