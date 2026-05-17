<!-- Growth Ecosystem (The 15+ Benefits) -->
<section id="ecosystem" class="growth-ecosystem-section section-padding bg-dark text-white overflow-hidden">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-4 fw-900 mb-4 text-white">Affordable, Professional, and <span class="text-accent-dynamic">Built for Growth</span></h2>
                <p class="fs-5 opacity-75">In today’s digital-first world, every business deserves a professional online presence. Our service offers cost-effective, engineering-grade solutions tailored to showcase your brand and products.</p>
            </div>
        </div>
        
        <div class="row g-3">
            <?php 
            $ecosystem_features = [
                ['title' => 'Professional Templates', 'link' => '/cr/services/platform'],
                ['title' => 'Cost-Effective Design', 'link' => '/cr/services/marketing'],
                ['title' => 'Mobile Responsive', 'link' => '/cr/services/pwa'],
                ['title' => 'Fast Load Speeds', 'link' => 'https://pagespeed.web.dev/'],
                ['title' => 'User-Friendly Interface', 'link' => '/cr/services/uiux'],
                ['title' => 'Secure Hosting', 'link' => '/cr/services/automation'],
                ['title' => 'Custom Branding Colors', 'link' => '/cr/services/branding'],
                ['title' => 'Integrated Contact Forms', 'link' => '/cr/services/crm'],
                ['title' => 'Domain Registration', 'link' => '#'],
                ['title' => 'Quick Launch Timeline', 'link' => '/cr/about'],
                ['title' => 'Scalable Solutions', 'link' => '/cr/services/saas'],
                ['title' => 'Technical Support', 'link' => '/cr/contact'],
                ['title' => 'Enhanced Visual Appeal', 'link' => '/cr/services/creative'],
                ['title' => 'SEO Integration', 'link' => '/cr/services/seo'],
                ['title' => 'API Readiness', 'link' => '/cr/services/api']
            ];
            foreach ($ecosystem_features as $f): 
            ?>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="p-3 border border-white border-opacity-10 rounded-4 transition-all hover-bg-white-opacity d-flex align-items-center gap-3">
                    <i class="bi bi-check-circle-fill text-accent-dynamic"></i>
                    <a href="<?= $f['link'] ?>" class="text-white text-decoration-none fw-bold small opacity-75 hover-opacity-100" title="Explore more about <?= htmlspecialchars($f['title']) ?>"><?= $f['title'] ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>