<?php 
// Metadata for page layout
$data['page_hero_badge'] = 'GLOBAL FOOTPRINT';
$data['page_title_html'] = 'Global Reach. <br><span class="gradient-text">Local Dominance.</span>';
$data['page_subtitle'] = "We engineer digital pipelines that connect elite brands with high-intent regional markets. Explore our active geographic hubs across Indian state capitals and global commercial capitals.";

require_once APP_PATH . '/views/components/page_hero.php'; 

// Load location registry
$locations = require APP_PATH . '/config/locations.php';

// Group locations into domestic and international
$domestic = [];
$international = [];

foreach ($locations as $key => $loc) {
    $loc['key'] = $key;
    if ($loc['type'] === 'domestic') {
        $domestic[] = $loc;
    } else {
        $international[] = $loc;
    }
}
?>

<!-- Locations Directory Page -->
<section class="py-5 bg-white">
    <div class="container" style="max-width: 1240px;">
        
        <!-- Part 1: International Tech Hubs -->
        <div class="row align-items-center mb-5" data-aos="fade-up">
            <div class="col-md-7">
                <span class="monospace font-9 text-uppercase text-primary fw-900 tracking-widest"><span class="presence-pulse-global"></span> 🌐 INTERNATIONAL METROS</span>
                <h2 class="font-clash fw-900 text-uppercase text-dark mt-2" style="font-size: 2.3rem; letter-spacing: -1px;">High-Ticket Global Markets</h2>
                <p class="text-muted fs-5 mb-0">Delivering premium web architectures, custom SaaS products, and conversion funnels for elite global enterprises.</p>
            </div>
            <div class="col-md-5 text-md-end mt-4 mt-md-0">
                <span class="badge bg-primary text-white rounded-pill px-4 py-3 border border-dark border-2 fw-900 fs-7 shadow-punchy-sm">FOREIGN REVENUE CAPTURE</span>
            </div>
        </div>

        <div class="row g-4 mb-5 pb-5 border-bottom border-dark border-opacity-10" data-aos="fade-up" data-aos-delay="100">
            <?php foreach ($international as $loc): ?>
            <div class="col-lg-4 col-md-6">
                <div class="location-card p-4 border-3 border border-dark rounded-5 h-100 bg-white transition-all position-relative" style="box-shadow: 10px 10px 0px #111;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <span class="loc-country-tag bg-google-blue text-white"><i class="bi bi-globe me-1"></i> GLOBAL HUB</span>
                        <span class="text-muted monospace small font-9">GEO: <?= $loc['geo']['lat'] ?>, <?= $loc['geo']['lon'] ?></span>
                    </div>
                    <h3 class="font-clash fw-900 text-dark mb-2" style="font-size: 1.7rem;"><?= $loc['name'] ?></h3>
                    <p class="text-muted small leading-relaxed mb-4" style="font-weight: 600; min-height: 48px;"><?= $loc['desc'] ?> — <?= $loc['state_country'] ?></p>
                    
                    <div class="location-service-links pt-3 border-top border-dark border-opacity-10">
                        <span class="monospace font-9 text-uppercase text-muted d-block mb-3 fw-800">LAUNCH LOCALIZED SOLUTIONS:</span>
                        <div class="d-flex flex-column gap-2">
                            <a href="<?= BASE_URL ?>services/website/<?= $loc['key'] ?>" class="service-shortcut-btn web" title="Bespoke Website Designing in <?= htmlspecialchars($loc['name']) ?>">
                                <span>Website Designing</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                            <a href="<?= BASE_URL ?>services/seo/<?= $loc['key'] ?>" class="service-shortcut-btn seo" title="SEO Scaling & Target Domination in <?= htmlspecialchars($loc['name']) ?>">
                                <span>SEO Scaling</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                            <a href="<?= BASE_URL ?>services/motion/<?= $loc['key'] ?>" class="service-shortcut-btn motion" title="3D Motion Graphics & Cinematic Video Editing in <?= htmlspecialchars($loc['name']) ?>">
                                <span>3D Motion &amp; Video</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Part 2: Domestic Capital Cities & Major Commercial Hubs -->
        <div class="row align-items-center mb-5 pt-4" data-aos="fade-up">
            <div class="col-md-7">
                <span class="monospace font-9 text-uppercase text-accent-only fw-900 tracking-widest"><span class="presence-pulse-domestic"></span> 🇮🇳 INDIAN MAJORS</span>
                <h2 class="font-clash fw-900 text-uppercase text-dark mt-2" style="font-size: 2.3rem; letter-spacing: -1px;">Capital Cities & Business Hubs</h2>
                <p class="text-muted fs-5 mb-0">Empowering corporate conglomerates, fast-growing startups, and legacy family business systems across major Indian states.</p>
            </div>
            <div class="col-md-5 text-md-end mt-4 mt-md-0">
                <span class="badge bg-google-green text-white rounded-pill px-4 py-3 border border-dark border-2 fw-900 fs-7 shadow-punchy-sm">DOMESTIC SCALE ENGINE</span>
            </div>
        </div>

        <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
            <?php foreach ($domestic as $loc): ?>
            <div class="col-lg-4 col-md-6">
                <div class="location-card p-4 border-3 border border-dark rounded-5 h-100 bg-white transition-all position-relative" style="box-shadow: 10px 10px 0px #111;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <span class="loc-country-tag bg-google-green text-white"><i class="bi bi-geo-alt-fill me-1"></i> DOMESTIC CAPITAL</span>
                        <span class="text-muted monospace small font-9">GEO: <?= $loc['geo']['lat'] ?>, <?= $loc['geo']['lon'] ?></span>
                    </div>
                    <h3 class="font-clash fw-900 text-dark mb-2" style="font-size: 1.7rem;"><?= $loc['name'] ?></h3>
                    <p class="text-muted small leading-relaxed mb-4" style="font-weight: 600; min-height: 48px;"><?= $loc['desc'] ?> — <?= $loc['state_country'] ?></p>
                    
                    <div class="location-service-links pt-3 border-top border-dark border-opacity-10">
                        <span class="monospace font-9 text-uppercase text-muted d-block mb-3 fw-800">LAUNCH LOCALIZED SOLUTIONS:</span>
                        <div class="d-flex flex-column gap-2">
                            <a href="<?= BASE_URL ?>services/website/<?= $loc['key'] ?>" class="service-shortcut-btn web" title="Bespoke Website Designing in <?= htmlspecialchars($loc['name']) ?>">
                                <span>Website Designing</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                            <a href="<?= BASE_URL ?>services/seo/<?= $loc['key'] ?>" class="service-shortcut-btn seo" title="SEO Scaling & Target Domination in <?= htmlspecialchars($loc['name']) ?>">
                                <span>SEO Scaling</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                            <a href="<?= BASE_URL ?>services/motion/<?= $loc['key'] ?>" class="service-shortcut-btn motion" title="3D Motion Graphics & Cinematic Video Editing in <?= htmlspecialchars($loc['name']) ?>">
                                <span>3D Motion &amp; Video</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
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

<!-- Custom Styles for Locations Directory -->
<style>
.loc-country-tag {
    font-size: 9px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 4px 10px;
    border-radius: 8px;
    border: 2px solid #111;
}
.location-card {
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.location-card:hover {
    transform: translateY(-6px);
    box-shadow: 14px 14px 0px var(--page-accent, #6A5AE0) !important;
}
.service-shortcut-btn {
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-decoration: none;
    color: #111;
    font-weight: 800;
    font-size: 12px;
    text-transform: uppercase;
    padding: 10px 16px;
    border-radius: 12px;
    border: 2px solid #111;
    background: #f9fafb;
    box-shadow: 3px 3px 0px #111;
    transition: all 0.2s ease;
}
.service-shortcut-btn:hover {
    transform: translateY(-2px);
    color: #fff;
    box-shadow: 4px 4px 0px #111;
}
.service-shortcut-btn.web:hover {
    background: #6A5AE0;
}
.service-shortcut-btn.seo:hover {
    background: #FF007A;
}
.service-shortcut-btn.motion:hover {
    background: #FF5E36;
}

/* Presence pulses for real-time vibe */
.presence-pulse-global, .presence-pulse-domestic {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 6px;
    animation: simplePulse 2s infinite;
}
.presence-pulse-global { background: #4285F4; }
.presence-pulse-domestic { background: #34A853; }
</style>
