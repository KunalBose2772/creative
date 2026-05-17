<?php 
// Hardcoded Service Data for Performance Marketing & ROI-Driven Ads
$serviceSlug = 'performance';
$accentColor = '#FFB800'; // High-Visibility Amber/Yellow
$service = [
    'title' => 'Google Ads & Meta Ads Management',
    'meta_title' => 'Google Ads & Meta Marketing Agency India | Performance Marketing | Crea8ve Cool',
    'meta_description' => 'Increase your sales with our performance marketing services in India. We manage high-ROI Google Ads and Meta (Facebook/Instagram) ad campaigns.',
    'desc' => 'Stop burning your ad budget. We are a performance marketing agency in India that manages aggressive, data-driven paid campaigns to turn every dollar into revenue.',
    'color' => '#FFB800',
    'features' => [
        'Google Search & Display Mastery',
        'Meta (FB/IG) Conversion Ads',
        'High-ROAS Retargeting Funnels',
        'Landing Page CRO Optimization',
        'Competitor Ad Spying & Analysis',
        'Daily Budget & Bid Management'
    ],
    'packages' => [
        [
            'name' => 'Growth',
            'tagline' => 'Market Entry',
            'desc' => 'Establish your presence on a single platform and start generating consistent leads.',
            'price' => '19,990',
            'original_price' => '29,990',
            'savings' => '33',
            'features' => ['Single Platform (Google or Meta)', 'Keyword/Audience Research', 'Custom Ad Copywriting', 'Conversion Tracking Setup', 'Weekly Performance Reports', 'Monthly Strategy Sync', 'Standard Creative Assets', '14-Day Campaign Launch'],
            'color' => '#6A5AE0',
            'recommended' => false
        ],
        [
            'name' => 'Scale',
            'tagline' => 'Multi-Channel Alpha',
            'desc' => 'Dominate multiple platforms with integrated retargeting and aggressive scaling.',
            'price' => '39,990',
            'original_price' => '59,990',
            'savings' => '33',
            'features' => ['Google + Meta Integration', 'Advanced Retargeting Loops', 'A/B Split Testing', 'Landing Page Optimization', 'Competitor Ad Audits', 'Daily Bid Adjustments', 'Premium Video Ad Assets', 'Real-time ROI Dashboard'],
            'color' => '#FFB800',
            'recommended' => true
        ],
        [
            'name' => 'Enterprise',
            'tagline' => 'Industry Dominance',
            'desc' => 'Total market takeover with unlimited scale, custom funnels, and dedicated support.',
            'price' => '79,990',
            'original_price' => '1,19,990',
            'savings' => '33',
            'features' => ['Full Funnel Architecture', 'Omnichannel Distribution', 'Custom Landing Page Builds', 'Dedicated Account Manager', 'Whitelisted Media Access', 'Creative Content Pipeline', 'Deep CRM Integration', 'Unlimited Monthly Spend Scale'],
            'color' => '#FF5E36',
            'recommended' => false
        ]
    ]
];

// Support for dynamic location
if (isset($data['location'])) {
    $loc = $data['location'];
    $service['title'] = "Performance Marketing & Ads Agency in " . $loc['name'];
    $service['desc'] = "Scaling local businesses in " . $loc['name'] . " with precision-targeted Google and Meta ad campaigns that deliver guaranteed ROI.";
    $service['meta_title'] = "Performance Marketing in " . $loc['name'] . " | Crea8ve Cool";
    $service['meta_description'] = "Looking for the best Google Ads or FB marketing agency in " . $loc['name'] . "? We deliver high-ROAS campaigns and sales funnels. Contact us for a free audit.";
}

// SEO JSON-LD
$schemaData = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => $service['title'],
    "description" => $service['meta_description'],
    "provider" => [
        "@type" => "Organization",
        "name" => "Crea8ve Cool",
        "url" => BASE_URL
    ],
    "areaServed" => [
        "@type" => "Country",
        "name" => "India"
    ],
    "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name" => $service['title'] . " Packages",
        "itemListElement" => array_map(function($pkg) {
            return [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => $pkg['name']
                ],
                "price" => str_replace(['₹', ','], '', $pkg['price']),
                "priceCurrency" => "INR"
            ];
        }, $service['packages'] ?? [])
    ]
];

$combinedSchema = [$schemaData];
?>

<script type="application/ld+json">
<?= json_encode($combinedSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<?php
if (!function_exists('hexToRgb')) {
    function hexToRgb($hex) {
        $hex = ltrim($hex, '#');
        if (strlen($hex) === 3) {
            $hex = $hex[0].$hex[0].$hex[1].$hex[1].$hex[2].$hex[2];
        }
        return hexdec(substr($hex,0,2)) . ', ' . hexdec(substr($hex,2,2)) . ', ' . hexdec(substr($hex,4,2));
    }
}
$accentRgb = hexToRgb($accentColor);
?>

<style>
:root {
    --page-accent: <?= $accentColor ?>;
    --page-accent-rgb: <?= $accentRgb ?>;
}
</style>

<!-- High-Impact Bento Hero -->
<section class="service-bento-hero pt-5 pb-5 position-relative overflow-hidden">
    <div class="hero-bg-elements">
        <div class="blob-1" style="background: rgba(255, 184, 0, 0.25);"></div>
        <div class="blob-2" style="background: rgba(106, 90, 224, 0.15);"></div>
        <div class="hero-grid-overlay"></div>
    </div>
    
    <div class="container mt-5 pt-3 max-w-1300">
        <div class="row g-4 bento-grid mb-5">
            <div class="col-lg-8" data-aos="zoom-in">
                <div class="bento-card main-info-card h-100 p-4 p-lg-5 d-flex flex-column justify-content-center">
                    <div class="hero-badge mb-3 align-self-start" style="background: rgba(255, 184, 0, 0.15); color: #9E6F00;">
                        <span class="badge-dot" style="background: #9E6F00;"></span> Live Performance
                    </div>
                    <h1 class="display-5 fw-900 text-dark mb-3">
                        <span class="gradient-text-dynamic" style="background: linear-gradient(135deg, #FFB800 0%, #FF7A18 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?= htmlspecialchars($service['title']) ?></span> <br>
                        Engineered for ROI.
                    </h1>
                    <p class="hero-subtext fs-6 text-dark opacity-75 mb-4 max-w-600">
                        <?= htmlspecialchars($service['desc']) ?>
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-2">
                        <a href="#leads-form" class="btn btn-punchy" style="background: #FFB800 !important; color: #000 !important; border-color: #FFB800 !important;" title="Scale My Ads">Scale My Ads <i class="bi bi-chevron-right ms-2"></i></a>
                        <a href="#packages" class="btn btn-outline-dark-punchy" title="Review our Performance Marketing ROI Packages">View ROI Packages</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100" id="leads-form">
                <div class="bento-card h-100 p-4 bg-dark text-white d-flex flex-column justify-content-center position-relative overflow-hidden hero-form-box">
                    <div class="position-absolute top-0 end-0 rounded-circle hero-form-glow" style="background: radial-gradient(circle, rgba(255, 184, 0, 0.4) 0%, transparent 70%);"></div>
                    <div class="form-header mb-3 position-relative z-1 mt-3">
                        <div class="badge bg-white text-dark rounded-pill px-2 py-1 mb-2 fw-bold d-inline-flex align-items-center gap-2 border border-2 border-dark">
                            <div class="status-dot" style="background: #FFB800;"></div>
                            Ads Online
                        </div>
                        <h3 class="fw-900 mb-1 fs-4 text-white">Start Scaling</h3>
                        <p class="opacity-75 mb-0 small text-white">Request a custom ROAS audit for your business.</p>
                    </div>
                    <form action="<?= BASE_URL ?>contact" method="POST" class="hero-form d-flex flex-column gap-2 position-relative z-1">
                        <input type="hidden" name="source" value="Performance Marketing Inquiry">
                        <input type="text" name="name" class="form-control hero-form-input" placeholder="Your Name" required>
                        <input type="email" name="email" class="form-control hero-form-input" placeholder="Work Email" required>
                        <input type="tel" name="phone" class="form-control hero-form-input" placeholder="Phone Number" required>
                        <button type="submit" class="btn btn-punchy w-100 mt-1" style="background: #FFB800 !important; color: #000 !important; border-color: #FFB800 !important;">Get Free Audit <i class="bi bi-arrow-right ms-1"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content Sections Reusing Global CSS -->
<section class="section-padding bg-white border-top border-bottom border-dark border-3">
    <div class="container max-w-1200">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-5 fw-900 mb-4">Precision Targeting & <span class="text-accent-dynamic" style="color: #FFB800 !important;">Audience Hijacking</span></h2>
                <p class="fs-5 text-muted">We don't just "show ads"—we strategically position your brand in front of people who are already searching for your solutions. By combining deep keyword intent with behavioral triggers, we ensure your ad spend is laser-focused on conversion.</p>
                <ul class="list-unstyled mt-4 d-grid gap-3">
                    <li class="d-flex align-items-center gap-3"><i class="bi bi-check2-circle text-accent-dynamic fs-4" style="color: #FFB800 !important;"></i> <span class="fw-bold">Google Search Dominance</span></li>
                    <li class="d-flex align-items-center gap-3"><i class="bi bi-check2-circle text-accent-dynamic fs-4" style="color: #FFB800 !important;"></i> <span class="fw-bold">Meta Conversion Funnels</span></li>
                    <li class="d-flex align-items-center gap-3"><i class="bi bi-check2-circle text-accent-dynamic fs-4" style="color: #FFB800 !important;"></i> <span class="fw-bold">Dynamic Remarketing Chains</span></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 shadow-punchy-sm">
                    <img src="https://images.unsplash.com/photo-1551288049-bbbda5366392?auto=format&fit=crop&w=800&q=80" alt="High-Performance Google Ads and Meta Ads Analytics" title="Crea8ve Cool — ROI-Driven Performance Marketing" class="img-fluid rounded-4">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Deck -->
<section id="packages" class="section-padding bg-light">
    <div class="container max-w-1200">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold letter-spacing-2 text-accent-dynamic" style="font-size: 13px; color: #9E6F00 !important;">Dynamic Growth Tiers</span>
            <h2 class="display-6 fw-900 mt-2">Performance Marketing Packages</h2>
            <p class="text-muted max-w-600 mx-auto mt-2">Clear, performance-driven packages structured to align with your monthly ad spend objectives. Professional execution with no hidden administration retainers.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($service['packages'] as $pkg): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="p-4 bg-white border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm position-relative overflow-hidden <?= $pkg['recommended'] ? 'border-primary' : '' ?>" style="<?= $pkg['recommended'] ? 'transform: scale(1.03); border-color: var(--page-accent) !important;' : '' ?>">
                        <?php if ($pkg['recommended']): ?>
                            <div class="position-absolute top-0 end-0 bg-primary text-white px-3 py-1 fw-bold small rounded-start-pill border-bottom border-start border-dark border-2" style="background: var(--page-accent) !important; color: #000 !important;">RECOMMENDED</div>
                        <?php endif; ?>
                        
                        <div class="mb-4">
                            <span class="text-muted text-uppercase fw-bold d-block small mb-1"><?= htmlspecialchars($pkg['tagline']) ?></span>
                            <h3 class="fw-900 mb-2 fs-3 text-dark"><?= htmlspecialchars($pkg['name']) ?></h3>
                            <p class="small text-muted mb-3 min-h-50"><?= htmlspecialchars($pkg['desc']) ?></p>
                            
                            <div class="d-flex align-items-baseline gap-1 mt-2">
                                <span class="fs-4 fw-bold">₹</span>
                                <span class="display-6 fw-900"><?= htmlspecialchars($pkg['price']) ?></span>
                                <span class="text-muted small">/ month</span>
                            </div>
                            <div class="text-success small fw-bold mt-1">Save <?= htmlspecialchars($pkg['savings']) ?>% (Original: ₹<?= htmlspecialchars($pkg['original_price']) ?>)</div>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 flex-grow-1 border-top pt-3">
                            <?php foreach ($pkg['features'] as $feat): ?>
                                <li class="d-flex align-items-center gap-2">
                                    <i class="bi bi-patch-check-fill text-accent-dynamic" style="color: #FFB800 !important;"></i>
                                    <span class="small fw-semibold"><?= htmlspecialchars($feat) ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="#leads-form" class="btn <?= $pkg['recommended'] ? 'btn-punchy' : 'btn-outline-dark-punchy' ?> w-100 mt-auto" style="<?= $pkg['recommended'] ? 'background: #FFB800 !important; color: #000 !important; border-color: #FFB800 !important;' : '' ?>" title="Select performance package">Select Package</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="section-padding bg-white border-top border-dark border-3">
    <div class="container max-w-900">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold letter-spacing-2 text-accent-dynamic" style="font-size: 13px; color: #9E6F00 !important;">FAQ Suite</span>
            <h2 class="display-6 fw-900 mt-2">Frequently Asked Questions</h2>
        </div>

        <div class="accordion accordion-custom" id="faqAccordion">
            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        Do your packages include our direct advertising budget?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        No. The ad budget is paid directly to Google Ads or Meta Ads platforms from your business payment card. Our package pricing covers professional campaign setup, continuous bid monitoring, copywriting, A/B landing page testing, and real-time dashboard tracking.
                    </div>
                </div>
            </div>

            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        How quickly will we start generating sales leads?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        Paid campaigns start directing targeted customer traffic to your platform within 24 to 48 hours of launch. While sales conversions improve as our pixel analytics optimize target groups, initial conversion leads typically register in the first week.
                    </div>
                </div>
            </div>

            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Will you write the ad copy and design the graphics?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        Absolutely. We maintain a complete high-fidelity creative team. We handle the custom copywriting, marketing visuals, and short video reels assets needed to drive clicks, maintaining full brand aesthetic alignment throughout.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/components/cta.php'; ?>
