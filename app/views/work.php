<?php 
$data['page_hero_badge'] = 'Our Impact';
$data['page_title_html'] = 'Proof in <br><span class="gradient-text">Performance.</span>';
$data['page_subtitle'] = "Explore our track record of engineering high-performance digital products and scaling brands from zero to market leaders.";
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<!-- Portfolio Filter (Visual Only for now) -->
<section class="portfolio-grid py-5 mb-5">
    <div class="container" style="max-width: 1240px;">
        <div class="d-flex justify-content-center gap-2 mb-5 flex-wrap" data-aos="fade-up">
            <button class="btn btn-dark rounded-pill px-4 btn-sm active">All Projects</button>
            <button class="btn btn-outline-dark rounded-pill px-4 btn-sm">Web Design</button>
            <button class="btn btn-outline-dark rounded-pill px-4 btn-sm">Ads & ROI</button>
            <button class="btn btn-outline-dark rounded-pill px-4 btn-sm">SEO Scaling</button>
        </div>

        <div class="row g-4">
            <?php foreach ($data['works'] ?? [] as $work): ?>
            <div class="col-lg-6 col-md-12" data-aos="fade-up">
                <div class="portfolio-showcase-card h-100">
                    <div class="psc-image-wrapper">
                        <img src="<?= $work['image'] ?>" alt="<?= htmlspecialchars($work['title']) ?>" class="psc-img">
                        <div class="psc-overlay"></div>
                        <div class="psc-metric">
                            <span class="badge bg-white text-dark shadow-punchy-sm px-4 py-3 rounded-4 fw-900 border-2 border-dark border">
                                <?= $work['result'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="psc-content mt-4 p-2">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-uppercase small fw-bold text-primary" style="letter-spacing: 0.1em;">
                                <?= $work['tag'] ?>
                            </span>
                        </div>
                        <h2 class="h3 fw-bold mb-3"><?= $work['title'] ?></h2>
                        <a href="#" class="btn-link-stunning">VIEW CASE STUDY <i class="bi bi-arrow-right ms-2"></i></a>
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

<style>
.portfolio-showcase-card {
    background: transparent;
    transition: all 0.4s ease;
}
.psc-image-wrapper {
    position: relative;
    border: 3px solid var(--text-dark);
    border-radius: 30px;
    overflow: hidden;
    height: 480px;
    box-shadow: 12px 12px 0px var(--text-dark);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.psc-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}
.psc-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, transparent 30%, rgba(0,0,0,0.4));
    z-index: 1;
}
.portfolio-showcase-card:hover .psc-img {
    transform: scale(1.1);
}
.psc-metric {
    position: absolute;
    bottom: 25px;
    right: 25px;
    z-index: 5;
}
.psc-image-wrapper:hover {
    transform: translateY(-8px);
    box-shadow: 12px 12px 0px var(--text-dark);
}
.btn-link-stunning {
    text-decoration: none;
    color: var(--text-dark);
    font-weight: 800;
    font-size: 14px;
    letter-spacing: 0.05em;
    display: inline-flex;
    align-items: center;
    position: relative;
    padding-bottom: 2px;
}
.btn-link-stunning::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--primary-gradient);
    transition: width 0.3s ease;
}
.btn-link-stunning:hover::after {
    width: 100%;
}
</style>
