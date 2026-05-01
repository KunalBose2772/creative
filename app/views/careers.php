<?php 
$data['page_hero_badge'] = 'Join the Squad';
$data['page_title_html'] = 'Build the Future <br><span class="gradient-text">of the Web.</span>';
$data['page_subtitle'] = "We move fast, we break things, and we build legendary products. If you're an elite engineer, a visionary designer, or a growth hacker, we want you.";

// Visual element for careers hero
ob_start(); ?>
<div class="career-hero-visual" style="--accent: <?= $data['hero_color'] ?>;">
    <div class="code-editor-mockup shadow-lg border-2 border-dark border">
        <div class="code-head p-2 border-bottom border-dark border-opacity-10 d-flex gap-1">
            <span style="width: 8px; height: 8px; background: #ff5f56; border-radius: 50%;"></span>
            <span style="width: 8px; height: 8px; background: #ffbd2e; border-radius: 50%;"></span>
            <span style="width: 8px; height: 8px; background: #27c93f; border-radius: 50%;"></span>
        </div>
        <div class="code-content p-3">
            <code class="small fw-700" style="color: #61afef;">class <span style="color: #e5c07b;">EliteTalent</span> {</code><br>
            <code class="small fw-700 ms-3" style="color: #c678dd;">constructor</code><code class="small fw-700">(skill) {</code><br>
            <code class="small fw-700 ms-4" style="color: #d19a66;">this</code><code class="small fw-700">.isLegendary = <span style="color: #d19a66;">true</span>;</code><br>
            <code class="small fw-700 ms-3">}</code><br>
            <code class="small fw-700">}</code>
        </div>
    </div>
    <div class="career-tag t-1">#NO_MID_CODE</div>
    <div class="career-tag t-2">#SCALE_ONLY</div>
</div>
<?php 
$data['page_hero_visual'] = ob_get_clean();
require_once APP_PATH . '/views/components/page_hero.php'; 
?>

<!-- Culture Section -->
<section class="section-padding bg-glossy-black text-white">
    <div class="container" style="max-width: 1240px;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-tag mb-4" style="background: rgba(255,255,255,0.05); color: #fff; border-color: rgba(255,255,255,0.2);">Our Culture</span>
                <h2 class="display-4 fw-900 mb-4">A Playground for <br><span class="gradient-text">Digital Rebels.</span></h2>
                <p class="lead opacity-75 mb-5">At Crea8ve Cool, we don't have "employees." We have partners in crime. We work remotely, we celebrate technical depth, and we push each other to build the best digital assets on the planet.</p>
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="p-4 border border-white border-opacity-10 rounded-4">
                            <i class="bi bi-laptop fs-3 text-accent-dynamic mb-3 d-block"></i>
                            <h5 class="fw-900 text-white">Remote First</h5>
                            <p class="small opacity-50 mb-0">Work from anywhere. We care about your output, not your time-stamp.</p>
                        </div>
                    </div>
                     <div class="col-sm-6">
                        <div class="p-4 border border-white border-opacity-10 rounded-4">
                            <i class="bi bi-trophy fs-3 text-accent-dynamic mb-3 d-block"></i>
                            <h5 class="fw-900 text-white">Meritocracy</h5>
                            <p class="small opacity-50 mb-0">The best ideas always win, regardless of your title or experience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="image-stack position-relative">
                    <img src="https://images.unsplash.com/photo-1522071823991-b1ae5e6a3048?q=80&w=2070&auto=format&fit=crop" alt="Engineering Culture" class="img-fluid rounded-5 shadow-lg position-relative z-1 border border-white border-opacity-10">
                    <div class="glow-bg" style="background: var(--page-accent); opacity: 0.1;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Job Openings -->
<section class="section-padding bg-light">
    <div class="container" style="max-width: 1000px;">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-900 text-dark">Open <span class="text-accent-dynamic">Missions</span></h2>
            <p class="text-muted fs-5">Pick your battle and show us what you're made of.</p>
        </div>

        <div class="job-list d-grid gap-3">
            <?php 
            $jobs = [
                ['title' => 'Senior Full-Stack Engineer', 'type' => 'Full-time / Remote', 'stack' => 'React 19, Node.js, PHP 8.4'],
                ['title' => 'Motion & UI Designer', 'type' => 'Contract / Remote', 'stack' => 'Figma, After Effects, Lottie'],
                ['title' => 'Growth & Performance Marketer', 'type' => 'Full-time / Remote', 'stack' => 'Meta Ads, Google Ads, SQL'],
            ];

            foreach ($jobs as $i => $job):
            ?>
            <div class="job-card p-4 bg-white border-3 border border-dark rounded-4 shadow-punchy-sm d-flex justify-content-between align-items-center flex-wrap gap-4" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                <div>
                    <h4 class="fw-900 mb-1"><?= $job['title'] ?></h4>
                    <span class="small opacity-50 fw-bold letter-spacing-1"><?= $job['type'] ?> • <?= $job['stack'] ?></span>
                </div>
                <a href="mailto:careers@crea8vecool.com?subject=Application for <?= $job['title'] ?>" class="btn btn-dark fw-900 letter-spacing-1 rounded-3 px-4 py-3">APPLY NOW</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<?php require_once APP_PATH . '/views/components/cta.php'; ?>

<style>
.career-hero-visual {
    position: relative;
    width: 320px;
}
.code-editor-mockup {
    background: #282c34;
    border-radius: 12px;
    overflow: hidden;
    width: 100%;
}
.career-tag {
    position: absolute;
    background: white;
    padding: 6px 12px;
    border-radius: 6px;
    border: 2px solid var(--text-dark);
    font-weight: 900;
    font-size: 10px;
    letter-spacing: 1px;
    box-shadow: 4px 4px 0px var(--text-dark);
}
.t-1 { top: -20px; right: 20px; transform: rotate(5deg); }
.t-2 { bottom: -10px; left: -20px; transform: rotate(-5deg); }

.job-card {
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}
.job-card:hover {
    transform: scale(1.02);
    border-color: var(--page-accent) !important;
    box-shadow: 12px 12px 0px var(--text-dark);
}
.glow-bg {
    position: absolute;
    inset: -20%;
    filter: blur(100px);
    z-index: 0;
}
</style>
