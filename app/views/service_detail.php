<?php 
// Service Data passed from controller
$service = $data['service'] ?? [];
$accentColor = $service['color'] ?? 'var(--primary-start)';
$serviceSlug = $data['service_slug'] ?? 'default';

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

if (isset($data['city'])) {
    $schemaData['areaServed'] = [
        "@type" => "City",
        "name" => $data['city']
    ];
}

// GAP Closure: LocalBusiness Schema Injection
$localBusinessSchema = [
    "@context" => "https://schema.org",
    "@type" => "ProfessionalService",
    "name" => "Crea8ve Cool",
    "image" => BASE_URL . "public/assets/images/logo.png",
    "@id" => BASE_URL,
    "url" => BASE_URL,
    "telephone" => "+91-9972988194",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "Tech Hub",
        "addressLocality" => "New Delhi",
        "postalCode" => "110001",
        "addressCountry" => "IN"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 28.6139,
        "longitude" => 77.2090
    ]
];

// GAP Closure: FAQ Schema Injection
$faqSchema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "What is the starting price for digital solution?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Our baseline strategy packages start at ₹5,999 for standard digital solutions."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Do you provide SEO with all solutions?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, all our engineering-grade packages include absolute SEO optimization and scalable architecture."
            ]
        ]
    ]
];

$combinedSchema = [$schemaData, $localBusinessSchema, $faqSchema];
?>

<script type="application/ld+json">
<?= json_encode($combinedSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<?php
$visualConfig = [
    'seo' => [
        'status' => 'RANK ENGINE: TRACKING ACTIVE',
        'metric_label' => 'Visibility Growth',
        'metric_value' => '+284%',
        'icon' => 'bi-graph-up',
        'animation' => 'seo-dashboard'
    ],
    'platform' => [
        'status' => 'UI ENGINE: RENDER CYCLE',
        'metric_label' => 'Lighthouse Score',
        'metric_value' => '99/100',
        'icon' => 'bi-laptop',
        'animation' => 'window-mockup'
    ],
    'marketing' => [
        'status' => 'AD_NETWORK: OPTIMIZING',
        'metric_label' => 'Current ROAS Goal',
        'metric_value' => '5.4x',
        'icon' => 'bi-bullseye',
        'animation' => 'roas-ring'
    ],
    'erp' => [
        'status' => 'SYS_SYNC: ALL FLUID',
        'metric_label' => 'Tasks Automated',
        'metric_value' => '9,430/hr',
        'icon' => 'bi-cpu',
        'animation' => 'erp-blocks'
    ],
    'saas' => [
        'status' => 'CLOUD: LOAD BALANCED',
        'metric_label' => 'Global Latency',
        'metric_value' => '12ms',
        'icon' => 'bi-hdd-network',
        'animation' => 'saas-server'
    ]
];

$vConfig = $visualConfig[$serviceSlug] ?? [
    'status' => 'SYSTEM_STATUS: ONLINE',
    'metric_label' => 'Operational Capacity',
    'metric_value' => 'MAX_SCALE',
    'icon' => 'bi-lightning-charge-fill',
    'animation' => 'energy-core'
];

// hexToRgb helper needed for CSS variable injection
if (!function_exists('hexToRgb')) {
    function hexToRgb($hex) {
        $hex = ltrim($hex, '#');
        if (strlen($hex) === 3) {
            $hex = $hex[0].$hex[0].$hex[1].$hex[1].$hex[2].$hex[2];
        }
        return hexdec(substr($hex,0,2)) . ', ' . hexdec(substr($hex,2,2)) . ', ' . hexdec(substr($hex,4,2));
    }
}
$accentRgb = (strpos($accentColor, '#') === 0) ? hexToRgb($accentColor) : '106, 90, 224';
?>

<!-- Dynamic CSS Variables (per-service accent color) — intentionally inline -->
<style>
:root {
    --page-accent: <?= $accentColor ?>;
    --page-accent-rgb: <?= $accentRgb ?>;
}
</style>

<!-- Stunning Bento Service Hero -->
<section class="service-bento-hero pt-5 pb-5 position-relative overflow-hidden" >
    <div class="hero-bg-elements">
        <div class="blob-1"></div>
        <div class="blob-2"></div>
        <div class="hero-grid-overlay"></div>
    </div>
    
    <div class="container mt-5 pt-3 max-w-1300">
        <div class="row g-4 bento-grid mb-5">
            
            <!-- Main Content Box -->
            <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                <div class="bento-card main-info-card h-100 p-4 p-lg-5 d-flex flex-column justify-content-center">
                    <div class="hero-badge mb-3 align-self-start">
                        <span class="badge-dot"></span> Service Insight
                    </div>
                    <h1 class="display-5 fw-900 text-dark mb-3">
                        <span class="gradient-text-dynamic"><?= htmlspecialchars($service['title']) ?></span> <br>
                        Build for Results.
                    </h1>
                    <p class="hero-subtext fs-6 text-dark opacity-75 mb-4 max-w-600">
                        <?= htmlspecialchars($service['description'] ?? $service['desc'] ?? '') ?>
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-2">
                        <a href="#leads-form" class="btn btn-punchy" title="Navigate to our Project Inquiry Form to get started">Start Project <i class="bi bi-chevron-right ms-2"></i></a>
                        <a href="#packages" class="btn btn-outline-dark-punchy" title="Review our Transparent Pricing and Service Packages">View Packages</a>
                    </div>
                </div>
            </div>

            <!-- Hero Lead Form Box -->
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200" id="leads-form">
                
                <div class="bento-card h-100 p-4 bg-dark text-white d-flex flex-column justify-content-center position-relative overflow-hidden hero-form-box">
                    <!-- Ambient Glow -->
                    <div class="position-absolute top-0 end-0 rounded-circle hero-form-glow"></div>
                    
                    <!-- Social Icons Corner -->
                    <div class="position-absolute top-0 end-0 p-3 z-2 form-social-icons d-flex gap-3">
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" title="Connect with Crea8ve Cool on LinkedIn"><i class="bi bi-linkedin fs-6"></i></a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" title="Follow Crea8ve Cool on Instagram"><i class="bi bi-instagram fs-6"></i></a>
                        <a href="https://wa.me/919972988194" target="_blank" rel="noopener noreferrer" title="Chat with Us on WhatsApp for Instant Support"><i class="bi bi-whatsapp fs-6"></i></a>
                    </div>

                    <div class="form-header mb-3 position-relative z-1 mt-3">
                        <div class="badge bg-white text-dark rounded-pill px-2 py-1 mb-2 fw-bold d-inline-flex align-items-center gap-2 border border-2 border-dark status-badge-custom">
                            <div class="status-dot status-dot-custom"></div>
                            Accepting Projects
                        </div>
                        <h3 class="fw-900 mb-1 fs-4 lh-sm text-white">Start Your Project</h3>
                        <p class="opacity-75 mb-0 small text-white">Tell us about your requirements and let's build something amazing.</p>
                    </div>
                    <?php if (isset($_GET['success'])): ?>
                        <div class="alert alert-success border-2 border-white rounded-3 mb-2 p-3 position-relative z-1" style="background: #28C840; color: white;">
                            <h5 class="fw-900 mb-1" style="font-size: 14px;">TRANSMISSION_SUCCESS</h5>
                            <p class="fw-bold mb-0" style="font-size: 12px;">Your details have been securely sent. We will contact you shortly!</p>
                        </div>
                    <?php endif; ?>
                    <form action="<?= BASE_URL ?>leads/submit" method="POST" class="hero-form d-flex flex-column gap-2 position-relative z-1">
                        <input type="hidden" name="source" value="<?= htmlspecialchars($service['title'] ?? 'Service') ?> Inquiry">
                        <div>
                            <input type="text" name="name" class="form-control hero-form-input shadow-none" placeholder="Your Name" required>
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control hero-form-input shadow-none" placeholder="Work Email" required>
                        </div>
                        <div>
                            <input type="tel" name="phone" class="form-control hero-form-input shadow-none" placeholder="Phone Number" required>
                        </div>
                        <button type="submit" class="btn btn-punchy w-100 mt-1 d-flex align-items-center justify-content-center gap-2 btn-punchy-custom">
                            Send Inquiry <i class="bi bi-arrow-right fs-6"></i>
                        </button>
                        <div class="text-center mt-1">
                            <span class="opacity-50 fw-bold text-white text-11px"><i class="bi bi-shield-lock-fill me-1 text-accent-dynamic"></i> 100% Secure & Confidential</span>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Trust / Social Proof Box -->
            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="300">
                <div class="bento-card trust-card-punchy p-4 d-flex align-items-center justify-content-between h-100">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar-stack d-flex">
                            <div class="av bg-dark text-white">A</div>
                            <div class="av bg-accent text-white ms-n2">K</div>
                            <div class="av bg-white text-dark ms-n2 border-dark border">C</div>
                        </div>
                        <div>
                            <div class="fw-900 text-dark mb-0">99% Retention</div>
                            <span class="small opacity-50">Client Success Rate</span>
                        </div>
                    </div>
                    <div class="badge-accent-v2">Top Tier</div>
                </div>
            </div>

            <!-- Technology / Tool Box -->
            <div class="col-lg-7" data-aos="zoom-in" data-aos-delay="400">
                <div class="bento-card marquee-card-v2 p-4 overflow-hidden d-flex align-items-center h-100">
                    <div class="marquee-content-v2 d-flex gap-5">
                        <span class="marquee-item">PREMIUM DESIGN • HIGH PERFORMANCE • SCALABLE OPS • </span>
                        <span class="marquee-item">PREMIUM DESIGN • HIGH PERFORMANCE • SCALABLE OPS • </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Pitching Section: High-Authority Offerings -->
<section id="pitching-intro" class="pitching-section section-padding-lg bg-white position-relative border-bottom border-dark border-opacity-5">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-10">
                <h2 class="display-4 fw-900 text-dark mb-4">Transform Your Business with a Leading <span class="text-accent-dynamic"><?= htmlspecialchars($service['title']) ?></span></h2>
                <p class="fs-5 text-muted max-w-800">Looking to take your brand to the next level? Our expert team creates visually stunning, high-performance digital assets that help you stand out and connect with your audience on a deeper level.</p>
            </div>
        </div>

        <?php if (!empty($service['features'])): ?>
        <div class="row g-4 mb-5">
            <div class="col-12" data-aos="fade-up">
                <h3 class="fw-900 text-dark mb-2"><i class="bi bi-cpu text-accent-dynamic me-2"></i> Specialized Core Capabilities</h3>
                <p class="text-muted small">Bespoke technical features engineered specifically for <?= htmlspecialchars($service['title']) ?>.</p>
            </div>
            <?php foreach ($service['features'] as $idx => $feat): ?>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $idx * 50 ?>">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-light transition-all shadow-punchy-sm" style="border-left: 5px solid var(--page-accent) !important;">
                    <h4 class="fw-900 mb-3 text-dark"><?= htmlspecialchars($feat['title']) ?></h4>
                    <p class="small text-muted mb-0"><?= htmlspecialchars($feat['desc']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <hr class="my-5 opacity-10">
        <?php endif; ?>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-light">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-people-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">User-Friendly Interfaces for Maximum Engagement</h3>
                    <p class="text-muted mb-4 fs-5">Your digital presence is your 24/7 salesperson. We design intuitive, <strong>User-Friendly Digital Assets</strong> that prioritize the <a href='https://www.nngroup.com/articles/definition-user-experience/' target='_blank' rel='noopener noreferrer' class='text-dark fw-bold text-decoration-underline' title="Read the formal definition of User Experience on NNGroup">visitor's journey</a>. By streamlining navigation and clarifying calls-to-action, we ensure your audience stays engaged. This is the core of our <a href='<?= BASE_URL ?>services/uiux' class='text-accent-dynamic fw-bold' title="Explore our High-Conversion UI/UX Strategy services">UI/UX Strategy</a>, ensuring your brand resonates with every click.</p>
                    <a href="#strategy" class="btn btn-dark-punchy rounded-pill px-4" title="Deep-dive into our Strategic Growth Framework">See Our Strategy <i class="bi bi-arrow-down ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-white shadow-punchy-sm">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-phone-vibrate fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Mobile-Optimized for the Modern Shopper</h3>
                    <p class="text-muted mb-4 fs-5">In today's mobile-first world, your site must be flawless on every screen. Our <strong>Mobile-Optimized Assets</strong> adapt perfectly to any device, providing a <a href='<?= BASE_URL ?>services/pwa' class='text-accent-dynamic fw-bold' title="Explore our Mobile-First Progressive Web App solutions">Native-App Experience</a>. We focus on touch-friendly interfaces and rapid mobile rendering, as outlined in <a href='https://developers.google.com/search/mobile-sites/mobile-first-indexing' target='_blank' rel='noopener noreferrer' class='text-dark fw-bold text-decoration-underline' title="Read Google's official Mobile-First Indexing Guide">Google's Mobile Indexing Guide</a>.</p>
                    <a href="#technology" class="btn btn-dark-punchy rounded-pill px-4" title="Review the Technical Specifications of our platforms">Tech Specs <i class="bi bi-cpu ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-white shadow-punchy-sm">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-palette-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Customized Designs for Unique Brands</h3>
                    <p class="text-muted mb-4 fs-5">Your business is unique, and your platform should be too. We avoid generic templates in favor of <strong>Customized Designs</strong> that capture your <a href='<?= BASE_URL ?>services/branding' class='text-accent-dynamic fw-bold' title="Explore our Strategic Brand Identity services">Brand Personality</a>. We work closely with you to ensure every visual element aligns with your core values, much like our successful <a href='<?= BASE_URL ?>work' class='text-dark fw-bold text-decoration-underline' title="Browse our full Portfolio of Successful Projects">Portfolio Projects</a>.</p>
                    <a href="<?= BASE_URL ?>work" class="btn btn-dark-punchy rounded-pill px-4" title="View our complete showcase of result-driven work">View Portfolio <i class="bi bi-grid-3x3-gap ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-light">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-lightning-charge-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Fast Loading for Better User Experience</h3>
                    <p class="text-muted mb-4 fs-5">Speed is the foundation of trust. Our platforms are engineered to be <strong>Lightning Fast</strong>, with a focus on sub-second load times. We optimize everything from server-side scripts to client-side assets, ensuring your <a href='<?= BASE_URL ?>services/seo' class='text-accent-dynamic fw-bold' title="Explore our Search Engine Optimization services">SEO Rankings</a> soar. Check your current speed on <a href='https://pagespeed.web.dev/' target='_blank' rel='noopener noreferrer' class='text-dark fw-bold text-decoration-underline' title="Analyze your site speed with Google PageSpeed Insights">PageSpeed Insights</a>.</p>
                    <a href="#performance" class="btn btn-dark-punchy rounded-pill px-4" title="Analyze our High-Performance Speed Metrics">Speed Metrics <i class="bi bi-lightning ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-12" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 transition-all bg-dark text-white shadow-accent">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="fw-900 mb-3 text-white">SEO-Friendly Designs for Organic Growth</h3>
                             <p class="text-white opacity-75 mb-4 fs-5">Don't just launch; dominate. We build <strong>SEO-Friendly Platforms</strong> from the ground up, ensuring that search engines love your site. Our architecture follows <a href='https://schema.org/' target='_blank' rel='noopener noreferrer' class='text-accent-dynamic fw-bold text-decoration-none' title="Read about Structured Data standards on Schema.org">Schema.org Best Practices</a> and integrates seamlessly with our <a href='<?= BASE_URL ?>services/marketing' class='text-accent-dynamic fw-bold' title="Explore our ROI-Driven Performance Marketing campaigns">Full-Scale Marketing Campaigns</a>.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a href="<?= BASE_URL ?>services/seo" class="btn btn-punchy btn-lg" title="Explore our Organic SEO Dominance Pillar">Explore SEO Pillar <i class="bi bi-graph-up-arrow ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</section>

<!-- Local Dominance Section -->
<section class="local-dominance-section section-padding bg-white">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-4">Mastering <span class="text-accent-dynamic">Local Dominance</span></h2>
                <p class="fs-5 text-muted">Your service is only as powerful as its visibility. We specialize in localized strategies that ensure you aren't just 'online'—you're at the top of every local search result.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-light shadow-punchy-sm">
                    <h4 class="fw-900 mb-3"><i class="bi bi-geo-alt text-accent-dynamic me-2"></i> Stronger Community Outreach</h4>
                    <p class="small text-muted mb-0">Strengthen your connection with the local audience through tailored strategies that boost visibility and engagement. We build trust within your specific service area.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-white shadow-punchy-sm">
                    <h4 class="fw-900 mb-3"><i class="bi bi-graph-up text-accent-dynamic me-2"></i> Higher Local SEO Ranking</h4>
                    <p class="small text-muted mb-0">Secure higher <a href='<?= BASE_URL ?>services/seo' class='text-dark fw-bold' title="Explore our Organic SEO Rankings and Dominance services">Local SEO Rankings</a>. Connect with nearby customers, increase foot traffic, and stand out in the map pack effortlessly.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-light shadow-punchy-sm">
                    <h4 class="fw-900 mb-3"><i class="bi bi-search text-accent-dynamic me-2"></i> Area-Based Keyword Research</h4>
                    <p class="small text-muted mb-0">Target your audience with laser precision. Our strategies ensure you rank for specific regions, driving highly relevant local traffic to your door.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-dark text-white">
                    <h4 class="fw-900 mb-3 text-accent-dynamic"><i class="bi bi-link-45deg me-2"></i> Local Link Building & Listings</h4>
                    <p class="small opacity-75 mb-0">Boost credibility with accurate <a href='<?= BASE_URL ?>services/marketing' class='text-white fw-bold' title="Explore our High-Impact Business Listing and Marketing services">Business Listings</a> and strategic local backlinks that signal authority to Google's proximity algorithms.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-white border-accent-dynamic">
                    <h4 class="fw-900 mb-3"><i class="bi bi-google text-accent-dynamic me-2"></i> GMB Optimization Mastery</h4>
                    <p class="small text-muted mb-0">Maximize your <a href='https://www.google.com/business/' target='_blank' rel='noopener noreferrer' class='text-dark fw-bold' title="Manage your Google Business Profile (formerly GMB)">Google My Business</a> profile. We enhance rankings with tailored updates, image optimization, and review management strategies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Authority Showcase (Case Studies) -->
<section class="authority-showcase-section section-padding bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <h2 class="display-4 fw-900 text-dark mb-4">Case Studies: <span class="text-accent-dynamic">Success Stories</span></h2>
                <p class="fs-5 text-muted">At Crea8ve Cool, every project tells a story of strategy and measurable ROI. Explore how we transformed brands across the globe.</p>
            </div>
            <div class="col-lg-5 text-lg-end pb-3">
                <a href="<?= BASE_URL ?>work" class="btn btn-outline-dark-punchy rounded-pill px-5">View All Work</a>
            </div>
        </div>

        <div class="row g-4">
            <?php 
            $case_studies = [
                ['name' => 'Dhananjay Creations', 'niche' => 'Saree Manufacturers | Delhi', 'results' => ['Platform with SEO (Multiple Locations)', 'Brand Image Building', 'GMB Ranking Optimization']],
                ['name' => 'Formative Sports', 'niche' => 'Sportswear Manufacturers | Australia', 'results' => ['Global E-commerce Architecture', 'High-Authority Link Building', 'National TV Media Exposure']],
                ['name' => 'Academic Global School', 'niche' => 'Best CBSE School | Gorakhpur', 'results' => ['Educational Portal Engineering', 'Local Community Outreach', 'Organic Enrollment Growth']],
                ['name' => 'Marina Dee', 'niche' => 'Psychic Readings | Melbourne', 'results' => ['Bespoke Creative Branding', 'Targeted Search Dominance', 'Seamless Booking Integration']],
                ['name' => 'DRH Sports', 'niche' => 'Sports Uniforms | Dominica', 'results' => ['International Supply-Chain SEO', 'B2B Lead Generation Funnels', 'Technical Performance Hardening']]
            ];
            foreach ($case_studies as $i => $cs): 
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                <div class="case-card p-5 border-3 border border-dark rounded-5 h-100 bg-white transition-all shadow-punchy-sm">
                    <div class="badge bg-dark text-white rounded-pill px-3 py-1 mb-3 small fw-bold"><?= $cs['niche'] ?></div>
                    <h4 class="fw-900 mb-4"><?= $cs['name'] ?></h4>
                    <ul class="list-unstyled d-grid gap-2 mb-4">
                        <?php foreach($cs['results'] as $res): ?>
                            <li class="small d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-accent-dynamic text-10px"></i>
                                <span class="opacity-75"><?= $res ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?= BASE_URL ?>work" class="text-accent-dynamic fw-900 text-decoration-none small" title="Read the Full Case Study and Success Story">READ FULL CASE STUDY <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Authority Narrative Section 1: The Growth Engine -->
<section class="growth-engine-section section-padding bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="p-2 bg-white border border-dark border-3 rounded-5 shadow-punchy-sm">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="Business Growth" title="Business Growth" class="img-fluid rounded-4">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="display-5 fw-900 text-dark mb-4">Accelerate Your Business Growth with <span class="text-accent-dynamic">Unmatched Web Engineering</span></h2>
                <p class="fs-5 text-muted mb-4">Your digital platform is more than a basic presence—it’s your <strong>growth engine</strong>. We design innovative, user-focused platforms that captivate audiences, enhance <strong>User Experience</strong>, and drive measurable results. At Crea8ve Cool, we understand that whether you're a startup or an established enterprise, your <a href='<?= BASE_URL ?>services/platform' class='text-dark fw-bold text-decoration-underline' title="Explore our Enterprise Platform Engineering services">Custom Digital Solution</a> must ensure you stand out, attract customers, and turn clicks into conversions.</p>
                <p class="fs-5 text-muted mb-5">Let's grow together by leveraging our expertise in <a href='<?= BASE_URL ?>services/marketing' class='text-accent-dynamic fw-bold' title="Explore our Performance Marketing and Lead Generation services">Performance Marketing</a> and <strong>Conversion Rate Optimization (CRO)</strong>. We focus on the intersection of brand identity and technical excellence, as seen in our <a href='<?= BASE_URL ?>work' class='text-dark fw-bold text-decoration-underline' title="Browse our full Portfolio of Successful Projects">Featured Case Studies</a>.</p>
                <a href="#leads" class="btn btn-punchy btn-lg" title="Start your project and accelerate your business growth">Start Your Growth Journey</a>
            </div>
        </div>
    </div>
</section>

<!-- Authority Narrative Section 2: The Strategic Partner -->
<section id="partner-intro" class="strategic-partner-section section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12" data-aos="fade-up">
                <h2 class="display-4 fw-900 text-dark mb-5 text-center">Drive Success with the <span class="text-accent-dynamic">Leading <strong><?= htmlspecialchars($service['title'] ?? 'Digital Solutions') ?></strong></span></h2>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <p class="fs-5 text-muted mb-4">A well-engineered solution forms the core of success for your business online. It's that critical <strong>first impression</strong> that your audience will have—a platform to introduce your brand, demonstrate value, and convince visitors to take action. Behind each thriving business is a platform that combines aesthetic appeal with technical functionality, and we deliver exactly that.</p>
                <p class="fs-5 text-muted">Crea8ve Cool focuses on delivering brilliant results that attract your target audience and keep them engaged. We understand the specific challenges facing businesses today—from tight <a href='<?= BASE_URL ?>services/marketing' class='text-accent-dynamic fw-bold' title="Explore our High-Impact Performance Marketing and Lead Generation services">Marketing Budgets</a> to tough global competition and the urgency for quick, measurable outcomes. Our strategy is aimed at meeting these needs while maximizing long-term productivity and <a href='<?= BASE_URL ?>services/seo' class='text-accent-dynamic fw-bold' title="Explore our Search Engine Optimization services">Organic Growth</a>.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div   class="p-5 border-3 border border-dark rounded-5 text-white shadow-punchy-lg position-relative overflow-hidden auth-card-dark">
                    <div   class="position-absolute top-0 end-0 w-100 h-100 auth-card-glow"></div>
                    <h4 class="fw-900 mb-4 text-accent-dynamic position-relative z-1">The Authority Difference</h4>
                    <p class="mb-4 text-white position-relative z-1 text-auth-p">As a top-tier provider of <strong>Digital Solutions</strong>, we understand the unique needs of scaling brands. From bold, eye-catching visuals to easy-to-navigate layouts, we make sure your platform reflects the true identity and values of your business.</p>
                    <p class="text-white position-relative z-1 text-auth-p">Our <a href='<?= BASE_URL ?>services/pwa' class='text-white fw-bold text-decoration-underline' title="Explore our Mobile-First Progressive Web App services">Mobile-First Design Approach</a> ensures your site functions perfectly on all devices, providing every user with a seamless experience. We integrate modern trends in design, <a href='https://web.dev/vitals/' target='_blank' rel='noopener noreferrer' class='text-accent-dynamic fw-bold text-decoration-none' title="Learn about Google's Core Web Vitals guidelines on web.dev">Google Web Vitals Optimization</a>, and intuitive use into every production.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Authority Narrative Section 3: The Trust Commitment -->
<section class="trust-commitment-section section-padding bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                <h2 class="display-5 fw-900 text-dark mb-4">Exceptional Services That <span class="text-accent-dynamic">Businesses Count On</span></h2>
                <p class="fs-5 text-muted mb-4">Crea8ve Cool represents the distinctness of your business while delivering measurable success. We have worked hard to gain the trust of our clients by offering top-notch <a href='<?= BASE_URL ?>services/platform' class='text-dark fw-bold text-decoration-underline' title="Explore our Enterprise Platform and System Automation services">Digital Engineering Services</a>. We understand your needs, challenges, and dreams, and we blend creativity with absolute technical competence.</p>
                <p class="fs-5 text-muted mb-5">Our commitment to excellence, transparency, and satisfaction has enabled us to gain the trust of many scaling brands. Let's bring your vision to life as a digital masterpiece that dominates the search results and converts traffic into revenue.</p>
                
                <div class="d-grid gap-3">
                    <div class="d-flex align-items-center gap-3 p-3 bg-white border border-dark border-2 rounded-4">
                        <i class="bi bi-shield-check text-accent-dynamic fs-3"></i>
                        <span class="fw-800 text-dark">Commitment to Excellence & Transparency</span>
                    </div>
                    <div class="d-flex align-items-center gap-3 p-3 bg-white border border-dark border-2 rounded-4">
                        <i class="bi bi-heart-fill text-accent-dynamic fs-3"></i>
                        <span class="fw-800 text-dark">Client-First Satisfaction Guarantee</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                <div class="p-2 bg-white border border-dark border-3 rounded-5 shadow-punchy-sm">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="Team Trust" title="Team Trust" class="img-fluid rounded-4">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategic Floating Sub-Navigation -->
<div class="floating-sub-nav position-fixed start-50 translate-middle-x scrolled-up floating-nav-pos">
    <div class="nav-pill-wrapper bg-dark p-1 rounded-pill shadow-punchy-lg border border-white border-opacity-10 d-flex align-items-center nav-pill-bg">
        <div class="nav-links d-flex px-4 gap-4">
            <a href="#pitching-intro" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Overview section">OVERVIEW</a>
            <a href="#strategy" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Strategy framework">STRATEGY</a>
            <a href="#performance" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our performance and speed metrics">PERFORMANCE</a>
            <a href="#technology" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="Review our Technical Stack">TECHNOLOGY</a>
            <a href="#packages" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View Our Service Packages">PRICING</a>
            <a href="#ecosystem" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Ecosystem section">ECOSYSTEM</a>
        </div>
        <a href="#leads-form" class="btn-quote-pill rounded-pill px-4 fw-900 text-decoration-none d-flex align-items-center justify-content-center btn-quote-custom" title="Navigate to Project Inquiry Form">GET A QUOTE</a>
    </div>
</div>

<!-- Section 1: Strategy -->
<section id="strategy" class="seo-rich-content section-padding bg-white position-relative overflow-hidden">
    <div class="container">
        <div class="authority-content-wrapper mb-0">
            <div class="row g-4 align-items-center">
                    <div class="col-lg-7" data-aos="fade-right">
                        <h2 class="display-5 fw-900 mb-4">1. The Psychology of Web Success: <span class="text-accent-dynamic">Strategy Beyond Code</span></h2>
                        <p>When you look for a <strong><?= htmlspecialchars($service['title'] ?? 'Premium Digital Strategy') ?></strong> partner, you aren't just looking for someone to build a page. You are looking for a growth partner who understands <strong>User Psychology</strong> and <strong>Conversion Architecture</strong>. At Crea8ve Cool, we don't start with a template; we start with a blueprint of your customer's mind.</p>
                        <p>Every successful campaign must answer three questions in the first 3 seconds: <em>What do you offer? How does it make my life better? How do I get it?</em> This is where our <strong>Creative Branding</strong> and <strong>UI/UX Design</strong> expertise comes into play. We utilise the 'F-Pattern' layout and strategic whitespace to guide visitors directly toward conversion.</p>
                        <p>Our strategy integrates deeply with your <a href='<?= BASE_URL ?>services/marketing' class='text-accent-dynamic fw-bold' title="Explore our Performance Marketing and Lead Generation services">Performance Marketing</a> goals. We know that if your landing page doesn't resonate, your ad spend is wasted. That's why we build with 'Visual Gravity'—ensuring that every scroll leads to a deeper trust signal.</p>
                    </div>
                    <div class="col-lg-5" data-aos="fade-left">
                        <div class="sc-card">
                            <div class="sc-card-header">
                                <span class="sc-tag-pill">Our Framework</span>
                                <h4 class="fw-900 mb-0 mt-2 text-sc-title">The Strategy Checklist</h4>
                            </div>
                            <div class="sc-card-body">
                                <div class="sc-item">
                                    <div class="sc-badge">01</div>
                                    <div>
                                        <div class="sc-item-label">User Persona Audit</div>
                                        <div class="sc-item-desc">We precisely define who your customer is — their goals, pain points, and buying behaviour.</div>
                                    </div>
                                </div>
                                <div class="sc-item">
                                    <div class="sc-badge">02</div>
                                    <div>
                                        <div class="sc-item-label">Conversion Mapping</div>
                                        <div class="sc-item-desc">Engineering the shortest, most frictionless path from visitor to a qualified lead.</div>
                                    </div>
                                </div>
                                <div class="sc-item">
                                    <div class="sc-badge">03</div>
                                    <div>
                                        <div class="sc-item-label">Content Siloing</div>
                                        <div class="sc-item-desc">Organising info architecture for <a href='<?= BASE_URL ?>services/seo' class='fw-bold' class="text-accent-only" title="Explore our Search Engine Optimization services">SEO dominance</a> &amp; crawl depth.</div>
                                    </div>
                                </div>
                                <div class="sc-item sc-item-last">
                                    <div class="sc-badge">04</div>
                                    <div>
                                        <div class="sc-item-label">Competitor Benchmarking</div>
                                        <div class="sc-item-desc">We reverse-engineer top competitors' digital strategies — then we outperform them.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Performance -->
<section id="performance" class="seo-rich-content section-padding bg-light position-relative overflow-hidden">
    <div class="container">
        <div class="authority-content-wrapper mb-0">
            <h2 class="display-5 fw-900 mb-5 text-center">2. Engineering for the Speed of Light: <span class="text-accent-dynamic">Technical Performance</span></h2>
            <div class="row g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <p class="fs-5">Speed is the ultimate trust signal. In a world of <a href='<?= BASE_URL ?>services/api' class='text-accent-dynamic fw-bold' title="Explore our Instant API Integration and Backend services">Instant API Integrations</a> and 5G connections, a slow platform is a dead platform. Our <strong>Digital Engineering</strong> process follows the 'Zero-Bloat' methodology.</p>
                        <p>We don't use heavy page builders that inject thousands of lines of unnecessary CSS. Instead, we use <strong>Vanilla CSS</strong> and <strong>Native JavaScript</strong> to ensure that your <strong>Largest Contentful Paint (LCP)</strong> is achieved in under 1 second.</p>
                        <p>Our performance engineering includes <strong>Next-Gen Image Formats (WebP/AVIF)</strong>, server-side caching, and minification protocols that align with <a href='https://web.dev/vitals/' target='_blank' rel='noopener noreferrer' class='text-decoration-underline text-dark fw-bold' title="Learn about Google's Core Web Vitals speed guidelines on web.dev">Google's Core Web Vitals standards</a>.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="perf-card">
                            <div class="perf-card-title">Performance Benchmarks</div>
                            <div class="perf-grid">
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                                    <div class="perf-val">&lt;1.5s</div>
                                    <div class="perf-label">LCP Load Speed</div>
                                </div>
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-speedometer2"></i></div>
                                    <div class="perf-val">99/100</div>
                                    <div class="perf-label">Lighthouse Score</div>
                                </div>
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-image-fill"></i></div>
                                    <div class="perf-val">WebP</div>
                                    <div class="perf-label">Next-Gen Images</div>
                                </div>
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-phone-fill"></i></div>
                                    <div class="perf-val">100%</div>
                                    <div class="perf-label">Mobile-First Ready</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Technology Stack -->
<section id="technology" class="seo-rich-content section-padding bg-white position-relative overflow-hidden">
    <div class="container">
        <div class="authority-content-wrapper mb-0">
            <div class="row g-5 align-items-center">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-right">
                        <div class="fortress-card">
                            <div class="fortress-glow"></div>
                            <div class="fortress-header">
                                <div class="fortress-shield-icon"><i class="bi bi-shield-lock-fill"></i></div>
                                <div>
                                    <div class="fortress-tag">Enterprise Security</div>
                                    <h3 class="fortress-title">The Fortress Stack</h3>
                                </div>
                            </div>
                            <p class="fortress-desc">Security is not an option — it is the foundation. We build on a <strong>Hardened PHP/MVC Framework</strong> that is virtually immune to vulnerabilities found in open-source platforms.</p>
                            <div class="fortress-rows">
                                <div class="fortress-row">
                                    <div class="fortress-row-icon"><i class="bi bi-shield-fill-check"></i></div>
                                    <div>
                                        <div class="fortress-row-label">SSL Certification</div>
                                        <div class="fortress-row-desc">256-bit encryption for all data in transit and at rest.</div>
                                    </div>
                                </div>
                                <div class="fortress-row">
                                    <div class="fortress-row-icon"><i class="bi bi-database-lock"></i></div>
                                    <div>
                                        <div class="fortress-row-label">Database Security</div>
                                        <div class="fortress-row-desc">SQL Injection &amp; XSS protection built into every query layer.</div>
                                    </div>
                                </div>
                                <div class="fortress-row">
                                    <div class="fortress-row-icon"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                                    <div>
                                        <div class="fortress-row-label">Automated Backups</div>
                                        <div class="fortress-row-desc">24/7 cloud redundancy with point-in-time recovery.</div>
                                    </div>
                                </div>
                                <div class="fortress-row fortress-row-last">
                                    <div class="fortress-row-icon"><i class="bi bi-patch-check-fill"></i></div>
                                    <div>
                                        <div class="fortress-row-label">GDPR &amp; CCPA Ready</div>
                                        <div class="fortress-row-desc">Global compliance frameworks enforced by default architecture.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
                        <h2 class="display-5 fw-900 mb-4">3. The Future-Proof Stack: <span class="text-accent-dynamic">Security &amp; Scalability</span></h2>
                        <p>Your business deserves more than a 'plug-and-play' solution. Our <strong>Custom Web Engineering</strong> ensures that you have total control over your digital asset. We provide a custom <a href='<?= BASE_URL ?>services/automation' class='text-accent-dynamic fw-bold' title="Explore our System Automation and Admin Control services">Admin Panel</a> that is lightweight and specifically designed for your business workflows.</p>
                        <p>Whether you need to integrate a <a href='<?= BASE_URL ?>services/crm' class='text-accent-dynamic fw-bold' title="Explore our Custom CRM Engineering solutions">Custom CRM</a>, an <a href='<?= BASE_URL ?>services/erp' class='text-accent-dynamic fw-bold' title="Explore our Enterprise ERP System solutions">ERP System</a>, or a complex <strong>LMS Platform</strong>, our API-first logic makes it possible. We don't believe in digital limitations — if you can dream it, we can engineer it.</p>
                        <p>We also utilise industry-leading animation frameworks to bring your brand to life with high-fidelity motion graphics. This level of 'Visual Authority' is what separates a world-class agency from a budget freelancer. Your digital solution is your brand's flagship — make it legendary.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Glossary (Premium FAQ Style) -->
<section id="glossary" class="seo-rich-content section-padding bg-light position-relative overflow-hidden">
    <div class="container">
        <div class="authority-content-wrapper mb-0">
            <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5 fw-900 text-dark mb-3">4. Digital Excellence Glossary</h2>
                    <p class="fs-5 text-muted">Core concepts you should know to dominate your market.</p>
                </div>
                
                <div class="premium-faq-wrapper mx-auto max-w-900" id="premiumGlossary">
                    <?php 
                    $glossary = [
                        ['q'=>'What is Responsive Digital Solution?', 'a'=>'<strong>Responsive Digital Solution (RWD)</strong> ensures your site ranks highly on Google mobile-first indexing by flawlessly adapting to any screen size. A must-have for <a href="<?= BASE_URL ?>services/seo" class="text-accent-dynamic fw-bold" title="Explore our Search Engine Optimization services">SEO rankings</a>.'],
                        ['q'=>'Why does Page Speed matter?', 'a'=>'A 1-second delay can drop conversions by 7%. Speed directly impacts your Google Ranking and paid ad costs. We engineer sites to load instantly without the typical WordPress bloat.'],
                        ['q'=>'What is the difference between UI and UX?', 'a'=>'<strong>UI (User Interface)</strong> is the look—buttons, colours, fonts. <strong>UX (User Experience)</strong> is the feel. Our <a href="<?= BASE_URL ?>services/uiux" class="text-accent-dynamic fw-bold" title="Explore our High-Conversion UI/UX Strategy services">UI/UX Team</a> merges both to create high-converting digital journeys.'],
                        ['q'=>'Do I really need an SSL Certificate?', 'a'=>'Absolutely. <strong>SSL (Secure Sockets Layer)</strong> encrypts your site. Without it, browsers flag you as "Not Secure". We include military-grade SSL in our <a href="<?= BASE_URL ?>services/automation" class="text-accent-dynamic fw-bold" title="Explore our System Automation and Security services">Security Automation</a> packages.'],
                        ['q'=>'What is a CMS and why should I care?', 'a'=>'A <strong>CMS (Content Management System)</strong> lets you edit content without code. We build custom, lightweight dashboards to manage your <a href="<?= BASE_URL ?>work" class="text-accent-dynamic fw-bold" title="Browse our full Portfolio of Successful Projects">Portfolio</a> cleanly and securely.']
                    ];
                    foreach($glossary as $idx => $item): 
                        $isFirst = ($idx === 0);
                    ?>
                    <div class="p-faq-item mb-4" data-aos="fade-up" data-aos-delay="<?= $idx * 50 ?>">
                        <button class="p-faq-btn w-100 text-start d-flex justify-content-between align-items-center <?= $isFirst ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#pfaq<?= $idx ?>" aria-expanded="<?= $isFirst ? 'true' : 'false' ?>">
                            <span class="fw-900 fs-5 pe-3"><?= $item['q'] ?></span>
                            <span class="p-faq-icon">
                                <i class="bi bi-plus-lg p-icon-plus"></i>
                                <i class="bi bi-dash-lg p-icon-minus"></i>
                            </span>
                        </button>
                        <div id="pfaq<?= $idx ?>" class="collapse <?= $isFirst ? 'show' : '' ?>" data-bs-parent="#premiumGlossary">
                            <div class="p-faq-body p-4 border-top border-dark border-opacity-10 fs-6 text-muted lh-lg">
                                <?= $item['a'] ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
require_once APP_PATH . '/views/components/stack.php'; 
?>

<?php require_once APP_PATH . '/views/components/roi_calculator.php'; ?>

<!-- Impact Narrative: Designing for Results -->
<section class="results-narrative-section section-padding bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 fw-900 text-dark mb-4">Designing a Platform That <span class="text-accent-dynamic">Delivers Real Results</span></h2>
                <p class="fs-5 text-muted mb-4">In today's digital-first world, a platform must do more than just look good—it must deliver visible, measurable outcomes. A well-crafted platform is your most powerful tool for growth, attracting and converting visitors into loyal customers.</p>
                <p class="fs-5 text-muted mb-5">At Crea8ve Cool, we specialize in <strong><strong>Delivering Impactful <?= htmlspecialchars($service['title'] ?? 'Digital Solutions') ?></strong></strong> that drive real success by combining performance, usability, and aesthetics with a bulletproof growth strategy.</p>
                
                <div class="d-grid gap-4">
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">01</div>
                        <div>
                            <h5 class="fw-900 mb-1">Attractively Designed</h5>
                            <p class="small text-muted mb-0">Catchy, modern designs that immediately capture attention and stick in the minds of your audience.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">02</div>
                        <div>
                            <h5 class="fw-900 mb-1">User-Centric Experiences</h5>
                            <p class="small text-muted mb-0">Intuitive navigation ensuring visitors find exactly what they need with zero friction.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">03</div>
                        <div>
                            <h5 class="fw-900 mb-1">Conversion-Focused Strategy</h5>
                            <p class="small text-muted mb-0">Strategic layouts and persuasive messaging designed to turn traffic into revenue.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-5 border-3 border border-dark rounded-5 bg-white shadow-punchy-lg">
                    <h3 class="fw-900 mb-4">Services That <span class="text-accent-dynamic">Engage and Convert</span></h3>
                    <p class="text-muted mb-4">Your digital asset is more than a virtual storefront—it is a purpose-driven engine that connects with your audience. We design around your specific goals, whether it is lead generation, product sales, or audience expansion.</p>
                    
                    <ul class="list-unstyled d-grid gap-3 mb-0">
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-person-check-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Tailor-made Designs for Your Market</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-cpu-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Optimized User Experience (UX) Mastery</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-lightning-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Lightning-Fast Loading Speeds</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-megaphone-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Clear, Persuasive Calls-to-Action</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The 10-Step Impact Blueprint — Vertical Tabs -->
<section class="process-blueprint-section section-padding bg-white">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-8">
                <h2 class="display-4 fw-900 text-dark mb-4">Crafting Impactful <span class="text-accent-dynamic">Small Business Design</span></h2>
                <p class="fs-5 text-muted">Every digital touchpoint must create an impact. We follow a meticulous 10-step blueprint to ensure your digital presence drives results effortlessly.</p>
            </div>
        </div>

        <div class="vtabs-wrapper" data-aos="fade-up">
            <!-- Left: Step Nav -->
            <div class="vtabs-nav" id="vtabsNav">
                <div class="vtab-item active" data-tab="step1"><span class="vtab-num">01</span><span class="vtab-name">Goal Definition</span></div>
                <div class="vtab-item" data-tab="step2"><span class="vtab-num">02</span><span class="vtab-name">Audience Research</span></div>
                <div class="vtab-item" data-tab="step3"><span class="vtab-num">03</span><span class="vtab-name">Content Planning</span></div>
                <div class="vtab-item" data-tab="step4"><span class="vtab-num">04</span><span class="vtab-name">Simple Navigation</span></div>
                <div class="vtab-item" data-tab="step5"><span class="vtab-num">05</span><span class="vtab-name">Responsive Design</span></div>
                <div class="vtab-item" data-tab="step6"><span class="vtab-num">06</span><span class="vtab-name">Visual Consistency</span></div>
                <div class="vtab-item" data-tab="step7"><span class="vtab-num">07</span><span class="vtab-name">Loading Speed</span></div>
                <div class="vtab-item" data-tab="step8"><span class="vtab-num">08</span><span class="vtab-name">Call-to-Action</span></div>
                <div class="vtab-item" data-tab="step9"><span class="vtab-num">09</span><span class="vtab-name">SEO Integration</span></div>
                <div class="vtab-item" data-tab="step10"><span class="vtab-num">10</span><span class="vtab-name">Regular Updates</span></div>
            </div>

            <!-- Right: Step Content -->
            <div class="vtabs-content">
                <div class="vtab-pane active" id="step1">
                    <div class="vtab-step-tag">Step 01</div>
                    <h3 class="vtab-title">Goal Definition</h3>
                    <p class="vtab-body">Every successful project begins with absolute clarity of purpose. Before a single pixel is placed, we sit down with you to define your primary business goals — whether that's generating leads, booking appointments, selling products, or establishing brand credibility. We translate those goals into measurable KPIs and build every design decision around achieving them. Without this foundation, even a beautiful platform is just digital wallpaper.</p>
                </div>
                <div class="vtab-pane" id="step2">
                    <div class="vtab-step-tag">Step 02</div>
                    <h3 class="vtab-title">Audience Research</h3>
                    <p class="vtab-body">Understanding exactly who visits your platform is what separates a high-converting asset from a generic one. We conduct deep audience research — analysing demographics, psychographics, search intent, and competitor positioning — to build a precise User Persona Profile. This data dictates your tone of voice, your visual language, and the journey we map for each visitor from landing to conversion. You can't persuade an audience you don't understand.</p>
                </div>
                <div class="vtab-pane" id="step3">
                    <div class="vtab-step-tag">Step 03</div>
                    <h3 class="vtab-title">Content Planning</h3>
                    <p class="vtab-body">Content is the engine of your platform's authority. We architect a strategic content silo — mapping each page's core message, target keywords, internal linking structure, and semantic hierarchy before a single word is written. This ensures your site doesn't just communicate value to humans, but signals deep topical relevance to search engines. Our content plans are built to drive both immediate engagement and long-term organic rankings simultaneously.</p>
                </div>
                <div class="vtab-pane" id="step4">
                    <div class="vtab-step-tag">Step 04</div>
                    <h3 class="vtab-title">Simple Navigation</h3>
                    <p class="vtab-body">Navigation is the invisible hand that guides your visitor toward a decision. We engineer intuitive, friction-free navigation structures that make finding information effortless — following proven UX principles like Jakob Nielsen's Heuristics and Fitts' Law. Every menu item, breadcrumb, and CTA placement is deliberate. When navigation is done right, users don't think about it — they simply move naturally toward your conversion goal. Confusion is the enemy of revenue.</p>
                </div>
                <div class="vtab-pane" id="step5">
                    <div class="vtab-step-tag">Step 05</div>
                    <h3 class="vtab-title">Responsive Design</h3>
                    <p class="vtab-body">Over 70% of web traffic now originates from mobile devices, making responsive design non-negotiable for any serious business. We build every layout using a mobile-first engineering approach — ensuring flawless performance across all screen sizes, from a 4K desktop monitor to the smallest smartphone. Our layouts use fluid CSS Grid systems and tested breakpoints, not brittle Bootstrap columns, guaranteeing that your brand looks premium everywhere your audience finds you.</p>
                </div>
                <div class="vtab-pane" id="step6">
                    <div class="vtab-step-tag">Step 06</div>
                    <h3 class="vtab-title">Visual Consistency</h3>
                    <p class="vtab-body">A brand that looks different on every page destroys trust instantly. We build a comprehensive Design System for your platform — defining a unified typography scale, a curated colour palette, consistent iconography, spacing tokens, and component patterns — ensuring every element feels cohesive and intentional. This visual consistency builds subconscious credibility with your audience. Visitors who trust your design, trust your business. It's that simple, and that powerful.</p>
                </div>
                <div class="vtab-pane" id="step7">
                    <div class="vtab-step-tag">Step 07</div>
                    <h3 class="vtab-title">Optimized Loading Speed</h3>
                    <p class="vtab-body">Speed is not a luxury — it is a direct revenue metric. Google's data shows that every additional second of load time reduces conversions by up to 7%. We engineer our platforms for sub-1.5 second Largest Contentful Paint using our Zero-Bloat methodology: Vanilla CSS, native JavaScript, next-gen WebP/AVIF image formats, server-side caching, and rigorous code minification. A fast platform ranks higher, converts better, and costs less to run in paid advertising.</p>
                </div>
                <div class="vtab-pane" id="step8">
                    <div class="vtab-step-tag">Step 08</div>
                    <h3 class="vtab-title">Call-to-Action Placement</h3>
                    <p class="vtab-body">The difference between a platform visitor and a paying client is a single, perfectly placed Call-to-Action. We apply Conversion Architecture principles — using visual gravity, colour contrast, F-Pattern scanning, and strategic whitespace — to place CTAs exactly where a user's eye naturally lands. Whether it's a "Book a Call" button above the fold or a sticky lead form on mobile, every CTA is engineered to intercept intent at peak motivation and convert it into a qualified lead.</p>
                </div>
                <div class="vtab-pane" id="step9">
                    <div class="vtab-step-tag">Step 09</div>
                    <h3 class="vtab-title">SEO Integration</h3>
                    <p class="vtab-body">SEO is not an afterthought — it is baked into the foundation of every platform we build. From semantic HTML5 structure and JSON-LD Schema markup to canonical tags, meta hierarchies, Open Graph data, and Core Web Vitals compliance, every technical SEO signal is set correctly from day one. We also implement internal linking architecture and keyword-optimised heading structures so your site earns organic authority from the moment Google's crawler first visits.</p>
                </div>
                <div class="vtab-pane active-hidden" id="step10">
                    <div class="vtab-step-tag">Step 10</div>
                    <h3 class="vtab-title">Regular Updates</h3>
                    <p class="vtab-body">A digital asset is not a product you build once and forget — it is a living digital asset that must evolve with your business and market. We provide ongoing maintenance partnerships that include security patch updates, performance monitoring, content refreshes, and analytics-driven optimisation cycles. Regular updates signal to search engines that your site is actively maintained, boosting rankings and user trust simultaneously. In a digital landscape that never sleeps, your platform shouldn't either.</p>
                </div>
            </div>
        </div>

        <!-- Dark Highlight Card -->
        <div class="row mt-5">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="p-5 border-3 border border-dark rounded-5 bg-dark text-white shadow-punchy-lg">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h4 class="fw-900 mb-3 text-accent-dynamic">The Critical Role of Regular Updates</h4>
                            <p class="text-updates">Regular updates are essential to keep your platform relevant, secure, and functional. We monitor analytics to identify improvement areas, fix broken links, and update security protocols to maintain absolute user trust. Add fresh content and modern design elements to stay competitive in an evolving digital landscape.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <a href="#leads" class="btn btn-punchy px-5" title="Secure your business future with our elite digital engineering">Secure Your Future</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="packages" class="pricing-section section-padding bg-light">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-4">Plans and <span class="text-accent-dynamic">Pricing</span></h2>
                <p class="fs-5 text-muted">Crea8ve Cool provides engineering-grade engineering and digital strategy packages specifically tailored for scaling businesses. All packages include high-performance hosting, responsive engineering, and absolute SEO optimization.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php 
            $packages = !empty($service['packages']) ? $service['packages'] : [
                [
                    'name' => 'Lite',
                    'tagline' => 'Standard Platform',
                    'desc' => 'Perfect for solo-preneurs and local startups.',
                    'price' => '5,999',
                    'original_price' => '9,999',
                    'savings' => '40',
                    'features' => ['Standard Platform', '1-3 Basic Pages', 'Mobile Responsive', 'Essential Features', 'Standard Performance', 'Excludes Domain/Hosting', 'Contact Form', '7-Day Delivery'],
                    'color' => '#6A5AE0',
                    'recommended' => false
                ],
                [
                    'name' => 'Plus',
                    'tagline' => 'Custom Engineering',
                    'desc' => 'Ideal for businesses ready to scale properly.',
                    'price' => '14,990',
                    'original_price' => '24,990',
                    'savings' => '40',
                    'features' => ['Custom Engineered Solution', 'Upto 10 Custom Pages', 'Performance Optimized', 'Enhanced SEO Architecture', 'High-Fidelity UI Design', 'Custom Admin Dashboard', 'Priority Support', '15-Day Delivery'],
                    'color' => '#FF007A',
                    'recommended' => true
                ],
                [
                    'name' => 'Pro',
                    'tagline' => 'Enterprise Authority',
                    'desc' => 'For market leaders and high-traffic portals.',
                    'price' => '29,990',
                    'original_price' => '49,990',
                    'savings' => '40',
                    'features' => ['Full Conversion Architecture', 'Unlimited Technical Pages', 'Core Web Vitals Mastery', 'Deep Semantic SEO Silos', 'Bespoke Motion Graphics', 'API & CRM Integrations', 'Dedicated Account Mgr', '30-Day Delivery'],
                    'color' => '#00D2FF',
                    'recommended' => false
                ]
            ];

            foreach ($packages as $pkg): 
                $pkg_desc = $pkg['description'] ?? $pkg['desc'] ?? '';
                $pkg_tagline = !empty($pkg['tagline']) ? $pkg['tagline'] : 'Premium Plan';
                $pkg_original_price = !empty($pkg['original_price']) ? $pkg['original_price'] : '';
                $pkg_savings = !empty($pkg['savings']) ? $pkg['savings'] : '';
                $pkg_color = !empty($pkg['color']) ? $pkg['color'] : '#6A5AE0';
                $pkg_recommended = !empty($pkg['recommended']);
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="price-card h-100 p-4 border-3 border border-dark rounded-5 bg-white position-relative <?= $pkg_recommended ? 'recommended' : '' ?>" style="--pkg-color: <?= $pkg_color ?>;">
                    <?php if($pkg_recommended): ?>
                        <div class="recommended-badge bg-accent-dynamic text-dark fw-900 shadow-sm">MOST POPULAR</div>
                    <?php endif; ?>
                    
                    <div class="mb-4">
                        <span   class="badge text-uppercase mb-2 pkg-badge-custom">
                            <?= htmlspecialchars($pkg_tagline) ?>
                        </span>
                        <h3   class="fw-900 mb-1 text-pkg-color"><?= htmlspecialchars($pkg['name']) ?></h3>
                        <p class="small text-muted mb-0"><?= htmlspecialchars($pkg_desc) ?></p>
                    </div>

                    <div class="price-box mb-4 p-3 bg-light rounded-4 border border-dark border-2">
                        <div class="d-flex align-items-end gap-2 my-2">
                            <span class="h1 fw-900 mb-0">₹<?= htmlspecialchars($pkg['price']) ?>*</span>
                            <?php if (!empty($pkg_original_price)): ?>
                                <span class="small text-muted text-decoration-line-through mb-1">₹<?= htmlspecialchars($pkg_original_price) ?></span>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($pkg_savings)): ?>
                            <div class="badge bg-success text-white rounded-pill px-3 py-1 text-10px">
                                SAVE <?= htmlspecialchars($pkg_savings) ?>% TODAY
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="d-grid gap-2 mb-4">
                        <a href="#leads" class="btn pkg-select-btn w-100 py-3 rounded-pill fw-900">Select Plan &rarr;</a>
                    </div>

                    <div class="feature-list mt-auto">
                        <div class="small fw-900 text-dark mb-3 opacity-50 text-uppercase letter-spacing-1">Key Features:</div>
                        <ul class="list-unstyled d-grid gap-2 mb-0">
                            <?php foreach($pkg['features'] as $feature): ?>
                                <li class="d-flex align-items-start gap-2 text-14px">
                                    <i class="bi bi-check2 text-accent-dynamic fw-bold"></i>
                                    <span class="fw-bold opacity-75"><?= htmlspecialchars($feature) ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="mt-4 pt-4 border-top border-dark border-opacity-10 text-center">
                        <div class="x-small text-muted mt-1 text-10px">*One-time setup. 18% GST Extra. Domain/Hosting not included.</div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- GAP Closure: Technical Feature Matrix (Comparison Table) -->
<section class="feature-matrix-section section-padding bg-light border-top border-dark border-opacity-5 d-none d-lg-block">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-3">Technical <span class="text-accent-dynamic">Feature Matrix</span></h2>
                <p class="fs-5 text-muted">A granular breakdown of the engineering capabilities included in each tier.</p>
            </div>
        </div>

        <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
            <table class="table table-borderless comparison-table align-middle mb-0">
                <thead>
                    <tr class="text-center">
                        <th class="text-start fs-5 fw-900 pb-4 matrix-label-col">Core Capabilities</th>
                        <th class="pb-4 matrix-col">
                            <span class="matrix-plan-badge lite-badge">Lite Plan</span>
                        </th>
                        <th class="pb-4 matrix-col matrix-highlight-col">
                            <span class="matrix-plan-badge plus-badge">⭐ Plus Plan</span>
                        </th>
                        <th class="pb-4 matrix-col">
                            <span class="matrix-plan-badge pro-badge">Pro Plan</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-center small fw-bold">
                    <tr class="border-top border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark fw-900">Solution Architecture</td>
                        <td class="py-4 text-muted">Standard Platform</td>
                        <td class="py-4 text-dark fw-900 matrix-highlight-col">Custom Engineered</td>
                        <td class="py-4 text-dark fw-900">Enterprise Grade</td>
                    </tr>
                    <tr class="border-top border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark fw-900">Advanced SEO Structuring</td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-30 fs-5"></i></td>
                        <td class="py-4 matrix-highlight-col"><i class="bi bi-check-circle-fill fs-5 text-accent-only"></i></td>
                        <td class="py-4"><i class="bi bi-check-circle-fill text-dark fs-5"></i></td>
                    </tr>
                    <tr class="border-top border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark fw-900">Performance Guarantee</td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-30 fs-5"></i></td>
                        <td class="py-4 matrix-highlight-col"><i class="bi bi-check-circle-fill fs-5 text-accent-only"></i></td>
                        <td class="py-4"><i class="bi bi-check-circle-fill text-dark fs-5"></i></td>
                    </tr>
                    <tr class="border-top border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark fw-900">API &amp; CRM Integrations</td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-30 fs-5"></i></td>
                        <td class="py-4 text-dark fw-800 matrix-highlight-col">Basic Webhooks</td>
                        <td class="py-4 text-dark fw-900">Unlimited Endpoints</td>
                    </tr>
                    <tr class="border-top border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark fw-900">Dedicated Account Manager</td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-30 fs-5"></i></td>
                        <td class="py-4 matrix-highlight-col"><i class="bi bi-x-circle text-muted opacity-30 fs-5"></i></td>
                        <td class="py-4"><i class="bi bi-check-circle-fill text-dark fs-5"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php require_once APP_PATH . '/views/components/growth_ecosystem.php'; ?>

<?php require_once APP_PATH . '/views/components/lead_capture.php'; ?>

<?php require_once APP_PATH . '/views/components/digital_network.php'; ?>

<?php require_once APP_PATH . '/views/components/video_proof.php'; ?>

<?php require_once APP_PATH . '/views/components/premium_reviews.php'; ?>

