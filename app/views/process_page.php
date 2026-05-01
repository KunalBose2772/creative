<?php 
$data['page_hero_badge'] = 'The Workflow';
$data['page_title_html'] = 'Engineered for <br><span class="gradient-text">Zero Failure.</span>';
$data['page_subtitle'] = "We don't believe in guesswork. Our precision engineering workflow is designed to ensure every stage of your project is handled with absolute technical authority.";

// Visual element for process hero
ob_start(); ?>
<div class="proc-hero-visual" style="--accent: <?= $data['hero_color'] ?>;">
    <svg class="circuit-wire" viewBox="0 0 200 200">
        <path d="M 0,100 L 200,100" stroke="var(--accent)" stroke-width="2" fill="none" class="wire-path"/>
        <circle cx="20" cy="100" r="5" fill="var(--accent)" class="wire-dot"/>
        <circle cx="100" cy="100" r="8" fill="var(--accent)" class="wire-dot" style="animation-delay: 1s;"/>
        <circle cx="180" cy="100" r="5" fill="var(--accent)" class="wire-dot" style="animation-delay: 2s;"/>
    </svg>
    <div class="proc-badge p-0 align-top">PLAN</div>
    <div class="proc-badge middle">BUILD</div>
    <div class="proc-badge p-bottom">SCALE</div>
</div>
<?php 
$data['page_hero_visual'] = ob_get_clean();
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<!-- Deep Process Sections -->
<?php 
$deep_steps = [
    [
        'id' => '01',
        'title' => 'The Intelligent Blueprint',
        'tag' => 'DISCOVERY & STRATEGY',
        'desc' => 'We begin with a deep dive into your business unit. This isn\'t just a chat; it\'s a technical audit where we identify market gaps, research competitor tech stacks, and map out a high-performance roadmap designed for scale.',
        'deliverables' => ['Competitive Gap Analysis', 'Technical Architecture Map', 'ROI Forecasting Model'],
        'icon' => 'bi-pencil-square'
    ],
    [
        'id' => '02',
        'title' => 'High-Velocity Engineering',
        'tag' => 'DESIGN & DEVELOPMENT',
        'desc' => 'Our engineers and designers work in tight, iterative sprints. We focus on building lightweight, performant, and visually stunning digital assets using our core modern tech stack. No templates, no bloat.',
        'deliverables' => ['Bento-Style UI/UX Design', 'Performance Optimized Code', 'Mobile-First Scaling'],
        'icon' => 'bi-code-slash'
    ],
    [
        'id' => '03',
        'title' => 'Market Domination',
        'tag' => 'LAUNCH & DEPLOYMENT',
        'desc' => 'Launching is just the beginning. We deploy your assets to ultra-fast global edge networks and trigger our aggressive SEO and marketing funnels to capture and convert users from day one.',
        'deliverables' => ['Cloud Edge Deployment', 'SEO Search Domination', 'Lead Capture Acceleration'],
        'icon' => 'bi-rocket-takeoff'
    ],
    [
        'id' => '04',
        'title' => 'Continuous Optimization',
        'tag' => 'MAINTENANCE & GROWTH',
        'desc' => 'We don\'t leave. We monitor real-time data streams, heatmaps, and conversion metrics to continuously pivot and optimize your platform for even higher returns. Your growth is our constant pursuit.',
        'deliverables' => ['Real-time Performance Monitoring', 'A/B Testing & Optimization', 'Ongoing Security Hardening'],
        'icon' => 'bi-graph-up-arrow'
    ]
];
?>

<section class="section-padding bg-white overflow-hidden">
    <div class="container" style="max-width: 1100px;">
        <?php foreach ($deep_steps as $i => $step): ?>
        <div class="row align-items-center mb-5 pb-5 <?= ($i % 2 !== 0) ? 'flex-row-reverse' : '' ?>" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="step-num-huge mb-3" style="color: <?= $data['hero_color'] ?> opacity: 0.1; font-size: 100px; font-weight: 900; line-height: 1; font-family: 'Clash Display';">
                    <?= $step['id'] ?>
                </div>
                <span class="text-accent-dynamic fw-bold small letter-spacing-2 mb-2 d-block text-uppercase"><?= $step['tag'] ?></span>
                <h2 class="display-5 fw-900 text-dark mb-4"><?= $step['title'] ?></h2>
                <p class="fs-5 text-muted mb-4"><?= $step['desc'] ?></p>
                
                <h5 class="small fw-900 text-dark text-uppercase letter-spacing-1 mb-3">Key Deliverables</h5>
                <ul class="list-unstyled d-grid gap-2">
                    <?php foreach ($step['deliverables'] as $d): ?>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill text-accent-dynamic"></i>
                            <span class="fw-700 text-dark opacity-75 small"><?= htmlspecialchars($d) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-6 text-center">
                <div class="proc-visual-block p-5 bg-light rounded-5 border-3 border-dark border <?= ($i % 2 !== 0) ? 'me-lg-5' : 'ms-lg-5' ?> shadow-punchy-sm mt-5 mt-lg-0">
                    <i class="bi <?= $step['icon'] ?> display-1 text-accent-dynamic"></i>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- CTA -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
.proc-hero-visual {
    position: relative;
    width: 320px;
    height: 320px;
}
.circuit-wire {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
}
.wire-path {
    stroke-dasharray: 200;
    stroke-dashoffset: 200;
    animation: walkPath 3s linear infinite;
}
@keyframes walkPath { from { stroke-dashoffset: 400; } to { stroke-dashoffset: 0; } }
.wire-dot {
    animation: glowDot 2s infinite alternate;
}
@keyframes glowDot { from { opacity: 0.3; transform: scale(0.8); } to { opacity: 1; transform: scale(1.2); } }

.proc-badge {
    position: absolute;
    background: var(--text-dark);
    color: white;
    padding: 8px 15px;
    border-radius: 6px;
    font-weight: 900;
    font-size: 11px;
    letter-spacing: 2px;
}
.proc-badge.p-0 { top: 20%; left: 0; }
.proc-badge.middle { top: 50%; left: 50%; transform: translate(-50%, -50%); }
.proc-badge.p-bottom { bottom: 20%; right: 0; }

.proc-visual-block {
    transition: all 0.4s ease;
}
.proc-visual-block:hover {
    transform: rotate(2deg) scale(1.05);
}
.shadow-punchy-sm {
    box-shadow: 12px 12px 0px var(--text-dark);
}
</style>
