<section id="testimonials" class="section-padding">
    <div class="container" style="max-width:1240px;">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Client Love</span>
            <h2 class="section-title mt-2">What Our Clients Say</h2>
            <p class="section-subtitle mt-3">Don't take our word for it — hear from the businesses we've helped grow.</p>
        </div>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-aos="fade-up" data-aos-delay="200">
            <div class="carousel-inner testimonial-carousel">
                <?php foreach ($data['testimonials'] as $i => $t): ?>
                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                    <div class="testimonial-card mx-auto">
                        <div class="tc-quote-icon"><i class="bi bi-quote"></i></div>
                        <p class="tc-text">"<?= htmlspecialchars($t['quote']) ?>"</p>
                        <div class="tc-stars mb-3">★★★★★</div>
                        <div class="tc-author">
                            <div class="tc-avatar"><?= strtoupper(substr($t['name'], 0, 2)) ?></div>
                            <div class="tc-meta">
                                <span class="tc-name"><?= htmlspecialchars($t['name']) ?></span>
                                <span class="tc-company"><?= htmlspecialchars($t['company']) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Controls -->
            <div class="testimonial-controls text-center mt-4">
                <button class="carousel-control-custom me-2" data-bs-target="#testimonialCarousel" data-bs-slide="prev" aria-label="Previous">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <div class="carousel-indicators-custom d-inline-flex gap-2 align-items-center">
                    <?php foreach ($data['testimonials'] as $i => $t): ?>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-label="Slide <?= $i + 1 ?>"></button>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-custom ms-2" data-bs-target="#testimonialCarousel" data-bs-slide="next" aria-label="Next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>
