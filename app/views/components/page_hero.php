<?php
/**
 * Stunning Page Hero Component v2
 * High-end, unique bento-glass design with punchy colors.
 */
$heroColor = $data['hero_color'] ?? '#6A5AE0';
?>

<section class="stunning-page-hero position-relative overflow-hidden pt-5 pb-5">
    
    <!-- Unique Moving Grid Background -->
    <div class="hero-grid-bg"></div>
    <div class="hero-scanner-line"></div>

    <!-- Punchy Dynamic Accents -->
    <div class="hero-blur-accent accent-1" style="background: <?= $heroColor ?>; top: -20%; right: -10%;"></div>
    <div class="hero-blur-accent accent-2" style="background: <?= $heroColor ?>; bottom: -20%; left: -10%;"></div>
    
    <div class="hero-grain-overlay"></div>

    <div class="container position-relative pt-5 pb-5" style="max-width: 1240px; z-index: 10;">
        
        <!-- Integrated Breadcrumbs -->
        <?php if (isset($data['breadcrumbs'])): ?>
        <nav aria-label="breadcrumb" class="mb-5" data-aos="fade-down">
            <ol class="breadcrumb stunning-breadcrumb m-0">
                <?php foreach ($data['breadcrumbs'] as $index => $crumb): ?>
                    <?php if ($index === count($data['breadcrumbs']) - 1): ?>
                        <li class="breadcrumb-item active text-uppercase small fw-900" aria-current="page"><?= htmlspecialchars($crumb['name']) ?></li>
                    <?php else: ?>
                        <li class="breadcrumb-item small fw-900">
                            <a href="<?= BASE_URL . $crumb['url'] ?>" class="text-decoration-none text-uppercase"><?= htmlspecialchars($crumb['name']) ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
        </nav>
        <?php endif; ?>

        <div class="row align-items-center g-5">
            <div class="col-lg-7" data-aos="fade-right">
                <?php if (isset($data['page_hero_badge'])): ?>
                <div class="modern-hero-badge mb-4" style="--accent: <?= $heroColor ?>;">
                    <span class="pulse-dot-v2"></span>
                    <span class="text-uppercase fw-900"><?= htmlspecialchars($data['page_hero_badge']) ?></span>
                </div>
                <?php endif; ?>

                <h1 class="page-hero-title-v2">
                    <?= $data['page_title_html'] ?? htmlspecialchars($data['page_title']) ?>
                </h1>
                
                <p class="page-hero-subtext-v2 mt-4 fs-5 opacity-75">
                    <?= htmlspecialchars($data['page_subtitle']) ?>
                </p>

                <div class="d-flex align-items-center gap-4 mt-5">
                    <div class="scroll-down-indicator d-flex align-items-center gap-3">
                        <div class="mouse-icon">
                            <div class="wheel"></div>
                        </div>
                        <span class="text-uppercase small fw-900 opacity-50 letter-spacing-2">Scroll To Explore</span>
                    </div>
                </div>
            </div>

            <!-- Stunning Right Visual Card -->
            <div class="col-lg-5" data-aos="zoom-in-up" data-aos-delay="200">
                <?php if (isset($data['page_hero_visual'])): ?>
                    <?= $data['page_hero_visual'] ?>
                <?php else: ?>
                <div class="glass-command-center" style="--accent: <?= $heroColor ?>;">
                    <div class="gcc-inner">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <div class="gcc-dots">
                                <span></span><span></span><span></span>
                            </div>
                            <span class="gcc-badge">LIVE_SIGNAL</span>
                        </div>

                        <div class="gcc-main-metric mb-5">
                            <span class="small fw-900 text-uppercase opacity-50 d-block mb-2">Network Health</span>
                            <div class="d-flex align-items-end gap-3">
                                <h2 class="m-0 fw-900 h1" style="font-family: 'Clash Display';">99.8%</h2>
                                <div class="wave-container">
                                    <div class="wave"></div><div class="wave"></div><div class="wave"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 pt-4 border-top border-dark border-opacity-10">
                            <div class="col-6">
                                <span class="d-block small fw-bold opacity-50 text-uppercase mb-1">Scale Velocity</span>
                                <span class="h4 fw-900 mb-0">High</span>
                            </div>
                            <div class="col-6">
                                <span class="d-block small fw-bold opacity-50 text-uppercase mb-1">Status</span>
                                <span class="h4 fw-900 mb-0 text-success">Active</span>
                            </div>
                        </div>
                    </div>
                    <!-- Floating Accent Shapes -->
                    <div class="gcc-float circle-1"></div>
                    <div class="gcc-float cube-1"></div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<style>
.stunning-page-hero {
    background: #fff;
    min-height: 80vh;
    display: flex;
    align-items: center;
}

/* Moving Grid Effect */
.hero-grid-bg {
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(0,0,0,0.03) 1px, transparent 1px), 
                      linear-gradient(90deg, rgba(0,0,0,0.03) 1px, transparent 1px);
    background-size: 50px 50px;
    opacity: 0.5;
    z-index: 1;
}

.hero-scanner-line {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(to bottom, rgba(0,0,0,0.02), transparent);
    animation: scanner 6s linear infinite;
    z-index: 2;
}

@keyframes scanner {
    0% { transform: translateY(-100%); }
    100% { transform: translateY(100vh); }
}

.hero-blur-accent {
    position: absolute;
    width: 600px;
    height: 600px;
    filter: blur(120px);
    opacity: 0.12;
    border-radius: 50%;
    z-index: 2;
    animation: accentMove 10s ease-in-out infinite;
}

@keyframes accentMove {
    0%, 100% { transform: translate(0,0) scale(1); }
    50% { transform: translate(30px, -20px) scale(1.1); }
}

.stunning-breadcrumb {
    background: #fff;
    border: 2px solid var(--text-dark);
    box-shadow: 6px 6px 0px var(--text-dark);
    padding: 10px 25px !important;
    border-radius: 0;
}

.stunning-breadcrumb .breadcrumb-item a {
    color: var(--text-dark);
    opacity: 0.4;
    transition: all 0.3s;
}

.stunning-breadcrumb .breadcrumb-item a:hover {
    opacity: 1;
    color: var(--primary-start);
}

.stunning-breadcrumb .active { color: var(--text-dark); opacity: 1; }

.modern-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 8px 18px;
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 4px 4px 0px var(--accent);
}

.pulse-dot-v2 {
    width: 10px;
    height: 10px;
    background: var(--accent);
    border-radius: 50%;
    animation: pulseV2 1.5s infinite;
}

@keyframes pulseV2 {
    0% { transform: scale(0.8); opacity: 1; }
    100% { transform: scale(1.4); opacity: 0; }
}

.page-hero-title-v2 {
    font-family: 'Clash Display';
    font-weight: 900;
    font-size: clamp(36px, 5vw, 64px);
    line-height: 1;
    text-transform: uppercase;
    letter-spacing: -0.04em;
    color: var(--text-dark);
}

/* Glass Command Center Visual */
.glass-command-center {
    position: relative;
    z-index: 10;
}

.gcc-inner {
    background: rgba(255,255,255,0.8);
    backdrop-filter: blur(20px);
    border: 3px solid var(--text-dark);
    box-shadow: 20px 20px 0px var(--text-dark);
    padding: 60px 40px;
    border-radius: 40px;
    position: relative;
    z-index: 10;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.glass-command-center:hover .gcc-inner {
    transform: perspective(1000px) rotateX(2deg) rotateY(-2deg) translateZ(10px);
    box-shadow: 25px 25px 0px var(--accent);
}

.gcc-dots span {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #eee;
    margin-right: 6px;
    border: 1px solid var(--text-dark);
}

.gcc-badge {
    padding: 4px 12px;
    background: var(--text-dark);
    color: #fff;
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 2px;
}

/* Animated Wave */
.wave-container { display: flex; gap: 4px; padding-bottom: 8px; }
.wave {
    width: 4px;
    background: var(--accent);
    animation: waveAnim 1s ease-in-out infinite;
}
.wave:nth-child(2) { animation-delay: 0.1s; }
.wave:nth-child(3) { animation-delay: 0.2s; }

@keyframes waveAnim {
    0%, 100% { height: 10px; }
    50% { height: 25px; }
}

/* Floating Shapes */
.gcc-float {
    position: absolute;
    z-index: 1;
    pointer-events: none;
    animation: floatShape 4s ease-in-out infinite;
}
.circle-1 {
    width: 100px; height: 100px;
    background: var(--accent);
    top: -40px; right: -40px;
    opacity: 0.1; border-radius: 50%;
}
.cube-1 {
    width: 60px; height: 60px;
    border: 2px solid var(--text-dark);
    bottom: -30px; left: -30px;
    animation-delay: 1s;
}

@keyframes floatShape {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(-20px) rotate(10deg); }
}

/* Mouse Icon */
.mouse-icon {
    width: 24px; height: 40px;
    border: 2px solid var(--text-dark);
    border-radius: 12px;
    position: relative;
}
.wheel {
    width: 4px; height: 10px;
    background: var(--text-dark);
    position: absolute;
    top: 6px; left: 50%;
    transform: translateX(-50%);
    border-radius: 2px;
    animation: scrollWheel 2s linear infinite;
}

@keyframes scrollWheel {
    0% { transform: translate(-50%, 0); opacity: 1; }
    100% { transform: translate(-50%, 15px); opacity: 0; }
}

.letter-spacing-2 { letter-spacing: 2px; }
.fw-900 { font-weight: 900; }
</style>
