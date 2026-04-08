<section id="work" class="section-padding bg-light-soft">
    <div class="container" style="max-width:1240px;">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-tag">Our Portfolio</span>
            <h2 class="section-title mt-2">Work That Speaks for Itself</h2>
            <p class="section-subtitle mt-3">Real projects, real results — delivered with creative precision and strategic focus.</p>
        </div>

        <div class="row g-4">
            <?php
            $work_visuals = [
                ['icon' => 'bi-shop', 'color1' => '#6A5AE0', 'color2' => '#E83E8C'],
                ['icon' => 'bi-rocket-takeoff', 'color1' => '#E83E8C', 'color2' => '#FF7A18'],
                ['icon' => 'bi-geo-alt', 'color1' => '#FF7A18', 'color2' => '#6A5AE0'],
            ];
            foreach ($data['works'] as $i => $work):
                $vis = $work_visuals[$i];
            ?>
            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="<?= $i * 150 ?>">
                <div class="work-card h-100">
                    <!-- Visual Placeholder -->
                    <div class="work-image" style="background: linear-gradient(135deg, <?= $vis['color1'] ?>, <?= $vis['color2'] ?>);">
                        <div class="work-image-inner">
                            <i class="bi <?= $vis['icon'] ?>"></i>
                        </div>
                        <div class="work-overlay">
                            <a href="#cta" class="btn btn-light btn-sm rounded-pill px-4">View Case Study</a>
                        </div>
                    </div>
                    <div class="work-info">
                        <span class="work-tag"><?= htmlspecialchars($work['tag']) ?></span>
                        <h3 class="work-title"><?= htmlspecialchars($work['title']) ?></h3>
                        <div class="work-result">
                            <i class="bi bi-graph-up-arrow text-success me-2"></i>
                            <?= htmlspecialchars($work['result']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="#cta" class="btn btn-outline-custom btn-lg px-5">See All Projects <i class="bi bi-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>
