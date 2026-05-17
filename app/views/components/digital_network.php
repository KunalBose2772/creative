<!-- Digital Excellence Network (Related Services) -->
<section class="digital-network-section section-padding bg-light">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-8">
                <h2 class="display-5 fw-900 text-dark">The <span class="text-accent-dynamic">Digital Excellence</span> Network</h2>
                <p class="fs-5 text-muted">Your website is more than a digital presence—it’s your growth engine. Explore our interconnected services designed to amplify your results.</p>
            </div>
        </div>

        <div class="row g-4">
            <?php 
            $network = [
                ['title' => 'Customized Website Designing', 'desc' => 'Bespoke websites tailored to your unique goals, blending captivating visuals with seamless functionality.'],
                ['title' => 'Business Website with SEO', 'desc' => 'Position your business as an industry leader with striking design and powerful search strategies.'],
                ['title' => 'eCommerce Web Designing', 'desc' => 'Take your store to the next level with user-friendly, mobile-responsive shopping experiences.'],
                ['title' => 'Web Development Engineering', 'desc' => 'Elevate your presence with cutting-edge development that blends creativity and robust functionality.'],
                ['title' => 'Industry-Specific Design', 'desc' => 'Unlock your full potential with designs precision-engineered for your specific market leadership.'],
                ['title' => 'PSD to HTML Conversion', 'desc' => 'Converting pixel-perfect designs into animated, fully functional, and responsive web platforms.'],
                ['title' => 'Landing Page Designing', 'desc' => 'Maximize your impact with layouts strategically crafted to transform visitors into high-value leads.'],
                ['title' => 'Responsive Web Designing', 'desc' => 'Ensure your brand looks exceptional and performs flawlessly across every screen size on the planet.']
            ];
            foreach ($network as $i => $item): 
            ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                <div class="network-card p-4 border-2 border border-dark rounded-4 h-100 bg-white transition-all shadow-punchy-sm">
                    <h5 class="fw-900 mb-3"><?= $item['title'] ?></h5>
                    <p class="small text-muted mb-4"><?= $item['desc'] ?></p>
                    <a href="<?= BASE_URL ?>services/website" class="text-accent-dynamic fw-800 text-decoration-none small" title="Read more about our High-End Website Designing and Development services">READ MORE <i class="bi bi-arrow-up-right"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>