<section id="services" class="section-padding bg-light-soft">
    <div class="container" style="max-width:1240px;">
        <!-- Section Header -->
        <div class="section-header mb-5" data-aos="fade-up">
            <h2 class="section-title">
                We build <span class="gradient-text">Systems</span> that Scale.
            </h2>
            <p class="section-subtitle mt-4 mx-0" style="font-size:18px; max-width: 700px;">
                We drop the generic strategies and build full-stack digital solutions engineered strictly for performance, growth, and ROI.
            </p>
        </div>

        <!-- Bento Grid -->
        <div class="row g-4 bento-grid mt-4">
            <?php 
            // Extracting services manually for asymmetric bento layout
            $s1 = $data['services'][0] ?? null;
            $s2 = $data['services'][1] ?? null;
            $s3 = $data['services'][2] ?? null;
            $s4 = $data['services'][3] ?? null;
            ?>

            <?php if ($s1): ?>
            <!-- Web Design - Large Horizontal -->
            <div class="col-lg-8" data-aos="zoom-in">
                <div class="bento-card bg-white h-100 p-4 p-md-5 d-flex flex-column justify-content-between position-relative overflow-hidden">
                    <div style="position: absolute; right: -20px; top: -20px; font-size: 200px; opacity: 0.03; color: var(--text-dark); line-height: 1;">
                        <i class="bi <?= $s1['icon'] ?>"></i>
                    </div>
                    <div class="mb-5">
                        <div class="sc-icon-wrap" style="width: 64px; height: 64px; border-radius: 16px; background: var(--text-dark); color: #fff; font-size: 28px; display:flex; align-items:center; justify-content:center;">
                            <i class="bi <?= $s1['icon'] ?>"></i>
                        </div>
                    </div>
                    <div class="position-relative z-1">
                        <h3 class="mb-3" style="font-size: clamp(32px, 4vw, 48px);"><?= htmlspecialchars($s1['title']) ?></h3>
                        <p style="font-size: 18px; max-width: 450px;"><?= htmlspecialchars($s1['description']) ?></p>
                        <a href="#work" class="btn btn-outline-custom mt-3">See Our Projects</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($s2): ?>
            <!-- SEO - Vertical Cream -->
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="bento-card h-100 p-4 p-md-5 d-flex flex-column justify-content-between" style="background: var(--bg); color: var(--text-dark);">
                    <div class="mb-5">
                        <div class="sc-icon-wrap" style="width: 64px; height: 64px; border-radius: 16px; background: var(--primary-gradient); color: #fff; font-size: 28px; display:flex; align-items:center; justify-content:center;">
                            <i class="bi <?= $s2['icon'] ?>"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="mb-3" style="font-size: clamp(28px, 3vw, 36px); color: var(--text-dark);"><?= htmlspecialchars($s2['title']) ?></h3>
                        <p style="font-size: 16px; opacity: 0.8;"><?= htmlspecialchars($s2['description']) ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($s3): ?>
            <!-- Paid Ads -->
            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                <div class="bento-card p-4 p-md-5 h-100 d-flex flex-column justify-content-between" style="background: white; border: 2px solid transparent; background: linear-gradient(white, white) padding-box, var(--primary-gradient) border-box; box-shadow: 10px 10px 0px var(--text-dark);">
                    <div class="mb-4 mb-md-5">
                        <i class="bi <?= $s3['icon'] ?>" style="font-size: 48px; background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; display: inline-block;"></i>
                    </div>
                    <div>
                        <h3 class="mb-2" style="font-size: clamp(28px, 3vw, 36px);"><?= htmlspecialchars($s3['title']) ?></h3>
                        <p style="font-size: 16px; margin:0;"><?= htmlspecialchars($s3['description']) ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($s4): ?>
            <!-- Automation -->
            <div class="col-lg-7" data-aos="zoom-in" data-aos-delay="300">
                <div class="bento-card bg-white p-4 p-md-5 h-100 d-flex flex-column flex-md-row align-items-start align-items-md-center gap-4 gap-md-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-3" style="font-size: clamp(28px, 3vw, 42px);"><?= htmlspecialchars($s4['title']) ?></h3>
                        <p style="font-size: 16px; margin:0;"><?= htmlspecialchars($s4['description']) ?></p>
                    </div>
                    <div class="d-none d-md-block flex-shrink-0">
                        <div class="sc-icon-wrap" style="width: 100px; height: 100px; border-radius: 50%; background: #FAFAFA; border: var(--brutal-border); color: var(--text-dark); font-size: 40px; display:flex; align-items:center; justify-content:center; box-shadow: var(--brutal-shadow); transition: transform 0.3s; cursor: pointer;" onmouseover="this.style.transform='rotate(15deg) scale(1.1)'" onmouseout="this.style.transform='none'">
                            <i class="bi <?= $s4['icon'] ?>"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
        </div>

        <!-- Full Capabilities SEO List -->
        <div class="mt-5 pt-5 border-top" style="border-top: 2px solid var(--text-dark) !important;">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-5">
                <h3 style="font-size: clamp(28px, 4vw, 42px); font-weight: 800; letter-spacing: -0.03em;">Full-Scale Capabilities</h3>
                <p class="m-0 text-muted" style="max-width: 400px; font-size: 15px;">Discover our complete suite of creative and digital marketing services engineered to dominate your market.</p>
            </div>
            
            <div class="row g-4 g-md-5">
                <?php foreach ($data['capabilities'] ?? [] as $i => $cap): ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                    <h4 style="font-size: 22px; font-weight: 700; margin-bottom: 12px; display: flex; align-items: center; gap: 12px;">
                        <span style="display: block; width: 12px; height: 12px; background: var(--primary-gradient); border-radius: 2px;"></span>
                        <?= htmlspecialchars($cap['title']) ?>
                    </h4>
                    <p style="font-size: 16px; color: var(--text-dark); opacity: 0.8; line-height: 1.7; margin: 0;">
                        <?= htmlspecialchars($cap['desc']) ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
    </div>
</section>
