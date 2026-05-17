<?php 
$serviceSlug = 'enterprise-erp';
$accentColor = '#6A5AE0'; // Deep Tech Royal Purple
$service = [
    'title' => 'Enterprise ERP & Customer CRM Solutions',
    'meta_title' => 'Custom ERP & CRM Software Development India | Crea8ve Cool',
    'meta_description' => 'Scale your operations with premium custom Enterprise ERP systems and Customer CRM platforms built with React and PHP 8.4. Request a free system demo today.',
    'desc' => 'Disjointed spreadsheets and fragmented software kill productivity. We engineer tailored, high-performance Enterprise ERP and Customer CRM systems that unify your operations, sales pipelines, and customer intelligence under a single dashboard.',
    'color' => '#6A5AE0',
    'features' => [
        'Custom Business Process Automation',
        'Advanced Customer Pipeline Analytics',
        'Automated HRMS & Payroll Modules',
        'Multi-Channel Inventory Tracking',
        'Secure Cloud API & SaaS Architecture',
        'Granular Role-Based Access Control'
    ],
    'packages' => [
        [
            'name' => 'CRM Core',
            'tagline' => 'Sales Intelligence Stack',
            'desc' => 'Consolidate your customer interactions, lead pipelines, and sales team workflows.',
            'price' => '89,990',
            'original_price' => '1,39,990',
            'savings' => '35',
            'features' => ['Custom Contact Management', 'Lead Pipeline Kanban Boards', 'Basic Email Marketing Automation', 'Standard User Role Permissioning', 'Interactive Sales Activity Logs', 'Monthly Technical Support SLA', 'Excludes Custom API Integrations', '21-Day Complete System Launch'],
            'color' => '#6A5AE0',
            'recommended' => false
        ],
        [
            'name' => 'Enterprise Unified',
            'tagline' => 'ERP & CRM Operations',
            'desc' => 'Unify sales pipelines with multi-tier inventory, supply chain, and unified invoicing systems.',
            'price' => '1,89,990',
            'original_price' => '2,99,990',
            'savings' => '36',
            'features' => ['All CRM Core Capabilities', 'Comprehensive Inventory Modules', 'Custom Vendor & Purchase Tracking', 'Automated Customer Billing Engine', 'Advanced Data Access Control Layers', 'Bi-Weekly SLA Review Support', 'Includes 3 Custom Core API Bridges', '45-Day Custom Pipeline Delivery'],
            'color' => '#FF007A',
            'recommended' => true
        ],
        [
            'name' => 'Custom Architect',
            'tagline' => 'Custom Corporate Suite',
            'desc' => 'Dedicated technical infrastructure with AI-driven resource projections and custom HRMS integrations.',
            'price' => '3,49,990',
            'original_price' => '4,99,990',
            'savings' => '30',
            'features' => ['All Unified Capabilities Plus', 'AI-Driven Demand Projection Systems', 'Fleshed Out HRMS & Payroll Suite', 'Infinite Scalable Cloud Frameworks', 'Full Intellectual Ownership Rights', '24/7 Priority SLA Engineer Support', 'Unlimited Custom Enterprise APIs', 'Ongoing Architecture Advisory Hub'],
            'color' => '#FF5E36',
            'recommended' => false
        ]
    ]
];

// Support for dynamic location
if (isset($data['location'])) {
    $loc = $data['location'];
    $service['title'] = "Enterprise ERP & CRM Software Agency in " . $loc['name'];
    $service['desc'] = "Engineering custom corporate dashboards, automated invoicing pipelines, and customer database integrations for growing mid-market leaders in " . $loc['name'] . ".";
    $service['meta_title'] = "Enterprise ERP & CRM Software Development in " . $loc['name'] . " | Crea8ve Cool";
    $service['meta_description'] = "Looking for custom corporate ERP systems or sales CRM software development in " . $loc['name'] . "? Get in touch with our lead architects for a free live demo.";
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
        <div class="blob-1" style="background: rgba(106, 90, 224, 0.25);"></div>
        <div class="blob-2" style="background: rgba(255, 0, 122, 0.15);"></div>
        <div class="hero-grid-overlay"></div>
    </div>
    
    <div class="container mt-5 pt-3 max-w-1300">
        <div class="row g-4 bento-grid mb-5">
            <div class="col-lg-8" data-aos="zoom-in">
                <div class="bento-card main-info-card h-100 p-4 p-lg-5 d-flex flex-column justify-content-center">
                    <div class="hero-badge mb-3 align-self-start" style="background: rgba(106, 90, 224, 0.15); color: #6A5AE0;">
                        <span class="badge-dot" style="background: #6A5AE0;"></span> Enterprise Ready
                    </div>
                    <h1 class="display-5 fw-900 text-dark mb-3">
                        <span class="gradient-text-dynamic" style="background: linear-gradient(135deg, #6A5AE0 0%, #FF007A 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?= htmlspecialchars($service['title']) ?></span> <br>
                        Engineered for High Scale.
                    </h1>
                    <p class="hero-subtext fs-6 text-dark opacity-75 mb-4 max-w-600">
                        <?= htmlspecialchars($service['desc']) ?>
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-2">
                        <a href="#leads-form" class="btn btn-punchy" title="Navigate to our Enterprise Systems Inquiry Form">Request System Demo <i class="bi bi-chevron-right ms-2"></i></a>
                        <a href="#packages" class="btn btn-outline-dark-punchy" title="Review our Custom ERP & CRM Packages">View Packages</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100" id="leads-form">
                <div class="bento-card h-100 p-4 bg-dark text-white d-flex flex-column justify-content-center position-relative overflow-hidden hero-form-box">
                    <div class="position-absolute top-0 end-0 rounded-circle hero-form-glow" style="background: radial-gradient(circle, rgba(106, 90, 224, 0.4) 0%, transparent 70%);"></div>
                    <div class="form-header mb-3 position-relative z-1 mt-3">
                        <div class="badge bg-white text-dark rounded-pill px-2 py-1 mb-2 fw-bold d-inline-flex align-items-center gap-2 border border-2 border-dark">
                            <div class="status-dot" style="background: #6A5AE0;"></div>
                            Live Demo Available
                        </div>
                        <h3 class="fw-900 mb-1 fs-4 text-white">Let's Connect</h3>
                        <p class="opacity-75 mb-0 small text-white">Consult with our Lead Systems Architect.</p>
                    </div>
                    <form action="<?= BASE_URL ?>contact" method="POST" class="hero-form d-flex flex-column gap-2 position-relative z-1">
                        <input type="hidden" name="source" value="ERP & CRM Systems Inquiry">
                        <input type="text" name="name" class="form-control hero-form-input" placeholder="Your Name" required>
                        <input type="email" name="email" class="form-control hero-form-input" placeholder="Work Email" required>
                        <input type="tel" name="phone" class="form-control hero-form-input" placeholder="Phone Number" required>
                        <button type="submit" class="btn btn-punchy w-100 mt-1">Request Demo <i class="bi bi-arrow-right ms-1"></i></button>
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
            <span class="text-uppercase fw-bold letter-spacing-2 text-accent-dynamic" style="font-size: 13px;">Systems Ecosystem</span>
            <h2 class="display-6 fw-900 mt-2">Unified Corporate Capabilities</h2>
            <p class="text-muted max-w-600 mx-auto mt-2">Explore the individual building blocks of our premium business systems suite. We build them to talk to each other seamlessly.</p>
        </div>

        <div class="row g-4">
            <!-- ERP Box -->
            <div class="col-lg-4" data-aos="fade-up">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm hover-up">
                    <div class="icon-box mb-4 d-inline-flex align-items-center justify-content-center rounded-4" style="width: 60px; height: 60px; background: rgba(106, 90, 224, 0.1); border: 2px solid var(--text-dark); color: #6A5AE0;">
                        <i class="bi bi-layers fs-3"></i>
                    </div>
                    <h3 class="fw-900 mb-3 fs-4 text-dark">Enterprise ERP Systems</h3>
                    <p class="text-muted flex-grow-1">Automate inventory control, multi-location supply chain trackers, double-entry invoicing engines, and real-time vendor pipelines securely.</p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Dynamic Stock Inventory</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Automated GST Invoicing</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Vendor Portal Bridges</span></li>
                    </ul>
                    <a href="#leads-form" class="btn btn-dark w-100 rounded-pill btn-sm" title="Consult for Custom ERP Solutions">Explore Custom ERP</a>
                </div>
            </div>

            <!-- CRM Box -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm hover-up">
                    <div class="icon-box mb-4 d-inline-flex align-items-center justify-content-center rounded-4" style="width: 60px; height: 60px; background: rgba(255, 0, 122, 0.1); border: 2px solid var(--text-dark); color: #FF007A;">
                        <i class="bi bi-people fs-3"></i>
                    </div>
                    <h3 class="fw-900 mb-3 fs-4 text-dark">Customer CRM Platforms</h3>
                    <p class="text-muted flex-grow-1">Provide your sales representatives with modern lead conversion trackers, drag-and-drop kanbans, contract templates, and activity logs.</p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Kanban Pipelines</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Activity Follow-ups</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Interactive Performance Charts</span></li>
                    </ul>
                    <a href="#leads-form" class="btn btn-dark w-100 rounded-pill btn-sm" title="Consult for Custom CRM Platforms">Explore Custom CRM</a>
                </div>
            </div>

            <!-- HRMS Box -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm hover-up">
                    <div class="icon-box mb-4 d-inline-flex align-items-center justify-content-center rounded-4" style="width: 60px; height: 60px; background: rgba(255, 94, 54, 0.1); border: 2px solid var(--text-dark); color: #FF5E36;">
                        <i class="bi bi-person-badge fs-3"></i>
                    </div>
                    <h3 class="fw-900 mb-3 fs-4 text-dark">HRMS & Workforce Tech</h3>
                    <p class="text-muted flex-grow-1">Manage employee profiles, leave request calendars, digital appraisal systems, biometric tracking API bridges, and payroll generators.</p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Payroll Calculations</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Appraisal Matrix Tables</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Secure Leave Workflows</span></li>
                    </ul>
                    <a href="#leads-form" class="btn btn-dark w-100 rounded-pill btn-sm" title="Consult for Custom HRMS Systems">Explore Custom HRMS</a>
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
            <h2 class="display-6 fw-900 mt-2">Custom System Packages</h2>
            <p class="text-muted max-w-600 mx-auto mt-2">Curated packaging options tailored to your organizational scale. No hidden fees or recurring per-user licenses.</p>
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
                        Do you charge monthly per-user licensing fees?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        No. We believe you should own your business systems fully. Unlike Salesforce or HubSpot, which charge steep per-user recurring monthly costs, our systems are built specifically for you, and we charge a one-time build cost. The entire code, infrastructure, and database are owned by you.
                    </div>
                </div>
            </div>

            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Can the custom ERP system integrate with our existing accounting tool?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        Yes. We build custom API integrations to connect with major global and domestic accounting, banking, payment, and inventory services (such as Tally, QuickBooks, Razorpay, or custom partner APIs).
                    </div>
                </div>
            </div>

            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How secure is the client data stored within the custom CRM?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        Data security is our top technical focus. We implement strict Role-Based Access Control (RBAC) layers, secure database encryption keys, SSL protocols, and automated secure database backup scripts on certified local or international hosting platforms.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/components/cta.php'; ?>
