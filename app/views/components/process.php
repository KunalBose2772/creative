<section id="process" class="section-padding">
    <div class="container" style="max-width:1240px;">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-tag">How We Work</span>
            <h2 class="section-title mt-2">Our Proven 3-Step Process</h2>
            <p class="section-subtitle mt-3">From discovery to launch — a streamlined process that delivers results every time.</p>
        </div>

        <!-- Process Timeline -->
        <div class="process-timeline">
            <div class="process-line" aria-hidden="true"></div>
            <div class="row g-4 justify-content-center position-relative">
                <?php foreach ($data['process'] as $i => $step): ?>
                <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-delay="<?= $i * 200 ?>">
                    <div class="process-step">
                        <div class="ps-number"><?= $step['step'] ?></div>
                        <div class="ps-connector" aria-hidden="true"></div>
                        <div class="ps-card">
                            <h3 class="ps-title"><?= htmlspecialchars($step['title']) ?></h3>
                            <p class="ps-desc"><?= htmlspecialchars($step['desc']) ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
