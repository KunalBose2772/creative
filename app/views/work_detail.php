<?php 
// Mock data for the case study
$project = [
    'title' => 'Titan Enterprise',
    'category' => 'SaaS / Architecture',
    'year' => '2026',
    'client' => 'Titan Global Inc.',
    'challenge' => 'Titan was struggling with a legacy infrastructure that couldn\'t scale with their 300% yearly growth. Their UX was fragmented, leading to high churn and slow onboarding for enterprise clients.',
    'solution' => 'We completely re-engineered their platform from the ground up using a serverless Next.js architecture and a custom-built design system. We implemented AI-driven predictive analytics and a glassmorphic command center.',
    'impact' => [
        ['val' => '340%', 'label' => 'Revenue Growth'],
        ['val' => '12ms', 'label' => 'Avg. Latency'],
        ['val' => '84%', 'label' => 'Churn Reduction']
    ]
];
?>

<!-- Project Hero -->
<section class="case-hero bg-glossy-black text-white section-padding pt-0 overflow-hidden">
    <div class="container-fluid px-md-5">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="case-hero-content">
                    <span class="section-tag mb-4" style="background: rgba(255,255,255,0.05); color: #fff; border-color: rgba(255,255,255,0.2);"><?= $project['category'] ?> — <?= $project['year'] ?></span>
                    <h1 class="display-1 fw-900 mb-4" data-aos="reveal-text"><?= $project['title'] ?></h1>
                    <p class="lead opacity-75 mb-5" style="max-width: 600px; font-size: 22px;">
                        Engineering the future of enterprise data management through absolute architectural precision.
                    </p>
                    <div class="d-flex gap-5">
                        <div class="case-meta">
                            <span class="small opacity-50 d-block text-uppercase mb-2">Client</span>
                            <span class="fw-bold"><?= $project['client'] ?></span>
                        </div>
                        <div class="case-meta">
                            <span class="small opacity-50 d-block text-uppercase mb-2">Service</span>
                            <span class="fw-bold">Full-Stack Re-Engineering</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="300">
                <div class="case-hero-img">
                    <img src="<?= BASE_URL ?>public/assets/images/titan_case_study.webp" alt="Titan Case Study Mockup" class="img-fluid floating-mockup">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Deep Dive -->
<section class="section-padding bg-white">
    <div class="container" style="max-width: 1240px;">
        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-up">
                <h2 class="h1 fw-800 mb-4"><span class="gradient-text">01.</span> The Challenge</h2>
                <p class="fs-5 text-muted lh-lg"><?= $project['challenge'] ?></p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h2 class="h1 fw-800 mb-4"><span class="gradient-text">02.</span> The Solution</h2>
                <p class="fs-5 text-muted lh-lg"><?= $project['solution'] ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Metric Grid (Impact) -->
<section class="section-padding bg-light-soft border-top border-bottom">
    <div class="container">
        <div class="row g-4 text-center">
            <?php foreach ($project['impact'] as $i => $stat): ?>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="<?= $i * 100 ?>">
                <div class="impact-card p-5">
                    <span class="display-3 fw-900 gradient-text d-block mb-2"><?= $stat['val'] ?></span>
                    <span class="h5 fw-bold text-dark opacity-50 text-uppercase letter-spacing-2"><?= $stat['label'] ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Full Image Showcase -->
<section class="section-padding bg-white overflow-hidden">
    <div class="container-fluid px-md-5">
        <div class="row g-5">
            <div class="col-12" data-aos="fade-up">
                <div class="wide-showcase-img shadow-brutal border-brutal overflow-hidden rounded-4">
                    <img src="<?= BASE_URL ?>public/assets/images/titan_case_study.webp" alt="Titan Project Detail" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Next Project / Footer Integration -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
.case-hero {
    min-vh: 100%;
    display: flex;
    align-items: center;
}
.floating-mockup {
    filter: drop-shadow(0 40px 80px rgba(106, 90, 224, 0.3));
    animation: floatHero 6s ease-in-out infinite;
}
.impact-card {
    background: white;
    border: 2px solid var(--text-dark);
    box-shadow: 10px 10px 0px var(--text-dark);
    border-radius: 24px;
    transition: all 0.4s ease;
}
.impact-card:hover {
    transform: translateY(-8px);
    box-shadow: 15px 15px 0px var(--primary-start);
}
.letter-spacing-2 { letter-spacing: 2px; }

@keyframes floatHero {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}
</style>
