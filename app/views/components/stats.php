<section class="stats-section section-padding">
    <div class="container" style="max-width:1240px;">
        <div class="stats-inner">
            <div class="row g-4 justify-content-center">
                <?php foreach ($data['stats'] as $i => $stat): ?>
                <div class="col-lg-3 col-6" data-aos="zoom-in" data-aos-delay="<?= $i * 100 ?>">
                    <div class="stat-item text-center">
                        <div class="stat-number">
                            <span class="count-up" data-target="<?= $stat['value'] ?>"><?= $stat['value'] ?></span><?= $stat['suffix'] ?>
                        </div>
                        <p class="stat-label"><?= htmlspecialchars($stat['label']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
