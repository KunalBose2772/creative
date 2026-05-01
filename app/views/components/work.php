<section id="work" class="py-5" style="background: var(--bg-card);">
    <div class="container mt-5" style="max-width:1300px;">
        <!-- Editorial Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 pb-3" style="border-bottom: 4px solid var(--text-dark);" data-aos="fade-up">
            <h2 class="section-title m-0 p-0 text-uppercase">
                Featured<br>Work.
            </h2>
            <div class="mt-4 mt-md-0 fw-bold d-flex align-items-center gap-3">
                <span class="d-none d-md-inline-block" style="width: 60px; height: 2px; background: var(--text-dark);"></span>
                <p class="m-0" style="font-size:18px; max-width: 300px;">
                    Raw outcomes. No fluff. Real revenue driven by uncompromised design.
                </p>
            </div>
        </div>

        <!-- Brutalist List Layout -->
        <div class="editorial-work-list">
            <?php 
            $work_colors = ['#FF5F57', '#6A5AE0', '#FEBC2E']; 
            foreach ($data['works'] as $i => $work): 
                $color = $work_colors[$i];
                $num = '0' . ($i + 1);
            ?>
            
            <a href="#cta" class="work-list-item d-block text-decoration-none text-dark" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>" style="border-bottom: 2px solid var(--text-dark); transition: var(--transition);">
                <div class="row align-items-center py-4 py-md-5 g-4 project-row-inner" style="transition: all 0.3s ease;">
                    
                    <!-- Number & Tag -->
                    <div class="col-12 col-md-2">
                        <div class="d-flex flex-md-column gap-3 align-items-center align-items-md-start">
                            <span style="font-size: 24px; font-weight: 800; opacity: 0.3; font-family: 'Clash Display';"><?= $num ?> /</span>
                            <span class="fw-bold text-uppercase" style="font-size: 13px; letter-spacing: 1px; color: <?= $color ?>;"><?= htmlspecialchars($work['tag']) ?></span>
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="col-12 col-md-5">
                        <h3 class="m-0 list-title" style="font-size: clamp(32px, 5vw, 64px); font-weight: 800; text-transform: uppercase; line-height: 1; transition: color 0.3s ease;">
                            <?= htmlspecialchars($work['title']) ?>
                        </h3>
                    </div>

                    <!-- Color Block / Image Placeholder -->
                    <div class="col-6 col-md-2 text-center text-md-start">
                        <div class="project-visual mx-auto mx-md-0" style="width: 100%; max-width: 140px; height: 80px; background: <?= $color ?>; border: 2px solid var(--text-dark); overflow: hidden; position: relative;">
                            <?php if (!empty($work['image'])): ?>
                                <img src="<?= BASE_URL ?>public/assets/images/<?= $work['image'] ?>" class="w-100 h-100 object-fit-cover" style="filter: grayscale(1); transition: filter 0.3s;">
                            <?php else: ?>
                                <div style="position: absolute; inset: 0; background-image: radial-gradient(#000 2px, transparent 2px); background-size: 10px 10px; opacity: 0.2;"></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Result & Arrow -->
                    <div class="col-6 col-md-3 d-flex flex-column align-items-end justify-content-center text-end">
                        <span class="d-block" style="font-size: clamp(24px, 3vw, 36px); font-weight: 800; font-family: 'Clash Display';"><?= htmlspecialchars($work['result']) ?></span>
                        <div class="mt-2 d-flex align-items-center gap-2">
                            <span class="fw-bold fs-6">Explore</span>
                            <i class="bi bi-arrow-up-right fs-4"></i>
                        </div>
                    </div>

                </div>
            </a>
            
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5 pt-5 pb-3">
            <a href="#cta" class="btn btn-dark btn-lg px-5 py-3 rounded-0 fw-bold border-0" style="background: var(--text-dark); font-size: 18px;">
                View The Full Archive
            </a>
        </div>
    </div>
</section>

<style>
/* Hover Effects for Editorial List */
.work-list-item:hover .project-row-inner {
    padding-left: 20px;
    padding-right: 20px;
}
.work-list-item:hover .list-title {
    color: var(--primary-start) !important;
}
.work-list-item:hover .project-visual {
    transform: scale(1.05);
}
.project-visual {
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
</style>
