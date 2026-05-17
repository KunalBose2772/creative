<?php 
$data['page_hero_badge'] = 'Our Solutions';
$data['page_title_html'] = 'Full-Scale <br><span class="gradient-text">Digital Engineering.</span>';
$data['page_subtitle'] = "We don't just design; we architect digital assets that dominate search results, convert at record rates, and scale with your ambition.";

// Cinematic Engineering Visual for Services
ob_start(); ?>
<div class="cinematic-service-visual">
    <div class="csv-container">
        <div class="csv-main-card">
            <div class="csv-header">
                <div class="csv-dots"><span></span><span></span><span></span></div>
                <div class="csv-label">OPS_CHART</div>
            </div>
            <div class="csv-body">
                <div class="csv-stats-row">
                    <div class="csv-stat">
                        <span class="d-block small opacity-50">CONVERSION</span>
                        <span class="h3 fw-900 mb-0">+420%</span>
                    </div>
                </div>
                <div class="csv-graph mt-4">
                    <div class="csv-line"></div>
                    <div class="csv-points">
                        <span style="height: 30px; animation-delay: 0.1s"></span>
                        <span style="height: 50px; animation-delay: 0.2s"></span>
                        <span style="height: 40px; animation-delay: 0.3s"></span>
                        <span style="height: 70px; animation-delay: 0.4s"></span>
                        <span style="height: 60px; animation-delay: 0.5s"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Floating Elements -->
        <div class="csv-float csv-circle" style="background: var(--primary-start);"></div>
        <div class="csv-float csv-square" style="border-color: var(--text-dark);"></div>
    </div>
</div>
<?php 
$data['page_hero_visual'] = ob_get_clean();
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<style>
.cinematic-service-visual {
    height: 450px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    padding: 20px;
}
.csv-container {
    position: relative;
    width: 100%;
    max-width: 400px;
}
.csv-main-card {
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 20px 20px 0px var(--text-dark);
    border-radius: 40px;
    padding: 40px;
    position: relative;
    z-index: 2;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.csv-main-card:hover {
    transform: perspective(1000px) rotateX(5deg) rotateY(-5deg);
    box-shadow: 25px 25px 0px var(--primary-start);
}
.csv-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}
.csv-dots span {
    display: inline-block;
    width: 8px; height: 8px;
    border-radius: 50%;
    background: #eee;
    margin-right: 4px;
    border: 1px solid var(--text-dark);
}
.csv-label {
    font-size: 10px;
    font-weight: 900;
    color: var(--text-dark);
    letter-spacing: 2px;
}
.csv-points {
    display: flex;
    align-items: flex-end;
    gap: 8px;
    height: 80px;
}
.csv-points span {
    flex: 1;
    background: var(--primary-gradient);
    border-radius: 4px;
    animation: growHeight 2s ease-in-out infinite alternate;
}
@keyframes growHeight {
    0% { transform: scaleY(0.5); }
    100% { transform: scaleY(1); }
}
.csv-float {
    position: absolute;
    z-index: 1;
    animation: floatAnim 4s ease-in-out infinite;
}
.csv-circle {
    width: 120px; height: 120px;
    border-radius: 50%;
    top: -40px; right: -40px;
    opacity: 0.1;
}
.csv-square {
    width: 60px; height: 60px;
    border: 2px solid;
    bottom: -30px; left: -30px;
    animation-delay: 1s;
}
@keyframes floatAnim {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(-20px) rotate(10deg); }
}
</style>

<!-- Detailed Services Grid -->
<section class="services-detail py-5 mb-5 overflow-hidden">
    <div class="container" style="max-width: 1240px;">
        <div class="row g-5">
            <?php 
            $i = 0;
            foreach ($data['catalog'] as $slug => $item): 
                $delay = ($i % 2) * 100;
                $i++;
            ?>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                <div class="service-mega-card h-100" style="--accent: <?= $item['color'] ?>;">
                    <div class="smc-visual mb-4">
                        <div class="smc-visual-inner" style="background: rgba(<?= hexToRgb($item['color']) ?>, 0.1); color: <?= $item['color'] ?>;">
                            <i class="bi <?= $item['icon'] ?>"></i>
                        </div>
                    </div>
                    <div class="smc-content">
                        <h2 class="h2 fw-900 mb-3 text-dark"><?= $item['title'] ?></h2>
                        <p class="text-muted fs-5"><?= $item['desc'] ?></p>
                        <div class="mt-5">
                            <a href="<?= BASE_URL ?>services/<?= $slug ?>" class="btn btn-dark btn-lg w-100 py-3 rounded-pill fw-900 border-2" style="border-color: var(--text-dark);">Explore Solution <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Helper function for RGB conversion -->
<?php 
if (!function_exists('hexToRgb')) {
    function hexToRgb($hex) {
        $hex = str_replace("#", "", $hex);
        if(strlen($hex) == 3) {
            $r = hexdec(substr($hex,0,1).substr($hex,0,1));
            $g = hexdec(substr($hex,1,1).substr($hex,1,1));
            $b = hexdec(substr($hex,2,1).substr($hex,2,1));
        } else {
            $r = hexdec(substr($hex,0,2));
            $g = hexdec(substr($hex,2,2));
            $b = hexdec(substr($hex,4,2));
        }
        return "$r, $g, $b";
    }
}
?>

<!-- Reusing Process Section -->
<?php require_once APP_PATH . '/views/components/process.php'; ?>

<!-- CTA Section -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
.service-mega-card {
    background: #fff;
    border: 2px solid #eee;
    border-radius: 40px;
    padding: 50px;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    overflow: hidden;
}
.service-mega-card:hover {
    border-color: var(--text-dark);
    transform: translateY(-15px);
    box-shadow: 0 30px 60px rgba(0,0,0,0.08);
}
.smc-visual-inner {
    width: 80px; height: 80px;
    background: #f8faff;
    color: var(--primary-start);
    border-radius: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    margin-bottom: 20px;
    transition: all 0.4s;
}
.service-mega-card:hover .smc-visual-inner {
    transform: rotate(10deg) scale(1.1);
}
.smc-features li {
    margin-bottom: 15px;
    font-weight: 700;
    font-size: 14px;
    color: var(--text-dark);
}
.smc-features i {
    font-size: 18px;
}
.fw-900 { font-weight: 900; }
</style>

