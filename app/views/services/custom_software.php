<?php 
$serviceSlug = 'custom-software';
$accentColor = '#FF5E36'; // High-Contrast Coral Orange
$service = [
    'title' => 'Custom Software & Systems Engineering',
    'meta_title' => 'Custom Software Development & API Integration | Crea8ve Cool',
    'meta_description' => 'Unify and automate. We engineer specialized custom software, robust system architectures, and mobile progressive web apps (PWAs) in India.',
    'desc' => 'Off-the-shelf software forces your business to adapt to its limitations. We do the opposite. We design, engineer, and deploy high-performance custom business software, secure system architectures, and fast PWAs built to map your operational workflows precisely.',
    'color' => '#FF5E36',
    'features' => [
        'Tailored Corporate Workflow Automation',
        'Secure RESTful API & Systems Integration',
        'Mobile-First Progressive Web Apps (PWA)',
        'Scalable Relational Database Engineering',
        'Real-Time Operational Performance Dashboards',
        'Rigorous End-to-End System Security Audits'
    ],
    'packages' => [
        [
            'name' => 'Systems Bridge',
            'tagline' => 'API Architect Stack',
            'desc' => 'Establish secure, fast API bridges to sync data across your existing software tools.',
            'price' => '59,990',
            'original_price' => '89,990',
            'savings' => '33',
            'features' => ['Up to 3 Custom Secure API Bridges', 'Automated JSON/XML Data Converters', 'Comprehensive System Latency Audits', 'Standard API Token Rate Limiting', 'Interactive API Request Logs Portal', 'Monthly SLA Integration Support', 'Excludes Custom Database Builds', '14-Day Complete Integration Setup'],
            'color' => '#6A5AE0',
            'recommended' => false
        ],
        [
            'name' => 'Custom Core',
            'tagline' => 'Bespoke Software Stack',
            'desc' => 'A custom corporate software application built specifically to automate your core business processes.',
            'price' => '1,69,990',
            'original_price' => '2,59,990',
            'savings' => '34',
            'features' => ['All Systems Bridge Capabilities Plus', 'Custom Relational Database Architecture', 'Granular Role-Based Access Controls', 'Interactive Operational Performance Panels', 'Automated Daily Security Backups', 'Bi-Weekly SLA Review Support', 'Includes Complete PWA Mobile Setup', '40-Day Custom System Delivery'],
            'color' => '#FF5E36',
            'recommended' => true
        ],
        [
            'name' => 'Scale Alpha',
            'tagline' => 'High-Performance Enterprise',
            'desc' => 'High-scale, multi-server software networks featuring AI integrations and dedicated real-time maintenance.',
            'price' => '3,29,990',
            'original_price' => '4,79,990',
            'savings' => '31',
            'features' => ['All Custom Core Capabilities Plus', 'AI-Driven Process Automation Engines', 'Load-Balanced Multi-Server Cloud Deploy', 'Real-Time Server Resource Monitors', 'Full Intellectual IP Ownership Rights', '24/7 Priority SLA Engineer Support', 'Unlimited Custom Systems API Bridges', 'Ongoing Structural Architecture Advice'],
            'color' => '#FF007A',
            'recommended' => false
        ]
    ]
];

// Support for dynamic location
if (isset($data['location'])) {
    $loc = $data['location'];
    $service['title'] = "Custom Software & API Engineering Agency in " . $loc['name'];
    $service['desc'] = "Designing tailored dashboard tools, secure API system connections, and fast PWA applications for growing industry leaders in " . $loc['name'] . ".";
    $service['meta_title'] = "Custom Software & Systems Development in " . $loc['name'] . " | Crea8ve Cool";
    $service['meta_description'] = "Looking for custom software development, system architecture, or Progressive Web App (PWA) engineering in " . $loc['name'] . "? Contact us today for a free system demo.";
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
        <div class="blob-1" style="background: rgba(255, 94, 54, 0.25);"></div>
        <div class="blob-2" style="background: rgba(106, 90, 224, 0.15);"></div>
        <div class="hero-grid-overlay"></div>
    </div>
    
    <div class="container mt-5 pt-3 max-w-1300">
        <div class="row g-4 bento-grid mb-5">
            <div class="col-lg-8" data-aos="zoom-in">
                <div class="bento-card main-info-card h-100 p-4 p-lg-5 d-flex flex-column justify-content-center">
                    <div class="hero-badge mb-3 align-self-start" style="background: rgba(255, 94, 54, 0.15); color: #FF5E36;">
                        <span class="badge-dot" style="background: #FF5E36;"></span> Systems Architect
                    </div>
                    <h1 class="display-5 fw-900 text-dark mb-3">
                        <span class="gradient-text-dynamic" style="background: linear-gradient(135deg, #FF5E36 0%, #FF007A 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?= htmlspecialchars($service['title']) ?></span> <br>
                        Engineered to Automate.
                    </h1>
                    <p class="hero-subtext fs-6 text-dark opacity-75 mb-4 max-w-600">
                        <?= htmlspecialchars($service['desc']) ?>
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-2">
                        <a href="#leads-form" class="btn btn-punchy" title="Navigate to our Custom Software Inquiry Form">Request System Demo <i class="bi bi-chevron-right ms-2"></i></a>
                        <a href="#packages" class="btn btn-outline-dark-punchy" title="Review our Custom Software Packages">View Packages</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100" id="leads-form">
                <div class="bento-card h-100 p-4 bg-dark text-white d-flex flex-column justify-content-center position-relative overflow-hidden hero-form-box">
                    <div class="position-absolute top-0 end-0 rounded-circle hero-form-glow" style="background: radial-gradient(circle, rgba(255, 94, 54, 0.4) 0%, transparent 70%);"></div>
                    <div class="form-header mb-3 position-relative z-1 mt-3">
                        <div class="badge bg-white text-dark rounded-pill px-2 py-1 mb-2 fw-bold d-inline-flex align-items-center gap-2 border border-2 border-dark">
                            <div class="status-dot" style="background: #FF5E36;"></div>
                            Systems Live
                        </div>
                        <h3 class="fw-900 mb-1 fs-4 text-white">Automate Now</h3>
                        <p class="opacity-75 mb-0 small text-white">Consult with our Lead Systems Architect.</p>
                    </div>
                    <form action="<?= BASE_URL ?>contact" method="POST" class="hero-form d-flex flex-column gap-2 position-relative z-1">
                        <input type="hidden" name="source" value="Custom Software & Systems Inquiry">
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
            <span class="text-uppercase fw-bold letter-spacing-2 text-accent-dynamic" style="font-size: 13px;">Software Ecosystem</span>
            <h2 class="display-6 fw-900 mt-2">Bespoke Architectural Capabilities</h2>
            <p class="text-muted max-w-600 mx-auto mt-2">Explore the individual building blocks of our premium software development suite. We build them for speed, security, and absolute reliability.</p>
        </div>

        <div class="row g-4">
            <!-- Custom Software Box -->
            <div class="col-lg-4" data-aos="fade-up">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm hover-up">
                    <div class="icon-box mb-4 d-inline-flex align-items-center justify-content-center rounded-4" style="width: 60px; height: 60px; background: rgba(255, 94, 54, 0.1); border: 2px solid var(--text-dark); color: #FF5E36;">
                        <i class="bi bi-cpu fs-3"></i>
                    </div>
                    <h3 class="fw-900 mb-3 fs-4 text-dark">Specialized Custom Software</h3>
                    <p class="text-muted flex-grow-1">Design tailored internal CRM/ERP alternative modules, operations calendars, automated inventory dispatch logs, and dynamic reports.</p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Process Flow Mapping</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Interactive Data Logs</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Bespoke Operational Dashboards</span></li>
                    </ul>
                    <a href="#leads-form" class="btn btn-dark w-100 rounded-pill btn-sm" title="Consult for Custom Software Solutions">Explore Custom Software</a>
                </div>
            </div>

            <!-- Systems Architect Box -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm hover-up">
                    <div class="icon-box mb-4 d-inline-flex align-items-center justify-content-center rounded-4" style="width: 60px; height: 60px; background: rgba(106, 90, 224, 0.1); border: 2px solid var(--text-dark); color: #6A5AE0;">
                        <i class="bi bi-braces fs-3"></i>
                    </div>
                    <h3 class="fw-900 mb-3 fs-4 text-dark">System Architect & APIs</h3>
                    <p class="text-muted flex-grow-1">Engineer secure RESTful/GraphQL API networks, secure database structural cleanups, and automated sync jobs connecting legacy software.</p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">RESTful/GraphQL API Design</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Legacy Data Migration Pipelines</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">High-Performance Database Indexes</span></li>
                    </ul>
                    <a href="#leads-form" class="btn btn-dark w-100 rounded-pill btn-sm" title="Consult for System Architecture & APIs">Explore Systems & APIs</a>
                </div>
            </div>

            <!-- PWAs Box -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 bg-light border border-dark border-3 rounded-5 h-100 d-flex flex-column shadow-punchy-sm hover-up">
                    <div class="icon-box mb-4 d-inline-flex align-items-center justify-content-center rounded-4" style="width: 60px; height: 60px; background: rgba(255, 0, 122, 0.1); border: 2px solid var(--text-dark); color: #FF007A;">
                        <i class="bi bi-lightning fs-3"></i>
                    </div>
                    <h3 class="fw-900 mb-3 fs-4 text-dark">Progressive Web Apps (PWAs)</h3>
                    <p class="text-muted flex-grow-1">Deliver highly responsive, mobile-first PWAs that install directly on user home screens, function offline, and send instant push updates.</p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Home Screen Installable</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Offline Caching WebWorkers</span></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill text-accent-dynamic"></i> <span class="small fw-semibold">Instant Push Alert Triggers</span></li>
                    </ul>
                    <a href="#leads-form" class="btn btn-dark w-100 rounded-pill btn-sm" title="Consult for Custom PWAs">Explore PWAs</a>
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
            <h2 class="display-6 fw-900 mt-2">Custom Software Packages</h2>
            <p class="text-muted max-w-600 mx-auto mt-2">Curated packaging options tailored to your systems integration scale. One-time development fees, 100% intellectual IP ownership.</p>
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
                        Who owns the intellectual property and code of the custom software?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        You do. Unlike SaaS products that license their systems, 100% of the custom software source code, architectural structures, and server assets belong strictly to you upon final invoice settlement. We transfer full IP ownership sheets to your legal entity.
                    </div>
                </div>
            </div>

            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        What is a Progressive Web App (PWA) and how does it benefit us?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        A PWA is an advanced web application that utilizes service workers to deliver an app-like experience in the browser. Users can install it directly onto their mobile home screen without downloading from the App Store, it caches files to work offline, and supports immediate push notifications.
                    </div>
                </div>
            </div>

            <div class="accordion-item border border-dark border-3 rounded-5 overflow-hidden mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button p-4 fw-bold text-dark fs-5 bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Do you provide technical maintenance support after launching?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-4 bg-light border-top border-dark border-2 text-muted">
                        Yes. All our premium customized systems include 30 to 90 days of high-priority SLA server monitoring and code patch support. We also provide ongoing SLA maintenance retainers tailored to your system's load scale.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/components/cta.php'; ?>
