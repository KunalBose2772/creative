<section id="why" class="section-padding bg-light-soft">
    <div class="container" style="max-width:1240px;">
        <div class="row align-items-center g-5">
            <!-- Left: Content -->
            <div class="col-lg-5 col-12" data-aos="fade-right">
                <span class="section-tag">Why Crea8ve Cool</span>
                <h2 class="section-title mt-3">Built Different. Engineered to Perform.</h2>
                <p class="section-subtitle mt-3">We're not just designers — we're growth partners who live and breathe conversion, speed, and impact.</p>
                <a href="#cta" class="btn btn-gradient btn-lg mt-4 px-5">Work With Us <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
            <!-- Right: Grid -->
            <div class="col-lg-7 col-12">
                <div class="row g-4">
                    <?php foreach ($data['why'] as $i => $why): ?>
                    <div class="col-md-6 col-12" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                        <div class="why-card">
                            <div class="wc-icon"><i class="bi <?= $why['icon'] ?>"></i></div>
                            <h3 class="wc-title"><?= htmlspecialchars($why['title']) ?></h3>
                            <p class="wc-desc"><?= htmlspecialchars($why['desc']) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
