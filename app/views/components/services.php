<section id="services" class="section-padding">
    <div class="container" style="max-width:1240px;">
        <!-- Section Header -->
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-tag">What We Do</span>
            <h2 class="section-title mt-2">Services That Scale Your Business</h2>
            <p class="section-subtitle mt-3">Full-stack digital solutions engineered for performance, growth, and results.</p>
        </div>

        <!-- Cards Grid -->
        <div class="row g-4">
            <?php foreach ($data['services'] as $i => $service): ?>
            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                <div class="service-card h-100">
                    <div class="sc-top-bar"></div>
                    <div class="sc-icon-wrap">
                        <i class="bi <?= $service['icon'] ?>"></i>
                    </div>
                    <h3 class="sc-title"><?= htmlspecialchars($service['title']) ?></h3>
                    <p class="sc-desc"><?= htmlspecialchars($service['desc']) ?></p>
                    <a href="#cta" class="sc-link">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
