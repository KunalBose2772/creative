<section id="work" class="py-5" style="background: #FAFAFC; color: #111111; border-top: 2.5px solid #111111;">
    <div class="container py-4" style="max-width:1300px;">
        <!-- Section Header (Neo-Brutalist Alignment) -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 pb-4" style="border-bottom: 2px solid #111;" data-aos="fade-up">
            <div class="section-header mb-0">
                <span class="section-tag mb-3">Proven Solutions</span>
                <h2 class="section-title m-0" style="font-family: 'Montserrat', sans-serif; font-weight: 800; color: #111; line-height: 1.1; letter-spacing: -1px;">
                    Featured <span class="gradient-text">Work.</span>
                </h2>
            </div>
            <p class="mt-3 mt-md-0 text-muted" style="font-size: 17px; max-width: 500px; font-weight: 500; line-height: 1.6;">
                No fluff. Raw outcomes and real business results driven by master-level engineering and uncompromised design standards.
            </p>
        </div>

        <!-- 2x2 Bento Portfolio Grid -->
        <div class="row g-4 g-lg-5">
            <?php 
            $work_colors = ['#FF5F57', '#6A5AE0', '#28C840', '#FEBC2E']; 
            $featured_works = array_slice($data['works'], 0, 4);
            foreach ($featured_works as $i => $work): 
                $color = $work_colors[$i % count($work_colors)];
                $num = '0' . ($i + 1);
                $img_path = BASE_URL . 'public/assets/images/' . $work['image'];
                
                // Dynamic description based on tag
                $desc = "Bespoke digital architecture and interface engineering optimized for high conversions.";
                if (stripos($work['tag'], 'web') !== false || stripos($work['tag'], 'e-commerce') !== false) {
                    $desc = "A lightning-fast, conversion-optimized web platform custom engineered for scalable growth.";
                } elseif (stripos($work['tag'], 'brand') !== false || stripos($work['tag'], 'identity') !== false) {
                    $desc = "Complete strategic identity design, visual frameworks, and guidelines built to establish authority.";
                } elseif (stripos($work['tag'], 'ads') !== false || stripos($work['tag'], 'seo') !== false || stripos($work['tag'], 'marketing') !== false) {
                    $desc = "High-performing user acquisition campaigns and organic search engineering driving predictable ROI.";
                }
            ?>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                <a href="<?= htmlspecialchars($work['link']) ?>" target="_blank" class="portfolio-card-link text-decoration-none" title="View Case Study: <?= htmlspecialchars($work['title']) ?>">
                    <div class="portfolio-card" style="--brand-color: <?= $color ?>;">
                        
                        <!-- Card Header -->
                        <div class="p-card-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2">
                                <span class="p-num"><?= $num ?> /</span>
                                <span class="p-tag" style="color: <?= $color ?>;"><?= htmlspecialchars($work['tag']) ?></span>
                            </div>
                            <!-- Mockup Browser Dots -->
                            <div class="browser-dots d-flex gap-1">
                                <span></span><span></span><span></span>
                            </div>
                        </div>

                        <!-- Card Visual Mockup Area -->
                        <div class="p-card-visual">
                            <div class="visual-gradient-bg" style="background: linear-gradient(135deg, <?= $color ?>12, <?= $color ?>04);"></div>
                            <div class="visual-grid-pattern"></div>
                            
                            <!-- Floating Mini Browser Frame -->
                            <div class="mini-browser-frame">
                                <div class="mini-browser-header d-flex align-items-center justify-content-between">
                                    <div class="d-flex gap-1">
                                        <span class="dot-b red"></span><span class="dot-b yellow"></span><span class="dot-b green"></span>
                                    </div>
                                    <div class="mini-browser-address-bar">https://<?= strtolower(str_replace(' ', '', $work['title'])) ?>.com</div>
                                    <div style="width: 20px;"></div>
                                </div>
                                <div class="mini-browser-body">
                                    <?php if (!empty($work['image'])): ?>
                                        <img src="<?= $img_path ?>" class="mini-browser-img" alt="<?= htmlspecialchars($work['title']) ?>" title="<?= htmlspecialchars($work['title']) ?>" loading="lazy" width="800" height="600">
                                    <?php else: ?>
                                        <div class="mini-browser-placeholder d-flex align-items-center justify-content-center">
                                            <i class="bi bi-window-fullscreen" style="font-size: 40px; color: <?= $color ?>;"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Card Info Panel -->
                        <div class="p-card-info">
                            <h3 class="p-card-title"><?= htmlspecialchars($work['title']) ?></h3>
                            <p class="p-card-desc"><?= $desc ?></p>
                            
                            <div class="p-card-footer d-flex justify-content-between align-items-center pt-2">
                                <span class="p-result-badge" style="background: <?= $color ?>15; color: <?= $color ?>; border-color: <?= $color ?>30;"><?= htmlspecialchars($work['result']) ?></span>
                                <div class="p-card-link-arrow" style="color: <?= $color ?>;">
                                    <span class="fw-bold me-1">Live Project</span>
                                    <i class="bi bi-arrow-up-right fw-bold"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Footer CTA -->
        <div class="text-center mt-5 pt-4 pb-2" data-aos="fade-up">
            <a href="<?= BASE_URL ?>work" class="btn btn-outline-custom px-5 py-3 fs-5 fw-bold" style="border-radius: 50px;" title="Explore the Full Archive of Our Successful Projects">
                Explore Full Archive <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
/* --- Portfolio Card Master CSS --- */
.portfolio-card {
    background: #FFFFFF;
    border: 2.5px solid #111111;
    border-radius: 24px;
    box-shadow: 6px 6px 0px #111111;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    width: 100%;
}

.portfolio-card-link {
    display: block;
    cursor: pointer;
}

.portfolio-card-link:hover .portfolio-card {
    transform: translate(-4px, -4px);
    box-shadow: 12px 12px 0px var(--brand-color);
}

/* Card Header */
.p-card-header {
    padding: 14px 20px;
    border-bottom: 2px solid #111111;
    background: #FFFFFF;
}

.p-num {
    font-size: 15px;
    font-weight: 800;
    opacity: 0.3;
    font-family: 'Clash Display', sans-serif;
}

.p-tag {
    font-size: 11.5px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.browser-dots span {
    display: inline-block;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: transparent;
    border: 1.5px solid #111111;
}

/* Card Visual Mockup Area */
.p-card-visual {
    height: 260px;
    position: relative;
    overflow: hidden;
    background: #FAFAF9;
    display: flex;
    align-items: center;
    justify-content: center;
}

.visual-gradient-bg {
    position: absolute;
    inset: 0;
    z-index: 1;
}

.visual-grid-pattern {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(17,17,17,0.06) 1.5px, transparent 1.5px);
    background-size: 16px 16px;
    z-index: 2;
}

/* Mini Browser Frame inside Card Visual */
.mini-browser-frame {
    width: 82%;
    height: 82%;
    background: #FFFFFF;
    border: 2px solid #111111;
    border-radius: 12px;
    box-shadow: 4px 4px 0px rgba(17,17,17,0.15);
    overflow: hidden;
    position: absolute;
    bottom: -15px;
    z-index: 3;
    transform: rotate(1.5deg);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.mini-browser-header {
    background: #F4F4F6;
    border-bottom: 2px solid #111111;
    padding: 6px 12px;
    height: 32px;
}

.dot-b {
    display: inline-block;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    border: 1px solid #111111;
}
.dot-b.red { background: #FF5F56; }
.dot-b.yellow { background: #FFBD2E; }
.dot-b.green { background: #27C93F; }

.mini-browser-address-bar {
    background: #FFFFFF;
    border: 1.5px solid #111111;
    border-radius: 6px;
    font-size: 8.5px;
    color: #888888;
    padding: 1px 12px;
    font-family: monospace;
    font-weight: bold;
    width: 60%;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.mini-browser-body {
    height: calc(100% - 32px);
    width: 100%;
    background: #FDFDFD;
    overflow: hidden;
    position: relative;
}

.mini-browser-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    filter: grayscale(0.2);
    transition: all 0.4s ease;
}

.mini-browser-placeholder {
    width: 100%;
    height: 100%;
    background-image: radial-gradient(#11111110 1.5px, transparent 1.5px);
    background-size: 10px 10px;
}

/* Interactive Card Link Hover Triggers */
.portfolio-card-link:hover .mini-browser-frame {
    transform: rotate(0deg) translateY(-8px) scale(1.02);
    box-shadow: 6px 6px 0px rgba(17,17,17,0.3);
}

.portfolio-card-link:hover .mini-browser-img {
    filter: grayscale(0);
    object-position: center;
}

/* Card Info Panel */
.p-card-info {
    padding: 20px 24px;
    background: #FFFFFF;
    border-top: 2px solid #111111;
}

.p-card-title {
    font-size: 20px;
    font-weight: 900;
    text-transform: uppercase;
    color: #111111;
    margin-bottom: 6px;
    letter-spacing: -0.5px;
}

.p-card-desc {
    font-size: 13.5px;
    color: #666666;
    line-height: 1.5;
    margin-bottom: 16px;
    font-weight: 500;
}

.p-result-badge {
    font-size: 11px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 4px 12px;
    border: 1.5px solid;
    border-radius: 20px;
    font-family: monospace;
}

.p-card-link-arrow {
    font-size: 13.5px;
    font-weight: 900;
    display: inline-flex;
    align-items: center;
    transition: transform 0.3s ease;
}

.portfolio-card-link:hover .p-card-link-arrow {
    transform: translateX(3px);
}
</style>
