<?php
// app/views/components/services.php
?>
<section id="services" class="section-padding bg-white overflow-hidden" style="border-top: 2px solid #111;">
    <div class="container" style="max-width:1300px;">
        <!-- Section Header (Neo-Brutalist Alignment) -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 pb-4" style="border-bottom: 2px solid #111;" data-aos="fade-up">
            <div class="section-header mb-0">
                <span class="section-tag mb-3">Our Offerings</span>
                <h2 class="section-title m-0" style="font-family: 'Montserrat', sans-serif; font-weight: 800; color: #111; line-height: 1.1; letter-spacing: -1px;">
                    High-Impact Services <br class="d-none d-md-block">For <span class="gradient-text">Real Growth.</span>
                </h2>
            </div>
            <p class="mt-3 mt-md-0 text-muted" style="font-size: 17px; max-width: 440px; font-weight: 500; line-height: 1.6;">
                We don't do boring. We architect high-fidelity digital assets, code pixel-perfect websites, scale ROI, and animate beautiful 3D experiences.
            </p>
        </div>

        <!-- Neo-Brutalist Interactive Bento Services Grid -->
        <div class="row g-4 mt-2">
            
            <!-- Service 1: Web Design & Development (col-lg-7) -->
            <div class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="100">
                <div class="service-bento-card h-100 overflow-hidden d-flex flex-column flex-lg-row" style="--card-accent: #6A5AE0; --card-accent-rgb: 106, 90, 224;">
                    <!-- Ambient Glow Blur -->
                    <div class="bento-glow"></div>
                    
                    <!-- Content Panel -->
                    <div class="bento-content p-4 p-md-5 d-flex flex-column justify-content-between col-lg-6 col-12">
                        <div>
                            <span class="bento-badge mb-3">WEBSITES & APPS</span>
                            <h3 class="bento-title">Web Design & <br>Development</h3>
                            <p class="bento-desc mt-3">We engineer high-fidelity, lightning-fast custom websites that load in milliseconds and convert visitors into loyal clients.</p>
                            
                            <ul class="bento-features-list mt-4">
                                <li><i class="bi bi-patch-check"></i> Bespoke UI/UX Design</li>
                                <li><i class="bi bi-patch-check"></i> Custom Code architecture</li>
                                <li><i class="bi bi-patch-check"></i> Core Web Vitals Optimized</li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <a href="<?= BASE_URL ?>services/website" class="btn bento-btn" title="Explore our High-Performance Website Designing and Development services">Explore Web <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Interactive Visual Column -->
                    <div class="bento-visual col-lg-6 col-12 d-flex align-items-center justify-content-center p-4">
                        <div class="web-dev-visual w-100">
                            <!-- Code Editor Window -->
                            <div class="editor-window mb-3">
                                <div class="window-header">
                                    <div class="header-dots">
                                        <span class="dot-red"></span>
                                        <span class="dot-yellow"></span>
                                        <span class="dot-green"></span>
                                    </div>
                                    <span class="file-name"><i class="bi bi-filetype-js text-warning"></i> Index.js</span>
                                </div>
                                <div class="window-body">
                                    <div class="code-editor-lines" style="font-family: 'Courier New', Courier, monospace; font-size: 11.5px; line-height: 1.5; color: #E2E8F0;">
                                        <div class="line"><span class="c-keyword">const</span> <span class="c-val">site</span> = <span class="c-keyword">new</span> <span class="c-fn">CreativeEngine</span>();</div>
                                        <div class="line"><span class="c-val">site</span>.<span class="c-fn">injectStunningUI</span>({</div>
                                        <div class="line-indent"><span class="c-prop">loading</span>: <span class="c-string">'0.2s'</span>,</div>
                                        <div class="line-indent"><span class="c-prop">conversions</span>: <span class="c-string">'MAX'</span></div>
                                        <div class="line">});</div>
                                        <div class="line"><span class="c-val">site</span>.<span class="c-fn">compile</span>();</div>
                                    </div>
                                </div>
                            </div>
                            <!-- App Preview Window -->
                            <div class="browser-window">
                                <div class="window-header">
                                    <div class="browser-address-bar">
                                        <i class="bi bi-lock-fill text-success"></i>
                                        <span>crea8ve-live-preview.dev</span>
                                        <i class="bi bi-arrow-clockwise"></i>
                                    </div>
                                </div>
                                <div class="window-body preview-content-wrapper">
                                    <div class="preview-hero">
                                        <div class="ph-circle"></div>
                                        <div class="ph-rects">
                                            <div class="ph-line short"></div>
                                            <div class="ph-line long"></div>
                                        </div>
                                    </div>
                                    <div class="preview-cards mt-2">
                                        <div class="preview-card-item"></div>
                                        <div class="preview-card-item"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2: SEO & Paid Ads (col-lg-5) -->
            <div class="col-lg-5 col-12" data-aos="fade-up" data-aos-delay="200">
                <div class="service-bento-card h-100 overflow-hidden d-flex flex-column" style="--card-accent: #28C840; --card-accent-rgb: 40, 200, 64;">
                    <!-- Ambient Glow Blur -->
                    <div class="bento-glow"></div>
                    
                    <!-- Content Panel -->
                    <div class="bento-content p-4 p-md-5 d-flex flex-column justify-content-between">
                        <div>
                            <span class="bento-badge mb-3">MARKETING SOLUTIONS</span>
                            <h3 class="bento-title">SEO & Paid Ads</h3>
                            <p class="bento-desc mt-3">Command search rankings, drive massive intent-driven traffic, and scale profitable ad accounts with surgical targeting.</p>
                            
                            <ul class="bento-features-list mt-4">
                                <li><i class="bi bi-patch-check"></i> High-Authority SEO Ranking</li>
                                <li><i class="bi bi-patch-check"></i> Profitable Meta & Google Ads</li>
                                <li><i class="bi bi-patch-check"></i> Custom Real-time Analytics</li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <a href="<?= BASE_URL ?>services/seo" class="btn bento-btn" title="Explore our High-Impact SEO and Paid Advertising solutions">Explore SEO & Ads <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Interactive Visual Column -->
                    <div class="bento-visual d-flex align-items-center justify-content-center p-4 pt-0">
                        <div class="seo-ads-visual w-100">
                            <div class="analytics-widget">
                                <div class="widget-header">
                                    <span class="widget-title"><i class="bi bi-graph-up-arrow text-success"></i> Performance Metrics</span>
                                    <span class="widget-pulse">● LIVE</span>
                                </div>
                                <div class="widget-body">
                                    <!-- Metrics Grid -->
                                    <div class="metrics-grid mb-3">
                                        <div class="metric-card">
                                            <span class="m-lbl">ROAS</span>
                                            <span class="m-val" id="seo-roas-val">3.5x</span>
                                        </div>
                                        <div class="metric-card">
                                            <span class="m-lbl">Conversions</span>
                                            <span class="m-val" id="seo-leads-val">+140</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Live SVG Path Area Graph -->
                                    <div class="graph-box position-relative">
                                        <svg viewBox="0 0 260 70" class="graph-svg">
                                            <path id="dynamic-graph-path" d="M 0 50 Q 40 45 80 48 T 160 30 T 240 10 L 260 8 L 260 70 L 0 70 Z" fill="rgba(40, 200, 64, 0.12)" />
                                            <path id="dynamic-graph-stroke" d="M 0 50 Q 40 45 80 48 T 160 30 T 240 10 L 260 8" fill="none" stroke="#28C840" stroke-width="3" />
                                            <circle id="dynamic-graph-node" cx="260" cy="8" r="4" fill="#28C840" />
                                        </svg>
                                    </div>

                                    <!-- Interactive Scale Budget Simulator -->
                                    <div class="budget-scale-slider mt-3">
                                        <div class="slider-labels d-flex justify-content-between mb-1">
                                            <span class="s-lbl">Monthly Spend Scale</span>
                                            <span class="s-val text-success fw-bold" id="budget-display">$1,200</span>
                                        </div>
                                        <input type="range" class="neo-slider w-100" id="budget-scale-range" min="500" max="10000" step="100" value="1200" aria-label="Monthly spend budget scale range">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 3: Brand Design & Strategy (col-lg-5) -->
            <div class="col-lg-5 col-12" data-aos="fade-up" data-aos-delay="100">
                <div class="service-bento-card h-100 overflow-hidden d-flex flex-column" style="--card-accent: #FF5F57; --card-accent-rgb: 255, 95, 87;">
                    <!-- Ambient Glow Blur -->
                    <div class="bento-glow"></div>
                    
                    <!-- Content Panel -->
                    <div class="bento-content p-4 p-md-5 d-flex flex-column justify-content-between">
                        <div>
                            <span class="bento-badge mb-3">CREATIVE & POSITIONING</span>
                            <h3 class="bento-title">Brand Design & <br>Strategy</h3>
                            <p class="bento-desc mt-3">Craft cohesive, world-class identity systems, logos, and strategies that assert your marketplace authority instantly.</p>
                            
                            <ul class="bento-features-list mt-4">
                                <li><i class="bi bi-patch-check"></i> High-End Identity & Logo Design</li>
                                <li><i class="bi bi-patch-check"></i> Strategic Brand Architecture</li>
                                <li><i class="bi bi-patch-check"></i> Digital Brand Style Guides</li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <a href="<?= BASE_URL ?>services/creative" class="btn bento-btn" title="Explore our Strategic Brand Identity and Design services">Explore Branding <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Interactive Visual Column -->
                    <div class="bento-visual d-flex align-items-center justify-content-center p-4 pt-0">
                        <div class="branding-visual w-100">
                            <div class="branding-playground">
                                <div class="branding-header d-flex justify-content-between align-items-center mb-3">
                                    <span class="bp-title"><i class="bi bi-palette2 text-danger"></i> Brand Identity Deck</span>
                                    <span class="bp-spec-badge">COORDINATES OK</span>
                                </div>
                                <div class="branding-body d-flex gap-3 align-items-center">
                                    
                                    <!-- Interactive Constructing Grid Area -->
                                    <div class="logo-grid-box">
                                        <div class="construction-lines-grid"></div>
                                        <div class="brand-monogram" id="interactive-brand-monogram">C</div>
                                    </div>
                                    
                                    <!-- interactive Brand Configurator -->
                                    <div class="brand-configurator flex-grow-1">
                                        <span class="config-label d-block mb-2">DYNAMIC SWATCHES</span>
                                        <div class="color-bubbles-deck d-flex gap-2 mb-3">
                                            <button class="palette-swatch active" data-color="#FF5F57" data-name="Coral Premium" style="background:#FF5F57;" aria-label="Select Coral Premium color palette"></button>
                                            <button class="palette-swatch" data-color="#6A5AE0" data-name="Digital Purple" style="background:#6A5AE0;" aria-label="Select Digital Purple color palette"></button>
                                            <button class="palette-swatch" data-color="#28C840" data-name="Growth Green" style="background:#28C840;" aria-label="Select Growth Green color palette"></button>
                                            <button class="palette-swatch" data-color="#FEBC2E" data-name="Vibrant Gold" style="background:#FEBC2E;" aria-label="Select Vibrant Gold color palette"></button>
                                        </div>
                                        <div class="font-spec-card">
                                            <span class="f-name" id="font-name-target">Coral Premium</span>
                                            <span class="f-details">Hex: <span id="font-hex-target">#FF5F57</span> | Sans-Serif</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 4: 3D Videos & Animation (col-lg-7) -->
            <div class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="200">
                <div class="service-bento-card h-100 overflow-hidden d-flex flex-column flex-lg-row" style="--card-accent: #FEBC2E; --card-accent-rgb: 254, 188, 46;">
                    <!-- Ambient Glow Blur -->
                    <div class="bento-glow"></div>
                    
                    <!-- Content Panel -->
                    <div class="bento-content p-4 p-md-5 d-flex flex-column justify-content-between col-lg-6 col-12">
                        <div>
                            <span class="bento-badge mb-3">CINEMATIC VISUALS</span>
                            <h3 class="bento-title">3D Videos & <br>Animation</h3>
                            <p class="bento-desc mt-3">We model, render, and orchestrate cinema-grade 3D product animations and scroll-stopping videos that capture absolute attention.</p>
                            
                            <ul class="bento-features-list mt-4">
                                <li><i class="bi bi-patch-check"></i> High-End 3D Product Modeling</li>
                                <li><i class="bi bi-patch-check"></i> Cinematic Motion Design & VFX</li>
                                <li><i class="bi bi-patch-check"></i> Scroll-Stopping Ad Creative</li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <a href="<?= BASE_URL ?>services/motion" class="btn bento-btn" title="Explore our Cinematic 3D Video and Motion Graphics production">Explore 3D & Video <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                    <!-- Interactive Visual Column (CSS 3D Engine) -->
                    <div class="bento-visual col-lg-6 col-12 d-flex align-items-center justify-content-center p-4">
                        <div class="video-engine-visual w-100">
                            <div class="video-editor-window">
                                <div class="window-header d-flex justify-content-between">
                                    <span class="v-title"><i class="bi bi-cpu-fill text-warning"></i> 3D Render Viewport</span>
                                    <span class="v-fps">60.0 FPS</span>
                                </div>
                                <div class="window-body text-center py-4 position-relative overflow-hidden">
                                    <!-- Pure CSS 3D Scene Wrapper -->
                                    <div class="scene-3d">
                                        <div class="cube-3d-wireframe" id="interactive-3d-cube">
                                            <div class="cube-face cube-front">CREA8VE</div>
                                            <div class="cube-face cube-back">COOL</div>
                                            <div class="cube-face cube-right">3D</div>
                                            <div class="cube-face cube-left">ANIMATE</div>
                                            <div class="cube-face cube-top">RENDER</div>
                                            <div class="cube-face cube-bottom">ENGINE</div>
                                        </div>
                                    </div>
                                    <span class="scene-helper-txt">Hover Cube to Spin in 3D Space</span>
                                </div>
                                <!-- Timeline Track Controls -->
                                <div class="video-editor-timeline">
                                    <div class="timeline-header d-flex justify-content-between align-items-center gap-2">
                                        <button class="t-play-toggle" id="cube-anim-play-btn" aria-label="Play/Pause 3D animation"><i class="bi bi-pause-fill"></i></button>
                                        <div class="timeline-time-display">
                                            <span id="cube-timeline-timer">00:03:12</span>
                                        </div>
                                    </div>
                                    <div class="timeline-track-slider position-relative">
                                        <input type="range" class="timeline-scrubber" id="cube-timeline-range" min="0" max="100" value="40" aria-label="3D animation timeline scrubber">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- View All Services CTA Button -->
        <div class="text-center mt-5 mb-4" data-aos="fade-up">
            <a href="<?= BASE_URL ?>services" class="btn btn-outline-custom px-5 py-3 fs-5 fw-bold" style="border-radius: 50px;" title="View all specialized digital growth and engineering services">
                View All Services <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>

        <!-- Section Bottom Capabilities Tag Cloud (High-Fidelity Dual-Track Marquee) -->
        <div class="mt-5 pt-4">
            <div class="d-flex align-items-center gap-4 mb-4" data-aos="fade-up">
                <span style="font-size: 13px; font-weight: 900; color: #111; white-space: nowrap; letter-spacing: 2px; font-family: 'Montserrat', sans-serif;">FULL STACK CAPABILITIES</span>
                <div style="flex-grow: 1; height: 2px; background: #111;"></div>
            </div>

            <?php
            $track1 = [
                ['icon' => 'bi-window', 'title' => 'WEB DESIGN', 'color' => '#6A5AE0', 'tools' => 'Next.js • React • GSAP', 'slug' => 'website'],
                ['icon' => 'bi-cart3', 'title' => 'E-COMMERCE', 'color' => '#28C840', 'tools' => 'Shopify • WooCommerce', 'slug' => 'website'],
                ['icon' => 'bi-search', 'title' => 'SEO PLATFORMS', 'color' => '#FF5F57', 'tools' => 'SEMrush • Ahrefs • GSC', 'slug' => 'seo'],
                ['icon' => 'bi-google', 'title' => 'GOOGLE AUDIENCES', 'color' => '#FEBC2E', 'tools' => 'Analytics • GTM', 'slug' => 'seo'],
                ['icon' => 'bi-gear-wide-connected', 'title' => 'WORKFLOW AUTO', 'color' => '#6A5AE0', 'tools' => 'Zapier • Make • APIs', 'slug' => 'website']
            ];

            $track2 = [
                ['icon' => 'bi-meta', 'title' => 'SOCIAL ACQUISITIONS', 'color' => '#FF5F57', 'tools' => 'Meta Ads • Google Ads', 'slug' => 'performance'],
                ['icon' => 'bi-bezier2', 'title' => 'LOGO ARCHITECTURE', 'color' => '#FEBC2E', 'tools' => 'Figma • Illustrator', 'slug' => 'creative'],
                ['icon' => 'bi-box', 'title' => '3D VISUALIZATION', 'color' => '#6A5AE0', 'tools' => 'Blender • Cinema4D', 'slug' => 'motion'],
                ['icon' => 'bi-film', 'title' => 'CINEMATIC VFX', 'color' => '#28C840', 'tools' => 'After Effects • Lottie', 'slug' => 'motion'],
                ['icon' => 'bi-chat-quote', 'title' => 'CONTENT STRATEGY', 'color' => '#FF5F57', 'tools' => 'Copywriting • Brand Voice', 'slug' => 'creative']
            ];
            ?>

            <!-- Dual Marquee Tickers with 3D Perspective -->
            <div class="capabilities-marquee-container" data-aos="fade-up" data-aos-delay="100">
                <!-- Row 1: Sliding Left -->
                <div class="marquee-track-wrapper">
                    <div class="marquee-track marquee-track-left">
                        <div class="marquee-group">
                            <?php foreach ($track1 as $item): ?>
                            <a href="<?= BASE_URL ?>services/<?= $item['slug'] ?>" class="flip-badge" style="--badge-color: <?= $item['color'] ?>; display: block; text-decoration: none;">
                                <div class="flip-badge-inner">
                                    <div class="flip-badge-front">
                                        <i class="bi <?= $item['icon'] ?> me-2" style="color: <?= $item['color'] ?>;"></i>
                                        <span><?= $item['title'] ?></span>
                                    </div>
                                    <div class="flip-badge-back">
                                        <span><?= $item['tools'] ?></span>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="marquee-group">
                            <?php foreach ($track1 as $item): ?>
                            <a href="<?= BASE_URL ?>services/<?= $item['slug'] ?>" class="flip-badge" style="--badge-color: <?= $item['color'] ?>; display: block; text-decoration: none;">
                                <div class="flip-badge-inner">
                                    <div class="flip-badge-front">
                                        <i class="bi <?= $item['icon'] ?> me-2" style="color: <?= $item['color'] ?>;"></i>
                                        <span><?= $item['title'] ?></span>
                                    </div>
                                    <div class="flip-badge-back">
                                        <span><?= $item['tools'] ?></span>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Row 2: Sliding Right -->
                <div class="marquee-track-wrapper mt-3">
                    <div class="marquee-track marquee-track-right">
                        <div class="marquee-group">
                            <?php foreach ($track2 as $item): ?>
                            <a href="<?= BASE_URL ?>services/<?= $item['slug'] ?>" class="flip-badge" style="--badge-color: <?= $item['color'] ?>; display: block; text-decoration: none;">
                                <div class="flip-badge-inner">
                                    <div class="flip-badge-front">
                                        <i class="bi <?= $item['icon'] ?> me-2" style="color: <?= $item['color'] ?>;"></i>
                                        <span><?= $item['title'] ?></span>
                                    </div>
                                    <div class="flip-badge-back">
                                        <span><?= $item['tools'] ?></span>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="marquee-group">
                            <?php foreach ($track2 as $item): ?>
                            <a href="<?= BASE_URL ?>services/<?= $item['slug'] ?>" class="flip-badge" style="--badge-color: <?= $item['color'] ?>; display: block; text-decoration: none;">
                                <div class="flip-badge-inner">
                                    <div class="flip-badge-front">
                                        <i class="bi <?= $item['icon'] ?> me-2" style="color: <?= $item['color'] ?>;"></i>
                                        <span><?= $item['title'] ?></span>
                                    </div>
                                    <div class="flip-badge-back">
                                        <span><?= $item['tools'] ?></span>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4 d-none d-md-block" data-aos="fade-up" data-aos-delay="200">
                <span class="text-muted" style="font-size: 12px; font-weight: 700; letter-spacing: 1.5px; opacity: 0.8;"><i class="bi bi-info-circle-fill text-dark me-1"></i> HOVER ON CAPABILITIES TO FLIP & REVEAL OUR FRAMEWORK TECH STACKS</span>
            </div>
        </div>
    </div>
</section>

<!-- Dedicated Neo-Brutalist Services Component Stylesheet -->
<style>
/* --- Core Bento Card Framework --- */
.service-bento-card {
    position: relative;
    border-radius: 28px;
    border: 2px solid #111;
    background: #FFFFFF;
    box-shadow: 6px 6px 0px #111;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    min-height: 480px;
    z-index: 1;
}

.service-bento-card:hover {
    transform: translate(-4px, -4px);
    box-shadow: 12px 12px 0px #111;
    border-color: #111;
}

/* Ambient Radial Glow Blurs */
.bento-glow {
    position: absolute;
    width: 320px;
    height: 320px;
    right: -100px;
    bottom: -100px;
    background: radial-gradient(circle, rgba(var(--card-accent-rgb), 0.15) 0%, rgba(var(--card-accent-rgb), 0) 70%);
    border-radius: 50%;
    pointer-events: none;
    z-index: 0;
    transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

.service-bento-card:hover .bento-glow {
    transform: scale(1.4);
    background: radial-gradient(circle, rgba(var(--card-accent-rgb), 0.28) 0%, rgba(var(--card-accent-rgb), 0) 75%);
}

/* Card Typography */
.bento-content {
    position: relative;
    z-index: 2;
}

.bento-badge {
    display: inline-block;
    padding: 6px 14px;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.5px;
    border-radius: 50px;
    background: rgba(var(--card-accent-rgb), 0.12);
    color: var(--card-accent);
    border: 1.5px solid rgba(var(--card-accent-rgb), 0.25);
}

.bento-title {
    font-family: 'Montserrat', sans-serif;
    font-size: clamp(26px, 3.5vw, 34px);
    font-weight: 800;
    color: #111;
    line-height: 1.15;
    letter-spacing: -0.5px;
}

.bento-desc {
    font-size: 15px;
    font-weight: 500;
    color: #555;
    line-height: 1.6;
}

/* Feature Checklists */
.bento-features-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.bento-features-list li {
    font-size: 13.5px;
    font-weight: 700;
    color: #111;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.bento-features-list li i {
    color: var(--card-accent);
    font-size: 16px;
}

/* Bento Brutalist Action Button */
.bento-btn {
    display: inline-flex;
    align-items: center;
    background: #111;
    color: #FFF !important;
    font-weight: 700;
    font-size: 13px;
    padding: 12px 24px;
    border-radius: 100px;
    border: 2px solid #111;
    box-shadow: 3px 3px 0px rgba(0,0,0,0.15);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.bento-btn:hover {
    transform: translate(-2px, -2px);
    box-shadow: 5px 5px 0px #111;
    background: var(--card-accent);
    border-color: #111;
}

/* Visual Panel Wrappers */
.bento-visual {
    position: relative;
    z-index: 2;
    overflow: hidden;
}

/* ============================================================
   1. VISUAL WORKSPACE: WEB DESIGN & DEV
   ============================================================ */
.editor-window, .browser-window, .analytics-widget, .branding-playground, .video-editor-window {
    background: #FFF;
    border: 2px solid #111;
    border-radius: 16px;
    box-shadow: 4px 4px 0px #111;
    overflow: hidden;
    width: 100%;
}

.window-header, .widget-header, .branding-header {
    background: #F4F4F6;
    border-bottom: 2px solid #111;
    padding: 8px 14px;
    font-size: 12px;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* Editor Style */
.editor-window {
    box-shadow: 4px 4px 0px #111;
    transform: translateY(0px) rotate(-1deg);
    transition: all 0.4s ease;
}

.editor-window .window-body {
    background: #181824;
    padding: 16px;
}

.header-dots {
    display: flex;
    gap: 6px;
}

.header-dots span {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    border: 1px solid #111;
}

.dot-red { background: #FF5F57; }
.dot-yellow { background: #FEBC2E; }
.dot-green { background: #28C840; }

.file-name {
    color: #aaa;
    font-size: 11px;
}

.code-editor-lines {
    font-family: 'Courier New', Courier, monospace;
    font-size: 11.5px;
    line-height: 1.5;
    color: #E2E8F0;
    display: block;
}

.c-keyword { color: #E83E8C; font-weight: bold; }
.c-val { color: #5BC0DE; }
.c-fn { color: #6A5AE0; }
.c-prop { color: #FEBC2E; }
.c-string { color: #28C840; }

.line-indent {
    padding-left: 16px;
}

/* Browser Preview Mock */
.browser-window {
    transform: translateY(0px) rotate(1deg);
    transition: all 0.4s ease;
}

.browser-address-bar {
    width: 100%;
    background: #FFF;
    border: 1.5px solid #111;
    border-radius: 8px;
    padding: 4px 10px;
    font-size: 10px;
    color: #666;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.browser-window .window-body {
    background: #FAFAFA;
    padding: 16px;
    height: 110px;
}

.preview-content-wrapper {
    display: flex;
    flex-direction: column;
}

.preview-hero {
    display: flex;
    align-items: center;
    gap: 10px;
}

.ph-circle {
    width: 24px;
    height: 24px;
    background: var(--primary-gradient);
    border: 1.5px solid #111;
    border-radius: 50%;
    animation: bouncePreview 2s infinite alternate;
}

.ph-line {
    background: #ddd;
    border-radius: 4px;
    height: 6px;
    margin-bottom: 4px;
}

.ph-line.short { width: 50px; background: #111; }
.ph-line.long { width: 100px; }

.preview-cards {
    display: flex;
    gap: 6px;
}

.preview-card-item {
    flex: 1;
    height: 34px;
    background: #FFF;
    border: 1.5px solid #111;
    border-radius: 6px;
    transition: background 0.3s;
}

/* Hover Interactivities on Web Dev Window Card */
.service-bento-card:hover .editor-window {
    transform: translateY(-4px) rotate(-2deg);
}

.service-bento-card:hover .browser-window {
    transform: translateY(-4px) rotate(2deg);
}

.service-bento-card:hover .preview-card-item {
    background: rgba(106, 90, 224, 0.08);
}

@keyframes bouncePreview {
    0% { transform: translateY(0) scale(1); }
    100% { transform: translateY(-4px) scale(1.08); }
}

/* ============================================================
   2. VISUAL WORKSPACE: SEO & PAID ADS (Interactive Chart Widget)
   ============================================================ */
.analytics-widget {
    background: #fff;
}

.widget-pulse {
    color: #28C840;
    font-size: 10px;
    font-weight: 800;
    animation: flashPulse 1.5s infinite;
}

.metrics-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

.metric-card {
    background: #F8F9FA;
    border: 1.5px solid #111;
    border-radius: 12px;
    padding: 10px 14px;
}

.m-lbl {
    font-size: 10px;
    font-weight: 800;
    color: #888;
    display: block;
    text-transform: uppercase;
}

.m-val {
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    font-weight: 800;
    color: #111;
}

.graph-box {
    border: 1.5px solid #111;
    border-radius: 12px;
    height: 85px;
    background: #FAFBF9;
    overflow: hidden;
}

.graph-svg {
    width: 100%;
    height: 100%;
    display: block;
}

.budget-scale-slider {
    background: #F4FAF5;
    border: 1.5px solid #111;
    border-radius: 12px;
    padding: 12px;
}

.slider-labels {
    font-size: 11px;
    font-weight: 800;
    color: #111;
}

/* Brutalist Styled Custom Range Slider */
.neo-slider {
    -webkit-appearance: none;
    appearance: none;
    width: 100%;
    height: 6px;
    border-radius: 5px;
    background: #111;
    outline: none;
    border: none;
}

.neo-slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: #28C840;
    cursor: pointer;
    border: 2px solid #111;
    box-shadow: 2px 2px 0px #111;
    transition: transform 0.1s;
}

.neo-slider::-webkit-slider-thumb:hover {
    transform: scale(1.2);
}

@keyframes flashPulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
}

/* ============================================================
   3. VISUAL WORKSPACE: BRAND DESIGN (Style Playground)
   ============================================================ */
.branding-playground {
    background: #FFF;
}

.branding-body {
    padding: 20px;
    width: 100%;
}

.widget-body {
    padding: 20px;
    width: 100%;
}

@media (max-width: 576px) {
    .branding-body {
        padding: 16px;
        flex-direction: column !important;
        align-items: center !important;
        text-align: center;
        gap: 16px !important;
    }
    .widget-body {
        padding: 16px;
    }
}

.bp-spec-badge {
    background: #FF5F57;
    color: #FFF;
    font-size: 9px;
    padding: 2px 8px;
    border-radius: 6px;
    border: 1px solid #111;
}

.logo-grid-box {
    position: relative;
    width: 100px;
    height: 100px;
    background: #FAF8F6;
    border: 2px solid #111;
    border-radius: 14px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.construction-lines-grid {
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: 10px 10px;
    background-image: 
        linear-gradient(to right, rgba(0,0,0,0.05) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(0,0,0,0.05) 1px, transparent 1px);
}

.construction-lines-grid::before {
    content: '';
    position: absolute;
    top: 50%; left: 0; width: 100%; height: 1.5px;
    background: rgba(255, 95, 87, 0.25);
}

.construction-lines-grid::after {
    content: '';
    position: absolute;
    left: 50%; top: 0; width: 1.5px; height: 100%;
    background: rgba(255, 95, 87, 0.25);
}

.brand-monogram {
    font-family: 'Montserrat', sans-serif;
    font-size: 52px;
    font-weight: 800;
    color: #FF5F57;
    position: relative;
    z-index: 1;
    text-shadow: 2px 2px 0px #111;
    animation: logoGridFloat 4s ease-in-out infinite alternate;
    transition: all 0.4s ease;
}

@keyframes logoGridFloat {
    0% { transform: translateY(0px) rotate(0deg); }
    100% { transform: translateY(-4px) rotate(5deg); }
}

.config-label {
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1px;
    color: #999;
}

/* Palette Bubbles */
.palette-swatch {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    border: 1.5px solid #111;
    cursor: pointer;
    box-shadow: 2px 2px 0px rgba(0,0,0,0.15);
    transition: all 0.2s;
    outline: none;
}

.palette-swatch:hover, .palette-swatch.active {
    transform: scale(1.15);
    box-shadow: 2px 2px 0px #111;
}

.font-spec-card {
    background: #FAF8F6;
    border: 1.5px solid #111;
    border-radius: 10px;
    padding: 8px 12px;
    box-shadow: 2px 2px 0 #111;
}

.font-spec-card .f-name {
    display: block;
    font-family: 'Montserrat', sans-serif;
    font-weight: 800;
    font-size: 13px;
    color: #FF5F57;
    line-height: 1.2;
    transition: color 0.4s;
}

.font-spec-card .f-details {
    display: block;
    font-size: 10px;
    font-weight: 600;
    color: #888;
}

/* ============================================================
   4. VISUAL WORKSPACE: 3D VIDEOS & ANIMATION (3D cube scene)
   ============================================================ */
.video-editor-window {
    background: #FFF;
}

.v-fps {
    background: #FEBC2E;
    color: #111;
    font-size: 9px;
    font-weight: 900;
    padding: 1px 6px;
    border-radius: 4px;
    border: 1px solid #111;
}

.scene-helper-txt {
    font-size: 10px;
    font-weight: 800;
    color: #888;
    text-transform: uppercase;
}

/* CSS 3D Scene viewport */
.scene-3d {
    width: 100%;
    height: 120px;
    perspective: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* 3D Wireframe Cube */
.cube-3d-wireframe {
    width: 64px;
    height: 64px;
    position: relative;
    transform-style: preserve-3d;
    transform: rotateX(-15deg) rotateY(25deg);
    animation: cubeSpinCycle 8s linear infinite;
    transition: transform 0.1s ease-out;
}

.cube-face {
    position: absolute;
    width: 64px;
    height: 64px;
    border: 1.5px solid #111;
    background: rgba(254, 188, 46, 0.18);
    backdrop-filter: blur(1px);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 8px;
    font-weight: 900;
    color: #111;
    box-sizing: border-box;
}

/* Position faces in 3D Space */
.cube-front  { transform: rotateY(0deg) translateZ(32px); border-color: #FF5F57; }
.cube-back   { transform: rotateY(180deg) translateZ(32px); border-color: #6A5AE0; }
.cube-right  { transform: rotateY(90deg) translateZ(32px); border-color: #28C840; }
.cube-left   { transform: rotateY(-90deg) translateZ(32px); border-color: #FEBC2E; }
.cube-top    { transform: rotateX(90deg) translateZ(32px); }
.cube-bottom { transform: rotateX(-90deg) translateZ(32px); }

/* Play/Pause controls */
.video-editor-timeline {
    background: #F4F4F6;
    border-top: 2px solid #111;
    padding: 10px 14px;
}

.t-play-toggle {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: #111;
    color: #FFF;
    border: 2px solid #111;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 2px 2px 0px rgba(0,0,0,0.15);
    transition: all 0.2s;
    outline: none;
    flex-shrink: 0;
}

.t-play-toggle:hover {
    transform: scale(1.1);
    background: #FEBC2E;
    color: #111;
}

.timeline-time-display {
    font-family: 'Courier New', Courier, monospace;
    font-weight: 800;
    font-size: 11.5px;
    color: #111;
    flex-shrink: 0;
}

/* Timeline scrubber track */
.timeline-scrubber {
    -webkit-appearance: none;
    appearance: none;
    width: 100%;
    height: 5px;
    background: #DDD;
    border-radius: 5px;
    border: 1.5px solid #111;
    outline: none;
    margin-top: 8px;
}

.timeline-scrubber::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 12px;
    height: 18px;
    background: #111;
    border-radius: 4px;
    border: 1.5px solid #111;
    cursor: pointer;
}

@keyframes cubeSpinCycle {
    0% { transform: rotateX(-15deg) rotateY(0deg) rotateZ(0deg); }
    100% { transform: rotateX(-15deg) rotateY(360deg) rotateZ(360deg); }
}

/* --- Capability Badge Cloud Styles (3D Flip Infinite Marquees) --- */
.capabilities-marquee-container {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    width: 100%;
    position: relative;
    padding: 10px 0;
}

.marquee-track-wrapper {
    overflow: hidden;
    width: 100%;
    position: relative;
    padding: 8px 0;
}

.marquee-track-wrapper:hover .marquee-track {
    animation-play-state: paused;
}

.marquee-track {
    display: flex;
    gap: 20px;
    width: max-content;
}

.marquee-group {
    display: flex;
    gap: 20px;
    flex-shrink: 0;
}

.marquee-track-left {
    animation: scroll-left 45s linear infinite;
}

.marquee-track-right {
    animation: scroll-right 45s linear infinite;
}

@keyframes scroll-left {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-50% - 10px)); }
}

@keyframes scroll-right {
    0% { transform: translateX(calc(-50% - 10px)); }
    100% { transform: translateX(0); }
}

/* 3D Flip Badge Structure */
.flip-badge {
    background: transparent;
    width: 250px;
    height: 52px;
    perspective: 1000px;
    cursor: pointer;
    flex-shrink: 0;
}

.flip-badge-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1.15);
    transform-style: preserve-3d;
}

.flip-badge:hover .flip-badge-inner {
    transform: rotateY(180deg);
}

.flip-badge-front, .flip-badge-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius: 100px;
    border: 2px solid #111;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11.5px;
    font-weight: 800;
    letter-spacing: 1px;
    padding: 0 16px;
    box-shadow: 4px 4px 0px #111;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.flip-badge-front {
    background: #FFF;
    color: #111;
}

.flip-badge-back {
    background: #111;
    color: #FFF;
    transform: rotateY(180deg);
    border-color: #111;
    box-shadow: -4px 4px 0px var(--badge-color);
}

.flip-badge:hover .flip-badge-front {
    box-shadow: 0px 0px 0px #111;
    transform: translate(2px, 2px);
}


/* Responsive Overrides */
@media (max-width: 991px) {
    .service-bento-card {
        min-height: auto;
    }
    .bento-visual {
        padding-top: 0 !important;
    }
}
</style>

<!-- Custom Live Scripting for Interactive Sandbox Workspaces -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    
    /* ============================================================
       1. SEO & PAID ADS SIMULATOR WORKSPACE
       ============================================================ */
    const budgetSlider = document.getElementById('budget-scale-range');
    const budgetDisplay = document.getElementById('budget-display');
    const roasVal = document.getElementById('seo-roas-val');
    const leadsVal = document.getElementById('seo-leads-val');
    const graphPath = document.getElementById('dynamic-graph-path');
    const graphStroke = document.getElementById('dynamic-graph-stroke');
    const graphNode = document.getElementById('dynamic-graph-node');

    if (budgetSlider && budgetDisplay && roasVal && leadsVal) {
        budgetSlider.addEventListener('input', (e) => {
            const val = parseInt(e.target.value, 10);
            
            // Format slider text output
            budgetDisplay.innerText = '$' + val.toLocaleString();
            
            // Generate simulated exponential outcomes
            const roasMultiplier = (4.8 - (val / 15000)).toFixed(1);
            const conversionCount = Math.floor(val * 0.12);
            
            roasVal.innerText = roasMultiplier + 'x';
            leadsVal.innerText = '+' + conversionCount;

            // Dynamically Redraw SVG Path based on investment scale
            const flexY = Math.max(8, 50 - (val / 200));
            const pathDataD = `M 0 50 Q 40 45 80 ${45 - (val / 400)} T 160 ${40 - (val / 300)} T 240 ${flexY} L 260 ${flexY - 3} L 260 70 L 0 70 Z`;
            const strokeDataD = `M 0 50 Q 40 45 80 ${45 - (val / 400)} T 160 ${40 - (val / 300)} T 240 ${flexY} L 260 ${flexY - 3}`;
            
            if (graphPath) graphPath.setAttribute('d', pathDataD);
            if (graphStroke) graphStroke.setAttribute('d', strokeDataD);
            if (graphNode) {
                graphNode.setAttribute('cx', '260');
                graphNode.setAttribute('cy', (flexY - 3).toString());
            }
        });
    }

    /* ============================================================
       2. BRAND DECK CONFIGURATOR WORKSPACE
       ============================================================ */
    const swatches = document.querySelectorAll('.palette-swatch');
    const brandMonogram = document.getElementById('interactive-brand-monogram');
    const fontNameTarget = document.getElementById('font-name-target');
    const fontHexTarget = document.getElementById('font-hex-target');

    swatches.forEach(swatch => {
        swatch.addEventListener('click', () => {
            // Remove active style state
            swatches.forEach(s => s.classList.remove('active'));
            swatch.classList.add('active');

            const color = swatch.getAttribute('data-color');
            const colorName = swatch.getAttribute('data-name');

            // Morph color variables dynamically
            if (brandMonogram) {
                brandMonogram.style.color = color;
            }
            if (fontNameTarget) {
                fontNameTarget.innerText = colorName;
                fontNameTarget.style.color = color;
            }
            if (fontHexTarget) {
                fontHexTarget.innerText = color.toUpperCase();
            }
        });
    });

    /* ============================================================
       3. 3D RENDER ENGINE VIEWPORT WORKSPACE (Cube physics on scroll/timeline)
       ============================================================ */
    const cubeTimelineSlider = document.getElementById('cube-timeline-range');
    const cube3D = document.getElementById('interactive-3d-cube');
    const cubeTimelineTimer = document.getElementById('cube-timeline-timer');
    const cubePlayBtn = document.getElementById('cube-anim-play-btn');

    let timelineInterval;
    let isCubePlaying = true;

    // Timeline player simulation
    const updateTimelineTimerLabel = (percent) => {
        const frame = Math.floor((percent * 30) / 100);
        const second = Math.floor(percent / 10);
        cubeTimelineTimer.innerText = `00:0${second}:${frame < 10 ? '0' + frame : frame}`;
    };

    if (cubeTimelineSlider && cube3D) {
        
        // Scrub slider timeline
        cubeTimelineSlider.addEventListener('input', (e) => {
            // Stop automatic auto play
            if (isCubePlaying) {
                clearInterval(timelineInterval);
                isCubePlaying = false;
                if (cubePlayBtn) cubePlayBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
            }
            const val = parseInt(e.target.value, 10);
            updateTimelineTimerLabel(val);

            // Twist 3D physics structure manually with timeline value
            const rotationY = val * 3.6; // Scale 0-100 to 0-360 deg
            cube3D.style.animation = 'none';
            cube3D.style.transform = `rotateX(-15deg) rotateY(${rotationY}deg) rotateZ(${val}deg)`;
        });

        // Toggle simulation engine play state
        if (cubePlayBtn) {
            cubePlayBtn.addEventListener('click', () => {
                if (isCubePlaying) {
                    clearInterval(timelineInterval);
                    isCubePlaying = false;
                    cubePlayBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
                    cube3D.style.animationPlayState = 'paused';
                } else {
                    isCubePlaying = true;
                    cubePlayBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
                    cube3D.style.animation = 'cubeSpinCycle 8s linear infinite';
                    cube3D.style.animationPlayState = 'running';
                    startTimelineAutomaticRun();
                }
            });
        }

        // Automatic run simulator
        const startTimelineAutomaticRun = () => {
            timelineInterval = setInterval(() => {
                let currentVal = parseInt(cubeTimelineSlider.value, 10);
                let nextVal = (currentVal + 1) % 100;
                cubeTimelineSlider.value = nextVal;
                updateTimelineTimerLabel(nextVal);
            }, 100);
        };

        if (isCubePlaying) {
            startTimelineAutomaticRun();
        }
    }

    /* ============================================================
       4. INTERACTIVE MOUSE PHYSICS FOR 3D CUBE ON HOVER
       ============================================================ */
    const cubeContainer = document.querySelector('.scene-3d');
    if (cubeContainer && cube3D) {
        cubeContainer.addEventListener('mousemove', (e) => {
            if (isCubePlaying) {
                // Pause rotation briefly during hover manipulation
                cube3D.style.animation = 'none';
            }
            const rect = cubeContainer.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5; // range: -0.5 to 0.5
            const y = (e.clientY - rect.top) / rect.height - 0.5;

            cube3D.style.transform = `rotateX(${-y * 120}deg) rotateY(${x * 120}deg)`;
        });

        cubeContainer.addEventListener('mouseleave', () => {
            if (isCubePlaying) {
                cube3D.style.animation = 'cubeSpinCycle 8s linear infinite';
            } else {
                const currentVal = parseInt(cubeTimelineSlider.value, 10);
                const rotationY = currentVal * 3.6;
                cube3D.style.transform = `rotateX(-15deg) rotateY(${rotationY}deg) rotateZ(${currentVal}deg)`;
            }
        });
    }

});
</script>
