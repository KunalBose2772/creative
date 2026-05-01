<section class="stats-section" style="border-top: 4px solid var(--text-dark); border-bottom: 4px solid var(--text-dark); background: var(--bg-soft);">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <?php foreach ($data['stats'] as $i => $stat): ?>
            <div class="col-6 col-md-3 text-center py-5 py-md-5 stat-block d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                <div class="stat-number d-block mb-2" style="font-size: clamp(50px, 8vw, 100px); font-weight: 800; font-family: 'Clash Display'; color: var(--text-dark); line-height: 0.9;">
                    <span class="count-up" data-target="<?= $stat['value'] ?>"><?= $stat['value'] ?></span><span style="color: var(--primary-start);"><?= $stat['suffix'] ?></span>
                </div>
                <p class="stat-label m-0 text-uppercase fw-bold" style="color: var(--text-dark); font-size: clamp(12px, 2vw, 16px); letter-spacing: 2px; opacity: 0.8;">
                    <?= htmlspecialchars($stat['label']) ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.stat-block {
    border-right: 2px solid var(--text-dark);
}
.stat-block:last-child {
    border-right: none;
}
@media (max-width: 767px) {
    .stat-block {
        border-bottom: 2px solid var(--text-dark);
    }
    .stat-block:nth-child(2n) {
        border-right: none;
    }
    .stat-block:nth-last-child(-n+2) {
        border-bottom: none;
    }
}
</style>
