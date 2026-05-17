<?php 
$data['page_hero_badge'] = 'Our Success Stories';
$data['page_title_html'] = 'Our Best <br><span class="gradient-text">Work.</span>';
$data['page_subtitle'] = "Check out our real projects and see how we help businesses grow with custom websites, 3D videos, and smart marketing plans.";

require_once APP_PATH . '/views/components/page_hero.php'; 

// Use projects from database
$portfolio_items = [];

foreach ($data['works'] ?? [] as $db_work) {
    // Basic categorization based on tags
    $category = 'web';
    $layout = 'browser';
    $tag = strtolower($db_work['tag']);
    
    if (strpos($tag, 'web') !== false || strpos($tag, 'ecommerce') !== false) {
        $category = 'web';
        $layout = 'browser';
    } elseif (strpos($tag, 'seo') !== false) {
        $category = 'seo';
        $layout = 'seo';
    } elseif (strpos($tag, 'brand') !== false || strpos($tag, 'design') !== false) {
        $category = 'branding';
        $layout = 'branding';
    } elseif (strpos($tag, 'tool') !== false || strpos($tag, 'saas') !== false) {
        $category = 'erp';
        $layout = 'browser';
    }
    
    $item_image = $db_work['image'];
    $extra_images = [];
    
    // Check for extra device images (hardcoded for now based on availability)
    $slug = strtolower(str_replace(' ', '', $db_work['title']));
    if (strpos($slug, 'veltrivo') !== false) {
        $layout = 'device_stack';
        $extra_images = [
            'tablet' => BASE_URL . 'public/assets/images/projects/veltrivo_tablet.png',
            'mobile' => BASE_URL . 'public/assets/images/projects/veltrivo_mobile.png'
        ];
    } elseif (strpos($slug, 'elevate') !== false) {
        $layout = 'device_stack';
        $extra_images = [
            'tablet' => BASE_URL . 'public/assets/images/projects/elevate_tablet.png',
            'mobile' => BASE_URL . 'public/assets/images/projects/elevate_mobile.png'
        ];
    } elseif (strpos($slug, 'healthylife') !== false) {
        $layout = 'device_stack';
        $extra_images = [
            'tablet' => BASE_URL . 'public/assets/images/projects/healthylife_tablet.png',
            'mobile' => BASE_URL . 'public/assets/images/projects/healthylife_mobile.png'
        ];
    }

    // Ensure relative paths are prefixed with BASE_URL
    if (!empty($item_image) && strpos($item_image, 'http') !== 0) {
        $item_image = BASE_URL . 'public/assets/images/' . ltrim($item_image, '/');
    }

    $portfolio_items[] = [
        'category' => $category,
        'tag' => $db_work['tag'],
        'title' => $db_work['title'],
        'image' => $item_image,
        'extra_images' => $extra_images,
        'result' => $db_work['result'],
        'metrics' => 'Real Business Result',
        'tech_stack' => ['Custom Build', 'Modern Design', 'SEO Optimized'],
        'link' => $db_work['link'] ?? '#',
        'cta_text' => ($category === 'web') ? 'Visit Site' : (($category === 'branding') ? 'View Creative' : 'View Case Study'),
        'layout' => $layout,
        'keywords' => ['optimized', 'responsive', 'high-performance'],
        'elements' => ['UI Design', 'Code', 'Marketing']
    ];
}

// Load Shakti's 28 CGI projects from JSON
$jsonPath = PUBLIC_PATH . '/assets/images/shakti/projects.json';
if (file_exists($jsonPath)) {
    $shaktiProjects = json_decode(file_get_contents($jsonPath), true) ?? [];
    foreach ($shaktiProjects as $sp) {
        $portfolio_items[] = [
            'category' => 'cgi',
            'tag' => '3D CGI & VFX',
            'title' => $sp['title'],
            'image' => BASE_URL . 'public/assets/images/shakti/' . $sp['local_img'],
            'fallback' => $sp['image_url'],
            'extra_images' => [],
            'result' => 'Cinematic Production',
            'metrics' => 'Photorealistic 3D Render',
            'tech_stack' => ['Maya', 'Blender', 'ZBrush', 'VFX'],
            'link' => $sp['permalink'],
            'cta_text' => 'View 3D Project',
            'layout' => 'cgi',
            'keywords' => ['3d', 'cgi', 'vfx', 'animation'],
            'elements' => ['3D Modeling', 'Lighting', 'Rendering']
        ];
    }
}
?>

<!-- Premium Multi-Category Portfolio Hub -->
<section class="portfolio-grid-section py-5 mb-5">
    <div class="container" style="max-width: 1300px;">
        
        <!-- Center-aligned Dynamic Tab Capsule -->
        <div class="d-flex justify-content-center gap-2 mb-5 flex-wrap portfolio-tab-container" data-aos="fade-up">
            <button class="portfolio-tab-btn active" data-category="all">All Projects</button>
            <button class="portfolio-tab-btn" data-category="cgi">3D CGI & VFX</button>
            <button class="portfolio-tab-btn" data-category="web">Websites & E-Commerce</button>
            <button class="portfolio-tab-btn" data-category="erp">Custom Software</button>
            <button class="portfolio-tab-btn" data-category="seo">SEO & Ranking</button>
            <button class="portfolio-tab-btn" data-category="branding">Creative Design</button>
            <a href="<?= BASE_URL ?>video-portfolio" class="portfolio-tab-btn-link">Video Portfolio <i class="bi bi-arrow-up-right ms-1"></i></a>
        </div>

        <!-- Dynamic Category Masonry Grid -->
        <div class="row g-4 portfolio-masonry-grid">
            <?php foreach ($portfolio_items as $item): ?>
            
            <div class="col-lg-6 col-md-12 portfolio-item-wrapper" data-category="<?= $item['category'] ?>" data-aos="fade-up">
                
                <?php if ($item['layout'] === 'browser'): ?>
                    <!-- Browser Frame Layout -->
                    <div class="work-browser-frame">
                        <div class="browser-header-bar">
                            <div class="browser-dots">
                                <span class="dot red"></span>
                                <span class="dot yellow"></span>
                                <span class="dot green"></span>
                            </div>
                            <div class="browser-address">
                                <i class="bi bi-shield-check text-success me-1"></i> <?= strtolower(str_replace(' ', '', $item['title'])) ?>.com
                            </div>
                        </div>
                        <div class="browser-screen-wrap">
                            <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['title']) ?> Project Showcase" title="<?= htmlspecialchars($item['title']) ?>" class="browser-screen-img">
                            <div class="browser-overlay-gradient"></div>
                            <div class="card-result-badge bg-warning text-dark border border-dark border-1"><?= $item['result'] ?></div>
                        </div>
                    </div>

                <?php elseif ($item['layout'] === 'device_stack'): ?>
                    <!-- Device Stack Layout (Showcases Multi-Device Support) -->
                    <div class="work-device-stack-frame">
                        <div class="desktop-base">
                            <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['title']) ?> Desktop View" title="<?= htmlspecialchars($item['title']) ?> Desktop View" class="desktop-img">
                        </div>
                        <div class="tablet-overlay" data-aos="fade-left" data-aos-delay="200">
                            <img src="<?= $item['extra_images']['tablet'] ?>" alt="<?= htmlspecialchars($item['title']) ?> Tablet View" title="<?= htmlspecialchars($item['title']) ?> Tablet View" class="tablet-img">
                        </div>
                        <div class="mobile-overlay" data-aos="fade-left" data-aos-delay="400">
                            <img src="<?= $item['extra_images']['mobile'] ?>" alt="<?= htmlspecialchars($item['title']) ?> Mobile View" title="<?= htmlspecialchars($item['title']) ?> Mobile View" class="mobile-img">
                        </div>
                        <div class="card-result-badge bg-primary text-white border border-white border-opacity-20"><?= $item['result'] ?></div>
                    </div>

                <?php elseif ($item['layout'] === 'seo'): ?>
                    <!-- Analytics Console Layout (SEO) -->
                    <div class="work-seo-dashboard">
                        <div class="dashboard-header-bar">
                            <span class="db-title"><i class="bi bi-google text-danger me-1"></i> Google Ranking Result</span>
                            <span class="db-badge text-success"><span class="pulse-dot"></span> High Growth</span>
                        </div>
                        <div class="dashboard-screen-wrap" style="position: relative; height: calc(100% - 44px); overflow: hidden;">
                            <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['title']) ?> Ranking Result" title="<?= htmlspecialchars($item['title']) ?> SEO Result Dashboard" style="width: 100%; height: 100%; object-fit: cover;">
                            <div class="dashboard-overlay" style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.4));"></div>
                            <div class="card-result-badge bg-danger text-white border border-white border-opacity-20"><?= $item['result'] ?></div>
                        </div>
                    </div>

                <?php elseif ($item['layout'] === 'branding'): ?>
                    <!-- Blueprint Canvas Layout (Graphics) -->
                    <div class="work-branding-card">
                        <div class="branding-header d-flex justify-content-between align-items-center">
                            <span class="brand-code">PROJECT-ID-<?= strtoupper(substr(md5($item['title']), 0, 8)) ?></span>
                            <span class="brand-ver">Ver 1.0</span>
                        </div>
                        <div class="branding-canvas">
                            <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['title']) ?> Branding Layout" title="<?= htmlspecialchars($item['title']) ?> Brand Identity Design" class="branding-img">
                            <div class="brand-alignment-lines">
                                <div class="line horiz"></div>
                                <div class="line vert"></div>
                            </div>
                            <div class="card-result-badge bg-success text-white border border-dark border-1"><?= $item['result'] ?></div>
                        </div>
                    </div>

                <?php elseif ($item['layout'] === 'cgi'): ?>
                    <!-- Cinematic 3D Frame Layout (CGI/VFX) -->
                    <div class="work-branding-card position-relative overflow-hidden bg-black rounded-4 border border-white border-opacity-10" style="height: 380px;">
                        <div class="position-absolute top-0 start-0 w-100 p-3 d-flex justify-content-between align-items-center z-2" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), transparent);">
                            <span class="badge bg-accent-dynamic text-white fw-bold">3D MASTERPIECE</span>
                            <span class="text-white opacity-50 small"><i class="bi bi-aspect-ratio me-1"></i> CGI Render</span>
                        </div>
                        <img src="<?= $item['image'] ?>" onerror="this.src='<?= $item['fallback'] ?? '' ?>'" alt="<?= htmlspecialchars($item['title']) ?> 3D Render" title="<?= htmlspecialchars($item['title']) ?> - Cinematic CGI" class="w-100 h-100 object-fit-cover transition-all group-hover" style="filter: brightness(0.9);">
                        <div class="position-absolute bottom-0 start-0 w-100 p-3 z-2" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <div class="card-result-badge bg-punchy text-white border border-white border-opacity-20 d-inline-block px-3 py-1 rounded-pill small fw-bold"><?= $item['result'] ?></div>
                        </div>
                    </div>

                <?php endif; ?>


                <div class="work-card-content mt-4 p-2">
                    <span class="work-category-tag bg-dark text-white"><?= $item['tag'] ?></span>
                    <h3 class="work-card-title"><?= $item['title'] ?></h3>
                    <p class="work-card-metrics"><i class="bi bi-activity text-accent-dynamic me-1"></i> <?= $item['metrics'] ?></p>
                    <div class="work-tech-stack">
                        <?php foreach($item['tech_stack'] ?? [] as $tech): ?>
                            <span class="tech-tag"><?= $tech ?></span>
                        <?php endforeach; ?>
                        <a href="<?= htmlspecialchars($item['link']) ?>" target="_blank" class="live-link-pill"><i class="bi bi-box-arrow-up-right me-1"></i> <?= htmlspecialchars($item['cta_text'] ?? 'View Project') ?></a>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Stats Section Overlay -->
<div class="py-5" style="background: var(--bg-soft);">
    <?php require_once APP_PATH . '/views/components/stats.php'; ?>
</div>

<!-- CTA Section -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>
