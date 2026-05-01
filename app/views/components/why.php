<section id="why" class="section-padding bg-glossy-black text-white overflow-hidden py-5" style="background-color: #050505 !important; color: #fff !important;">
    <div class="container py-5" style="max-width:1240px;">
        <div class="row align-items-center g-5">
            
            <!-- Left: Bold Statement -->
            <div class="col-lg-6 col-12" data-aos="fade-right">
                <span class="text-uppercase fw-bold" style="letter-spacing: 4px; font-size: 14px; color: var(--primary-start);">OUR PHILOSOPHY</span>
                <h2 class="section-title text-white mt-4" data-aos="reveal-text" style="font-size: clamp(40px, 8vw, 80px); line-height: 0.9;">
                    Built <span class="gradient-text">Different.</span> <br>Engineered to Win.
                </h2>
                <p class="mt-4 fs-5 text-white opacity-75" style="max-width: 500px; line-height: 1.6;">
                    We are not a template factory. We are a digital weaponry shop for businesses that want to dominate the noise.
                </p>
                
                <div class="mt-5 d-flex flex-column gap-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-success d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; min-width: 28px;">
                            <i class="bi bi-check text-white fs-4"></i>
                        </div>
                        <span class="fs-5 fw-bold">Conversion-First Architecture</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-success d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; min-width: 28px;">
                            <i class="bi bi-check text-white fs-4"></i>
                        </div>
                        <span class="fs-5 fw-bold">High-Performance Clean Code</span>
                    </div>
                </div>

                <a href="#cta" class="btn btn-outline-light btn-lg mt-5 px-5 rounded-0 fw-bold border-2">JOIN THE ELITE</a>
            </div>

            <!-- Right: High-Density Feature Stack -->
            <div class="col-lg-6 col-12">
                <div class="feature-stack d-flex flex-column gap-3">
                    <?php foreach ($data['why'] as $i => $why): ?>
                    <div class="p-4 p-md-5 d-flex gap-4 align-items-start" 
                         style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease; cursor: pointer;"
                         onmouseover="this.style.background='rgba(255,255,255,0.06)'; this.style.borderColor='var(--primary-start)';"
                         onmouseout="this.style.background='rgba(255,255,255,0.03)'; this.style.borderColor='rgba(255,255,255,0.1)';"
                         data-aos="fade-left" data-aos-delay="<?= $i * 100 ?>">
                        <div class="fs-1" style="color: var(--primary-start); line-height: 1;">
                            <i class="bi <?= $why['icon'] ?>"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 24px; font-weight: 800; color: #fff;" class="mb-2"><?= htmlspecialchars($why['title']) ?></h3>
                            <p class="m-0 text-white opacity-75" style="font-size: 16px; line-height: 1.6;"><?= htmlspecialchars($why['desc']) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>
