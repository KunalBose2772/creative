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
    "image" => BASE_URL . "public/assets/img/logo.png",
    "@id" => BASE_URL,
    "url" => BASE_URL,
    "telephone" => "+91-9999999999",
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
            "name" => "What is the starting price for web design?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Our Small Business Web Design packages start at ₹5,999 for WordPress-based sites."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Do you provide SEO with web design?",
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
    'website' => [
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
?>

<!-- Stunning Bento Service Hero -->
<section class="service-bento-hero pt-5 pb-5 position-relative overflow-hidden" style="--page-accent: <?= $accentColor ?>;">
    <div class="hero-bg-elements">
        <div class="blob-1"></div>
        <div class="blob-2"></div>
        <div class="hero-grid-overlay"></div>
    </div>
    
    <div class="container mt-5 pt-3" style="max-width:1300px;">
        <div class="row g-4 bento-grid">
            
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
                    <p class="hero-subtext fs-6 text-dark opacity-75 mb-4" style="max-width: 600px;">
                        <?= htmlspecialchars($service['description'] ?? $service['desc'] ?? '') ?>
                    </p>
                    <div class="hero-cta-group d-flex flex-wrap gap-2">
                        <a href="#leads-form" class="btn btn-punchy">Start Project <i class="bi bi-chevron-right ms-2"></i></a>
                        <a href="#packages" class="btn btn-outline-dark-punchy">View Packages</a>
                    </div>
                </div>
            </div>

            <!-- Hero Lead Form Box -->
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200" id="leads-form">
                <style>
                    .hero-form-input {
                        background: rgba(255,255,255,0.03) !important;
                        border: 2px solid rgba(255,255,255,0.1) !important;
                        border-radius: 12px !important;
                        padding: 10px 16px !important;
                        font-size: 14px !important;
                        color: #fff !important;
                        transition: all 0.3s ease;
                    }
                    .hero-form-input:focus {
                        background: rgba(255,255,255,0.08) !important;
                        border-color: var(--page-accent) !important;
                        box-shadow: none !important;
                    }
                    .hero-form-input::placeholder {
                        color: rgba(255,255,255,0.4) !important;
                    }
                    .form-social-icons a {
                        color: rgba(255,255,255,0.5);
                        transition: all 0.3s;
                    }
                    .form-social-icons a:hover {
                        color: var(--page-accent);
                        transform: translateY(-2px);
                    }
                </style>
                <div class="bento-card h-100 p-4 bg-dark text-white d-flex flex-column justify-content-center position-relative overflow-hidden" style="border: 3px solid #111; box-shadow: 8px 8px 0px var(--page-accent); border-radius: 24px;">
                    <!-- Ambient Glow -->
                    <div class="position-absolute top-0 end-0 rounded-circle" style="width: 150px; height: 150px; background: var(--page-accent); filter: blur(60px); opacity: 0.15; transform: translate(30%, -30%); z-index: 0;"></div>
                    
                    <!-- Social Icons Corner -->
                    <div class="position-absolute top-0 end-0 p-3 z-2 form-social-icons d-flex gap-3">
                        <a href="https://linkedin.com" target="_blank"><i class="bi bi-linkedin fs-6"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="bi bi-instagram fs-6"></i></a>
                        <a href="https://wa.me/919999999999" target="_blank"><i class="bi bi-whatsapp fs-6"></i></a>
                    </div>

                    <div class="form-header mb-3 position-relative z-1 mt-3">
                        <div class="badge bg-white text-dark rounded-pill px-2 py-1 mb-2 fw-bold d-inline-flex align-items-center gap-2 border border-2 border-dark" style="box-shadow: 3px 3px 0px var(--page-accent); font-size: 11px;">
                            <div class="status-dot" style="width: 6px; height: 6px; background: #10b981; border-radius: 50%; box-shadow: 0 0 10px #10b981;"></div>
                            Accepting Projects
                        </div>
                        <h3 class="fw-900 mb-1 fs-4 lh-sm text-white">Start Your Project</h3>
                        <p class="opacity-75 mb-0 small text-white">Tell us about your requirements and let's build something amazing.</p>
                    </div>
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
                        <button type="submit" class="btn btn-punchy w-100 mt-1 d-flex align-items-center justify-content-center gap-2" style="border-radius: 12px; font-weight: 900; padding: 10px; font-size: 15px;">
                            Send Inquiry <i class="bi bi-arrow-right fs-6"></i>
                        </button>
                        <div class="text-center mt-1">
                            <span class="opacity-50 fw-bold text-white" style="font-size: 11px;"><i class="bi bi-shield-lock-fill me-1 text-accent-dynamic"></i> 100% Secure & Confidential</span>
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
<section id="strategy" class="pitching-section section-padding-lg bg-white position-relative border-bottom border-dark border-opacity-5">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-10">
                <h2 class="display-4 fw-900 text-dark mb-4">Transform Your Business with a Leading <span class="text-accent-dynamic"><?= htmlspecialchars($service['title']) ?> Company</span></h2>
                <p class="fs-5 text-muted" style="max-width: 800px;">Looking to take your brand to the next level? Our expert team creates visually stunning, high-performance digital assets that help you stand out and connect with your audience on a deeper level.</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-light">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-people-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">User-Friendly Interfaces for Maximum Engagement</h3>
                    <p class="text-muted mb-4 fs-5">A website is your 24/7 salesperson. We design intuitive, <strong>User-Friendly Websites</strong> that prioritize the <a href='https://www.nngroup.com/articles/definition-user-experience/' target='_blank' class='text-dark fw-bold text-decoration-underline'>visitor's journey</a>. By streamlining navigation and clarifying calls-to-action, we ensure your audience stays engaged. This is the core of our <a href='/cr/services/uiux' class='text-accent-dynamic fw-bold'>UI/UX Strategy</a>, ensuring your brand resonates with every click.</p>
                    <a href="#strategy" class="btn btn-dark-punchy rounded-pill px-4">See Our Strategy <i class="bi bi-arrow-down ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-white shadow-punchy-sm">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-phone-vibrate fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Mobile-Optimized for the Modern Shopper</h3>
                    <p class="text-muted mb-4 fs-5">In today's mobile-first world, your site must be flawless on every screen. Our <strong>Mobile-Optimized Designs</strong> adapt perfectly to any device, providing a <a href='/cr/services/pwa' class='text-accent-dynamic fw-bold'>Native-App Experience</a>. We focus on touch-friendly interfaces and rapid mobile rendering, as outlined in <a href='https://developers.google.com/search/mobile-sites/mobile-first-indexing' target='_blank' class='text-dark fw-bold text-decoration-underline'>Google's Mobile Indexing Guide</a>.</p>
                    <a href="#technology" class="btn btn-dark-punchy rounded-pill px-4">Tech Specs <i class="bi bi-cpu ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-white shadow-punchy-sm">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-palette-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Customized Designs for Unique Brands</h3>
                    <p class="text-muted mb-4 fs-5">Your business is unique, and your website should be too. We avoid generic templates in favor of <strong>Customized Designs</strong> that capture your <a href='/cr/services/branding' class='text-accent-dynamic fw-bold'>Brand Personality</a>. We work closely with you to ensure every visual element aligns with your core values, much like our successful <a href='/cr/work' class='text-dark fw-bold text-decoration-underline'>Portfolio Projects</a>.</p>
                    <a href="/cr/work" class="btn btn-dark-punchy rounded-pill px-4">View Portfolio <i class="bi bi-grid-3x3-gap ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 h-100 transition-all bg-light">
                    <div class="icon-box-punchy mb-4">
                        <i class="bi bi-lightning-charge-fill fs-1"></i>
                    </div>
                    <h3 class="fw-900 mb-3">Fast Loading for Better User Experience</h3>
                    <p class="text-muted mb-4 fs-5">Speed is the foundation of trust. Our websites are engineered to be <strong>Lightning Fast</strong>, with a focus on sub-second load times. We optimize everything from server-side scripts to client-side assets, ensuring your <a href='/cr/services/seo' class='text-accent-dynamic fw-bold'>SEO Rankings</a> soar. Check your current speed on <a href='https://pagespeed.web.dev/' target='_blank' class='text-dark fw-bold text-decoration-underline'>PageSpeed Insights</a>.</p>
                    <a href="#performance" class="btn btn-dark-punchy rounded-pill px-4">Speed Metrics <i class="bi bi-lightning ms-2"></i></a>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-12" data-aos="fade-up">
                <div class="pitch-card p-5 border-3 border border-dark rounded-5 transition-all bg-dark text-white" style="box-shadow: 12px 12px 0px var(--page-accent);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="fw-900 mb-3 text-white">SEO-Friendly Designs for Organic Growth</h3>
                            <p class="text-white opacity-75 mb-4 fs-5">Don't just launch; dominate. We build <strong>SEO-Friendly Websites</strong> from the ground up, ensuring that search engines love your site. Our architecture follows <a href='https://schema.org/' target='_blank' class='text-accent-dynamic fw-bold text-decoration-none'>Schema.org Best Practices</a> and integrates seamlessly with our <a href='/cr/services/marketing' class='text-accent-dynamic fw-bold'>Full-Scale Marketing Campaigns</a>.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a href="/cr/services/seo" class="btn btn-punchy btn-lg">Explore SEO Pillar <i class="bi bi-graph-up-arrow ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</section>

<style>
.pitch-card {
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.pitch-card:hover {
    transform: translateY(-10px);
    border-color: var(--page-accent) !important;
}
.icon-box-punchy {
    width: 80px;
    height: 80px;
    background: var(--page-accent);
    color: var(--text-dark);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    border: 3px solid var(--text-dark);
}
.section-padding-lg {
    padding: 100px 0;
}
<!-- Core Excellence Pillars -->
<section class="excellence-pillars-section section-padding bg-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="pillar-card-v2 p-4 text-center border-2 border border-dark rounded-5 h-100 transition-all">
                    <div class="p-icon mb-3 text-accent-dynamic"><i class="bi bi-lightning-charge fs-1"></i></div>
                    <h4 class="fw-900 mb-2">Fast-Loading & High-Performance</h4>
                    <p class="small text-muted mb-0">Speed-optimized architectures designed to reduce bounce rates and maximize <strong>User Experience</strong> through clean, <a href='/cr/services/website' class='text-dark fw-bold'>Modern Coding</a>.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="50">
                <div class="pillar-card-v2 p-4 text-center border-2 border border-dark rounded-5 h-100 transition-all shadow-punchy-sm">
                    <div class="p-icon mb-3 text-accent-dynamic"><i class="bi bi-wallet2 fs-1"></i></div>
                    <h4 class="fw-900 mb-2">Affordable Solutions for Small Business</h4>
                    <p class="small text-muted mb-0">High-quality <a href='/cr/services/website' class='text-dark fw-bold'>Web Design</a> at a price that fits your budget without compromising on engineering excellence.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pillar-card-v2 p-4 text-center border-2 border border-dark rounded-5 h-100 transition-all shadow-punchy-sm">
                    <div class="p-icon mb-3 text-accent-dynamic"><i class="bi bi-graph-up-arrow fs-1"></i></div>
                    <h4 class="fw-900 mb-2">SEO-Optimized Engineering</h4>
                    <p class="small text-muted mb-0">Built using the latest <strong>SEO Techniques</strong> to rank higher and drive <a href='/cr/services/seo' class='text-accent-dynamic fw-bold'>Organic Traffic</a> and high-intent leads.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="pillar-card-v2 p-4 text-center border-2 border border-dark rounded-5 h-100 transition-all">
                    <div class="p-icon mb-3 text-accent-dynamic"><i class="bi bi-phone fs-1"></i></div>
                    <h4 class="fw-900 mb-2">Mobile Responsive Mastery</h4>
                    <p class="small text-muted mb-0">Beautiful, user-friendly designs that look perfect on mobile, tablets, and desktops. Optimized for <a href='/cr/services/pwa' class='text-dark fw-bold'>Touch Interaction</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.pillar-card-v2:hover {
    transform: translateY(-5px);
    border-color: var(--page-accent) !important;
}
</style>
<!-- Local Dominance Section -->
<section class="local-dominance-section section-padding bg-white">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-4">Mastering <span class="text-accent-dynamic">Local Dominance</span></h2>
                <p class="fs-5 text-muted">A website is only as powerful as its visibility. We specialize in localized strategies that ensure you aren't just 'online'—you're at the top of every local search result.</p>
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
                    <p class="small text-muted mb-0">Secure higher <a href='/cr/services/seo' class='text-dark fw-bold'>Local SEO Rankings</a>. Connect with nearby customers, increase foot traffic, and stand out in the map pack effortlessly.</p>
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
                    <p class="small opacity-75 mb-0">Boost credibility with accurate <a href='/cr/services/marketing' class='text-white fw-bold'>Business Listings</a> and strategic local backlinks that signal authority to Google's proximity algorithms.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 border-2 border border-dark rounded-5 h-100 bg-white border-accent-dynamic">
                    <h4 class="fw-900 mb-3"><i class="bi bi-google text-accent-dynamic me-2"></i> GMB Optimization Mastery</h4>
                    <p class="small text-muted mb-0">Maximize your <a href='https://www.google.com/business/' target='_blank' class='text-dark fw-bold'>Google My Business</a> profile. We enhance rankings with tailored updates, image optimization, and review management strategies.</p>
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
                <a href="/cr/work" class="btn btn-outline-dark-punchy rounded-pill px-5">View All Work</a>
            </div>
        </div>

        <div class="row g-4">
            <?php 
            $case_studies = [
                ['name' => 'Dhananjay Creations', 'niche' => 'Saree Manufacturers | Delhi', 'results' => ['Website with SEO (Multiple Locations)', 'Brand Image Building', 'GMB Ranking Optimization']],
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
                                <i class="bi bi-star-fill text-accent-dynamic" style="font-size: 10px;"></i>
                                <span class="opacity-75"><?= $res ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="/cr/work" class="text-accent-dynamic fw-900 text-decoration-none small">READ FULL CASE STUDY <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.case-card:hover {
    transform: translateY(-10px) rotate(1deg);
    box-shadow: 15px 15px 0px var(--page-accent);
    border-color: var(--page-accent) !important;
}
.border-accent-dynamic { border-color: var(--page-accent) !important; border-width: 3px !important; }
</style>

<!-- Authority Narrative Section 1: The Growth Engine -->
<section class="growth-engine-section section-padding bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="p-2 bg-white border border-dark border-3 rounded-5 shadow-punchy-sm">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="Business Growth" class="img-fluid rounded-4">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="display-5 fw-900 text-dark mb-4">Accelerate Your Business Growth with <span class="text-accent-dynamic">Unmatched Web Engineering</span></h2>
                <p class="fs-5 text-muted mb-4">Your website is more than a digital presence—it’s your <strong>growth engine</strong>. We design innovative, user-focused platforms that captivate audiences, enhance <strong>User Experience</strong>, and drive measurable results. At Crea8ve Cool, we understand that whether you're a startup or an established enterprise, your <a href='/cr/services/website' class='text-dark fw-bold text-decoration-underline'>Custom Web Solution</a> must ensure you stand out, attract customers, and turn clicks into conversions.</p>
                <p class="fs-5 text-muted mb-5">Let's grow together by leveraging our expertise in <a href='/cr/services/marketing' class='text-accent-dynamic fw-bold'>Performance Marketing</a> and <strong>Conversion Rate Optimization (CRO)</strong>. We focus on the intersection of brand identity and technical excellence, as seen in our <a href='/cr/work' class='text-dark fw-bold text-decoration-underline'>Featured Case Studies</a>.</p>
                <a href="#leads" class="btn btn-punchy btn-lg">Start Your Growth Journey</a>
            </div>
        </div>
    </div>
</section>

<!-- Authority Narrative Section 2: The Strategic Partner -->
<section id="technology" class="strategic-partner-section section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12" data-aos="fade-up">
                <h2 class="display-4 fw-900 text-dark mb-5 text-center">Drive Success with the <span class="text-accent-dynamic">Best Web Design Services in India</span></h2>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <p class="fs-5 text-muted mb-4">A well-designed website forms the core of success for your business online. It's that critical <strong>first impression</strong> that your audience will have—a platform to introduce your brand, demonstrate value, and convince visitors to take action. Behind each thriving business is a website that combines aesthetic appeal with technical functionality, and we deliver exactly that.</p>
                <p class="fs-5 text-muted">Crea8ve Cool focuses on creating brilliant websites that attract your target audience and keep them engaged. We understand the specific challenges facing businesses today—from tight <a href='/cr/services/marketing' class='text-accent-dynamic fw-bold'>Marketing Budgets</a> to tough global competition and the urgency for quick, measurable outcomes. Our strategy is aimed at meeting these needs while maximizing long-term productivity and <a href='/cr/services/seo' class='text-accent-dynamic fw-bold'>Organic Growth</a>.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-5 border-3 border border-dark rounded-5 text-white shadow-punchy-lg position-relative overflow-hidden" style="background: linear-gradient(145deg, #000 0%, #000 75%, rgba(<?= hexToRgb($accentColor) ?>, 0.12) 100%); border-color: #111 !important;">
                    <div class="position-absolute top-0 end-0 w-100 h-100" style="background: radial-gradient(circle at top right, rgba(<?= hexToRgb($accentColor) ?>, 0.1), transparent 70%); pointer-events: none;"></div>
                    <h4 class="fw-900 mb-4 text-accent-dynamic position-relative z-1">The Authority Difference</h4>
                    <p class="mb-4 text-white position-relative z-1" style="font-size: 1.1rem; line-height: 1.8; opacity: 1;">As a top-tier provider of <strong>Web Design Services in India</strong>, we understand the unique needs of scaling brands. From bold, eye-catching visuals to easy-to-navigate layouts, we make sure your website reflects the true identity and values of your business.</p>
                    <p class="text-white position-relative z-1" style="font-size: 1.1rem; line-height: 1.8; opacity: 1;">Our <a href='/cr/services/pwa' class='text-white fw-bold text-decoration-underline'>Mobile-First Design Approach</a> ensures your site functions perfectly on all devices, providing every user with a seamless experience. We integrate modern trends in design, <a href='https://web.dev/vitals/' target='_blank' class='text-accent-dynamic fw-bold text-decoration-none'>Google Web Vitals Optimization</a>, and intuitive use into every production.</p>
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
                <p class="fs-5 text-muted mb-4">Crea8ve Cool represents the distinctness of your business while delivering measurable success. We have worked hard to gain the trust of our clients by offering top-notch <a href='/cr/services/website' class='text-dark fw-bold text-decoration-underline'>Web Engineering Services</a>. We understand your needs, challenges, and dreams, and we blend creativity with absolute technical competence.</p>
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
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="Team Trust" class="img-fluid rounded-4">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategic Floating Sub-Navigation -->
<div class="floating-sub-nav d-none d-lg-block position-fixed start-50 translate-middle-x scrolled-up" style="z-index: 1050; bottom: 30px;">
    <div class="nav-pill-wrapper bg-dark p-1 rounded-pill shadow-punchy-lg border border-white border-opacity-10 d-flex align-items-center" style="background: rgba(0,0,0,0.92); backdrop-filter: blur(15px);">
        <div class="nav-links d-flex px-4 gap-4">
            <a href="#strategy" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1">STRATEGY</a>
            <a href="#performance" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1">PERFORMANCE</a>
            <a href="#technology" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1">TECHNOLOGY</a>
            <a href="#packages" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1">PRICING</a>
            <a href="#ecosystem" class="sub-nav-link fw-800 text-white opacity-50 text-decoration-none small letter-spacing-1">ECOSYSTEM</a>
        </div>
        <a href="#leads-form" class="btn-quote-pill rounded-pill px-4 fw-900 text-decoration-none d-flex align-items-center justify-content-center" style="font-size: 10px; height: 32px; background: var(--page-accent); color: #000; transition: all 0.3s; border: none;">GET A QUOTE</a>
    </div>
</div>

<style>
.floating-sub-nav {
    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}
.sub-nav-link {
    transition: all 0.3s;
    font-size: 10px;
}
.sub-nav-link:hover {
    opacity: 1 !important;
    color: var(--page-accent) !important;
}
.floating-sub-nav.scrolled-up {
    transform: translateX(-50%) translateY(150%);
}
.btn-quote-pill:hover {
    background: #fff !important;
    color: #000 !important;
}
</style>

<script>
window.addEventListener('scroll', function() {
    const nav = document.querySelector('.floating-sub-nav');
    if (window.scrollY > 800) {
        nav.classList.remove('scrolled-up');
    } else {
        nav.classList.add('scrolled-up');
    }
});
</script>

<!-- Section 1: Strategy -->
<section id="strategy" class="seo-rich-content section-padding bg-white position-relative overflow-hidden">
    <div class="container">
        <div class="authority-content-wrapper mb-0">
            <div class="row g-4 align-items-center">
                    <div class="col-lg-7" data-aos="fade-right">
                        <h2 class="display-5 fw-900 mb-4">1. The Psychology of Web Success: <span class="text-accent-dynamic">Strategy Beyond Code</span></h2>
                        <p>When you look for a <strong>Small Business Web Design</strong> partner, you aren't just looking for someone to build a page. You are looking for a growth partner who understands <strong>User Psychology</strong> and <strong>Conversion Architecture</strong>. At Crea8ve Cool, we don't start with a template; we start with a blueprint of your customer's mind.</p>
                        <p>Every successful website must answer three questions in the first 3 seconds: <em>What do you offer? How does it make my life better? How do I get it?</em> This is where our <strong>Creative Branding</strong> and <strong>UI/UX Design</strong> expertise comes into play. We utilise the 'F-Pattern' layout and strategic whitespace to guide visitors directly toward conversion.</p>
                        <p>Our strategy integrates deeply with your <a href='/cr/services/marketing' class='text-accent-dynamic fw-bold'>Performance Marketing</a> goals. We know that if your landing page doesn't resonate, your ad spend is wasted. That's why we build with 'Visual Gravity'—ensuring that every scroll leads to a deeper trust signal.</p>
                    </div>
                    <div class="col-lg-5" data-aos="fade-left">
                        <div class="sc-card">
                            <div class="sc-card-header">
                                <span class="sc-tag-pill">Our Framework</span>
                                <h4 class="fw-900 mb-0 mt-2" style="font-size:1.15rem;color:#111;">The Strategy Checklist</h4>
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
                                        <div class="sc-item-desc">Organising info architecture for <a href='/cr/services/seo' class='fw-bold' style="color:var(--page-accent);">SEO dominance</a> &amp; crawl depth.</div>
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
                        <p class="fs-5">Speed is the ultimate trust signal. In a world of <a href='/cr/services/api' class='text-accent-dynamic fw-bold'>Instant API Integrations</a> and 5G connections, a slow website is a dead website. Our <strong>Web Development</strong> process follows the 'Zero-Bloat' methodology.</p>
                        <p>We don't use heavy page builders that inject thousands of lines of unnecessary CSS. Instead, we use <strong>Vanilla CSS</strong> and <strong>Native JavaScript</strong> to ensure that your <strong>Largest Contentful Paint (LCP)</strong> is achieved in under 1 second.</p>
                        <p>Our performance engineering includes <strong>Next-Gen Image Formats (WebP/AVIF)</strong>, server-side caching, and minification protocols that align with <a href='https://web.dev/vitals/' target='_blank' class='text-decoration-underline text-dark fw-bold'>Google's Core Web Vitals standards</a>.</p>
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
                        <p>Your business deserves more than a 'plug-and-play' solution. Our <strong>Custom Web Engineering</strong> ensures that you have total control over your digital asset. We provide a custom <a href='/cr/services/automation' class='text-accent-dynamic fw-bold'>Admin Panel</a> that is lightweight and specifically designed for your business workflows.</p>
                        <p>Whether you need to integrate a <a href='/cr/services/crm' class='text-accent-dynamic fw-bold'>Custom CRM</a>, an <a href='/cr/services/erp' class='text-accent-dynamic fw-bold'>ERP System</a>, or a complex <strong>LMS Platform</strong>, our API-first logic makes it possible. We don't believe in digital limitations — if you can dream it, we can engineer it.</p>
                        <p>We also utilise industry-leading animation frameworks to bring your brand to life with high-fidelity motion graphics. This level of 'Visual Authority' is what separates a world-class agency from a budget freelancer. Your website is your digital flagship — make it legendary.</p>
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
                
                <div class="premium-faq-wrapper mx-auto" style="max-width: 900px;" id="premiumGlossary">
                    <?php 
                    $glossary = [
                        ['q'=>'What is Responsive Web Design?', 'a'=>'<strong>Responsive Web Design (RWD)</strong> ensures your site ranks highly on Google mobile-first indexing by flawlessly adapting to any screen size. A must-have for <a href="/cr/services/seo" class="text-accent-dynamic fw-bold">SEO rankings</a>.'],
                        ['q'=>'Why does Page Speed matter?', 'a'=>'A 1-second delay can drop conversions by 7%. Speed directly impacts your Google Ranking and paid ad costs. We engineer sites to load instantly without the typical WordPress bloat.'],
                        ['q'=>'What is the difference between UI and UX?', 'a'=>'<strong>UI (User Interface)</strong> is the look—buttons, colours, fonts. <strong>UX (User Experience)</strong> is the feel. Our <a href="/cr/services/uiux" class="text-accent-dynamic fw-bold">UI/UX Team</a> merges both to create high-converting digital journeys.'],
                        ['q'=>'Do I really need an SSL Certificate?', 'a'=>'Absolutely. <strong>SSL (Secure Sockets Layer)</strong> encrypts your site. Without it, browsers flag you as "Not Secure". We include military-grade SSL in our <a href="/cr/services/automation" class="text-accent-dynamic fw-bold">Security Automation</a> packages.'],
                        ['q'=>'What is a CMS and why should I care?', 'a'=>'A <strong>CMS (Content Management System)</strong> lets you edit content without code. We build custom, lightweight dashboards to manage your <a href="/cr/work" class="text-accent-dynamic fw-bold">Portfolio</a> cleanly and securely.']
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

<style>
/* ===== STRATEGY CHECKLIST CARD ===== */
.sc-card { background:#fff; border:2.5px solid #111; border-radius:24px; box-shadow:8px 8px 0px #111; overflow:hidden; }
.sc-card-header { background:var(--page-accent); padding:20px 24px; }
.sc-tag-pill { display:inline-block; background:rgba(255,255,255,0.18); color:#fff; font-size:10px; font-weight:900; letter-spacing:1.5px; text-transform:uppercase; padding:4px 12px; border-radius:100px; margin-bottom:6px; }
.sc-card-header h4 { color:#fff !important; margin:0 !important; }
.sc-card-body { padding:4px 0; }
.sc-item { display:flex; align-items:flex-start; gap:16px; padding:16px 24px; border-bottom:1px solid rgba(0,0,0,0.06); transition:background 0.2s; }
.sc-item:hover { background:#fafafa; }
.sc-item-last { border-bottom:none; }
.sc-badge { min-width:36px; height:36px; background:var(--page-accent); color:#fff; font-weight:900; font-size:13px; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:2px; }
.sc-item-label { font-weight:900; color:#111; font-size:0.92rem; margin-bottom:3px; }
.sc-item-desc { font-size:0.82rem; color:#6b7280; line-height:1.5; }

/* ===== PERFORMANCE STATS CARD ===== */
.perf-card { background:#fff; border:2.5px solid #111; border-radius:24px; box-shadow:8px 8px 0px #111; padding:28px; }
.perf-card-title { font-family:'Clash Display',sans-serif; font-weight:900; font-size:1rem; color:#111; text-transform:uppercase; letter-spacing:1px; margin-bottom:20px; padding-bottom:14px; border-bottom:2px solid rgba(0,0,0,0.07); }
.perf-grid { display:grid; grid-template-columns:1fr 1fr; gap:16px; }
.perf-stat { background:#f8f9fa; border:1.5px solid rgba(0,0,0,0.07); border-radius:16px; padding:18px 16px; text-align:center; transition:all 0.3s; }
.perf-stat:hover { background:#fff; border-color:var(--page-accent); transform:translateY(-3px); box-shadow:0 8px 20px rgba(0,0,0,0.08); }
.perf-icon { font-size:1.6rem; color:var(--page-accent); margin-bottom:8px; }
.perf-val { font-family:'Clash Display',sans-serif; font-weight:900; font-size:1.5rem; color:#111; line-height:1; margin-bottom:4px; }
.perf-label { font-size:0.75rem; font-weight:700; color:#6b7280; text-transform:uppercase; letter-spacing:0.5px; }

/* ===== FORTRESS STACK CARD ===== */
.fortress-card { position:relative; background:linear-gradient(145deg,#0d0d0d 0%,#1a1a2e 100%); border-radius:28px; padding:36px 32px; overflow:hidden; box-shadow:12px 12px 0px var(--page-accent); border:2px solid rgba(255,255,255,0.05); }
.fortress-glow { position:absolute; top:-60px; right:-60px; width:220px; height:220px; background:var(--page-accent); filter:blur(80px); opacity:0.18; border-radius:50%; pointer-events:none; }
.fortress-header { display:flex; align-items:center; gap:18px; margin-bottom:18px; }
.fortress-shield-icon { width:56px; height:56px; background:var(--page-accent); border-radius:16px; display:flex; align-items:center; justify-content:center; font-size:1.6rem; color:#fff; flex-shrink:0; box-shadow:0 8px 20px rgba(0,0,0,0.3); }
.fortress-tag { font-size:10px; font-weight:900; letter-spacing:2px; text-transform:uppercase; color:var(--page-accent); margin-bottom:4px; }
.fortress-title { font-family:'Clash Display',sans-serif; font-weight:900; font-size:1.65rem; color:#fff !important; margin:0 !important; margin-top:0 !important; margin-bottom:0 !important; }
.fortress-desc { color:rgba(255,255,255,0.72); font-size:0.92rem; line-height:1.7; margin-bottom:24px; padding-bottom:20px; border-bottom:1px solid rgba(255,255,255,0.08); }
.fortress-desc strong { color:#fff; }
.fortress-rows { display:flex; flex-direction:column; }
.fortress-row { display:flex; align-items:flex-start; gap:16px; padding:14px 0; border-bottom:1px solid rgba(255,255,255,0.06); transition:all 0.2s; }
.fortress-row:hover { padding-left:6px; }
.fortress-row-last { border-bottom:none; }
.fortress-row-icon { width:34px; height:34px; background:rgba(39,201,63,0.15); border:1px solid rgba(39,201,63,0.3); border-radius:10px; display:flex; align-items:center; justify-content:center; color:#27c93f; font-size:1rem; flex-shrink:0; }
.fortress-row-label { font-weight:900; font-size:0.9rem; color:#fff; margin-bottom:3px; }
.fortress-row-desc { font-size:0.8rem; color:rgba(255,255,255,0.65); line-height:1.5; }
</style>

<style>
.authority-content-wrapper h2, .authority-content-wrapper h3, .authority-content-wrapper h4 {
    font-family: 'Clash Display';
    font-weight: 900;
    color: var(--text-dark);
    margin-top: 3rem;
    margin-bottom: 1.5rem;
}
.authority-content-wrapper p {
    font-size: 1.15rem;
    line-height: 1.8;
    color: #4b5563;
    margin-bottom: 1.5rem;
}
.authority-pillar-card {
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 10px 10px 0px var(--text-dark);
    border-radius: 30px;
    padding: 2.5rem;
    height: 100%;
    transition: all 0.3s;
}
.authority-pillar-card:hover {
    transform: translate(-5px, -5px);
    box-shadow: 15px 15px 0px var(--page-accent);
}
.p-faq-item {
    background: #fff;
    border: 3px solid #111;
    border-radius: 20px;
    box-shadow: 8px 8px 0px #111;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    overflow: hidden;
}
.p-faq-item:hover {
    transform: translate(-3px, -3px);
    box-shadow: 11px 11px 0px var(--page-accent);
    border-color: var(--page-accent);
}
.p-faq-item:has(.p-faq-btn:not(.collapsed)) {
    box-shadow: 11px 11px 0px var(--page-accent);
    border-color: var(--page-accent);
}

.p-faq-btn {
    background: transparent;
    border: none;
    padding: 24px 30px;
    color: #111;
    transition: all 0.3s;
}
.p-faq-btn:not(.collapsed) {
    color: var(--page-accent);
    background: rgba(0,0,0,0.02);
}
.p-faq-btn:focus {
    outline: none;
}

.p-faq-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #f8f9fa;
    border: 2px solid #111;
    color: #111;
    transition: all 0.3s;
    position: relative;
    flex-shrink: 0;
}
.p-faq-btn:hover .p-faq-icon {
    background: #111;
    color: #fff;
}
.p-faq-btn:not(.collapsed) .p-faq-icon {
    background: var(--page-accent);
    border-color: var(--page-accent);
    color: #fff;
}

.p-icon-plus, .p-icon-minus {
    position: absolute;
    transition: all 0.3s;
}
.p-faq-btn.collapsed .p-icon-minus { opacity: 0; transform: scale(0.5) rotate(-90deg); }
.p-faq-btn.collapsed .p-icon-plus { opacity: 1; transform: scale(1) rotate(0); }
.p-faq-btn:not(.collapsed) .p-icon-plus { opacity: 0; transform: scale(0.5) rotate(90deg); }
.p-faq-btn:not(.collapsed) .p-icon-minus { opacity: 1; transform: scale(1) rotate(0); }

.p-faq-body {
    background: #fafafa;
}
</style>

<?php 
require_once APP_PATH . '/views/components/stack.php'; 
?>

<!-- GAP Closure: Interactive ROI Calculator -->
<section id="performance" class="roi-calculator-section section-padding text-white border-bottom border-white border-opacity-10 position-relative overflow-hidden" style="background:#050505;">
    <div class="position-absolute w-100 h-100" style="background: radial-gradient(circle at right, rgba(<?= hexToRgb($accentColor) ?>, 0.1), transparent 50%); top:0; left:0; pointer-events: none;"></div>
    <div class="container position-relative z-1">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="text-accent-dynamic fw-900 small letter-spacing-2 mb-3 d-block">INTERACTIVE ENGAGEMENT</span>
                <h2 class="display-5 fw-900 mb-4" style="color:#fff;">Calculate Your <span class="text-accent-dynamic">Digital ROI</span></h2>
                <p class="fs-5 opacity-75 mb-4">Stop guessing. See exactly how an engineered website impacts your bottom line by increasing conversion rates and average order values.</p>
                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-shield-check text-accent-dynamic fs-3"></i>
                    <span class="fw-bold opacity-50">Data powered by industry averages.</span>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="p-5 bg-white bg-opacity-10 border border-white border-opacity-25 rounded-5 backdrop-blur">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="small fw-bold opacity-75 mb-2">Monthly Traffic</label>
                            <input type="range" class="form-range custom-range" id="trafficInput" min="1000" max="50000" value="5000" step="1000">
                            <div class="fw-900 fs-4 text-white mt-2" id="trafficVal">5,000 Visitors</div>
                        </div>
                        <div class="col-md-6">
                            <label class="small fw-bold opacity-75 mb-2">Avg. Value Per Client (₹)</label>
                            <input type="range" class="form-range custom-range" id="valueInput" min="1000" max="50000" value="10000" step="1000">
                            <div class="fw-900 fs-4 text-white mt-2" id="valueVal">₹10,000</div>
                        </div>
                    </div>
                    <div class="mt-5 pt-4 border-top border-white border-opacity-10">
                        <div class="d-flex justify-content-between align-items-end">
                            <div>
                                <span class="d-block small fw-bold opacity-75 text-uppercase letter-spacing-1 mb-2">Projected Monthly Revenue</span>
                                <span class="display-4 fw-900 text-accent-dynamic" id="revenueOutput">₹1,500,000</span>
                            </div>
                            <div class="text-end d-none d-md-block">
                                <span class="d-block small opacity-50">Assuming a 3% Conversion Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tInput = document.getElementById('trafficInput');
    const vInput = document.getElementById('valueInput');
    const tVal = document.getElementById('trafficVal');
    const vVal = document.getElementById('valueVal');
    const rOut = document.getElementById('revenueOutput');

    function calcROI() {
        const traffic = parseInt(tInput.value);
        const value = parseInt(vInput.value);
        tVal.innerText = traffic.toLocaleString() + ' Visitors';
        vVal.innerText = '₹' + value.toLocaleString();
        
        // Assume 3% conversion with engineered site
        const revenue = traffic * 0.03 * value;
        rOut.innerText = '₹' + Math.round(revenue).toLocaleString();
    }

    tInput.addEventListener('input', calcROI);
    vInput.addEventListener('input', calcROI);
});
</script>

<!-- Impact Narrative: Designing for Results -->
<section class="results-narrative-section section-padding bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 fw-900 text-dark mb-4">Designing a Website That <span class="text-accent-dynamic">Delivers Real Results</span></h2>
                <p class="fs-5 text-muted mb-4">In today's digital-first world, a website must do more than just look good—it must deliver visible, measurable outcomes. A well-crafted platform is your most powerful tool for growth, attracting and converting visitors into loyal customers.</p>
                <p class="fs-5 text-muted mb-5">At Crea8ve Cool, we specialize in <strong>Designing Websites for Small Business</strong> that drive real success by combining performance, usability, and aesthetics with a bulletproof growth strategy.</p>
                
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
                    <p class="text-muted mb-4">Your website is more than a virtual storefront—it is a purpose-driven engine that connects with your audience. We design around your specific goals, whether it is lead generation, product sales, or audience expansion.</p>
                    
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
                <p class="fs-5 text-muted">A small website doesn't mean small in impact. We follow a meticulous 10-step blueprint to ensure your digital presence drives results effortlessly.</p>
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
                    <p class="vtab-body">Every successful website begins with absolute clarity of purpose. Before a single pixel is placed, we sit down with you to define your primary business goals — whether that's generating leads, booking appointments, selling products, or establishing brand credibility. We translate those goals into measurable KPIs and build every design decision around achieving them. Without this foundation, even a beautiful website is just digital wallpaper.</p>
                </div>
                <div class="vtab-pane" id="step2">
                    <div class="vtab-step-tag">Step 02</div>
                    <h3 class="vtab-title">Audience Research</h3>
                    <p class="vtab-body">Understanding exactly who visits your website is what separates a high-converting asset from a generic one. We conduct deep audience research — analysing demographics, psychographics, search intent, and competitor positioning — to build a precise User Persona Profile. This data dictates your tone of voice, your visual language, and the journey we map for each visitor from landing to conversion. You can't persuade an audience you don't understand.</p>
                </div>
                <div class="vtab-pane" id="step3">
                    <div class="vtab-step-tag">Step 03</div>
                    <h3 class="vtab-title">Content Planning</h3>
                    <p class="vtab-body">Content is the engine of your website's authority. We architect a strategic content silo — mapping each page's core message, target keywords, internal linking structure, and semantic hierarchy before a single word is written. This ensures your site doesn't just communicate value to humans, but signals deep topical relevance to search engines. Our content plans are built to drive both immediate engagement and long-term organic rankings simultaneously.</p>
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
                    <p class="vtab-body">A brand that looks different on every page destroys trust instantly. We build a comprehensive Design System for your website — defining a unified typography scale, a curated colour palette, consistent iconography, spacing tokens, and component patterns — ensuring every element feels cohesive and intentional. This visual consistency builds subconscious credibility with your audience. Visitors who trust your design, trust your business. It's that simple, and that powerful.</p>
                </div>
                <div class="vtab-pane" id="step7">
                    <div class="vtab-step-tag">Step 07</div>
                    <h3 class="vtab-title">Optimized Loading Speed</h3>
                    <p class="vtab-body">Speed is not a luxury — it is a direct revenue metric. Google's data shows that every additional second of load time reduces conversions by up to 7%. We engineer our websites for sub-1.5 second Largest Contentful Paint using our Zero-Bloat methodology: Vanilla CSS, native JavaScript, next-gen WebP/AVIF image formats, server-side caching, and rigorous code minification. A fast website ranks higher, converts better, and costs less to run in paid advertising.</p>
                </div>
                <div class="vtab-pane" id="step8">
                    <div class="vtab-step-tag">Step 08</div>
                    <h3 class="vtab-title">Call-to-Action Placement</h3>
                    <p class="vtab-body">The difference between a website visitor and a paying client is a single, perfectly placed Call-to-Action. We apply Conversion Architecture principles — using visual gravity, colour contrast, F-Pattern scanning, and strategic whitespace — to place CTAs exactly where a user's eye naturally lands. Whether it's a "Book a Call" button above the fold or a sticky lead form on mobile, every CTA is engineered to intercept intent at peak motivation and convert it into a qualified lead.</p>
                </div>
                <div class="vtab-pane" id="step9">
                    <div class="vtab-step-tag">Step 09</div>
                    <h3 class="vtab-title">SEO Integration</h3>
                    <p class="vtab-body">SEO is not an afterthought — it is baked into the foundation of every website we build. From semantic HTML5 structure and JSON-LD Schema markup to canonical tags, meta hierarchies, Open Graph data, and Core Web Vitals compliance, every technical SEO signal is set correctly from day one. We also implement internal linking architecture and keyword-optimised heading structures so your site earns organic authority from the moment Google's crawler first visits.</p>
                </div>
                <div class="vtab-pane active-hidden" id="step10">
                    <div class="vtab-step-tag">Step 10</div>
                    <h3 class="vtab-title">Regular Updates</h3>
                    <p class="vtab-body">A website is not a product you build once and forget — it is a living digital asset that must evolve with your business and market. We provide ongoing maintenance partnerships that include security patch updates, performance monitoring, content refreshes, and analytics-driven optimisation cycles. Regular updates signal to search engines that your site is actively maintained, boosting rankings and user trust simultaneously. In a digital landscape that never sleeps, your website shouldn't either.</p>
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
                            <p style="color:rgba(255,255,255,0.88);line-height:1.75;margin-bottom:0;">Regular updates are essential to keep your website relevant, secure, and functional. We monitor analytics to identify improvement areas, fix broken links, and update security protocols to maintain absolute user trust. Add fresh content and modern design elements to stay competitive in an evolving digital landscape.</p>
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

<style>
/* ===== VERTICAL TABS ===== */
.vtabs-wrapper {
    display: flex;
    gap: 0;
    border: 2.5px solid #111;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 8px 8px 0px #111;
    min-height: 340px;
}
.vtabs-nav {
    width: 240px;
    flex-shrink: 0;
    background: #0d0d0d;
    display: flex;
    flex-direction: column;
}
.vtab-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 13px 18px;
    cursor: pointer;
    border-bottom: 1px solid rgba(255,255,255,0.06);
    transition: all 0.2s;
}
.vtab-item:last-child { border-bottom: none; }
.vtab-item:hover { background: rgba(255,255,255,0.05); }
.vtab-item.active { background: var(--page-accent); }
.vtab-num {
    font-family: 'Clash Display', sans-serif;
    font-weight: 900;
    font-size: 0.75rem;
    color: rgba(255,255,255,0.4);
    min-width: 22px;
    transition: color 0.2s;
}
.vtab-item.active .vtab-num { color: rgba(255,255,255,0.7); }
.vtab-name {
    font-weight: 700;
    font-size: 0.8rem;
    color: rgba(255,255,255,0.55);
    transition: color 0.2s;
}
.vtab-item.active .vtab-name,
.vtab-item:hover .vtab-name { color: #fff; }
.vtab-item:hover .vtab-num { color: rgba(255,255,255,0.6); }
.vtabs-content {
    flex: 1;
    background: #fff;
    padding: 36px 40px;
    position: relative;
}
.vtab-pane { display: none; }
.vtab-pane.active { display: block; animation: vtabFade 0.3s ease; }
@keyframes vtabFade { from { opacity:0; transform:translateY(6px); } to { opacity:1; transform:translateY(0); } }
.vtab-step-tag {
    display: inline-block;
    background: var(--page-accent);
    color: #fff;
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 4px 12px;
    border-radius: 100px;
    margin-bottom: 14px;
}
.vtab-title {
    font-family: 'Clash Display', sans-serif;
    font-weight: 900;
    font-size: 1.65rem;
    color: #111;
    margin-bottom: 16px;
}
.vtab-body {
    font-size: 0.97rem;
    line-height: 1.8;
    color: #4b5563;
    margin: 0;
}
@media (max-width: 768px) {
    .vtabs-wrapper { flex-direction: column; }
    .vtabs-nav { width: 100%; flex-direction: row; flex-wrap: wrap; }
    .vtab-item { flex: 0 0 50%; border-right: 1px solid rgba(255,255,255,0.06); }
    .vtabs-content { padding: 24px 20px; }
}
</style>

<script>
document.querySelectorAll('.vtab-item').forEach(function(tab) {
    tab.addEventListener('click', function() {
        document.querySelectorAll('.vtab-item').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.vtab-pane').forEach(p => p.classList.remove('active'));
        tab.classList.add('active');
        document.getElementById(tab.dataset.tab).classList.add('active');
    });
});
</script>


<section id="packages" class="pricing-section section-padding bg-light">
    <div class="container">
        <div class="row mb-5 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-900 text-dark mb-4">Plans and <span class="text-accent-dynamic">Pricing</span></h2>
                <p class="fs-5 text-muted">Crea8ve Cool provides engineering-grade web design and development packages specifically tailored for scaling businesses. All packages include high-performance hosting, responsive engineering, and absolute SEO optimization.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php 
            $packages = [
                [
                    'name' => 'Lite',
                    'tagline' => 'WordPress Based',
                    'desc' => 'Perfect for solo-preneurs and local startups.',
                    'price' => '5,999',
                    'original_price' => '9,999',
                    'savings' => '40',
                    'features' => ['WordPress CMS Platform', '1-3 Basic Pages', 'Mobile Responsive', 'Essential Plugins', 'Standard Performance', 'Excludes Domain/Hosting', 'Contact Form', '7-Day Delivery'],
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
                    'features' => ['Hard-Coded PHP/MVC', 'Upto 10 Custom Pages', 'Performance Optimized', 'Enhanced SEO Architecture', 'High-Fidelity UI Design', 'Custom Admin Dashboard', 'Priority Support', '15-Day Delivery'],
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
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="price-card h-100 p-4 border-3 border border-dark rounded-5 bg-white position-relative <?= $pkg['recommended'] ? 'recommended' : '' ?>">
                    <?php if($pkg['recommended']): ?>
                        <div class="recommended-badge bg-accent-dynamic text-dark fw-900 shadow-sm">MOST POPULAR</div>
                    <?php endif; ?>
                    
                    <div class="mb-4">
                        <span class="badge text-uppercase mb-2" style="background: <?= $pkg['color'] ?>20; color: <?= $pkg['color'] ?>; font-size: 10px; border: 1px solid <?= $pkg['color'] ?>50;">
                            <?= $pkg['tagline'] ?>
                        </span>
                        <h3 class="fw-900 mb-1" style="color: <?= $pkg['color'] ?>"><?= $pkg['name'] ?></h3>
                        <p class="small text-muted mb-0"><?= $pkg['desc'] ?></p>
                    </div>

                    <div class="price-box mb-4 p-3 bg-light rounded-4 border border-dark border-2">
                        <div class="d-flex align-items-end gap-2 my-2">
                            <span class="h1 fw-900 mb-0">₹<?= $pkg['price'] ?>*</span>
                            <span class="small text-muted text-decoration-line-through mb-1">₹<?= $pkg['original_price'] ?></span>
                        </div>
                        <div class="badge bg-success text-white rounded-pill px-3 py-1" style="font-size: 10px;">
                            SAVE <?= $pkg['savings'] ?>% TODAY
                        </div>
                    </div>

                    <div class="d-grid gap-2 mb-4">
                        <a href="#leads" class="btn pkg-select-btn w-100 py-3 rounded-pill fw-900">Select Plan &rarr;</a>
                    </div>

                    <div class="feature-list mt-auto">
                        <div class="small fw-900 text-dark mb-3 opacity-50 text-uppercase letter-spacing-1">Key Features:</div>
                        <ul class="list-unstyled d-grid gap-2 mb-0">
                            <?php foreach($pkg['features'] as $feature): ?>
                                <li class="d-flex align-items-start gap-2" style="font-size: 14px;">
                                    <i class="bi bi-check2 text-accent-dynamic fw-bold"></i>
                                    <span class="fw-bold opacity-75"><?= $feature ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="mt-4 pt-4 border-top border-dark border-opacity-10 text-center">
                        <div class="x-small text-muted mt-1" style="font-size: 10px;">*One-time setup. 18% GST Extra. Domain/Hosting not included.</div>
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
                        <td class="text-start py-4 text-dark fw-900">Platform Architecture</td>
                        <td class="py-4 text-muted">WordPress CMS</td>
                        <td class="py-4 text-dark fw-900 matrix-highlight-col">Custom PHP/MVC</td>
                        <td class="py-4 text-dark fw-900">Enterprise Node/React</td>
                    </tr>
                    <tr class="border-top border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark fw-900">Semantic SEO Siloing</td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-30 fs-5"></i></td>
                        <td class="py-4 matrix-highlight-col"><i class="bi bi-check-circle-fill fs-5" style="color:var(--page-accent);"></i></td>
                        <td class="py-4"><i class="bi bi-check-circle-fill text-dark fs-5"></i></td>
                    </tr>
                    <tr class="border-top border-dark border-opacity-10">
                        <td class="text-start py-4 text-dark fw-900">Core Web Vitals Guarantee</td>
                        <td class="py-4"><i class="bi bi-x-circle text-muted opacity-30 fs-5"></i></td>
                        <td class="py-4 matrix-highlight-col"><i class="bi bi-check-circle-fill fs-5" style="color:var(--page-accent);"></i></td>
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

<style>

.price-card {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: 8px 8px 0px var(--text-dark);
}
.price-card:hover {
    transform: scale(1.03) translateY(-10px);
    box-shadow: 15px 15px 0px var(--page-accent);
}
.price-card.recommended {
    border-color: var(--page-accent) !important;
    transform: scale(1.05);
    box-shadow: 15px 15px 0px var(--text-dark);
    z-index: 2;
}
.recommended-badge {
    position: absolute;
    top: -16px;
    left: 50%;
    transform: translateX(-50%);
    padding: 6px 22px;
    background: #111 !important;
    color: #fff !important;
    border-radius: 50px;
    font-size: 11px;
    letter-spacing: 1.5px;
    font-weight: 900;
    white-space: nowrap;
    box-shadow: 3px 3px 0px var(--page-accent);
    border: none;
}
.pkg-select-btn {
    background: #111;
    color: #fff;
    border: 2px solid #111;
    font-size: 0.95rem;
    transition: all 0.25s;
}
.pkg-select-btn:hover {
    background: var(--page-accent);
    border-color: var(--page-accent);
    color: #fff;
    transform: translateY(-2px);
}
.price-card.recommended .pkg-select-btn {
    background: var(--page-accent);
    border-color: var(--page-accent);
    color: #fff;
    box-shadow: 4px 4px 0px #111;
}
.price-card.recommended .pkg-select-btn:hover {
    background: #111;
    border-color: #111;
}
</style>


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
                ['title' => 'Professional Templates', 'link' => '/cr/services/website'],
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
                    <a href="<?= $f['link'] ?>" class="text-white text-decoration-none fw-bold small opacity-75 hover-opacity-100"><?= $f['title'] ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.hover-bg-white-opacity:hover {
    background: rgba(255,255,255,0.05);
    border-color: var(--page-accent) !important;
}
.hover-opacity-100:hover { opacity: 1 !important; }
</style>

<!-- Lead Generation Form Section -->
<section id="leads" class="lead-section py-5 text-white position-relative overflow-hidden" style="background:#050505;">
    <div class="lead-bg-blobs">
        <div class="lb-1" style="background: <?= $accentColor ?>;"></div>
    </div>
    <div class="container position-relative z-1">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="text-accent-dynamic fw-900 mb-3 d-block letter-spacing-2">TAKE THE FIRST STEP</span>
                <h2 class="display-4 fw-900 text-white mb-3">Book Your Free <br><span class="text-accent-dynamic">Strategy Audit</span></h2>
                <p class="fs-6 mb-4" style="color:rgba(255,255,255,0.65);">Interested in scaling? Fill out the form and our experts will get back within 24 hours.</p>
                
                <div class="trust-indicators-v3 p-4 border border-white border-opacity-10 rounded-5">
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <div class="ti-icon bg-white text-dark rounded-circle d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                            <i class="bi bi-shield-check fs-4"></i>
                        </div>
                        <div>
                            <div class="fw-800 fs-5">NDA Protected</div>
                            <span class="small opacity-50 text-uppercase letter-spacing-1">Safe Conversations</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="ti-icon bg-white text-dark rounded-circle d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                            <i class="bi bi-speedometer2 fs-4"></i>
                        </div>
                        <div>
                            <div class="fw-800 fs-5">Fast Response</div>
                            <span class="small opacity-50 text-uppercase letter-spacing-1">Within 24 Hours</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="lead-form-wrap p-4 bg-white rounded-4 border-2 border border-dark shadow-punchy-lg">
                    <form id="leadCaptureForm" action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating-custom">
                                    <label class="small fw-900 text-dark opacity-50 text-uppercase mb-2 d-block">Full Name</label>
                                    <input type="text" class="form-control-punchy" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating-custom">
                                    <label class="small fw-900 text-dark opacity-50 text-uppercase mb-2 d-block">Work Email</label>
                                    <input type="email" class="form-control-punchy" placeholder="john@company.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating-custom">
                                    <label class="small fw-900 text-dark opacity-50 text-uppercase mb-2 d-block">Phone Number</label>
                                    <input type="tel" class="form-control-punchy" placeholder="+91 99XXXXXXX" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating-custom">
                                    <label class="small fw-900 text-dark opacity-50 text-uppercase mb-2 d-block">Company Website</label>
                                    <input type="url" class="form-control-punchy" placeholder="https://">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating-custom">
                                    <label class="small fw-900 text-dark opacity-50 text-uppercase mb-2 d-block">Tell us about your project</label>
                                    <textarea class="form-control-punchy" rows="3" placeholder="I'm looking to scale my..."></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-punchy-big w-100 py-3 mt-2">
                                    Send Inquiry <i class="bi bi-send-fill ms-2"></i>
                                </button>
                                <p class="text-center small text-muted mt-4 mb-0">No spam, ever. Your privacy is our absolute priority.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <a href="/cr/services/website" class="text-accent-dynamic fw-800 text-decoration-none small">READ MORE <i class="bi bi-arrow-up-right"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- GAP Closure: Video Social Proof -->
<section class="video-proof-section py-5 text-white position-relative" style="background:#050505;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="video-placeholder-wrap position-relative rounded-5 overflow-hidden border border-white border-opacity-25" style="aspect-ratio: 16/9; background: #000;">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Team collaborating" class="w-100 h-100 object-fit-cover opacity-50">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <button class="btn btn-accent-dynamic rounded-circle d-flex align-items-center justify-content-center pulse-button" style="width: 80px; height: 80px;">
                            <i class="bi bi-play-fill text-white" style="font-size: 40px; margin-left: 5px;"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="display-4 fw-900 mb-4" style="color:#fff;">See The <span class="text-accent-dynamic">Difference</span></h2>
                <p class="fs-5 opacity-75 mb-4">Don't just take our word for it. Watch how our engineered web solutions transformed a local brand into a national powerhouse within 6 months.</p>
                <div class="d-flex align-items-center gap-4 mt-4">
                    <div class="text-center">
                        <div class="h3 fw-900 text-white mb-0">300+</div>
                        <div class="small fw-bold opacity-50 text-uppercase">Projects Delivered</div>
                    </div>
                    <div class="border-start border-white border-opacity-25" style="height: 40px;"></div>
                    <div class="text-center">
                        <div class="h3 fw-900 text-white mb-0">98%</div>
                        <div class="small fw-bold opacity-50 text-uppercase">Client Retention</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Voice of the Customer — Premium Google Review Marquee -->
<section class="testimonials-section py-5 bg-white overflow-hidden">
    <div class="container mb-4">
        <div class="text-center" data-aos="fade-up">
            <h2 class="display-5 fw-900 text-dark mb-2">Hear What Our <span class="text-accent-dynamic">Clients</span> Say</h2>
            <p class="text-muted fs-6">Verified Google reviews from real businesses we've transformed.</p>
        </div>
    </div>

    <!-- Row 1 — scrolls left -->
    <div class="tmarquee-track-wrap mb-3">
        <div class="tmarquee-track">
            <?php
            $reviews_r1 = [
                ['name'=>'Priya Gupta','role'=>'Business Owner','review'=>'Crea8ve Cool delivered beyond expectations. Our website now ranks on page 1 and generates 3x more leads than before. Absolute professionals.','avatar_color'=>'#4285F4'],
                ['name'=>'Rohan Verma','role'=>'Tech Startup Founder','review'=>'Their technical expertise is unmatched. Custom PHP MVC, lightning-fast load times, and a design that makes competitors look outdated. Highly recommend.','avatar_color'=>'#EA4335'],
                ['name'=>'Neha Desai','role'=>'E-commerce Entrepreneur','review'=>'Sales traffic increased significantly after the redesign. The team understood our brand and delivered something we are truly proud of.','avatar_color'=>'#34A853'],
                ['name'=>'Amit Shah','role'=>'Real Estate Director','review'=>'Professional, fast, and detail-oriented. Our property portal handles 10k+ monthly visitors without a single issue. Worth every rupee.','avatar_color'=>'#FBBC05'],
                ['name'=>'Kavita Nair','role'=>'Wellness Brand Owner','review'=>'From design to SEO to the admin panel — everything was handled seamlessly. We now get inquiries directly through the website daily.','avatar_color'=>'#4285F4'],
                ['name'=>'Siddharth Rao','role'=>'EdTech Founder','review'=>'The LMS they built for us is exceptional. Student engagement went up 60% in the first month. The team is responsive and highly skilled.','avatar_color'=>'#EA4335'],
            ];
            // Duplicate for infinite scroll
            $reviews_r1 = array_merge($reviews_r1, $reviews_r1);
            foreach($reviews_r1 as $rev): ?>
            <div class="tcard">
                <div class="tcard-header">
                    <svg class="google-g" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                    <div class="tcard-stars">★★★★★</div>
                </div>
                <p class="tcard-review">"<?= $rev['review'] ?>"</p>
                <div class="tcard-footer">
                    <div class="tcard-avatar" style="background:<?= $rev['avatar_color'] ?>"><?= strtoupper(substr($rev['name'],0,1)) ?></div>
                    <div>
                        <div class="tcard-name"><?= $rev['name'] ?> <span class="tcard-verified" title="Google Verified">✓</span></div>
                        <div class="tcard-role"><?= $rev['role'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Row 2 — scrolls right -->
    <div class="tmarquee-track-wrap">
        <div class="tmarquee-track tmarquee-reverse">
            <?php
            $reviews_r2 = [
                ['name'=>'Divya Menon','role'=>'Healthcare Clinic Owner','review'=>'Our appointment bookings doubled after launching the new website. The team built us a clean, GDPR-compliant patient portal that staff love.','avatar_color'=>'#34A853'],
                ['name'=>'Arjun Malhotra','role'=>'Manufacturing CEO','review'=>'They engineered our full B2B portal with a custom CRM integration. Complex project delivered on time and within budget. Exceptional team.','avatar_color'=>'#4285F4'],
                ['name'=>'Pooja Iyer','role'=>'Fashion Boutique Owner','review'=>'My e-commerce store looks absolutely stunning on mobile. Sales jumped 40% in the first 3 months. Cannot recommend them highly enough.','avatar_color'=>'#EA4335'],
                ['name'=>'Vikram Singh','role'=>'Restaurant Chain Owner','review'=>'Online orders increased by 200% after they redesigned our website and integrated the ordering system. Game-changing for our business.','avatar_color'=>'#FBBC05'],
                ['name'=>'Meera Joshi','role'=>'Legal Firm Partner','review'=>'Professional, confidential, and technically superior. Our firm now ranks top 3 in Google for all key practice areas. Outstanding SEO work.','avatar_color'=>'#4285F4'],
                ['name'=>'Karan Patel','role'=>'Logistics Company MD','review'=>'The custom tracking portal they built handles thousands of daily requests flawlessly. Best tech investment we have made this year.','avatar_color'=>'#34A853'],
            ];
            $reviews_r2 = array_merge($reviews_r2, $reviews_r2);
            foreach($reviews_r2 as $rev): ?>
            <div class="tcard">
                <div class="tcard-header">
                    <svg class="google-g" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                    <div class="tcard-stars">★★★★★</div>
                </div>
                <p class="tcard-review">"<?= $rev['review'] ?>"</p>
                <div class="tcard-footer">
                    <div class="tcard-avatar" style="background:<?= $rev['avatar_color'] ?>"><?= strtoupper(substr($rev['name'],0,1)) ?></div>
                    <div>
                        <div class="tcard-name"><?= $rev['name'] ?> <span class="tcard-verified" title="Google Verified">✓</span></div>
                        <div class="tcard-role"><?= $rev['role'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.tmarquee-track-wrap { overflow: hidden; position: relative; }
.tmarquee-track-wrap::before,
.tmarquee-track-wrap::after {
    content:''; position:absolute; top:0; width:120px; height:100%; z-index:2; pointer-events:none;
}
.tmarquee-track-wrap::before { left:0; background:linear-gradient(to right,#fff,transparent); }
.tmarquee-track-wrap::after  { right:0; background:linear-gradient(to left,#fff,transparent); }
.tmarquee-track {
    display: flex; gap: 18px;
    animation: tscroll-left 40s linear infinite;
    width: max-content;
}
.tmarquee-reverse { animation: tscroll-right 40s linear infinite; }
@keyframes tscroll-left  { from{transform:translateX(0)} to{transform:translateX(-50%)} }
@keyframes tscroll-right { from{transform:translateX(-50%)} to{transform:translateX(0)} }
.tmarquee-track:hover { animation-play-state: paused; }
.tcard {
    width: 300px; flex-shrink: 0;
    background: #fff;
    border: 2px solid rgba(0,0,0,0.1);
    border-radius: 18px;
    padding: 22px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    transition: box-shadow 0.3s, transform 0.3s;
}
.tcard:hover { box-shadow: 0 8px 32px rgba(0,0,0,0.12); transform: translateY(-4px); }
.tcard-header { display:flex; align-items:center; justify-content:space-between; margin-bottom:14px; }
.tcard-stars { color: #F4B400; font-size: 1rem; letter-spacing: 1px; }
.tcard-review { font-size: 0.87rem; color: #374151; line-height: 1.65; margin-bottom: 16px; font-style: italic; }
.tcard-footer { display:flex; align-items:center; gap:12px; }
.tcard-avatar {
    width: 36px; height: 36px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: #fff; font-weight: 900; font-size: 0.85rem; flex-shrink: 0;
}
.tcard-name { font-weight: 900; font-size: 0.88rem; color: #111; }
.tcard-verified { color: #4285F4; font-size: 0.75rem; font-weight: 900; }
.tcard-role { font-size: 0.75rem; color: #6b7280; }
</style>


<style>
.network-card:hover { transform: translate(-5px, -5px); border-color: var(--page-accent) !important; box-shadow: 10px 10px 0px var(--page-accent); }
</style>


<style>
/* Cinematic Bento Hero Styles */
.service-bento-hero {
    min-height: 90vh;
    background: #fff;
    display: flex;
    align-items: center;
    background: radial-gradient(circle at top right, rgba(<?= hexToRgb($accentColor) ?>, 0.05), #fff 60%);
}

.bento-card {
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 12px 12px 0px var(--text-dark);
    border-radius: 40px;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    z-index: 10;
}
.bento-card:hover {
    transform: translateY(-8px) scale(1.01);
    box-shadow: 16px 16px 0px var(--page-accent);
}

.visual-card-v2 { 
    background: var(--text-dark) !important;
    box-shadow: 12px 12px 0px var(--page-accent);
}

/* Stunning Pricing V3 */
.pricing-card-v3 {
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 15px 15px 0px var(--text-dark);
    border-radius: 50px;
    position: relative;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}
.pricing-card-v3:hover {
    transform: translateY(-15px);
    box-shadow: 25px 25px 0px var(--accent);
}

.popular-ribbon {
    position: absolute;
    top: 30px; right: -15px;
    background: var(--accent);
    color: #fff;
    padding: 10px 30px;
    font-weight: 900;
    font-size: 12px;
    letter-spacing: 1px;
    transform: rotate(5deg);
    box-shadow: 5px 5px 0px var(--text-dark);
}

.pkg-check {
    background: rgba(<?= hexToRgb($accentColor) ?>, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 24px; height: 24px;
}

/* Premium Form Styles */
.lead-form-wrap {
    box-shadow: 20px 20px 0px var(--page-accent);
}
.form-control-punchy {
    width: 100%;
    padding: 20px;
    background: #f8faff;
    border: 3px solid transparent;
    border-radius: 20px;
    font-weight: 700;
    color: var(--text-dark);
    transition: all 0.3s;
}
.form-control-punchy:focus {
    outline: none;
    border-color: var(--page-accent);
    background: #fff;
    box-shadow: 10px 10px 0px rgba(0,0,0,0.05);
}

.btn-punchy-big {
    background: var(--page-accent);
    color: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 8px 8px 0px var(--text-dark);
    font-weight: 900;
    font-size: 18px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: all 0.3s;
}
.btn-punchy-big:hover {
    transform: translate(-3px, -3px);
    box-shadow: 12px 12px 0px var(--text-dark);
}

/* Animations & Utilities */
.status-pulse {
    width: 10px; height: 10px;
    background: #00ff88;
    border-radius: 50%;
    box-shadow: 0 0 10px #00ff88;
    animation: p-blink 1.5s infinite;
}
@keyframes p-blink { 50% { opacity: 0.3; } }

.lead-bg-blobs {
    position: absolute;
    inset: 0;
    pointer-events: none;
}
.lb-1 {
    position: absolute;
    bottom: -20%; right: -10%;
    width: 800px; height: 800px;
    border-radius: 50%;
    filter: blur(150px);
    opacity: 0.1;
}

/* Helper function defined here */
<?php 
if (!function_exists('hexToRgb')) {
    function hexToRgb($hex) {
        $hex = str_replace("#", "", $hex);
        if(strlen($hex) == 3) {
            $r = hexdec(substr($hex,0,1).substr($hex,0,1));
            $g = hexdec(substr($hex,1,1).substr($hex,1,1));
            $b = hexdec(substr($hex,2,1).substr($hex,2,1));
        } else {
            $r = hexdec(substr($hex,0,2));
            $g = hexdec(substr($hex,2,2));
            $b = hexdec(substr($hex,4,2));
        }
        return "$r, $g, $b";
    }
}
?>
</style>



<style>
/* Perfected Bento Hero Styles */
:root {
    --accent-raw: <?= $accentColor ?>;
    --page-accent: <?= $accentColor ?>;
    --page-accent-rgb: <?= hexToRgb($accentColor) ?>;
}

.service-bento-hero {
    min-height: 90vh;
    background: #fff;
    display: flex;
    align-items: center;
    background: radial-gradient(circle at top right, rgba(<?= hexToRgb($accentColor) ?>, 0.05), #fff 60%);
}

/* Helper function defined here for simplicity in this template */
<?php 
function hexToRgb($hex) {
    $hex = str_replace("#", "", $hex);
    if(strlen($hex) == 3) {
        $r = hexdec(substr($hex,0,1).substr($hex,0,1));
        $g = hexdec(substr($hex,1,1).substr($hex,1,1));
        $b = hexdec(substr($hex,2,1).substr($hex,2,1));
    } else {
        $r = hexdec(substr($hex,0,2));
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));
    }
    return "$r, $g, $b";
}
?>

.hero-bg-elements {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 0;
}
.blob-1, .blob-2 {
    position: absolute;
    width: 800px;
    height: 800px;
    border-radius: 50%;
    filter: blur(140px);
    opacity: 0.15;
    background: var(--page-accent);
    animation: blobAnim 25s infinite alternate;
}
.blob-1 { top: -20%; right: -10%; }
.blob-2 { bottom: -20%; left: -10%; animation-delay: -7s; }

.hero-grid-overlay {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(0,0,0,0.05) 1px, transparent 1px);
    background-size: 40px 40px;
    opacity: 0.4;
}

.bento-card {
    background: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 12px 12px 0px var(--text-dark);
    border-radius: 40px;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    z-index: 10;
}
.bento-card:hover {
    transform: translateY(-8px) scale(1.01);
    box-shadow: 16px 16px 0px var(--page-accent);
}

.main-info-card { 
    border-right-width: 8px;
    border-bottom-width: 8px;
}

.visual-card-v2 { 
    background: var(--text-dark) !important;
    box-shadow: 12px 12px 0px var(--page-accent);
}

.trust-card-punchy {
    background: #fff;
    border-color: var(--text-dark);
}

.marquee-card-v2 {
    background: var(--page-accent);
    border-color: var(--text-dark);
    box-shadow: 12px 12px 0px var(--text-dark);
    transition: all 0.4s ease;
    cursor: pointer;
}
.marquee-card-v2:hover {
    background: var(--text-dark) !important;
    border-color: var(--page-accent);
    box-shadow: 12px 12px 0px var(--page-accent);
}
.marquee-card-v2:hover .marquee-item {
    color: var(--page-accent);
}

/* Punchy Typography */
.gradient-text-dynamic {
    background: linear-gradient(90deg, var(--text-dark), var(--page-accent));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: 'Clash Display';
}

.text-accent-dynamic { color: var(--page-accent); }

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 20px;
    background: var(--text-dark);
    color: #fff;
    border-radius: 100px;
    font-weight: 900;
    font-size: 11px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.badge-dot {
    width: 8px; height: 8px;
    background: var(--page-accent);
    border-radius: 50%;
    animation: pulse 1.5s infinite;
}

/* Energy Core Visual */
.energy-core {
    position: relative;
    width: 120px; height: 120px;
    margin: 0 auto;
}
.core-inner {
    position: absolute;
    inset: 30px;
    background: var(--page-accent);
    border-radius: 50%;
    box-shadow: 0 0 40px var(--page-accent);
    z-index: 2;
}
.core-ring, .core-ring-2 {
    position: absolute;
    inset: 0;
    border: 2px solid var(--page-accent);
    border-radius: 50%;
    opacity: 0.3;
    animation: rotateCore 4s linear infinite;
}
.core-ring-2 {
    inset: -15px;
    opacity: 0.1;
    animation-direction: reverse;
    animation-duration: 6s;
}

@keyframes rotateCore { from { transform: rotate(0); } to { transform: rotate(360deg); } }

/* Buttons */
.btn-punchy {
    background: var(--page-accent);
    color: #fff;
    border: 3px solid var(--text-dark);
    box-shadow: 6px 6px 0px var(--text-dark);
    font-weight: 900;
    padding: 18px 35px;
    border-radius: 15px;
    transition: all 0.3s;
}
.btn-punchy:hover {
    transform: translate(-2px, -2px);
    box-shadow: 10px 10px 0px var(--text-dark);
    background: var(--page-accent);
    color: #fff;
}

.btn-outline-dark-punchy {
    background: transparent;
    color: var(--text-dark);
    border: 3px solid var(--text-dark);
    font-weight: 900;
    padding: 18px 35px;
    border-radius: 15px;
    transition: all 0.3s;
}
.btn-outline-dark-punchy:hover {
    background: var(--text-dark);
    color: #fff;
}

/* Marquee V2 */
.marquee-content-v2 {
    animation: marqueeMove 20s linear infinite;
}
.marquee-item {
    font-family: 'Clash Display';
    font-weight: 900;
    font-size: 24px;
    color: #fff;
    white-space: nowrap;
    transition: color 0.4s ease;
}
@keyframes marqueeMove {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}

/* Avatar Stack */
.av {
    width: 45px; height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
}
.bg-accent { background: var(--page-accent); }
.badge-accent-v2 {
    background: var(--page-accent);
    color: #fff;
    padding: 6px 15px;
    border-radius: 10px;
    font-weight: 900;
    font-size: 12px;
}

/* Pulse animation */
@keyframes pulse {
    0% { transform: scale(0.8); opacity: 1; }
    100% { transform: scale(1.5); opacity: 0; }
}

/* Feature Cards Accent */
.sf-icon-wrap { background: rgba(<?= hexToRgb($accentColor) ?>, 0.1) !important; }
.service-feat-card-v2:hover .sf-icon-wrap { background: var(--page-accent) !important; }

/* Process Glow */
.process-bg-glow {
    position: absolute;
    top: 50%; right: -10%;
    width: 600px; height: 600px;
    background: radial-gradient(circle, var(--accent) 0%, transparent 70%);
    opacity: 0.15;
}

/* --- Enhanced Visual Box Animations --- */

/* SEO Dashboard */
.anim-seo-dashboard { position: relative; width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; }
.mini-chart-wrapper { width: 100%; max-width: 220px; height: 100px; position: relative; }
.trend-line polyline { stroke-dasharray: 400; stroke-dashoffset: 400; animation: drawLine 3s ease-out infinite alternate; filter: drop-shadow(0 10px 10px rgba(0,0,0,0.5)); }
@keyframes drawLine { 0% { stroke-dashoffset: 400; } 100% { stroke-dashoffset: 0; } }
.trend-line circle { animation: pulseCircle 3s ease-out infinite alternate; filter: drop-shadow(0 0 10px var(--page-accent)); }
@keyframes pulseCircle { 0%, 90% { opacity: 0; transform: scale(0); } 100% { opacity: 1; transform: scale(1.5); } }
.keyword-pill { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 50px; padding: 10px 20px; font-size: 12px; font-weight: 800; color: rgba(255,255,255,0.6); display: inline-flex; align-items: center; justify-content: center; animation: floatPill 4s infinite ease-in-out; white-space: nowrap; }
@keyframes floatPill { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-5px); box-shadow: 0 10px 15px rgba(0,0,0,0.3); } }

/* Window Mockup */
.anim-window-mockup { width: 100%; max-width: 220px; height: 160px; margin: 0 auto; background: #161616; border: 2px solid rgba(255,255,255,0.08); border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; box-shadow: -15px 25px 30px rgba(0,0,0,0.6); transform: perspective(1000px) rotateY(-15deg) rotateX(5deg); animation: floatWindow 5s infinite ease-in-out; }
.mockup-header { height: 28px; background: rgba(0,0,0,0.4); display: flex; align-items: center; padding: 0 12px; gap: 6px; border-bottom: 1px solid rgba(255,255,255,0.05); }
.mockup-header .dot { width: 10px; height: 10px; border-radius: 50%; opacity: 0.8; }
.mockup-header .dot.red { background: #ff5f56; }
.mockup-header .dot.yellow { background: #ffbd2e; }
.mockup-header .dot.green { background: #27c93f; }
.mockup-body { padding: 15px; flex-grow: 1; display: flex; flex-direction: column; gap: 10px; }
.skeleton-title { height: 14px; width: 60%; background: rgba(255,255,255,0.15); border-radius: 6px; animation: loadSkel 2s infinite alternate; }
.skeleton-text { height: 8px; width: 100%; background: rgba(255,255,255,0.08); border-radius: 4px; }
.skeleton-text.short { width: 75%; }
.skeleton-img { flex-grow: 1; background: rgba(255,255,255,0.03); border-radius: 8px; position: relative; overflow: hidden; border: 1px dashed rgba(255,255,255,0.1); }
.img-glow { position: absolute; top:0; left: -100%; width: 50%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent); animation: sweep 3s infinite; }
@keyframes loadSkel { 0% { opacity: 0.5; } 100% { opacity: 1; box-shadow: 0 0 10px rgba(255,255,255,0.1); } }
@keyframes floatWindow { 0%, 100% { transform: perspective(1000px) rotateY(-15deg) rotateX(5deg) translateY(0); } 50% { transform: perspective(1000px) rotateY(-15deg) rotateX(5deg) translateY(-15px); } }
@keyframes sweep { 100% { left: 200%; } }

/* ROAS Ring */
.anim-roas-ring { position: relative; width: 160px; height: 160px; margin: 0 auto; display: flex; align-items: center; justify-content: center; }
.roas-svg { position: absolute; inset: 0; width: 100%; height: 100%; transform: rotate(-90deg); filter: drop-shadow(0 0 15px rgba(0,0,0,0.5)); }
.ring-fill { stroke-dasharray: 440; stroke-dashoffset: 440; animation: fillRing 2.5s cubic-bezier(0.16, 1, 0.3, 1) forwards infinite alternate; }
@keyframes fillRing { 0% { stroke-dashoffset: 440; } 100% { stroke-dashoffset: 100; } } /* 75% fill */
.roas-content { position: relative; z-index: 2; display: flex; flex-direction: column; align-items: center; animation: heartbeat 2s infinite; }
.roas-ping { position: absolute; width: 12px; height: 12px; background: var(--page-accent); border-radius: 50%; box-shadow: 0 0 15px var(--page-accent); }
.ping-1 { top: 15px; left: 120px; animation: pulsePing 2s infinite alternate; }
.ping-2 { bottom: 25px; left: 20px; animation: pulsePing 2s infinite alternate 1s; }
@keyframes heartbeat { 0%, 100% { transform: scale(1); } 10% { transform: scale(1.05); } 20% { transform: scale(1); } }
@keyframes pulsePing { 0% { transform: scale(1); opacity: 0.3; } 100% { transform: scale(1.8); opacity: 1; } }

/* ERP Blocks Dashboard */
.anim-erp-blocks { position: relative; width: 100%; max-width: 200px; height: 200px; margin: 0 auto; }
.erp-hub { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #111; border: 2px solid var(--page-accent); border-radius: 12px; font-weight: 900; font-size: 14px; z-index: 3; color: white; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; width: 80px; height: 80px; animation: hubPulse 2s infinite alternate; letter-spacing: 1px; }
.erp-module { position: absolute; padding: 6px 14px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; font-size: 11px; font-weight: 800; color: rgba(255,255,255,0.8); display: flex; align-items: center; gap: 8px; z-index: 2; backdrop-filter: blur(5px); }
.m-top { top: 0; left: 50%; transform: translateX(-50%); }
.m-right { top: 50%; right: -15px; transform: translateY(-50%); }
.m-bottom { bottom: 0; left: 50%; transform: translateX(-50%); }
.m-left { top: 50%; left: -15px; transform: translateY(-50%); }
.erp-connections { position: absolute; top:0; left: 50%; transform: translateX(-50%); width: 200px; height: 200px; z-index: 1; overflow: visible; }
.c-line { opacity: 0.2; stroke-dasharray: 4; stroke-linecap: round; }
.data-packet { position: absolute; width: 8px; height: 8px; background: var(--page-accent); border-radius: 50%; box-shadow: 0 0 12px var(--page-accent); z-index: 4; }
.p-top { top: 35px; left: 50%; transform: translateX(-50%); animation: packTB 2s infinite linear; }
.p-bottom { bottom: 35px; left: 50%; transform: translateX(-50%); animation: packBT 2s infinite linear 1s; }
.p-right { top: 50%; right: 35px; transform: translateY(-50%); animation: packRL 2s infinite linear 0.5s; }
.p-left { top: 50%; left: 35px; transform: translateY(-50%); animation: packLR 2s infinite linear 1.5s; }
@keyframes hubPulse { 0% { box-shadow: 0 0 15px rgba(0,0,0,0.5); } 100% { box-shadow: 0 0 25px var(--page-accent), inset 0 0 15px rgba(255,255,255,0.1); } }
@keyframes packTB { 0% { top: 35px; opacity: 1; transform: translateX(-50%) scale(1); } 50% { transform: translateX(-50%) scale(1.5); } 80% { top: 80px; opacity: 1; } 100% { top: 80px; opacity: 0; } }
@keyframes packBT { 0% { bottom: 35px; opacity: 1; transform: translateX(-50%) scale(1); } 50% { transform: translateX(-50%) scale(1.5); } 80% { bottom: 80px; opacity: 1; } 100% { bottom: 80px; opacity: 0; } }
@keyframes packRL { 0% { right: 35px; opacity: 1; transform: translateY(-50%) scale(1); } 50% { transform: translateY(-50%) scale(1.5); } 80% { right: 80px; opacity: 1; } 100% { right: 80px; opacity: 0; } }
@keyframes packLR { 0% { left: 35px; opacity: 1; transform: translateY(-50%) scale(1); } 50% { transform: translateY(-50%) scale(1.5); } 80% { left: 80px; opacity: 1; } 100% { left: 80px; opacity: 0; } }

/* SaaS Server UI */
.anim-saas-server { width: 100%; max-width: 240px; margin: 0 auto; display: flex; flex-direction: column; align-items: center; }
.server-rack { width: 100%; padding: 18px 15px; background: rgba(0,0,0,0.4); border: 2px solid rgba(255,255,255,0.05); border-radius: 16px; display: flex; flex-direction: column; gap: 12px; box-shadow: inset 0 10px 30px rgba(0,0,0,0.8); }
.server-blade { height: 32px; border: 1px solid rgba(255,255,255,0.05); border-radius: 6px; background: #151515; display: flex; align-items: center; justify-content: flex-start; padding: 0 14px; position: relative; overflow: hidden; }
.server-blade.active { border-color: var(--page-accent); box-shadow: inset 0 0 15px rgba(var(--page-accent-rgb), 0.1); }
.blade-lights { display: flex; gap: 6px; z-index: 2; position: relative; }
.blade-lights span { width: 8px; height: 8px; border-radius: 50%; }
.l-grn { background: #27c93f; animation: blinkGrn 1s infinite alternate; }
.l-blu { background: var(--page-accent); opacity: 0.5; }
.l-blu.pulse { animation: blinkBlu 0.4s infinite; box-shadow: 0 0 10px var(--page-accent); }
.blade-load { position: absolute; right: 0; top: 0; bottom: 0; background: rgba(255,255,255,0.03); z-index: 1; transform-origin: right; animation: loadWobble 2.5s infinite alternate ease-in-out; border-left: 2px solid rgba(255,255,255,0.1); }
@keyframes blinkGrn { 0% { opacity: 0.3; } 100% { opacity: 1; box-shadow: 0 0 8px #27c93f; } }
@keyframes blinkBlu { 0%, 100% { opacity: 1; } 50% { opacity: 0.2; } }
@keyframes loadWobble { 0% { transform: scaleX(0.95); } 100% { transform: scaleX(1.05); } }

/* Energy Core Upgraded */
.energy-core-upgraded { position: relative; width: 160px; height: 160px; margin: 0 auto; display: flex; align-items: center; justify-content: center; perspective: 800px; }
.core-orbit { position: absolute; width: 100%; height: 100%; border: 3px solid rgba(255,255,255,0.05); border-radius: 50%; filter: drop-shadow(0 0 5px var(--page-accent)); }
.o-1 { border-top-color: var(--page-accent); transform: rotateX(70deg); animation: orbSpin1 5s linear infinite; }
.o-2 { border-right-color: var(--page-accent); transform: rotateY(70deg); animation: orbSpin2 6s linear infinite; }
.core-center { width: 50px; height: 50px; background: var(--page-accent); border-radius: 50%; box-shadow: 0 0 40px var(--page-accent), 0 0 80px var(--page-accent); animation: corePulse 2s infinite alternate cubic-bezier(0.4, 0, 0.2, 1); position: relative; z-index: 3; }
.core-ring.pulse-ring { position: absolute; width: 140px; height: 140px; border: 2px solid var(--page-accent); border-radius: 50%; opacity: 0; animation: expandRing 3s infinite ease-out; }
@keyframes orbSpin1 { 0% { transform: rotateX(70deg) rotateZ(0deg); } 100% { transform: rotateX(70deg) rotateZ(360deg); } }
@keyframes orbSpin2 { 0% { transform: rotateY(70deg) rotateZ(0deg); } 100% { transform: rotateY(70deg) rotateZ(360deg); } }
@keyframes corePulse { 0% { transform: scale(0.85); box-shadow: 0 0 20px var(--page-accent); } 100% { transform: scale(1.15); box-shadow: 0 0 50px var(--page-accent), 0 0 100px var(--page-accent); } }
@keyframes expandRing { 0% { transform: scale(0.3); opacity: 0.8; stroke-width: 4px; } 100% { transform: scale(1.2); opacity: 0; stroke-width: 1px; } }

/* --- Compact Pricing Block CSS --- */
.pricing-compact-wrapper {
    transition: transform 0.4s ease;
}
.pricing-col {
    transition: background 0.3s ease;
}
.pricing-col:hover {
    background: rgba(0,0,0,0.015);
}
.recommended-bar {
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 6px;
    background: var(--page-accent);
}
.btn-punchy-compact {
    background: var(--page-accent);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    border: none;
    letter-spacing: 0.5px;
}
.btn-punchy-compact:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    background: var(--page-accent);
    color: #fff !important;
}
.btn-outline-compact {
    background: transparent;
    border: 2px solid rgba(0,0,0,0.1);
    color: var(--text-dark);
    letter-spacing: 0.5px;
}
.btn-outline-compact:hover {
    background: var(--text-dark);
    border-color: var(--text-dark);
    color: #fff !important;
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}
</style>


