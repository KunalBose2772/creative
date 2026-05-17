<?php 
$serviceSlug = 'ecommerce';
$accentColor = '#FF007A'; // Bold Magenta
$service = [
    'title' => 'E-Commerce Marketplaces & Retail Systems',
    'meta_title' => 'Custom E-Commerce Development & POS Software | Crea8ve Cool',
    'meta_description' => 'Unleash your digital sales potential. We develop custom, high-speed E-Commerce marketplaces, retail POS systems, and premium LMS portals in India.',
    'desc' => 'Standard template builders are slow and limit your conversion rates. We engineer custom, lightning-fast E-Commerce platforms and integrated retail POS networks designed to load under 1.5 seconds, handle peak traffic, and drive maximum sales.',
    'color' => '#FF007A',
    'features' => [
        'Custom High-Conversion Checkout Funnels',
        'Multi-Store Retail Inventory Sync',
        'Omnichannel Point-of-Sale (POS) Integration',
        'Interactive LMS Learning Portals',
        'High-Performance Database Architecture',
        'Seamless Global Payment Gateway Bridges'
    ],
    'packages' => [
        [
            'name' => 'Single Store',
            'tagline' => 'Brand E-Store Stack',
            'desc' => 'A custom, lightning-fast online storefront built for maximum product conversions.',
            'price' => '69,990',
            'original_price' => '99,990',
            'savings' => '30',
            'features' => ['Custom High-Speed Product Grid', 'Optimized Single-Page Checkout Funnel', 'Secure Razorpay/Stripe Gateway Setup', 'Comprehensive Product Inventory Dashboard', 'Automated Sales Email Notifications', 'Monthly SLA Security Patch Support', 'Supports Upto 500 Product SKU Layers', '21-Day Complete System Launch'],
            'color' => '#6A5AE0',
            'recommended' => false
        ],
        [
            'name' => 'Omnichannel Core',
            'tagline' => 'Integrated Retail Stack',
            'desc' => 'Connect your brick-and-mortar storefronts with your digital sales portal.',
            'price' => '1,49,990',
            'original_price' => '2,29,990',
            'savings' => '35',
            'features' => ['All Brand E-Store Capabilities Plus', 'Retail Point-Of-Sale (POS) Interface', 'Real-Time Multi-Location Inventory Sync', 'Staff Shift & Cash Flow Analytics Dashboard', 'Integrated Customer Retention Coupons', 'Bi-Weekly SLA Review Support', 'Supports Infinite Product SKU Layers', '40-Day Custom Pipeline Delivery'],
            'color' => '#FF007A',
            'recommended' => true
        ],
        [
            'name' => 'Marketplace Alpha',
            'tagline' => 'Multi-Vendor Ecosystem',
            'desc' => 'A comprehensive multi-vendor marketplace featuring independent vendor boards and automated commissions.',
            'price' => '2,89,990',
            'original_price' => '3,99,990',
            'savings' => '27',
            'features' => ['All Omnichannel Capabilities Plus', 'Independent Vendor Portal Dashboards', 'Automated Commission Splitting Engine', 'Granular Vendor Access Roles Control', 'Dedicated LMS/Course Hosting Portal', '24/7 Priority SLA Engineer Support', 'Full Global Multi-Currency Support', 'Ongoing Custom Feature Upgrades Hub'],
            'color' => '#FF5E36',
            'recommended' => false
        ]
    ]
];

// Support for dynamic location
if (isset($data['location'])) {
    $loc = $data['location'];
    $service['title'] = "Custom E-Commerce & Retail Systems Agency in " . $loc['name'];
    $service['desc'] = "Engineering customized Shopify alternatives, high-speed multi-vendor marketplaces, and secure retail POS software for growing trade leaders in " . $loc['name'] . ".";
    $service['meta_title'] = "Custom E-Commerce & POS Software Development in " . $loc['name'] . " | Crea8ve Cool";
    $service['meta_description'] = "Looking for customized E-Commerce web development, Multi-vendor marketplaces, or POS sales systems in " . $loc['name'] . "? Contact us today for a free expert tech consultation.";
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
        <div class="blob-1" style="background: rgba(255, 0, 122, 0.25);"></div>
        <div class="blob-2" style="background: rgba(106, 90, 224, 0.15);"></div>
        <div class="hero-grid-overlay"></div>
    </div>
    
    <div class="container mt-5 pt-3 max-w-1300">
        <div class="row g-4 bento-grid mb-5">
            <div class="col-lg-8" data-aos="zoom-in">
                <div class="bento-card main-info-card h-100 p-4 p-lg-5 d-flex flex-column justify-content-center">
                    <div class="hero-badge mb-3 align-self-start" style="background: rgba(255, 0, 122, 0.15); color: #FF007A;">
                        <span class="badge-dot" style="background: #FF007A;"></span> Sales Accelerator
                    </div>
                    <h1 class="display-5 fw-900 text-dark mb-3">
                        <span class="gradient-text-dynamic" style="background: linear-gradient(135deg, #FF007A 0%, #FF5E36 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?= htmlspecialchars($service['title']) ?></span> <br>
                        Engineered to Sell.
                    </h1>
                    <p class="hero-subtext fs-6 text-dark opacity-75 mb-4 max-w-600">
                        <?= htmlspecialchars($service['desc']) ?>
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-2">
                        <a href="#leads-form" class="btn btn-punchy" title="Navigate to our E-Commerce Inquiry Form">Scale My Sales <i class="bi bi-chevron-right ms-2"></i></a>
                        <a href="#packages" class="btn btn-outline-dark-punchy" title="Review our Custom E-Commerce & Retail Packages">View Packages</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100" id="leads-form">
                <div class="bento-card h-100 p-4 bg-dark text-white d-flex flex-column justify-content-center position-relative overflow-hidden hero-form-box">
                    <div class="position-absolute top-0 end-0 rounded-circle hero-form-glow" style="background: radial-gradient(circle, rgba(255, 0, 122, 0.4) 0%, transparent 70%);"></div>
                    <div class="form-header mb-3 position-relative z-1 mt-3">
                        <div class="badge bg-white text-dark rounded-pill px-2 py-1 mb-2 fw-bold d-inline-flex align-items-center gap-2 border border-2 border-dark">
                            <div class="status-dot" style="background: #FF007A;"></div>
                            Commerce Engine
                        </div>
                        <h3 class="fw-900 mb-1 fs-4 text-white">Scale Today</h3>
                        <p class="opacity-75 mb-0 small text-white">Consult with our Lead Commerce Engineer.</p>
                    </div>
                    <form action="<?= BASE_URL ?>contact" method="POST" class="hero-form d-flex flex-column gap-2 position-relative z-1">
                        <input type="hidden" name="source" value="E-Commerce & Retail Systems Inquiry">
                        <input type="text" name="name" class="form-control hero-form-input" placeholder="Your Name" required>
                        <input type="email" name="email" class="form-control hero-form-input" placeholder="Work Email" required>
                        <input type="tel" name="phone" class="form-control hero-form-input" placeholder="Phone Number" required>
                        <button type="submit" class="btn btn-punchy w-100 mt-1">Scale Sales <i class="bi bi-arrow-right ms-1"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consolidated Service Details Section with Dedicated Boxes & Links -->
<section class="section-padding bg-white border-top border-bottom border-dark border-3">
    <div class="container max-w-1200">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold letter-spacing-2 text-accent-dynamic" style="font-size: 13px;">E-Commerce Architecture</span>
            <h2 class="display-6 fw-900 mt-2">Bespoke Commerce Capabilities</h2>
            <p class="text-muted max-w-600 mx-auto mt-2">Explore the individual building blocks of our customized transactional ecosystems. Engineered for maximum speed and scale.</p>
        </div>

        <div class="row g-4">
            <!-- E-Commerce Storefronts Box -->
            <div class="col-lg-4" data-aos="fade-up">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm hover-up">
                    <div class="icon-box mb-4 d-inline-flex align-items-center justify-content-center rounded-4" style="width: 60px; height: 60px; background: rgba(255, 0, 122, 0.1); border: 2px solid var(--text-dark); color: #FF007A;">
                        <i class="bi bi-cart4 fs-3"></i>
                    </div>
                    <h3 class="fw-900 mb-3 fs-4 text-dark">E-Commerce Marketplaces</h3>
                    <p class="text-muted flex-grow-1">Establish lightning-fast single storefronts or complex multi-vendor marketplaces with custom product attributes, filters, and dynamic search.</p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Instant Page Load <1.2s</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Independent Vendor Control</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Multi-Gateway Splits APIs</span></li>
                    </ul>
                    <a href="#leads-form" class="btn btn-dark w-100 rounded-pill btn-sm" title="Consult for Custom E-Commerce Marketplaces">Explore Marketplaces</a>
                </div>
            </div>

            <!-- Retail POS Systems Box -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm hover-up">
                    <div class="icon-box mb-4 d-inline-flex align-items-center justify-content-center rounded-4" style="width: 60px; height: 60px; background: rgba(106, 90, 224, 0.1); border: 2px solid var(--text-dark); color: #6A5AE0;">
                        <i class="bi bi-shop fs-3"></i>
                    </div>
                    <h3 class="fw-900 mb-3 fs-4 text-dark">Retail Point-of-Sale (POS)</h3>
                    <p class="text-muted flex-grow-1">Keep your retail storefronts and digital warehouses in perfect sync with native POS interfaces, cashier shift trackers, and offline capability.</p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Barcode Scanning Integration</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Offline Cashier Transactions</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Real-Time Central Inventory</span></li>
                    </ul>
                    <a href="#leads-form" class="btn btn-dark w-100 rounded-pill btn-sm" title="Consult for Retail POS Systems">Explore Retail POS</a>
                </div>
            </div>

            <!-- LMS Portals Box -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm hover-up">
                    <div class="icon-box mb-4 d-inline-flex align-items-center justify-content-center rounded-4" style="width: 60px; height: 60px; background: rgba(255, 94, 54, 0.1); border: 2px solid var(--text-dark); color: #FF5E36;">
                        <i class="bi bi-journal-check fs-3"></i>
                    </div>
                    <h3 class="fw-900 mb-3 fs-4 text-dark">LMS Portals & Academies</h3>
                    <p class="text-muted flex-grow-1">Design premium learning dashboards featuring multi-tier course access, automated certificate generations, quiz platforms, and video integrations.</p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Automated Certificate PDF</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Interactive Video Players</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Secure Course Access Blocks</span></li>
                    </ul>
                    <a href="#leads-form" class="btn btn-dark w-100 rounded-pill btn-sm" title="Consult for Custom LMS Portals">Explore LMS Portals</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Deck -->
<section id="packages" class="section-padding bg-light">
    <div class="container max-w-1200">
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold letter-spacing-2 text-accent-dynamic" style="font-size: 13px;">Transparent Pricing</span>
            <h2 class="display-6 fw-900 mt-2">Custom Commerce Packages</h2>
            <p class="text-muted max-w-600 mx-auto mt-2">Curated packaging options tailored to your transactional scale. No transaction commissions or recurring server licensing overheads.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($service['packages'] as $pkg): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="p-4 bg-white border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm position-relative overflow-hidden <?= $pkg['recommended'] ? 'border-primary' : '' ?>" style="<?= $pkg['recommended'] ? 'transform: scale(1.03); border-color: var(--page-accent) !important;' : '' ?>">
                        <?php if ($pkg['recommended']): ?>
                            <div class="position-absolute top-0 end-0 bg-primary text-white px-3 py-1 fw-bold small rounded-start-pill border-bottom border-start border-dark border-2" style="background: var(--page-accent) !important;">RECOMMENDED</div>
                        <?php endif; ?>
                        
                        <div class="mb-4">
                            <span class="text-muted text-uppercase fw-bold d-block small mb-1"><?= htmlspecialchars($pkg['tagline']) ?></span>
                            <h3 class="fw-900 mb-2 fs-3 text-dark"><?= htmlspecialchars($pkg['name']) ?></h3>
                            <p class="small text-muted mb-3 min-h-50"><?= htmlspecialchars($pkg['desc']) ?></p>
                            
                            <div class="d-flex align-items-baseline gap-1 mt-2">
                                <span class="fs-4 fw-bold">₹</span>
                                <span class="display-6 fw-900"><?= htmlspecialchars($pkg['price']) ?></span>
                                <span class="text-muted small">/ complete stack</span>
                            </div>
                            <div class="text-success small fw-bold mt-1">Save <?= htmlspecialchars($pkg['savings']) ?>% (Original: ₹<?= htmlspecialchars($pkg['original_price']) ?>)</div>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 flex-grow-1 border-top pt-3">
                            <?php foreach ($pkg['features'] as $feat): ?>
                                <li class="d-flex align-items-center gap-2">
                                    <i class="bi bi-patch-check-fill text-accent-dynamic"></i>
                                    <span class="small fw-semibold"><?= htmlspecialchars($feat) ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="#leads-form" class="btn <?= $pkg['recommended'] ? 'btn-punchy' : 'btn-outline-dark-punchy' ?> w-100 mt-auto" title="Select custom packages">Select Package</a>
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
            <span class="text-uppercase fw-bold letter-spacing-2 text-accent-dynamic" style="font-size: 13px;">FAQ Suite</span>
            <h2 class="display-6 fw-900 mt-2">Frequently Asked Questions</h2>
        </div>

        <div class="accordion accordion-custom" id="faqAccordion">
            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        Do you charge commissions on product sales?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        No. We believe in absolute commerce transparency. Standard subscription platforms (like Shopify) take a cut of your revenue through platform commissions and payment processing fees. Our customized commerce platforms charge a single, one-time development fee, meaning 100% of your sales margins remain in your pocket.
                    </div>
                </div>
            </div>

            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        How does the real-time POS stock sync work?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        We configure automated database webhook triggers. Whenever a customer buys a product in your physical retail store via the POS interface, our database automatically updates the master inventory levels in real-time, instantly adjusting availability on your web storefront.
                    </div>
                </div>
            </div>

            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Can the LMS platform support large concurrent users taking courses?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        Absolutely. We optimize our video servers using premium CDN caching protocols and implement advanced relational database architectures that efficiently distribute bandwidth, ensuring hundreds of students can watch video courses concurrently without lag.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/components/cta.php'; ?>
