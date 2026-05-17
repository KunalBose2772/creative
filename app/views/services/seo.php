<?php 
// Hardcoded Service Data for Organic SEO Strategy & Domain Domination
$serviceSlug = 'seo';
$accentColor = '#FF007A'; // High-Octane Magenta
$service = [
    'title' => 'SEO Services India & Organic Growth',
    'meta_title' => 'SEO Services India | Search Engine Optimization Agency Delhi | Crea8ve Cool',
    'meta_description' => 'Grow your organic traffic with our expert SEO services in India. We specialize in keyword research, technical SEO, and link building to rank your business on Page 1.',
    'desc' => 'Rankings are important, but revenue is gold. We are an SEO agency in India that builds smart search strategies to help your website rank for the exact terms your ideal customers are searching for, bringing you high-intent organic traffic.',
    'color' => '#FF007A',
    'features' => [
        'High-Intent Keyword Research',
        'Technical Core Web Vitals Audits',
        'Competitor Domain Hijacking',
        'High-Authority Backlink Acquisition',
        'Local SEO & GMB Domination',
        'Dynamic Content Topic Clustering'
    ],
    'packages' => [
        [
            'name' => 'Lite',
            'tagline' => 'Local Conquest',
            'desc' => 'Dominate regional searches and claims your Google Business Profile visibility.',
            'price' => '5,999',
            'original_price' => '9,999',
            'savings' => '40',
            'features' => ['GMB Setup & Optimization', 'Local Keyword Mapping', '10 Target Business Citations', 'Core Technical Site Audit', 'Essential Schema Markup', 'Monthly Progress Dashboard', 'Excludes Backlink Acquisition', '14-Day Setup Delivery'],
            'color' => '#6A5AE0',
            'recommended' => false
        ],
        [
            'name' => 'Plus',
            'tagline' => 'National Authority',
            'desc' => 'Scale across states and capture national e-commerce or SaaS search traffic.',
            'price' => '14,990',
            'original_price' => '24,990',
            'savings' => '40',
            'features' => ['Topic Cluster Blueprinting', 'Full On-Page Optimization', '5 Premium Guest Post Backlinks', 'Competitor Gap Mapping', 'Custom Landing Page Funnels', 'Technical Architecture Cleanup', 'Bi-Weekly Rank Audits', '30-Day Launch Pacing'],
            'color' => '#FF007A',
            'recommended' => true
        ],
        [
            'name' => 'Premium',
            'tagline' => 'Enterprise Domain',
            'desc' => 'Total industry dominance, massive backlink pipelines, and continuous inbound leads.',
            'price' => '34,990',
            'original_price' => '54,990',
            'savings' => '36',
            'features' => ['Continuous Backlink Injection', 'Technical Architecture Repairs', 'PR Media Outreach & Mentions', 'Custom Advanced Schema Injectors', 'Competitive Keyword Hijack Campaigns', 'Dedicated SEO Consultant', 'Unlimited Keyword Tracking', 'Ongoing Maintenance Partnership'],
            'color' => '#FF5E36',
            'recommended' => false
        ]
    ]
];

// Support for dynamic location (SEO landing pages) passed from the controllers
if (isset($data['location'])) {
    $loc = $data['location'];
    $service['title'] = "Elite SEO Strategy & Rank Domination in " . $loc['name'];
    $service['desc'] = "Hijacking competitor traffic, optimizing core technical architectures, and scaling local brand authority for high-ticket corporate leaders in " . $loc['name'] . ".";
    $service['meta_title'] = "Organic SEO Optimization in " . $loc['name'] . " | Crea8ve Cool";
    $service['meta_description'] = "Looking for top SEO specialists, GMB optimization, or search engine ranking services in " . $loc['name'] . "? Contact us today for a free SEO rank audit.";
} elseif (isset($data['city'])) {
    $service['title'] .= " in " . $data['city'];
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

// LocalBusiness Schema
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

// Dynamic override of schema metrics for geo-indexing
if (isset($data['location'])) {
    $loc = $data['location'];
    $schemaData['areaServed'] = [
        "@type" => "City",
        "name" => $loc['name']
    ];
    $localBusinessSchema['address']['addressLocality'] = $loc['name'];
    $localBusinessSchema['address']['addressCountry'] = ($loc['type'] === 'domestic') ? 'IN' : 'US';
    $localBusinessSchema['geo'] = [
        "@type" => "GeoCoordinates",
        "latitude" => $loc['geo']['lat'],
        "longitude" => $loc['geo']['lon']
    ];
} elseif (isset($data['city'])) {
    $schemaData['areaServed'] = [
        "@type" => "City",
        "name" => $data['city']
    ];
}

// FAQ Schema
$faqSchema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "How long does it take to see SEO results?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "While local map listings can improve in 14-30 days, national keyword authority takes 3 to 6 months of continuous optimization to fully scale."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "What are Core Web Vitals?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Core Web Vitals are Google's speed, responsiveness, and visual stability metrics used to judge overall User Experience as a core ranking signal."
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
$accentRgb       = (strpos($accentColor, '#') === 0) ? hexToRgb($accentColor) : '255, 0, 122';
$locationContext = isset($data['location']) ? $data['location']['name'] : 'India';
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
        <div class="blob-1" style="background: rgba(255, 0, 122, 0.25);"></div>
        <div class="blob-2" style="background: rgba(0, 210, 255, 0.15);"></div>
        <div class="hero-grid-overlay"></div>
    </div>
    
    <div class="container mt-5 pt-3 max-w-1300">
        <div class="row g-4 bento-grid mb-5">
            
            <!-- Main Content Box -->
            <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                <div class="bento-card main-info-card h-100 p-4 p-lg-5 d-flex flex-column justify-content-center">
                    <div class="hero-badge mb-3 align-self-start" style="background: rgba(255, 0, 122, 0.15); color: #A6004F;">
                        <span class="badge-dot" style="background: #A6004F;"></span> SEO Insight
                    </div>
                    <h1 class="display-5 fw-900 text-dark mb-3">
                        <span class="gradient-text-dynamic" style="background: linear-gradient(135deg, #FF007A 0%, #7A00FF 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?= htmlspecialchars($service['title']) ?></span> <br>
                        Build for Results.
                    </h1>
                    <p class="hero-subtext fs-6 text-dark opacity-75 mb-4 max-w-600">
                        <?= htmlspecialchars($service['desc']) ?>
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-2">
                        <a href="#leads-form" class="btn btn-punchy" title="Navigate to Project Inquiry Form">Start Project <i class="bi bi-chevron-right ms-2"></i></a>
                        <a href="#packages" class="btn btn-outline-dark-punchy" title="View Our Service Packages">View Packages</a>
                    </div>
                </div>
            </div>

            <!-- Hero Lead Form Box -->
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200" id="leads-form">
                
                <div class="bento-card h-100 p-4 bg-dark text-white d-flex flex-column justify-content-center position-relative overflow-hidden hero-form-box">
                    <!-- Ambient Glow -->
                    <div class="position-absolute top-0 end-0 rounded-circle hero-form-glow" style="background: radial-gradient(circle, rgba(255, 0, 122, 0.4) 0%, transparent 70%);"></div>
                    
                    <!-- Social Icons Corner -->
                    <div class="position-absolute top-0 end-0 p-3 z-2 form-social-icons d-flex gap-3">
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" title="Connect with us on LinkedIn"><i class="bi bi-linkedin fs-6"></i></a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" title="Follow our updates on Instagram"><i class="bi bi-instagram fs-6"></i></a>
                        <a href="https://wa.me/919972988194" target="_blank" rel="noopener noreferrer" title="Chat with us on WhatsApp"><i class="bi bi-whatsapp fs-6"></i></a>
                    </div>

                    <div class="form-header mb-3 position-relative z-1 mt-3">
                        <div class="badge bg-white text-dark rounded-pill px-2 py-1 mb-2 fw-bold d-inline-flex align-items-center gap-2 border border-2 border-dark status-badge-custom">
                            <div class="status-dot status-dot-custom" style="background: #FF007A;"></div>
                            Accepting Sites
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
                        <input type="hidden" name="source" value="<?= htmlspecialchars($service['title'] ?? 'SEO') ?> Inquiry">
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
                            <div class="av bg-google-blue text-white" title="Priya G.">P</div>
                            <div class="av bg-google-red text-white" title="Rohan V.">R</div>
                            <div class="av bg-google-green text-white" title="Neha D.">N</div>
                        </div>
                        <div>
                            <div class="fw-900 text-dark mb-0">99% Retention</div>
                            <span class="small opacity-50">Keyword Success Rate</span>
                        </div>
                    </div>
                    <div class="badge-accent-v2">Top Tier</div>
                </div>
            </div>

            <!-- Technology / Tool Box -->
            <div class="col-lg-7" data-aos="zoom-in" data-aos-delay="400">
                <div class="bento-card marquee-card-v2 p-4 overflow-hidden d-flex align-items-center h-100">
                    <div class="marquee-content-v2 d-flex gap-5">
                        <span class="marquee-item">PREMIUM RANK ENGINES • SEMANTIC CLUSTERS • SYSTEM SCALING • </span>
                        <span class="marquee-item">PREMIUM RANK ENGINES • SEMANTIC CLUSTERS • SYSTEM SCALING • </span>
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
                <h2 class="display-4 fw-900 text-dark mb-4">Transform Your Business with Leading <span class="text-accent-dynamic"><?= htmlspecialchars($service['title']) ?></span></h2>
                <p class="fs-5 text-muted max-w-800">Looking to take your domain authority to the next level? Our expert team creates visually integrated, technical SEO-driven digital assets that help you rank #1 and convert organic search traffic on autopilot.</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-light">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-graph-up-arrow fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Technical On-Page Audits for Maximum Indexing</h3>
                    <p class="text-muted mb-4 fs-5">A website is only useful if search engines can index it properly. We design intuitive, keyword-optimized <strong>semantic structures</strong> that prioritize the crawler's path. By streamlining tag structures and canonical hierarchies, we ensure your site is perfectly cataloged. This is the core of our <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">SEO Strategy</a>, ensuring your pages command Google authority with every visit.</p>
                    <a href="#strategy" class="btn btn-dark-punchy rounded-pill px-4" title="Deep dive into our Strategy framework">See Our Strategy <i class="bi bi-arrow-down ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-white shadow-punchy-sm">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-phone-vibrate fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Mobile-Optimized for Core Web Vitals Standards</h3>
                    <p class="text-muted mb-4 fs-5">In today's mobile-first indexing world, your site speed represents a direct ranking factor. Our <strong>Optimized Designs</strong> adapt perfectly to mobile screens, providing a sub-second layout shift experience. We focus on zero cumulative layout shift (CLS) and rapid mobile rendering, as outlined in Google Search Console compliance guidelines.</p>
                    <a href="#technology" class="btn btn-dark-punchy rounded-pill px-4" title="Review our Technical Stack">Tech Specs <i class="bi bi-cpu ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-white shadow-punchy-sm">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-palette-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Bespoke Content Siloing for Unique Niches</h3>
                    <p class="text-muted mb-4 fs-5">Your business has unique buyer personas, and your content should speak directly to them. We avoid thin content pages in favor of <strong>Detailed Content Clusters</strong> that establish your <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">Brand Authority</a>. We design keyword structures around commercial search intent to turn organic traffic into active inquiries.</p>
                    <a href="<?= BASE_URL ?>work" class="btn btn-dark-punchy rounded-pill px-4" title="Navigate to Work Showcase">View Portfolio <i class="bi bi-grid-3x3-gap ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-light">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-lightning-charge-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Lighthouse speed tuning for lower Bounce Rates</h3>
                    <p class="text-muted mb-4 fs-5">Page loading speed is directly tied to customer trust. Our websites are engineered to be <strong>Sub-Second Fast</strong>, keeping bounce rates exceptionally low. We optimize server caches, asset structures, and modern compression tools, as verified directly via Google's page speed tools.</p>
                    <a href="#performance" class="btn btn-dark-punchy rounded-pill px-4" title="View our performance and speed metrics">Speed Metrics <i class="bi bi-lightning ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-12" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 transition-all bg-dark text-white shadow-accent">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="fw-900 mb-3 text-white">Authority Link Pipelines for Compounding Traffic</h3>
                            <p class="text-white opacity-75 mb-4 fs-5">Don't settle for static pages. We build **High-Authority Backlink Portfolios** from the ground up, guaranteeing search engine trust. Our off-page links are manually acquired from high-trust platforms, matching the highest standards of white-hat SEO.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a href="<?= BASE_URL ?>services/website" class="btn btn-punchy btn-lg" title="Learn more about our Web Engineering">Explore Website Pillar <i class="bi bi-code-square ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Local Dominance Section -->
<section class="local-dominance-section section-padding bg-white">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-4">Mastering <span class="text-accent-dynamic">Local Proximity SEO</span></h2>
                <p class="fs-5 text-muted">An organic campaign is only as powerful as its localized visibility. We specialize in dynamic proximity optimizations that ensure your business ranks #1 in every regional hub.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-light shadow-punchy-sm">
                    <h4 class="fw-900 mb-3"><i class="bi bi-geo-alt text-accent-dynamic me-2"></i> Stronger Proximity Optimization</h4>
                    <p class="small text-muted mb-0">Strengthen your connection with regional buyers through hyper-localized content directories and map-pin optimizations that boost search proximity rankings.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-white shadow-punchy-sm">
                    <h4 class="fw-900 mb-3"><i class="bi bi-graph-up text-accent-dynamic me-2"></i> Higher Local Map Rankings</h4>
                    <p class="small text-muted mb-0">Secure higher Local 3-Pack rankings. Connect with nearby customers, increase clicks, and dominate GMB listings effortlessly.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-light shadow-punchy-sm">
                    <h4 class="fw-900 mb-3"><i class="bi bi-search text-accent-dynamic me-2"></i> Intent-Based Keyword Audits</h4>
                    <p class="small text-muted mb-0">Target commercial keywords with laser precision. Our maps ensure you rank for specific localized searches, driving highly qualified leads.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-dark text-white">
                    <h4 class="fw-900 mb-3 text-accent-dynamic"><i class="bi bi-link-45deg me-2"></i> High-Trust Local Citations</h4>
                    <p class="small opacity-75 mb-0">Boost search visibility with precise business citations and directory placements that signal geographic relevance to Google's ranking filters.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-white border-accent-dynamic">
                    <h4 class="fw-900 mb-3"><i class="bi bi-google text-accent-dynamic me-2"></i> GMB Profile Dominance</h4>
                    <p class="small text-muted mb-0">Maximize your Google My Business profiles. We enhance maps with targeted geo-tags, product listings, and dynamic post schedules.</p>
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
                <h2 class="display-4 fw-900 text-dark mb-4">Case Studies: <span class="text-accent-dynamic">SEO Success Stories</span></h2>
                <p class="fs-5 text-muted">At Crea8ve Cool, every project tells a story of organic strategy and measurable ROI. Explore how we scaled domains globally.</p>
            </div>
            <div class="col-lg-5 text-lg-end pb-3">
                <a href="<?= BASE_URL ?>work" class="btn btn-outline-dark-punchy rounded-pill px-5">View All Work</a>
            </div>
        </div>

        <div class="row g-4">
            <?php 
            $case_studies = [
                ['name' => 'Dhananjay Creations', 'niche' => 'Saree Optimization | Delhi', 'results' => ['Ranked #1 for regional wholesale sarees', 'Organic traffic grew by 350%', 'Monthly inquiry volume increased by 5x']],
                ['name' => 'Formative Sports', 'niche' => 'Sportswear Dominance | Australia', 'results' => ['Dominated national organic sportswear terms', 'Acquired 150+ high-authority guest posts', 'First-page keyword count tripled']],
                ['name' => 'Academic Global School', 'niche' => 'CBSE Visibility | Gorakhpur', 'results' => ['Claimed #1 in map 3-packs', 'Ranked for best local school terms', 'Organic admissions increased by 40%']],
                ['name' => 'Marina Dee', 'niche' => 'Creative Rankings | Melbourne', 'results' => ['Secured #1 ranking in niche visual niches', 'Integrated high-converting schema codes', 'Booking inquiries increased by 90%']],
                ['name' => 'DRH Sports', 'niche' => 'International Supply SEO | Dominica', 'results' => ['B2B manufacturing organic visibility', 'Ranked for global export keywords', 'Direct inbound bulk leads increased by 120%']]
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
                    <a href="<?= BASE_URL ?>work" class="text-accent-dynamic fw-900 text-decoration-none small" title="Read the full success story for <?= $cs['name'] ?>">READ FULL CASE STUDY <i class="bi bi-arrow-right"></i></a>
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
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="Organic SEO Growth and Business Scaling" title="Crea8ve Cool — Search Engine Optimization for Rapid Growth" class="img-fluid rounded-4">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="display-5 fw-900 text-dark mb-4">Accelerate Your Domain Rating with <span class="text-accent-dynamic">Advanced SEO Engineering</span></h2>
                <p class="fs-5 text-muted mb-4">Your search engine positioning is more than simple traffic—it’s your <strong>growth engine</strong>. We design innovative, crawler-friendly semantic frameworks that captivate search engines, enhance <strong>User Experience</strong>, and drive measurable inbound inquiries. At Crea8ve Cool, we understand that whether you're a local boutique or an established enterprise, your <a href='<?= BASE_URL ?>services/website' class='text-dark fw-bold text-decoration-underline' title="Explore our High-Performance Web Designing and Development services">Custom Web Platform</a> must dominate search grids, outrank competitors, and turn impressions into revenue.</p>
                <p class="fs-5 text-muted mb-5">Let's grow together by leveraging our expertise in <a href='<?= BASE_URL ?>services/website' title='Scale with High-End Web Design' class='text-accent-dynamic fw-bold'>Web Design</a> and <strong>Conversion Rate Optimization (CRO)</strong>. We focus on the intersection of technical crawlability and domain authority.</p>
                <a href="#leads" class="btn btn-punchy btn-lg" title="Start your growth journey now">Start Your Growth Journey</a>
            </div>
        </div>
    </div>
</section>

<!-- Authority Narrative Section 2: The Strategic Partner -->
<section id="partner-intro" class="strategic-partner-section section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12" data-aos="fade-up">
                <h2 class="display-4 fw-900 text-dark mb-5 text-center">Drive Success with the <span class="text-accent-dynamic">Best SEO Agency in <?= htmlspecialchars($locationContext) ?></span></h2>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <p class="fs-5 text-muted mb-4">A powerful organic presence forms the core of success for your business online. It's that critical <strong>first impression</strong> that searchers will find—a platform to prove your authority, demonstrate value, and rank above competitors. Behind each thriving business is a website that combines organic authority with technical excellence.</p>
                <p class="fs-5 text-muted">Crea8ve Cool focuses on creating brilliant, SEO-hardened sites that attract your target audience and keep them engaged. We understand the specific challenges facing businesses today—from tight <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">Ad Budgets</a> to tough global competition and the urgency for quick, measurable organic traffic outcomes. Our strategy is aimed at meeting these needs.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-5 border-3 border border-dark rounded-5 text-white shadow-punchy-lg position-relative overflow-hidden auth-card-dark">
                    <div class="position-absolute top-0 end-0 w-100 h-100 auth-card-glow" style="background: radial-gradient(circle, rgba(255, 0, 122, 0.3) 0%, transparent 70%);"></div>
                    <h4 class="fw-900 mb-4 text-accent-dynamic position-relative z-1">The Authority Difference</h4>
                    <p class="mb-4 text-white position-relative z-1 text-auth-p">As a top-tier provider of <strong>SEO Optimization Services in <?= htmlspecialchars($locationContext) ?></strong>, we understand the unique needs of scaling brands. From bold content siloing to precise technical optimizations, we make sure your website reflects the true authority of your business.</p>
                    <p class="text-white position-relative z-1 text-auth-p">Our <a href='<?= BASE_URL ?>services/website' class='text-white fw-bold text-decoration-underline' title="Explore our High-Performance Website Engineering and Development services">Semantic Crawlability Approach</a> ensures your site functions perfectly for both humans and search engines, providing every user with a premium experience. We integrate modern trends in Schema, <a href='https://web.dev/vitals/' target='_blank' rel='noopener noreferrer' class='text-accent-dynamic fw-bold text-decoration-none' title="Learn about Google's Core Web Vitals speed guidelines on web.dev">Google Web Vitals Optimization</a>, and backlink acquisitions.</p>
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
                <h2 class="display-5 fw-900 text-dark mb-4">Exceptional Search Campaign Services That <span class="text-accent-dynamic">Businesses Count On</span></h2>
                <p class="fs-5 text-muted mb-4">Crea8ve Cool represents the distinctness of your business while delivering measurable success. We have worked hard to gain the trust of our clients by offering top-notch <a href='<?= BASE_URL ?>services/website' class='text-dark fw-bold text-decoration-underline' title="Explore our High-Performance Web Designing and Development services">Technical SEO Services</a>. We understand your needs, challenges, and dreams, and we blend organic creativity with absolute technical competence.</p>
                <p class="fs-5 text-muted mb-5">Our commitment to excellence, transparency, and satisfaction has enabled us to gain the trust of many scaling brands. Let's bring your vision to life as a digital masterpiece that dominates the search results and converts traffic into revenue.</p>
                
                <div class="d-grid gap-3">
                    <div class="d-flex align-items-center gap-3 p-3 bg-white border border-dark border-2 rounded-4">
                        <i class="bi bi-shield-check text-accent-dynamic fs-3"></i>
                        <span class="fw-800 text-dark">Commitment to High-Trust Backlink Quality</span>
                    </div>
                    <div class="d-flex align-items-center gap-3 p-3 bg-white border border-dark border-2 rounded-4">
                        <i class="bi bi-heart-fill text-accent-dynamic fs-3"></i>
                        <span class="fw-800 text-dark">Client-First Transparency Guarantee</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                <div class="p-2 bg-white border border-dark border-3 rounded-5 shadow-punchy-sm">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="Trusted SEO Experts and Digital Strategists" title="Crea8ve Cool — Reliable SEO Partner for Long-term Success" class="img-fluid rounded-4">
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
            <a href="#strategy" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Strategy section">STRATEGY</a>
            <a href="#performance" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Performance section">PERFORMANCE</a>
            <a href="#technology" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Technology section">TECHNOLOGY</a>
            <a href="#packages" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Pricing section">PRICING</a>
            <a href="#ecosystem" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1" title="View our Ecosystem section">ECOSYSTEM</a>
        </div>
        <a href="#leads-form" class="btn-quote-pill rounded-pill px-4 fw-900 text-decoration-none d-flex align-items-center justify-content-center btn-quote-custom" title="Request a custom quote">GET A QUOTE</a>
    </div>
</div>

<!-- Section 1: Strategy -->
<section id="strategy" class="seo-rich-content section-padding bg-white position-relative overflow-hidden">
    <div class="container">
        <div class="authority-content-wrapper mb-0">
            <div class="row g-4 align-items-center">
                    <div class="col-lg-7" data-aos="fade-right">
                        <h2 class="display-5 fw-900 mb-4">1. The Psychology of Search: <span class="text-accent-dynamic">Strategy Beyond Keywords</span></h2>
                        <p>When you look for a <strong>Search Engine Optimization (SEO)</strong> partner, you aren't just looking for someone to dump keywords on your site. You are looking for a growth partner who understands <strong>User Intent Psychology</strong> and <strong>Semantic Schema Architecture</strong>. At Crea8ve Cool, we don't start with random phrases; we start with a complete content cluster blueprint.</p>
                        <p>Every successful organic query must resolve three search goals: <em>Informational, Navigational, and Commercial Ready.</em> This is where our <strong>Competitor Gap Audits</strong> and <strong>Topic Siloing</strong> expertise comes into play. We map high-intent keyword targets that guide organic traffic directly toward your landing pages.</p>
                        <p>Our strategy integrates deeply with your <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">Web Conversion Rate</a> goals. We know that if your organic landing page doesn't convert, traffic is a wasted metric. That's why we build with 'Visual Gravity'—ensuring that every organic lead finds a strong call to action.</p>
                    </div>
                    <div class="col-lg-5" data-aos="fade-left">
                        <div class="sc-card">
                            <div class="sc-card-header">
                                <span class="sc-tag-pill">Our Framework</span>
                                <h4 class="fw-900 mb-0 mt-2 text-sc-title">The SEO Checklist</h4>
                            </div>
                            <div class="sc-card-body">
                                <div class="sc-item">
                                    <div class="sc-badge">01</div>
                                    <div>
                                        <div class="sc-item-label">Intent Keyword Mapping</div>
                                        <div class="sc-item-desc">We define commercial keywords — separating high-converting searches from generic terms.</div>
                                    </div>
                                </div>
                                <div class="sc-item">
                                    <div class="sc-badge">02</div>
                                    <div>
                                        <div class="sc-item-label">Semantic Topic Clustering</div>
                                        <div class="sc-item-desc">Engineering content clusters that establish undeniable search authority in your niche.</div>
                                    </div>
                                </div>
                                <div class="sc-item">
                                    <div class="sc-badge">03</div>
                                    <div>
                                        <div class="sc-item-label">Crawl Budget Preservation</div>
                                        <div class="sc-item-desc">Optimizing directory depths and menu items so Googlebot scans your pages seamlessly.</div>
                                    </div>
                                </div>
                                <div class="sc-item sc-item-last">
                                    <div class="sc-badge">04</div>
                                    <div>
                                        <div class="sc-item-label">Backlink Acquisition</div>
                                        <div class="sc-item-desc">Acquiring manual high-authority contextual links that pass powerful ranking points to your domain.</div>
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
            <h2 class="display-5 fw-900 mb-5 text-center">2. Tuning Site Speed for Rankings: <span class="text-accent-dynamic">Technical SEO Performance</span></h2>
            <div class="row g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <p class="fs-5">Page loading speed is a fundamental ranking signal. In a world of <a href='<?= BASE_URL ?>services/website' class='text-accent-dynamic fw-bold' title="Explore our High-Performance Web Designing and Development services">Next.js Web Applications</a> and fast connections, a slow loading site is buried in rankings. Our <strong>Technical Performance SEO</strong> process follows the 'Zero-Bloat' site speed architecture.</p>
                        <p>We don't build on heavy page builders that inject thousands of lines of useless script files. Instead, we write <strong>Clean Semantic Code</strong> and leverage light image assets to ensure your site scores a perfect 100/100 on Google PageSpeed Insights.</p>
                        <p>Our performance engineering includes advanced schema injects, server caching protocols, and code minification that complies directly with Google's Core Web Vitals guidelines.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="perf-card">
                            <div class="perf-card-title">Ranking Benchmarks</div>
                            <div class="perf-grid">
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                                    <div class="perf-val">100/100</div>
                                    <div class="perf-label">PageSpeed Score</div>
                                </div>
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-speedometer2"></i></div>
                                    <div class="perf-val">&lt;1.0s</div>
                                    <div class="perf-label">Crawl Latency</div>
                                </div>
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-image-fill"></i></div>
                                    <div class="perf-val">WebP</div>
                                    <div class="perf-label">Optimized Media</div>
                                </div>
                                <div class="perf-stat">
                                    <div class="perf-icon"><i class="bi bi-phone-fill"></i></div>
                                    <div class="perf-val">Perfect</div>
                                    <div class="perf-label">Mobile Audit Pass</div>
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
                            <div class="fortress-glow" style="background: radial-gradient(circle, rgba(255, 0, 122, 0.4) 0%, transparent 70%);"></div>
                            <div class="fortress-header">
                                <div class="fortress-shield-icon" style="background: #FF007A; color: #fff;"><i class="bi bi-search"></i></div>
                                <div>
                                    <div class="fortress-tag">SEO Stack</div>
                                    <h3 class="fortress-title">The Ranking Tools</h3>
                                </div>
                            </div>
                            <p class="fortress-desc">Crawlability is not an option — it is our base. We build on hardened markup schemas that are virtually guaranteed to rank efficiently on Google.</p>
                            <div class="fortress-rows">
                                <div class="fortress-row">
                                    <div class="fortress-row-icon"><i class="bi bi-shield-fill-check"></i></div>
                                    <div>
                                        <div class="fortress-row-label">Ahrefs &amp; SEMrush</div>
                                        <div class="fortress-row-desc">Deep keyword analysis, domain metrics, and tracking competitor gaps.</div>
                                    </div>
                                </div>
                                <div class="fortress-row">
                                    <div class="fortress-row-icon"><i class="bi bi-database-lock"></i></div>
                                    <div>
                                        <div class="fortress-row-label">Google Search Console</div>
                                        <div class="fortress-row-desc">Direct index monitoring, site-map setups, and Core Web Vitals tracking.</div>
                                    </div>
                                </div>
                                <div class="fortress-row">
                                    <div class="fortress-row-icon"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                                    <div>
                                        <div class="fortress-row-label">Screaming Frog</div>
                                        <div class="fortress-row-desc">Advanced technical crawler testing to uncover crawl obstacles.</div>
                                    </div>
                                </div>
                                <div class="fortress-row fortress-row-last">
                                    <div class="fortress-row-icon"><i class="bi bi-patch-check-fill"></i></div>
                                    <div>
                                        <div class="fortress-row-label">JSON-LD Schema Markup</div>
                                        <div class="fortress-row-desc">Automated business, FAQ, and local schema code injections.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
                        <h2 class="display-5 fw-900 mb-4">3. Technical Schema Setup: <span class="text-accent-dynamic">Absolute Crawl Authority</span></h2>
                        <p>Your business deserves more than standard SEO theories. Our <strong>Technical SEO Engineering</strong> ensures your platform maintains total authority with Google's search crawlers. We install advanced JSON-LD structured schemas, helping search engines immediately grasp your service offerings and local hubs.</p>
                        <p>Whether you need to configure structured reviews, map dynamic business locations, or set up product listing snippets, our clean architectures make it possible. We don't believe in digital ranking limitations — if your niche has high search volume, we can rank your brand there.</p>
                        <p>We also utilize local geo-link configurations across all our customized <a href='<?= BASE_URL ?>locations' class='text-accent-dynamic fw-bold' title="Explore our Dynamic Geographic Locations and Regional Cities Directory">Dynamic Cities Directory</a>. This level of 'Proximity Dominance' is what outranks high-budget national competitors. Make your organic presence legendary.</p>
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
                    <h2 class="display-5 fw-900 text-dark mb-3">4. Search Engine Dominance Glossary</h2>
                    <p class="fs-5 text-muted">Core concepts you should know to dominate your search market.</p>
                </div>
                
                <div class="premium-faq-wrapper mx-auto max-w-900" id="premiumGlossary">
                    <?php 
                    $glossary = [
                        ['q'=>'What is Local Map 3-Pack SEO?', 'a'=>'The <strong>Local 3-Pack</strong> refers to the three prominent local businesses featured at the top of Google Maps searches. We optimize GMB listings, geo-targeted signals, and NAP citations to rank your business there.'],
                        ['q'=>'What is Domain Authority (DA)?', 'a'=>'Domain Authority is a ranking score that predicts how likely a website is to rank in search results. We increase DA through technical site health optimization and acquiring high-trust contextual backlinks.'],
                        ['q'=>'Why are Content Clusters important?', 'a'=>'<strong>Content Clusters</strong> are groups of interlinked articles built around a central "pillar" topic. This siloing model demonstrates massive topical authority to Google, making it easier to rank for competitive terms.'],
                        ['q'=>'How does Schema Markup improve SEO?', 'a'=>'<strong>Schema Markup</strong> is structured code added to your HTML. It translates your site data directly for search spiders, enabling rich-snippets like review stars, FAQs, and event modules that boost clicks.'],
                        ['q'=>'What is Crawler Crawl Budget?', 'a'=>'Crawl Budget is the maximum number of pages search engines will scan on your site in a day. We optimize page structures, add canonical configurations, and eliminate thin duplicate links to protect your crawl budget.']
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
                <h2 class="display-5 fw-900 text-dark mb-4">Creating Campaigns That <span class="text-accent-dynamic">Deliver Organic Sales</span></h2>
                <p class="fs-5 text-muted mb-4">In today's digital-first world, an organic campaign must do more than just generate impressions—it must deliver visible, measurable leads. A well-optimized campaign is your most powerful asset for compounding growth, attracting and converting searchers into loyal clients.</p>
                <p class="fs-5 text-muted mb-5">At Crea8ve Cool, we specialize in <strong>Organic Search Domination</strong> that drives real success by combining technical speed, schema architecture, and authority links.</p>
                
                <div class="d-grid gap-4">
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">01</div>
                        <div>
                            <h5 class="fw-900 mb-1">Topical Authority Silos</h5>
                            <p class="small text-muted mb-0">Structured content models that immediately convince search engine crawlers of your domain's absolute authority.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">02</div>
                        <div>
                            <h5 class="fw-900 mb-1">User-Centric Landing Pages</h5>
                            <p class="small text-muted mb-0">High-converting layouts ensure organic visitors find exactly what they need with zero load delays.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="step-num-v2 text-accent-dynamic fw-900 fs-3">03</div>
                        <div>
                            <h5 class="fw-900 mb-1">Conversion-Focused Inbounds</h5>
                            <p class="small text-muted mb-0">Strategic CTA setups, optimized headers, and interactive elements designed to turn search terms into qualified revenue.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-5 border-3 border border-dark rounded-5 bg-white shadow-punchy-lg">
                    <h3 class="fw-900 mb-4">Campaigns That <span class="text-accent-dynamic">Rank and Convert</span></h3>
                    <p class="text-muted mb-4">Your search presence is more than an online index—it is a purpose-driven asset that connects with active buyers. We design around your specific goals, whether it is e-commerce scaling, B2B lead generation, or local dominance.</p>
                    
                    <ul class="list-unstyled d-grid gap-3 mb-0">
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-person-check-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Tailor-made Keyword Silos for Your Market</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-cpu-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Optimized Technical SEO Mastery</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-lightning-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Lighthouse Speed & Core Web Vitals Pass</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 p-3 bg-light rounded-4 border border-dark border-opacity-10">
                            <i class="bi bi-megaphone-fill text-accent-dynamic fs-4"></i>
                            <span class="fw-800 text-dark">Clear, Intent-Driven Conversion Funnels</span>
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
                <h2 class="display-4 fw-900 text-dark mb-4">Crafting Impactful <span class="text-accent-dynamic">Organic Campaign Designs</span></h2>
                <p class="fs-5 text-muted">A search campaign is more than simple keywords. We follow a meticulous 10-step blueprint to ensure your digital presence dominates results effortlessly.</p>
            </div>
        </div>

        <div class="vtabs-wrapper" data-aos="fade-up">
            <!-- Left: Step Nav -->
            <div class="vtabs-nav" id="vtabsNav">
                <div class="vtab-item active" data-tab="step1"><span class="vtab-num">01</span><span class="vtab-name">Goal Definition</span></div>
                <div class="vtab-item" data-tab="step2"><span class="vtab-num">02</span><span class="vtab-name">Keyword Audits</span></div>
                <div class="vtab-item" data-tab="step3"><span class="vtab-num">03</span><span class="vtab-name">Content Planning</span></div>
                <div class="vtab-item" data-tab="step4"><span class="vtab-num">04</span><span class="vtab-name">Simple Navigation</span></div>
                <div class="vtab-item" data-tab="step5"><span class="vtab-num">05</span><span class="vtab-name">Technical Repairs</span></div>
                <div class="vtab-item" data-tab="step6"><span class="vtab-num">06</span><span class="vtab-name">Schema Setup</span></div>
                <div class="vtab-item" data-tab="step7"><span class="vtab-num">07</span><span class="vtab-name">Site Speed tuning</span></div>
                <div class="vtab-item" data-tab="step8"><span class="vtab-num">08</span><span class="vtab-name">Link Building</span></div>
                <div class="vtab-item" data-tab="step9"><span class="vtab-num">09</span><span class="vtab-name">Local Maps SEO</span></div>
                <div class="vtab-item" data-tab="step10"><span class="vtab-num">10</span><span class="vtab-name">Rank Monitoring</span></div>
            </div>

            <!-- Right: Step Content -->
            <div class="vtabs-content">
                <div class="vtab-pane active" id="step1">
                    <div class="vtab-step-tag">Step 01</div>
                    <h3 class="vtab-title">Goal Definition</h3>
                    <p class="vtab-body">Every successful SEO campaign begins with absolute clarity of purpose. Before a single link is acquired, we sit down with you to define your primary business goals — whether that's capturing leads, raising local maps click-throughs, or driving wholesale sales. We translate those goals into commercial metrics and build every content silo around them.</p>
                </div>
                <div class="vtab-pane" id="step2">
                    <div class="vtab-step-tag">Step 02</div>
                    <h3 class="vtab-title">High-Intent Keyword Audits</h3>
                    <p class="vtab-body">Understanding exactly what search terms your customers use is what separates a high-converting campaign from a generic one. We conduct deep keyword audits — analysing commercial intent, competitor search gap positioning, and regional search volumes — to build a precise Target Keyword Map. This data dictates your content hierarchy, ensuring your brand targets buyers at peak purchase motivation.</p>
                </div>
                <div class="vtab-pane" id="step3">
                    <div class="vtab-step-tag">Step 03</div>
                    <h3 class="vtab-title">Content Planning</h3>
                    <p class="vtab-body">Content is the core engine of organic search authority. We architect strategic content silos — mapping each page's primary target phrase, contextual internal linking structures, and heading tags before drafting copy. This ensures your pages don't just solve user queries, but pass deep topical relevance to search engine crawler algorithms.</p>
                </div>
                <div class="vtab-pane" id="step4">
                    <div class="vtab-step-tag">Step 04</div>
                    <h3 class="vtab-title">Friction-Free Menu Architecture</h3>
                    <p class="vtab-body">Site navigation is the invisible hand that preserves Google's crawl budget. We engineer intuitive, crawlable page menus and URL systems — complying directly with advanced UX and crawl depth guidelines. Every link placement is deliberate. When page hierarchy is clean, search spiders crawl your site naturally with zero indexation obstacles.</p>
                </div>
                <div class="vtab-pane" id="step5">
                    <div class="vtab-step-tag">Step 05</div>
                    <h3 class="vtab-title">Technical Repairs</h3>
                    <p class="vtab-body">Broken links and duplicate tags destroy your site's authority instantly. We conduct technical audits — fixing sitemaps, canonical tags, redirects, and robots.txt files — ensuring flawless compatibility with search engines. Our systems use semantic HTML5 elements to guarantee your brand has perfect indexing signals across all platforms.</p>
                </div>
                <div class="vtab-pane" id="step6">
                    <div class="vtab-step-tag">Step 06</div>
                    <h3 class="vtab-title">Structured Schema Setup</h3>
                    <p class="vtab-body">A page without structured schema is blind to crawlers. We inject comprehensive JSON-LD schema markups — defining local business maps, article metadata, FAQ questions, and review nodes — ensuring Google immediately grasps your site details. This visual rich-snippet structure boosts organic CTR directly inside search grids.</p>
                </div>
                <div class="vtab-pane" id="step7">
                    <div class="vtab-step-tag">Step 07</div>
                    <h3 class="vtab-title">Optimized Loading Speed</h3>
                    <p class="vtab-body">Page speed is not a luxury — it is a direct Google ranking signal. We engineer our sites for sub-1.5 second Largest Contentful Paint using clean markup structures, light asset formats (WebP), server caching, and code minifications. A fast, technical site outranks bloated competitors and lowers paid ad costs.</p>
                </div>
                <div class="vtab-pane" id="step8">
                    <div class="vtab-step-tag">Step 08</div>
                    <h3 class="vtab-title">High-Authority Link Building</h3>
                    <p class="vtab-body">The difference between page 2 and page 1 is authority backlinks. We apply rigorous guest outreach and white-hat link strategies — obtaining contextual links from high-trust industry portals. Every link acts as a trust vote for Google, raising your domain rating and pushing your content to the absolute top of search feeds.</p>
                </div>
                <div class="vtab-pane" id="step9">
                    <div class="vtab-step-tag">Step 09</div>
                    <h3 class="vtab-title">Local Maps &amp; GMB Dominance</h3>
                    <p class="vtab-body">Local map ranking is essential for regional business leads. We optimize your GMB profile — building accurate local listings, local citations, and proximity-targeted signals — ensuring you command the map 3-packs. We also set up custom localized directories to drive massive proximity traffic across all target city networks.</p>
                </div>
                <div class="vtab-pane active-hidden" id="step10">
                    <div class="vtab-step-tag">Step 10</div>
                    <h3 class="vtab-title">Rank Monitoring &amp; Updates</h3>
                    <p class="vtab-body">An organic campaign is not a one-time product — it is an active digital asset that must adapt to search algorithm shifts. We monitor search console analytics, audit keyword rankings daily, and refresh content clusters regularly to preserve absolute ranking authority. In a dynamic search landscape that never sleeps, your brand shouldn't either.</p>
                </div>
            </div>
        </div>

        <!-- Dark Highlight Card -->
        <div class="row mt-5">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="p-5 border-3 border border-dark rounded-5 bg-dark text-white shadow-punchy-lg">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h4 class="fw-900 mb-3 text-accent-dynamic">The Critical Role of Rank Monitoring</h4>
                            <p class="text-updates">Daily rank updates are essential to protect your organic positions from competitor campaigns. We track keyword metrics, correct crawl obstacles, and update sitemaps to maintain absolute dominance. Maintain high topical authority and modern design to stay competitive in search landscapes.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                            <a href="#leads" class="btn btn-punchy px-5">Secure Your Future</a>
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
                <p class="fs-5 text-muted">Crea8ve Cool provides technical SEO and organic search scaling packages tailored for growing companies. All packages include technical audits, structured schema setups, and monthly rank dashboards.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php 
            $packages = [
                [
                    'name' => 'Lite',
                    'tagline' => 'Local Conquest',
                    'desc' => 'Dominate regional searches and claims your Google Business Profile visibility.',
                    'price' => '5,999',
                    'original_price' => '9,999',
                    'savings' => '40',
                    'features' => ['GMB Setup & Optimization', 'Local Keyword Mapping', '10 Target Business Citations', 'Core Technical Site Audit', 'Essential Schema Markup', 'Monthly Progress Dashboard', 'Excludes Backlink Acquisition', '14-Day Setup Delivery'],
                    'color' => '#6A5AE0',
                    'recommended' => false
                ],
                [
                    'name' => 'Plus',
                    'tagline' => 'National Authority',
                    'desc' => 'Scale across states and capture national e-commerce or SaaS search traffic.',
                    'price' => '14,990',
                    'original_price' => '24,990',
                    'savings' => '40',
                    'features' => ['Topic Cluster Blueprinting', 'Full On-Page Optimization', '5 Premium Guest Post Backlinks', 'Competitor Gap Mapping', 'Custom Landing Page Funnels', 'Technical Architecture Cleanup', 'Bi-Weekly Rank Audits', '30-Day Launch Pacing'],
                    'color' => '#FF007A',
                    'recommended' => true
                ],
                [
                    'name' => 'Premium',
                    'tagline' => 'Enterprise Domain',
                    'desc' => 'Total industry dominance, massive backlink pipelines, and continuous inbound leads.',
                    'price' => '34,990',
                    'original_price' => '54,990',
                    'savings' => '36',
                    'features' => ['Continuous Backlink Injection', 'Technical Architecture Repairs', 'PR Media Outreach & Mentions', 'Custom Advanced Schema Injectors', 'Competitive Keyword Hijack Campaigns', 'Dedicated SEO Consultant', 'Unlimited Keyword Tracking', 'Ongoing Maintenance Partnership'],
                    'color' => '#FF5E36',
                    'recommended' => false
                ]
            ];
            foreach($packages as $pkg): 
                $accentColorCard = $pkg['color'];
            ?>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="card pricing-card h-100 border-3 border border-dark rounded-5 p-4 position-relative overflow-hidden <?= $pkg['recommended'] ? 'pricing-card-recommended' : '' ?>" style="box-shadow: 6px 6px 0px #111;">
                    <?php if($pkg['recommended']): ?>
                        <div class="badge bg-warning text-dark border border-dark border-2 rounded-pill px-3 py-1 position-absolute top-0 end-0 translate-middle-y me-4" style="font-weight: 900; font-size: 10px;">MOST POPULAR</div>
                    <?php endif; ?>
                    
                    <div class="card-body p-0 d-flex flex-column h-100">
                        <div class="monospace text-muted text-uppercase small font-weight-700"><?= $pkg['tagline'] ?></div>
                        <h4 class="fw-900 mt-1 mb-2 text-dark" style="font-size: 24px;"><?= $pkg['name'] ?></h4>
                        <p class="text-muted small mb-4" style="min-height: 40px; font-weight: 600;"><?= $pkg['desc'] ?></p>
                        
                        <div class="mb-4">
                            <span class="text-muted text-decoration-line-through small fw-bold">₹<?= $pkg['original_price'] ?></span>
                            <div class="d-flex align-items-baseline">
                                <span class="display-6 fw-900 text-dark">₹<?= $pkg['price'] ?></span>
                                <span class="text-muted small fw-bold ms-1">/ month</span>
                            </div>
                            <span class="badge bg-success text-white rounded-pill px-3 py-1 font-8 border border-dark mt-2">SAVE <?= $pkg['savings'] ?>% INCLUSIVE OF TAX</span>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-2 mb-5">
                            <?php foreach($pkg['features'] as $feat): ?>
                                <li class="d-flex align-items-center gap-2 small" style="font-weight: 700;">
                                    <i class="bi bi-patch-check-fill text-success fs-5"></i>
                                    <span><?= $feat ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="#leads-form" class="btn btn-punchy mt-auto py-3 text-white" style="background: <?= $accentColorCard ?>; border: 2px solid #111; box-shadow: 4px 4px 0px #111;" title="Get Started with <?= $pkg['name'] ?> Package">Get Started Now</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Geographic SEO Coverage Grid -->
<section class="locations-coverage-grid py-5 bg-white border-top border-dark border-3">
    <div class="container" style="max-width: 1240px;">
        <div class="row align-items-center mb-5" data-aos="fade-up">
            <div class="col-md-6">
                <span class="monospace font-9 text-uppercase text-accent-only fw-900 tracking-widest"><span class="presence-pulse-domestic" style="background: #FF007A;"></span> ACTIVE COVERAGE MAP</span>
                <h2 class="font-clash fw-900 text-uppercase text-dark mt-2 mb-1" style="font-size: 2rem; letter-spacing: -1px;">SEO Optimization &amp; Rank Hubs</h2>
                <p class="text-muted small mb-0">Explore our premium organic search &amp; localized brand scaling hubs.</p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <span class="badge bg-dark text-white rounded-pill px-3 py-2 text-uppercase font-9 border-2 border border-dark">Scale Local Markets</span>
            </div>
        </div>
        
        <div class="row g-3" data-aos="fade-up" data-aos-delay="100">
            <?php 
            $seo_locations = require APP_PATH . '/config/locations.php';
            foreach ($seo_locations as $key => $loc): 
                $activeClass = (isset($data['location']) && $data['location']['name'] === $loc['name']) ? 'border-primary shadow-punchy-accent text-primary' : '';
            ?>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="<?= BASE_URL ?>services/seo/<?= $key ?>" class="text-decoration-none" title="Organic SEO Strategy in <?= htmlspecialchars($loc['name']) ?>">
                    <div class="p-3 border-3 border border-dark rounded-4 h-100 bg-white transition-all text-dark hover-translate-up <?= $activeClass ?>" style="box-shadow: 4px 4px 0px #111;">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="fw-800 text-uppercase font-10 tracking-widest text-muted" style="font-size: 8px;"><?= $loc['type'] === 'domestic' ? '🇮🇳 DOMESTIC' : '🌐 GLOBAL' ?></span>
                            <i class="bi bi-arrow-up-right font-10"></i>
                        </div>
                        <h4 class="h6 fw-900 mb-1" style="font-size: 14px;"><?= $loc['name'] ?></h4>
                        <span class="text-muted d-block text-truncate" style="font-size: 10px; font-weight: 700;"><?= $loc['desc'] ?></span>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.hover-translate-up {
    transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s ease;
}
.hover-translate-up:hover {
    transform: translateY(-5px);
    box-shadow: 6px 6px 0px #111 !important;
}
</style>
