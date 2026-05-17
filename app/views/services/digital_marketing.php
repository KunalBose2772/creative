<?php 
// Hardcoded Service Data for Digital Marketing & Brand Strategy
$serviceSlug = 'digital-marketing';
$accentColor = '#28C840'; // High-Energy Growth Green
$service = [
    'title' => 'Digital Marketing & Social Media Strategy',
    'meta_title' => 'Digital Marketing Strategy & Social Media Growth India | Crea8ve Cool',
    'meta_description' => 'Comprehensive digital marketing and brand strategy services in India. We help businesses scale their online presence through social media and content marketing.',
    'desc' => 'We are a digital marketing strategy agency in India. We build integrated marketing ecosystems that combine storytelling and data-driven growth to scale your brand.',
    'color' => '#28C840',
    'features' => [
        'Integrated Brand Strategy',
        'Viral Social Media Distribution',
        'Authority Content Production',
        'Influencer Partnership Ops',
        'Omnichannel Brand Sync',
        'Market Perception Analysis'
    ],
    'packages' => [
        [
            'name' => 'Essential',
            'tagline' => 'Brand Foundation',
            'desc' => 'Perfect for startups looking to establish a professional digital presence.',
            'price' => '24,990',
            'original_price' => '39,990',
            'savings' => '37',
            'features' => ['Core Brand Messaging', 'Social Media Setup (3 Channels)', '15 Curated Content Posts', 'Basic Community Mgmt', 'Monthly Strategy Review', 'Competitor Awareness Audit', 'Standard Creative Designs'],
            'color' => '#6A5AE0',
            'recommended' => false
        ],
        [
            'name' => 'Growth',
            'tagline' => 'Market Accelerator',
            'desc' => 'Scale your reach and build a loyal community with aggressive content distribution.',
            'price' => '49,990',
            'original_price' => '74,990',
            'savings' => '33',
            'features' => ['Strategic Content Pillars', 'Reels & Video Editing', 'Active Community Engagement', 'Influencer Outreach Ops', 'Bi-Weekly Growth Audits', 'Custom Brand Visual Assets', 'Paid Boost Integration', 'Real-time Growth Tracker'],
            'color' => '#28C840',
            'recommended' => true
        ],
        [
            'name' => 'Dominance',
            'tagline' => 'Industry Leader',
            'desc' => 'Total industry authority with premium production and global brand scaling.',
            'price' => '99,990',
            'original_price' => '1,49,990',
            'savings' => '33',
            'features' => ['Full Ecosystem Strategy', 'Cinematic Brand Films', 'High-Tier Influencer Collabs', 'PR & Media Placement', 'Dedicated Growth Squad', 'Weekly Performance Sync', 'Global Market Expansion', 'Custom Analytics Hub'],
            'color' => '#FF5E36',
            'recommended' => false
        ]
    ]
];

// Support for dynamic location
if (isset($data['location'])) {
    $loc = $data['location'];
    $service['title'] = "Digital Marketing & Strategy Agency in " . $loc['name'];
    $service['desc'] = "Scaling brand authority and community growth in " . $loc['name'] . " with high-fidelity content and strategic digital distribution.";
    $service['meta_title'] = "Digital Marketing Agency in " . $loc['name'] . " | Crea8ve Cool";
    $service['meta_description'] = "Looking for top digital marketing experts, brand strategists, or social media agencies in " . $loc['name'] . "? We build high-growth digital ecosystems.";
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
        <div class="blob-1" style="background: rgba(40, 200, 64, 0.25);"></div>
        <div class="blob-2" style="background: rgba(0, 210, 255, 0.15);"></div>
        <div class="hero-grid-overlay"></div>
    </div>
    
    <div class="container mt-5 pt-3 max-w-1300">
        <div class="row g-4 bento-grid mb-5">
            <div class="col-lg-8" data-aos="zoom-in">
                <div class="bento-card main-info-card h-100 p-4 p-lg-5 d-flex flex-column justify-content-center">
                    <div class="hero-badge mb-3 align-self-start" style="background: rgba(40, 200, 64, 0.15); color: #127A23;">
                        <span class="badge-dot" style="background: #127A23;"></span> Strategy Hub
                    </div>
                    <h1 class="display-5 fw-900 text-dark mb-3">
                        <span class="gradient-text-dynamic" style="background: linear-gradient(135deg, #28C840 0%, #00D2FF 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?= htmlspecialchars($service['title']) ?></span> <br>
                        Build for Success.
                    </h1>
                    <p class="hero-subtext fs-6 text-dark opacity-75 mb-4 max-w-600">
                        <?= htmlspecialchars($service['desc']) ?>
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-2">
                        <a href="#leads-form" class="btn btn-punchy" style="background: #28C840 !important; color: #fff !important; border-color: #28C840 !important;" title="Start Strategy">Start Strategy <i class="bi bi-chevron-right ms-2"></i></a>
                        <a href="#packages" class="btn btn-outline-dark-punchy" title="Review our Digital Growth Success Packages">View Success Packages</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100" id="leads-form">
                <div class="bento-card h-100 p-4 bg-dark text-white d-flex flex-column justify-content-center position-relative overflow-hidden hero-form-box">
                    <div class="position-absolute top-0 end-0 rounded-circle hero-form-glow" style="background: radial-gradient(circle, rgba(40, 200, 64, 0.4) 0%, transparent 70%);"></div>
                    <div class="form-header mb-3 position-relative z-1 mt-3">
                        <div class="badge bg-white text-dark rounded-pill px-2 py-1 mb-2 fw-bold d-inline-flex align-items-center gap-2 border border-2 border-dark">
                            <div class="status-dot" style="background: #28C840;"></div>
                            Strategy Lab
                        </div>
                        <h3 class="fw-900 mb-1 fs-4 text-white">Join the Elite</h3>
                        <p class="opacity-75 mb-0 small text-white">Consult with our growth engineers today.</p>
                    </div>
                    <form action="<?= BASE_URL ?>contact" method="POST" class="hero-form d-flex flex-column gap-2 position-relative z-1">
                        <input type="hidden" name="source" value="Digital Marketing Strategy Inquiry">
                        <input type="text" name="name" class="form-control hero-form-input" placeholder="Your Name" required>
                        <input type="email" name="email" class="form-control hero-form-input" placeholder="Work Email" required>
                        <input type="tel" name="phone" class="form-control hero-form-input" placeholder="Phone Number" required>
                        <button type="submit" class="btn btn-punchy w-100 mt-1" style="background: #28C840 !important; color: #fff !important; border-color: #28C840 !important;">Request Strategy Audit <i class="bi bi-arrow-right ms-1"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="section-padding bg-white border-top border-bottom border-dark border-3">
    <div class="container max-w-1200">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 shadow-punchy-sm">
                    <img src="https://images.unsplash.com/photo-1557838923-2985c318be48?auto=format&fit=crop&w=800&q=80" alt="Full-Scale Digital Marketing Strategy and Brand Growth" title="Crea8ve Cool — Dominating Social Media & Digital Channels" class="img-fluid rounded-4">
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <h2 class="display-5 fw-900 mb-4">The Science of <span class="text-accent-dynamic" style="color: #28C840 !important;">Digital Storytelling</span></h2>
                <p class="fs-5 text-muted">Marketing is no longer about shouting at people—it's about becoming the answer they're searching for. We create content systems that establish your brand as an authority, building trust and community with every interaction.</p>
                <div class="row g-3 mt-4">
                    <div class="col-6">
                        <div class="p-3 border border-dark border-1 rounded-4 bg-light">
                            <h5 class="fw-900 mb-2">Omnichannel</h5>
                            <p class="small text-muted mb-0">Consistent brand voice across all platforms.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border border-dark border-1 rounded-4 bg-light">
                            <h5 class="fw-900 mb-2">Data-Driven</h5>
                            <p class="small text-muted mb-0">Decisions backed by rigorous market testing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Deck -->
<section id="packages" class="section-padding bg-light">
    <div class="container max-w-1200">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold letter-spacing-2 text-accent-dynamic" style="font-size: 13px; color: #127A23 !important;">Structured Strategy</span>
            <h2 class="display-6 fw-900 mt-2">Digital Marketing & Social Packages</h2>
            <p class="text-muted max-w-600 mx-auto mt-2">High-impact brand coordination, viral reels preparation, and structured content scheduling. Built for businesses ready to dominate their landscape.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($service['packages'] as $pkg): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="p-4 bg-white border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm position-relative overflow-hidden <?= $pkg['recommended'] ? 'border-primary' : '' ?>" style="<?= $pkg['recommended'] ? 'transform: scale(1.03); border-color: var(--page-accent) !important;' : '' ?>">
                        <?php if ($pkg['recommended']): ?>
                            <div class="position-absolute top-0 end-0 bg-primary text-white px-3 py-1 fw-bold small rounded-start-pill border-bottom border-start border-dark border-2" style="background: var(--page-accent) !important; color: #fff !important;">RECOMMENDED</div>
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
                                    <i class="bi bi-patch-check-fill text-accent-dynamic" style="color: #28C840 !important;"></i>
                                    <span class="small fw-semibold"><?= htmlspecialchars($feat) ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="#leads-form" class="btn <?= $pkg['recommended'] ? 'btn-punchy' : 'btn-outline-dark-punchy' ?> w-100 mt-auto" style="<?= $pkg['recommended'] ? 'background: #28C840 !important; color: #fff !important; border-color: #28C840 !important;' : '' ?>" title="Select strategy package">Select Package</a>
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
            <span class="text-uppercase fw-bold letter-spacing-2 text-accent-dynamic" style="font-size: 13px; color: #127A23 !important;">FAQ Suite</span>
            <h2 class="display-6 fw-900 mt-2">Frequently Asked Questions</h2>
        </div>

        <div class="accordion accordion-custom" id="faqAccordion">
            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        Which social media channels are best suited for our brand?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        During our initial brand positioning audit, we analyze where your target audience consumes media. For B2B businesses, we prioritize LinkedIn and Twitter/X. For consumer brands, we focus heavily on Instagram, YouTube, and Meta platforms to drive viral video content.
                    </div>
                </div>
            </div>

            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        How do we measure the success of our brand campaign?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        We tracking clear performance metrics: qualified lead form conversions, direct organic search volume, social media engagement ratios, community subscriber growth, and overall website click acquisition rates.
                    </div>
                </div>
            </div>

            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Do you manage collaborations with industry influencers?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        Yes. Our Dominance tier covers complete end-to-end influencer outreach operations. We identify contextually relevant creators, negotiate direct sponsorship deals, draft compliance guidelines, and manage visual distribution reporting.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/components/cta.php'; ?>
