<section id="home" class="hero-section py-5 px-3">
    <!-- Dynamic Bento Grid -->
    <div class="container mt-5 pt-3" style="max-width:1300px;">
        <div class="row g-4 bento-grid">
            
            <!-- Bento Box 1: Main Headline -->
            <div class="col-lg-8 col-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="bento-card bento-main h-100 d-flex flex-column justify-content-center position-relative">
                    <div class="hero-badge mb-4 align-self-start">
                        <span class="badge-dot"></span> Premium Digital Agency
                    </div>
                    <h1 class="hero-heading text-dark">
                        We build websites that drive <span class="gradient-text">Real Business Growth.</span>
                    </h1>
                    <p class="hero-subtext mt-4 text-dark" style="opacity: 0.8; font-size: 18px; max-width: 500px;">
                        High-performance bento designs, aggressive marketing systems, and neo-brutalist web experiences.
                    </p>
                    <div class="hero-cta-group mt-5 d-flex flex-wrap gap-3">
                        <a href="#cta" class="btn btn-gradient btn-lg">Get Started <i class="bi bi-arrow-right ms-2"></i></a>
                        <a href="#work" class="btn btn-outline-custom btn-lg">Our Work</a>
                    </div>
                </div>
            </div>

            <!-- Bento Box 2: Dashboard Visual -->
            <div class="col-lg-4 col-md-6 col-12" data-aos="zoom-in" data-aos-delay="200">
                <div class="bento-card bg-white h-100 p-4 d-flex flex-column justify-content-between">
                    <div class="db-header d-flex align-items-center gap-2 mb-4">
                        <div class="db-dots d-flex gap-1">
                            <span class="db-dot" style="background:#FF5F57; width:10px; height:10px; border-radius:50%;"></span>
                            <span class="db-dot" style="background:#FEBC2E; width:10px; height:10px; border-radius:50%;"></span>
                            <span class="db-dot" style="background:#28C840; width:10px; height:10px; border-radius:50%;"></span>
                        </div>
                        <span style="font-size:12px; font-weight:600; color:#888;">Revenue Growth</span>
                    </div>
                    
                    <div class="db-chart mt-auto">
                        <div class="bar-group d-flex align-items-end gap-1" style="height: 120px;">
                            <?php $bars = [35,55,42,68,59,80,72,90]; ?>
                            <?php foreach($bars as $i => $h): ?>
                            <div class="chart-bar w-100" style="background:var(--primary-gradient); border-radius: 4px 4px 0 0; min-height: 20px; height:<?= $h ?>px; animation-delay:<?= $i * 0.1 ?>s"></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-3">
                        <div>
                            <span class="d-block" style="font-size: 11px; color:#888;">Conversion</span>
                            <span class="d-block" style="font-size: 20px; font-weight: 800; font-family: 'Clash Display';">+340%</span>
                        </div>
                        <div class="fc-icon-green bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bento Box 3: Marquee Text -->
            <div class="col-lg-5 col-md-6 col-12" data-aos="zoom-in" data-aos-delay="300">
                <div class="bento-card bento-marquee bg-dark text-white h-100 overflow-hidden d-flex align-items-center">
                    <div class="marquee-track d-flex gap-4" style="white-space: nowrap; font-family: 'Clash Display'; font-size: 32px; font-weight: 600;">
                        <span>WEB DESIGN • SEO • AUTOMATION • PAID ADS •</span>
                        <span>WEB DESIGN • SEO • AUTOMATION • PAID ADS •</span>
                    </div>
                </div>
            </div>

            <!-- Bento Box 4: Trust & Proof -->
            <div class="col-lg-7 col-12" data-aos="zoom-in" data-aos-delay="400">
                <div class="bento-card bg-white p-4 d-flex align-items-center justify-content-between h-100 flex-wrap gap-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar-group d-flex">
                            <span class="avatar avatar-1" style="width:48px;height:48px;border-radius:50%;background:#6A5AE0;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:bold;margin-left:-10px;border:2px solid #fff;">AS</span>
                            <span class="avatar avatar-2" style="width:48px;height:48px;border-radius:50%;background:#E83E8C;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:bold;margin-left:-10px;border:2px solid #fff;">PM</span>
                            <span class="avatar avatar-3" style="width:48px;height:48px;border-radius:50%;background:#FF7A18;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:bold;margin-left:-10px;border:2px solid #fff;">RK</span>
                        </div>
                        <div>
                            <span class="stars d-block" style="color:#FFB800; font-size:18px;">★★★★★</span>
                            <span class="proof-label d-block" style="font-size:14px; font-weight:600;">Trusted by <strong>30+ businesses</strong></span>
                        </div>
                    </div>
                    <div class="text-end">
                        <div class="fw-bold fs-4" style="font-family: 'Clash Display'; color: var(--primary-start)">#1 Rated</div>
                        <div style="font-size:13px; color:#666;">On Google Reviews</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
