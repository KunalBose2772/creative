<section id="testimonials" class="section-padding bg-white overflow-hidden">
    <div class="container" style="max-width:1240px;">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">The <span class="gradient-text">Voices</span> of Success.</h2>
        </div>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000" data-aos="fade-up" data-aos-delay="200">
            <div class="carousel-inner">
                <?php foreach ($data['testimonials'] as $i => $t): ?>
                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-12 text-center py-4">
                            <!-- Massive High-End Quote -->
                            <div class="mb-4" style="color: #eee;">
                                <i class="bi bi-box-seam" style="font-size: 80px; opacity: 0.1; display: block; margin-bottom: -40px;"></i>
                            </div>
                            <blockquote style="font-size: clamp(24px, 4vw, 44px); font-weight: 700; line-height: 1.3; font-family: 'Clash Display'; color: var(--text-dark); margin: 0 auto; max-width: 900px;">
                                "<?= htmlspecialchars($t['quote']) ?>"
                            </blockquote>
                            
                            <!-- Author & Social Proof -->
                            <div class="mt-5 d-flex flex-column align-items-center">
                                <span class="stars mb-3" style="color: #FFB800; font-size: 24px;">★★★★★</span>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle fs-5 fw-bold" style="width: 56px; height: 56px; border-radius: 50%; background: var(--primary-gradient); color: #fff; display: flex; align-items: center; justify-content: center;">
                                        <?= strtoupper(substr($t['name'], 0, 1)) ?>
                                    </div>
                                    <div class="text-start">
                                        <h4 class="m-0 fs-5 fw-bold" style="color: var(--text-dark);"><?= htmlspecialchars($t['name']) ?></h4>
                                        <p class="m-0 text-muted small fw-bold text-uppercase" style="letter-spacing: 1px;"><?= htmlspecialchars($t['company']) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Sleek Timeline Progress Indicators -->
            <div class="row justify-content-center mt-5 pt-4">
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center gap-3">
                        <?php foreach ($data['testimonials'] as $i => $t): ?>
                        <button type="button" 
                                data-bs-target="#testimonialCarousel" 
                                data-bs-slide-to="<?= $i ?>" 
                                class="<?= $i === 0 ? 'active' : '' ?>" 
                                style="width: 40px; height: 3px; background: #eee; border: none; transition: all 0.3s ease;"></button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <button class="carousel-control-prev d-none d-lg-flex" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev" style="width: 50px; opacity: 1;">
                <i class="bi bi-arrow-left fs-2 text-dark"></i>
            </button>
            <button class="carousel-control-next d-none d-lg-flex" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next" style="width: 50px; opacity: 1;">
                <i class="bi bi-arrow-right fs-2 text-dark"></i>
            </button>
        </div>
    </div>
</section>

<style>
#testimonialCarousel .carousel-indicators-custom button.active {
    background: var(--text-dark) !important;
    width: 80px !important;
}
.carousel-inner blockquote {
    letter-spacing: -0.02em;
}
</style>
