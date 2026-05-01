<section id="process" class="section-padding bg-white overflow-hidden">
    <div class="container" style="max-width:1240px;">
        <div class="section-header mb-5" data-aos="fade-up">
            <h2 class="section-title">The Blueprint to <br><span class="gradient-text">Domination.</span></h2>
            <p class="section-subtitle mt-4 mx-0" style="max-width: 600px;">
                We don't guess. We engineer. Our 3-stage battle plan is designed to move the needle on day one, and scale it to the moon by day ninety.
            </p>
        </div>

        <div class="row pt-5 g-0">
            <?php 
            if (isset($data['process']) && is_array($data['process'])):
                foreach ($data['process'] as $i => $step): 
            ?>
            <div class="col-12 process-item mb-5 pb-5" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                <div class="row align-items-center g-4 g-lg-5">
                    
                    <!-- Large Stage Number -->
                    <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                        <div class="d-flex align-items-baseline gap-2">
                            <span style="font-size: 80px; font-weight: 900; line-height: 1; font-family: 'Clash Display'; color: #eee; -webkit-text-stroke: 1px #ccc;">
                                <?= $step['step'] ?>
                            </span>
                            <span class="text-uppercase fw-bold" style="font-size: 14px; letter-spacing: 3px; color: var(--primary-start);">STAGE</span>
                        </div>
                    </div>

                    <!-- Title & Content -->
                    <div class="col-lg-6 col-md-8">
                        <h3 style="font-size: clamp(32px, 4vw, 48px); font-weight: 800; margin-bottom: 20px; line-height: 1;">
                            <?= htmlspecialchars($step['title']) ?>
                        </h3>
                        <p style="font-size: 18px; color: var(--text-dark); opacity: 0.8; line-height: 1.8; margin: 0;">
                            <?= htmlspecialchars($step['desc']) ?>
                        </p>
                    </div>

                    <!-- CTA or Link for each stage -->
                    <div class="col-lg-3 col-md-4 text-md-end">
                        <div class="process-indicator d-none d-lg-flex justify-content-end mb-4">
                           <div style="width: 80px; height: 2px; background: #eee; position: relative;">
                               <div class="progress-line" style="position: absolute; left: 0; top: 0; height: 100%; background: var(--text-dark); width: 0%; transition: width 1.5s cubic-bezier(0.16, 1, 0.3, 1);"></div>
                           </div>
                        </div>
                        <span class="fw-bold fs-6">Phase Complete <i class="bi bi-check2-circle text-success ms-2"></i></span>
                    </div>

                </div>
            </div>
            <?php 
                endforeach; 
            endif;
            ?>
        </div>
    </div>
</section>

<style>
.process-item {
    border-bottom: 1px solid #eee;
}
.process-item:last-child {
    border-bottom: none;
}
.process-item[data-aos].aos-animate .progress-line {
    width: 100% !important;
}
</style>
